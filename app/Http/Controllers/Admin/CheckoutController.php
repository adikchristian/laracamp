<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Checkout\Paid;
use App\Models\Checkout;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{

    public function index(){
        $start = date('Y-m-01');
        $end = \date('Y-m-t');
        $status = "";
        $checkout = Checkout::with(['Camp', 'User'])->whereDate('created_at','>=',$start)->whereDate('created_at','<=',$end)->get();
        return \view('admin.report.checkout',[
            'checkouts' => $checkout,
            'startDate' => $start,
            'endDate' => $end,
            "status" => $status,
        ]);
    }

    public function filterCheckout(Request $request){
        // return $request;
        $start = $request->start;
        $end = $request->end;
        $status = $request->status;
        $checkout = Checkout::with(['Camp', 'User'])->whereDate('created_at','>=',$start)->whereDate('created_at','<=',$end);
        if($status!=""){
            $checkout->where(['payment_status'=>$status]);
        }
        return \view('admin.report.checkout',[
            'checkouts' => $checkout->get(),
            'startDate' => $start,
            'endDate' => $end,
            "status" => $status,
        ]);
    }

    public function pdfCheckout(Request $request){
        $start = $request->query('start');
        $end = $request->query('end');
        $status = $request->query('status');
        $checkout = Checkout::with(['Camp', 'User'])->whereDate('created_at','>=',$start)->whereDate('created_at','<=',$end);
        if($status!=""){
            $checkout->where(['payment_status'=>$status]);
        }

        $pdf = PDF::loadView('admin.pdf.checkout',[
            'checkouts' => $checkout->get(),
            'startDate' => $start,
            'endDate' => $end,
            "status" => $status,
        ]);
        if($status==""){
            $statusVal = "Semua Status Pembayaran";
        }else{
            $statusVal = "Status ".$status;
        }
        return $pdf->download('report-checkouts-periode-'.$start.'SD'.$end.'-'.$statusVal.'.pdf');
    }

    public function update(Request $request, Checkout $checkout){
        $checkout->id_paid = \true;
        $checkout->save();

        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success', 'Checkout with ID {$checkout->id} has been updated');
        return \redirect(\route('admin.dashboard'));
    }
}
