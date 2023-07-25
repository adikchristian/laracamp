<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        // return User::whereIsAdmin(\false);
        return \view('admin.user.index', [
            'users' => User::whereIsAdmin(\false)->get(),
        ]);
    }

    public function destroy(User $user){
        $user->delete();
        return Redirect(\route('admin.user'))->with('success','Data Berhasil dihapus');
    }
}
