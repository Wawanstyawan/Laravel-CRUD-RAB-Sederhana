<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use App\Models\Kebutuhan;
use Illuminate\Support\Facades\DB; 
use Auth;
use PDF;

class KebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kegiatan = Kegiatan::find($request->id);
        $kebutuhan = new Kebutuhan();
        $kebutuhan->kegiatan_id = $kegiatan->id;
        $kebutuhan->urn_kebutuhan = $request->post('urn_kebutuhan');
        $kebutuhan->kuantitas = $request->post('kuantitas');
        $kebutuhan->harga_satuan = $request->post('harga_satuan');
        $kebutuhan->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $kebutuhan = Kebutuhan::findOrFail($request->id);
        $kebutuhan->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kebutuhan = Kebutuhan::find($id);
        $kebutuhan->delete();

        return back();
    }

    public function exportpdf(){
        $kebutuhan = Kebutuhan::all();

        view()->share('kebutuhan', $kebutuhan);
        $pdf = PDF::loadview('kegiatans/rab-pdf');
        return $pdf->download('data-rab.pdf');
    }
    
}