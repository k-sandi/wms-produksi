@extends('layouts.admin')
@section('title','Add - Data Gudang')
@section('content')

    <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="{{ url('/gudang') }}">Gudang</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add Data Gudang
                </li>
            </ol>
        </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="plus-circle"></i></span></span>Add Data Gudang</h4>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <a href="{{ url('/gudang') }}">
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
                                <form action="/gudang/store" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2 col-sm-3">Nama Gudang</label>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="text" name="name" id="name" class="form-control">
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

