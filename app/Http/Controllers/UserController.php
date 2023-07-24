<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Mail\User\AfterRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function login(){
        return \view('auth.user.login');
    }

    public function google(){
        return Socialite::driver('google')->redirect();
    }

    public function signupview(){
        return \view('auth.user.sign-up');
    }

    public function signin(LoginRequest $request){
        $user = User::whereEmail($request->email)->first();

        if(!$user){
            $request->session()->flash('error', "Email atau Password Salah");
            return \redirect(\route('login'));
        }

        $checkPassword = Hash::check($request->password, $user->password);

        if(!$checkPassword){
            $request->session()->flash('error', "Email atau Password Salah");
            return \redirect(\route('login'));
        }

        Auth::login($user, \true);
        return \redirect(\route('welcome'));
    }

    public function handleProviderCallback(){
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => \date('Y-m-d H:i:s', \time()),
        ];

        // $user = User::firstOrCreate(['email'=>$data['email']], $data);
        $user = User::whereEmail($data['email'])->first();
        if(!$user){
            $user = User::create($data);
            Mail::to($user->email)->send(new AfterRegister($user));
        }
        Auth::login($user, \true);

        return \redirect(\route('welcome'));
    }
}
