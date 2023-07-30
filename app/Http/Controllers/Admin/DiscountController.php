<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Discount\Store;
use App\Http\Requests\Admin\Discount\Update;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::orderBy('id','DESC')->get();
        return \view('admin.discount.index',[
            'discounts' => $discounts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return \view('admin.discount.create', [
            'linkback' => \route('admin.discount.index',),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        // return $request->all();
        Discount::create($request->all());
        return \redirect(\route('admin.discount.index'))->with('success','Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discount $discount)
    {
        return \view('admin.discount.update',[
            'item' => $discount,
            'linkback' => \route('admin.discount.index'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request, Discount $discount)
    {
        $discount->update($request->all());
        return \redirect(\route('admin.discount.index'))->with('success','Data Berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();
        return \redirect(\route('admin.discount.index'))->with('success','Data Berhasil dihapus');
    }
}
