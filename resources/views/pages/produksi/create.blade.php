@extends('layouts.admin')
@section('title','Add - Data Produksi')
@section('content')

    <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="{{ url('/produksi') }}">Produksi</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add Data Produksi
                </li>
            </ol>
        </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="plus-circle"></i></span></span>Add Data Produksi</h4>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <a href="{{ url('/produksi') }}">
                <button class="btn btn-warning btn-sm mb-3">
                                    <span class="feather-icon" data-feather="eye">
                                    </span>
                    <span class="nav-link-text">View Data</span>
                </button>
            </a>
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <div class="row">
                            <div class="col-sm">
                                <form action="/produksi/store" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Gudang</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select name="gudang" id="gudang" class="form-control custom-select">
                                                <option value="">-- Pilih Gudang --</option>
                                                @foreach ($gudang as $g)
                                                    <option value="{{ $g->id }}"> {{ ucwords($g->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Produk Yang Dibuat</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select name="produk" id="produk" class="form-control custom-select">
                                                <option value="">-- Pilih Produk --</option>
                                                @foreach ($produk as $produk)
                                                    <option value="{{ $produk->id }}"> {{ ucwords($produk->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Qty</label>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="number" name="qty" id="qty" class="form-control">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Raw Meterial 1</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select name="raw1" id="raw1" class="form-control custom-select">
                                                <option value="">-- Pilih Produk --</option>
                                                @foreach ($raw as $r)
                                                    <option value="{{ $r->id }}"> {{ ucwords($r->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="number" name="rqty1" id="rqty1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Raw Meterial 2</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select name="raw2" id="raw2" class="form-control custom-select">
                                                <option value="">-- Pilih Produk --</option>
                                                @foreach ($raw as $r)
                                                    <option value="{{ $r->id }}"> {{ ucwords($r->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="number" name="rqty2" id="rqty2" class="form-control">
                                        </div>
                                    </div> -->
                                    <button class="btn btn-success mt-5" type="submit">Tambah Data</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- /Row -->

        </div>
    <!-- /Container -->
@endsection
@section('add-script')
    <script>
      $(function(){

        'use strict';

      });
    </script>
@endsection

