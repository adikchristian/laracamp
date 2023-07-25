<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Camp\Benefit\Store;
use App\Models\Camp;
use App\Models\CampBenefit;
use Illuminate\Http\Request;

class CampBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $campId = $request->query('q');
        return \view('admin.camp-benefit.index', [
            'camp' => Camp::with('Benefit')->find($campId),
            'linkback' => \route('admin.camp.index'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        $data = $request->all();
        // return $data;
        $data['camp_id'] = $request->query('q');

        CampBenefit::create($data);
        return \redirect(\route('admin.camp-benefit.index').'?q='.$request->query('q'))->with('success','Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
