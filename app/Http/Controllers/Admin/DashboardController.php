<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Camp;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $starDate = date('Y-m-01');
        $endDate = \date('Y-m-t');
        $formatStartDate = \strtotime($starDate);
        $formatEndDate = \strtotime($endDate);

        $checkout = Checkout::with('Camp')->get();
        $countTransaction = Checkout::whereDate('created_at','>=',$starDate)->whereDate('created_at','<=',$endDate)->count();
        $countUser = User::where(['is_admin'=>\false])->count();
        $countCamp = Camp::count();

        return \view('admin.dashboard',[
            'checkouts' => $checkout,
            'countTransaction' => $countTransaction,
            'countUser' => $countUser,
            'countCamp' => $countCamp,
            'startDate' => $formatStartDate,
            'endDate' => $formatEndDate,
        ]);
    }
}
