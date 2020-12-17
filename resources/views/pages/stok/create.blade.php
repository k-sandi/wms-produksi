@extends('layouts.admin')
@section('title','Add - Data Stok')
@section('content')

    <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="{{ url('/stok') }}">Stok</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add Data Stok
                </li>
            </ol>
        </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="plus-circle"></i></span></span>Add Data Stok</h4>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <a href="{{ url('/stok') }}">
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
                                <form action="/stok/store" method="post">
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
                                        <label class="col-form-label col-md-2 col-sm-3">Produk</label>
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
                                        <label class="col-form-label col-md-2 col-sm-3">Qty (Kg)</label>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="number" name="qty" id="qty" class="form-control">
                                        </div>
                                    </div>
                                    
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

