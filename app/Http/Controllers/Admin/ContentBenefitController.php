<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContentBenefit\Store;
use App\Http\Requests\Admin\ContentBenefit\Update;
use App\Models\ContentBenefit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return \view('admin.content-benefit.index',[
            'contentBenefit' => ContentBenefit::orderBy('id','DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return \view('admin.content-benefit.create',[
            'linkback' => \route('admin.content-benefit.index'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        $data = $request->all();

        $data['icon'] = $request->file('icon')->store('assets/icon','public');

        ContentBenefit::create($data);

        return \redirect(\route('admin.content-benefit.index'))->with('success','Data Berhasil disimpan');
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
    public function edit(ContentBenefit $contentBenefit)
    {
        return \view('admin.content-benefit.update',[
            'linkback' => \route('admin.content-benefit.index'),
            'item' => $contentBenefit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request, ContentBenefit $contentBenefit)
    {

        $data = $request->all();

        if($request->icon){
            $this->removeImage($contentBenefit->icon);
            $data['icon'] = $request->file('icon')->store('assets/icon','public');
        }else{
            $data['icon'] = $contentBenefit->icon;
        }

        ContentBenefit::find($contentBenefit->id)->update($data);

        return \redirect(\route('admin.content-benefit.index'))->with('success','Data Berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentBenefit $contentBenefit)
    {
        $contentBenefit->delete();
        $this->removeImage($contentBenefit->icon);

        return \redirect(\route('admin.content-benefit.index'))->with('success','Data Berhasil dihapus');
    }

    public function removeImage($patch){
        return Storage::disk('public')->delete($patch);
    }
}
