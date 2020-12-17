<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produksi;
use App\Models\ProduksiDetail;
use App\Models\Gudang;
use App\Models\Produk;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produksi = Produksi::join('produk', 'produksi.id_produk_jadi','=','produk.id')
                            ->join('gudang', 'produksi.id_gudang','=','gudang.id')
                            ->select('produksi.id','produksi.id_produk_jadi','produksi.qty_produksi',
                                    'produk.name as produk', 'gudang.name as gudang', 'produksi.created_at')
                            ->get();

        return view('pages.produksi.view', compact('produksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gudang = Gudang::all();
        // $produk = Produk::join('jenis_produk', 'produk.id_jenis_produk','=','jenis_produk.id')
        //                 ->select('produk.id','produk.name','jenis_produk.name as jenis')
        //                 ->where('jenis_produk')
        $produk = Produk::where('id_jenis_produk',1)->get();

        $raw = Produk::where('id_jenis_produk',2)->get();

        return view('pages.produksi.create', compact('gudang','produk','raw'));
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
        $produksi = ProduksiDetail::join('produksi', 'produksi_detail.id_produksi','=','produksi.id')
                                ->join('produk','produksi.id_produk','=','produk.id')
                                ->select('produksi_detail.id', 'produksi_detail.id_produksi', 'produksi_detail.id_produk',
                                        'produksi_detail.qty',
                                        'produk.name as produk')
                                ->where('produksi.id', $id)
                                ->orderBy('produksi_detail.created_at', 'asc')
                                ->get();

        return view('pages.produksi.show', compact('produksi'));
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
