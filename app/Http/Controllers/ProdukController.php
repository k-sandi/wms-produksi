<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\JenisProduk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::join('jenis_produk','produk.id_jenis_produk','=','jenis_produk.id')
                        ->select('produk.id','produk.name','produk.id_jenis_produk','jenis_produk.name as jenis')
                        ->get();

        return view('pages.produk.view', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_produk = JenisProduk::all();

        return view('pages.produk.create', compact('jenis_produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'jenis' => 'required',
        ]);

        Produk::insert([
            'name' => $request->name,
            'id_jenis_produk' => $request->jenis,
            'created_at' => now()
        ]);

        return redirect('/produk')->with('add','Berhasil tambah data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::join('jenis_produk','produk.id_jenis_produk','=','jenis_produk.id')
                        ->select('produk.id','produk.name','produk.id_jenis_produk','jenis_produk.name as jenis')
                        ->where('produk.id',$id)
                        ->get();

        return view('pages.produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::join('jenis_produk','produk.id_jenis_produk','=','jenis_produk.id')
                        ->select('produk.id','produk.name','produk.id_jenis_produk','jenis_produk.name as jenis')
                        ->where('produk.id',$id)
                        ->get();

        $jenis_produk = JenisProduk::all();

        return view('pages.produk.edit', compact('produk', 'jenis_produk'));
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
        $validatedData = $request->validate([
            'name' => 'required',
            'jenis' => 'required',
        ]);

        Produk::where('id', $request->id)->update([
            'name' => $request->name,
            'id_jenis_produk' => $request->jenis,
            'updated_at' => now()
        ]);

        return redirect('/produk')->with('edit','Berhasil update data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::where('id',$id)->delete();

        return redirect('/produk')->with('delete','Berhasil hapus data!');
    }
}
