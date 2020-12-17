<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = Stok::join('gudang', 'stok_gudang.id_gudang','=','gudang.id')
                    ->join('produk', 'stok_gudang.id_produk','=','produk.id')
                    ->join('jenis_produk', 'produk.id_jenis_produk','=','jenis_produk.id')
                    ->select('stok_gudang.id','stok_gudang.id_gudang','stok_gudang.id_produk','stok_gudang.stok','gudang.name as gudang', 
                            'produk.name as produk','jenis_produk.name as jenis')
                    ->get();

        return view('pages.stok.view', compact('stok'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stok = Stok::join('gudang', 'stok_gudang.id_gudang','=','gudang.id')
                    ->join('produk', 'stok_gudang.id_produk','=','produk.id')
                    ->join('jenis_produk', 'produk.id_jenis_produk','=','jenis_produk.id')
                    ->select('stok_gudang.id','stok_gudang.id_gudang','stok_gudang.id_produk','stok_gudang.stok','gudang.name as gudang', 
                            'produk.name as produk','jenis_produk.name as jenis')
                    ->where('stok_gudang.id', $id)
                    ->get();

        return view('pages.stok.show', compact('stok'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
