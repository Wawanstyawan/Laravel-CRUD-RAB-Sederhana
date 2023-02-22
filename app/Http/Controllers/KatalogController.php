<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Katalog;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Auth;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $katalogs = katalog::all(); //manggil fata katalog,
        return view('katalogs.index', compact('katalogs')); //menampilkan,return,compat
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('katalogs.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $katalogs = katalog::create($request->all());
        if ($request->hasfile('foto'))
        {
            $request->file('foto')->move('template/img/katalog/', $request->file('foto')->getClientOriginalName());
            $katalogs->foto = $request->file('foto')->getClientOriginalName();
            $katalogs->save();
        }
        return redirect('katalog')->with('success', 'Katalog berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $katalogs = katalog::find($id);
        return view('katalogs.show', compact('katalogs', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $katalogs = katalog::find($id);
        $kategoris = Kategori::all();
        return view('katalogs.edit', compact('katalogs', 'id', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $katalog = Katalog::find($id);
        $katalog->kategori_id = $request->get('kategori_id');
        $katalog->nama_katalog = $request->get('nama_katalog');
        $katalog->harga = $request->get('harga');
        $katalog->description = $request->get('description');
        $katalog->link_referensi = $request->get('link_referensi');

        if ($request->hasfile('foto')) 
        {
            $destination = 'template/img/katalog/'.$katalog->foto;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->file('foto')->move('template/img/katalog/', $request->file('foto')->getClientOriginalName());
            $katalog->foto = $request->file('foto')->getClientOriginalName();
        }

        $katalog->save();
        return redirect('katalog')->with('success', 'Katalog berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $katalogs = Katalog::find($id);
        $destination = 'template/img/katalog/'.$katalogs->foto;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $katalogs->delete();

        return redirect('katalog')->with('success', 'Katalog berhasil di Delete');
    }
}
