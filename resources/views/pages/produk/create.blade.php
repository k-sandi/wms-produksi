@extends('layouts.admin')
@section('title','Add - Data Produk')
@section('content')

    <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="{{ url('/produk') }}">Produk</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add Data Produk
                </li>
            </ol>
        </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="plus-circle"></i></span></span>Add Data Produk</h4>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <a href="{{ url('/produk') }}">
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
                                <form action="/produk/store" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Nama Produk</label>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Jenis Produk</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select name="jenis" id="jenis" class="form-control custom-select">
                                                <option value="">-- Pilih Jenis Produk --</option>
                                                @foreach ($jenis_produk as $r)
                                                    <option value="{{ $r->id }}"> {{ ucwords($r->name) }}</option>
                                                @endforeach
                                            </select>
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

