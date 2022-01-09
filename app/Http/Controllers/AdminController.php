<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Redirect;
use Session;
use Whoops\Run;

class AdminController extends Controller
{
    public function index()
    {
            return view('admin.welcomeForAdmin');
    }

    public function login()
    {
        return view('admin.login');
    }

    //xử lý login
    public function loginAction(LoginRequest $request)
    {
            $emai = $request->email;
            $password = $request->password;
            $result = User::where('email', $emai)->where('utype', 'Admin')->first();
            if ($result) {
                if (Hash::check($password, $result->password)) {
                    Session()->put('user', [
                        'user_id' => $result->id,
                        'user_name' => $result->name,
                        'user_email' => $result->email,
                        'user_type' => $result->utype,
                    ]);
                    return redirect()->route('admin.dashboard');
                } else {
                    Session()->put('error', '*Mật Khẩu Hoặc Tài Khoản Bị Sai.Vui Lòng Kiểm Tra Lại');
                    return redirect()->back();
                }
            } else {
                Session()->put('error', '*Email chưa được đăng ký tại Website');
                return redirect()->back();
            }
    }
    //xử lý register
    public function register(RegisterRequest $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'utype' => 'Admin'
            ]);
            Session()->put('message', '*Email Admin đã được đăng ký thành công');
            return redirect()->back();
        } catch (ModelNotFoundException) {
            return Session()->put('error', '*Email chưa được đăng ký thành công');
        }
    }
    public function dashboard()
    {
            return view('admin.dashboard');
    }

    public function proFile()
    {
            return view('admin.profile');
    }
}
