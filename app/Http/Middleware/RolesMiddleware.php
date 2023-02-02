<?php

namespace App\Http\Middleware;

use App\Models\Users;
use App\Models\UserRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $request->validate([
            'email' => 'required|min:2|max:255',
            'password' => 'required|string|min:6|max:255',
        ]);

        $UserEmail = Users::with('userRoles')->where('users.email', $request->email)->get();
        $UserName = Users::with('userRoles')->where('name', $request->email)->get();
        $UserPhone = Users::with('userRoles')->where('phone', $request->email)->get();
        
        if (!empty($UserEmail[0])) {
            $UserRolesEmail = UserRole::with('user')->where('users_id',$UserEmail[0]->id)->get();
            for ($i = 0 ; $i < $UserRolesEmail->count(); $i++) {
                if ($UserRolesEmail[$i] = 2 or $UserRolesEmail[$i] = 3) {
                    session(['user' => $UserEmail[0]]);
                    return $next($request);
                }
            }
        } if (isset($UserName[0])) {
            $UserRolesName = UserRole::with('user')->where('users_id',$UserName[0]->id)->get();
            for ($i = 0 ; $i < $UserRolesName->count(); $i++) {
                if ($UserRolesEmail[$i] = 2 or $UserRolesEmail[$i] = 3) {
                    session(['user' => $UserName[0]]);
                    return $next($request);
                }
            }
        } if (!empty($UserPhone[0])) {
            $UserRolesPhone = UserRole::with('user')->where('users_id',$UserPhone[0]->id)->get();
            for ($i = 0 ; $i < $UserRolesPhone->count(); $i++) {
                if ($UserRolesEmail[$i] = 2 or $UserRolesEmail[$i] = 3) {
                    session(['user' => $UserPhone[0]]);
                    return $next($request);
                }
            }
        }
        
        return redirect()->back()->with('failed', 'Tài khoản hoặc mật khẩu không đúng');
    }
}