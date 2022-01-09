<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;
use Crypt;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public  function login(){
        $key = "hello-754332-56";
        $encrypted = md5($key)."./";

        // generate a 16-character salt string

        $shapass = $encrypted.Crypt::encryptString($key);
        $str = "/";
        $index = strpos($shapass,$str);
        dd(substr($shapass,$index));
        $decrypted = substr($shapass,$index);
        $de = Crypt::decryptString($decrypted);

       dd($de);


        return view('users.login');
    }
    public function loginAction(LoginRequest $request){

        $emai = $request->email;
        $password = $request->password;
        $result = User::where('email', $emai)->first();

        if ($result) {
            if (Hash::check($password, $result->password)) {
                Session()->put('user', [
                        'user_id' => $result->id,
                        'user_name' => $result->name,
                        'user_email' => $result->emal,
                    'user_type' => $result->utype,
                ]);
                return redirect::route('home');
            } else {
                Session()->put('error', '*Mật Khẩu Hoặc Tài Khoản Bị Sai.Vui Lòng Kiểm Tra Lại');
                return Redirect::route('login');
            }
        } else {
            Session()->put('error', '*Email chưa được đăng ký tại Website');
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
            ]);
            return Redirect::route('login');
            return Session()->put('message', '*Email đã được đăng ký thành công');
        } catch (ModelNotFoundException) {
            return Session()->put('error', '*Email chưa được đăng ký thành công');
        }
    }
    public function dashboard()
    {

        if (session()->get('user') !== NULL) {
            return view('users.dashboard');
        } else {
            return redirect()->intended('403');
        }
    }

    public function proFile()
    {
        if (session()->get('user') !== NULL) {
            return view('users.profile');
        } else {
            return redirect()->intended('403');
        }
    }
    public function logout()
    {
        session()->flush();
        return Redirect::route('home');
    }
}
