<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use App\Models\Users;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserRoleTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Read
        $UserRoles = UserRole::with('user')->with('role')->paginate(8);
        return view('admin.user-role-table', compact('UserRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Read
        $Users = Users::get();
        $Roles = Roles::get();
        return view('admin.user-role-table-insert', compact('Users', 'Roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'users_id' => 'required',
            'role_id' => 'required',
        ]);
        $data = $request->all();

        $UserRole = UserRole::where('users_id', $request->users_id)->first();
        if(empty($UserRole)) {
            UserRole::create($data);
            return redirect()->route('admin.user-role-table');
        } else {
            $UserRole->delete();
            UserRole::create($data);
            return redirect()->route('admin.user-role-table');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete
        $UserRole = UserRole::find($id);
        $UserRole->delete();
    }
}
