<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function register(){
        return view('auth/register');
    }

    public function registeraction(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'min:6'],
            'password' => ['min:6', 'required_with:password_confirmation', 'same:password_confirmation'],
            'password_confirmation' => ['min:6'],
        ]);

        $created = Users::create([
            "Name" => $request->nama,
            "Password" => bcrypt($request->password),
            "Status" => 2,
        ]);

        if ($created) {
            return to_route('login')
            ->with('flash_message', 'Successfully, Creata New Account'); 
        } else {
            return to_route('register')
            ->with('flash_message', 'Admin Account Failed To Create');
        }
    }

    public function loginaction(Request $request)
    {
        $users = Users::where('Name', $request->nama)->first();

        if ($users == null) {
            return redirect()->back()
            ->with('flash_message', 'Username Not Found');
        }

        $db_password = $users->Password;
        $status_user = $users->Status;
        $hashed_password = Hash::check($request->password, $db_password);

        if ($hashed_password) {
            $users->token = Str::random(20);
            $users->save();
            $request->session()->put('token', $users->token);
            $request->session()->put('nama', $users->Name);
            if($status_user == 1){
                return to_route('home');
            }else{
                return to_route('homeuser');
            }
            
        } else {
            return to_route('login')
            ->with('flash_message', 'Sorry, your data Doesn`t Match');
        }
    }

    public function logoutaction(Request $request)
    {
        Users::where('token', $request->token)->update([
            'token' => NULL
        ]);

        Session::pull('token');
        return to_route('login');
    }
}
