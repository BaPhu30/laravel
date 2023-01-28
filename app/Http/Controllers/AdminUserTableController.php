<?php

namespace App\Http\Controllers;

use App\Models\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminUserTableController extends Controller
{
    public function index()
    {
        // Read
        $Users = Users::paginate(6);
        return view('admin.user-table', compact('Users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255|unique:users',
            'email' => 'required|email|min:7|max:255|unique:users',
            'password' => 'required|string|min:6|max:255',
            'phone' => 'required|string|min:10|max:11|unique:users',
            'birthday' => 'required|min:10|max:10',
        ]);
        
        $data = $request->all();
        // Avatar
        $avatar = 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png';
        foreach ($request->files as $file) {
            try {
                $name = Str::random(10);
                $fileName = time() . '_' . $name;
                $extension = $file->getClientOriginalExtension();
                $fullpath = 'phu/shopee/admin/user' . $fileName . '.' . $extension;
                $upload = Storage::disk('s3')->put($fullpath, file_get_contents($file), 'public');
                if ($upload) {
                    $s3 = Storage::disk('s3')->getAdapter()->getClient();
                    $avatar = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                }
            } catch (\Exception $e) {
                dd(logger($e->getMessage()));
            }
        }
        $data['avatar'] = $avatar;

        // Birthday
        $birthday = Carbon::parse($request->birthday)->format('Y-m-d');
        $data['birthday'] = $birthday;

        // Password
        $password = Hash::make($request->password);
        $data['password'] = $password;
        
        Users::create($data);
        // Create
        // $Users = new Users();
        // $Users->name = $request->name;
        // $Users->email = $request->email;
        // $Users->password = $password;
        // $Users->phone = $request->phone;
        // $Users->avatar = $avatar;
        // $Users->birthday = $birthday;
        // $Users->male = $request->male;
        // $Users->save();

        return redirect()->route('admin.user-table');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:255',
            'phone' => 'required|string|min:10|max:11|unique:users',
            'birthday' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(
                [
                    'Errors' => $validator->fails(),
                ]
            );
        } else {
            // Avatar
            $avatar = $request->avatar;
            foreach ($request->files as $file) {
                try {
                    $name = Str::random(10);

                    $fileName = time() . '_' . $name;
                    $extension = $file->getClientOriginalExtension();
                    $fullpath = 'phu/shopee/admin/' . $fileName . '.' . $extension;
                    $upload = Storage::disk('s3')->put($fullpath, file_get_contents($file), 'public');

                    if ($upload) {
                        $s3 = Storage::disk('s3')->getAdapter()->getClient();
                        $avatar = $s3->getObjectUrl(env('AWS_BUCKET'), $fullpath);
                    }
                } catch (\Exception $e) {
                    logger($e->getMessage());
                }
            }

            // Birthday
            $birthday = Carbon::parse($request->birthday)->format('Y-m-d');

            // Update 
            $Users = new Users();
            $Users = Users::find($id);
            $Users->name = $request->name;
            $Users->email = $request->email;
            $Users->password = $request->password;
            $Users->phone = $request->phone;
            $Users->avatar = $avatar;
            $Users->birthday = $birthday;
            $Users->male = $request->male;
            $Users->update();
            return response()->json(
                [
                    'Users' => $Users,
                ]
            );
        }
    }

    public function destroy($id)
    {
        // Delete
        $Users = Users::find($id);
        $Users->delete();
    }
}
