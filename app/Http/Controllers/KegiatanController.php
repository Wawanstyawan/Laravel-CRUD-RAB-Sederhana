<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use App\Models\Kebutuhan;
use Illuminate\Support\Facades\DB; 
use Auth;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatans = kegiatan::all();
        return view('kegiatans.index', compact('kegiatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kegiatan = new Kegiatan();
        $kegiatan->user_id = Auth::user()->id;
        $kegiatan->nama_kegiatan = $request->post('nama_kegiatan');
        $kegiatan->penanggung_jawab = $request->post('penanggung_jawab');
        $kegiatan->no_hp = $request->post('no_hp');
        $kegiatan->tgl_kegiatan = $request->post('tgl_kegiatan');
        $kegiatan->alamat_kegiatan = $request->post('alamat_kegiatan');

        $kegiatan->save();

        return redirect('rabkegiatan')->with('success', 'Kegiatan berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        if ($kegiatan){
            $kebutuhans = $kegiatan->kebutuhans()->get();
            return view('kegiatans.show',[
                'kegiatan'=> $kegiatan,
                'kebutuhans'=> $kebutuhans,
            ]);
        }else{
            return redirect('/rabkegiatan')->with('errors', 'kebutuhan tidak ditemukan');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatans = Kegiatan::find($id);
        return view('kegiatans.edit', compact('kegiatans', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        DB::table('kegiatans')->where('id', $request->id)->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'penanggung_jawab' => $request->penanggung_jawab,
            'no_hp' => $request->no_hp,
            'tgl_kegiatan' => $request->tgl_kegiatan,
            'alamat_kegiatan' => $request->alamat_kegiatan
        ]);

        return redirect('rabkegiatan')->with('success', 'Kegiatan berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();

        return redirect('rabkegiatan')->with('success', 'Kegiatan berhasil di Delete');
    }
}
