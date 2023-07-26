<?php

namespace App\Http\Controllers;

use App\Models\ContentBenefit;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        switch (Auth::user()->is_admin) {
            case \true:
                return \redirect(\route('admin.dashboard'));
                break;
            
            default:
                return \redirect(\route('user.dashboard'));
                break;
        }
    }

    public function index(){
        $contentBenefit = ContentBenefit::orderBy('id','DESC')->limit(4)->get();
        return view('welcome', [
            'contentBenefits' => $contentBenefit
        ]);
    }
}
