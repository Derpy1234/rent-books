<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view ('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
       
        //Buat cek si user udah login
        if (Auth::attempt($credentials)){
            //BUAT CEK STATUS USER ACTIVE APA TIDAK
            if(Auth::user()->status != 'active')
            {
                session::flash('status', 'failed');
                session::flash('message', 'your acount is not active. Please contact Admin!');
                return redirect('login');
            }

            $request->session()->regenerate();
            //cek apakah dia admin
            if(Auth::user()->roles_id == 1)
            {
                return redirect('dashboard');
            }

            //cek apakah dia client
            if(Auth::user()->roles_id == 2)
            {
                return redirect('profile');
            }
        }

        //kalo gagal login
        session::flash('status', 'failed');
        session::flash('message', 'Gagal login');
        return redirect('login');

     }
        public function register()
        {
            return view ('register');
        }

        public function regis(Request $request)
        {
            $validate = $request->validate([
                'username' => 'required|unique:users',
                'password' => 'required|min:5',
                'phone' => 'required|max:13',
                'address' => 'required|max:255',
            ]);
            
           $request['password']= Hash::make($request->Password);
           $user = User::create($request->all());

           session::flash('status', 'failed');
           session::flash('message', 'regis sucsess! please, wait admin to approve');
           return redirect('register');

        }
        
        public function logout(Request $request)
        {
              Auth::logout();
              $request->session()->invalidate();
              $request->session()->regenerateToken();
              return redirect('/login');

        }  
}
