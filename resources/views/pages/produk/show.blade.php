@extends('layouts.admin')
@section('title','Detail - Data Produk')
@section('content')

    <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="{{ url('/produk') }}">Produk</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Detail Data Produk
                </li>
            </ol>
        </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="plus-circle"></i></span></span>Detail Data Produk</h4>
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
                            @foreach ($produk as $p)
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">ID Produk</label>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="text" name="id" id="id" class="form-control" value="{{ $p->id }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Nama Produk</label>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="text" name="name" id="name" class="form-control" value="{{ ucwords($p->name) }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Jenis Produk</label>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="text" name="name" id="name" class="form-control" value="{{ ucwords($p->jenis) }}" readonly>
                                        </div>
                                    </div>
                                    
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- /Row -->

        </div>
    <!-- /Container -->
@endsection
@section('Detail-script')
    <script>
      $(function(){

        'use strict';

      });
    </script>
@endsection

