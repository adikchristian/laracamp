<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Camp\Store;
use App\Models\Camp;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return \view('admin.camp.index',[
            'camps' => Camp::orderBy('id','desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return \view('admin.camp.create',[
            'linkback' => \route('admin.camp.index'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title,'-');

        Camp::create($data);
        
        return \redirect(\route('admin.camp.index'))->with(['success'=>'Data Berhasil disimpan']);
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
