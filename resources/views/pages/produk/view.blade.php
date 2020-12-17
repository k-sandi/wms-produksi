@extends('layouts.admin')
@section('title','Produk Page')
@prepend('add-style')

@endprepend
@section('content')

    <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item active" aria-current="page">
                    Produk
                </li>
            </ol>
        </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="server"></i></span></span>List Produk</h4>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <a href="{{ url('/produk/create') }}" class="btn btn-primary btn-sm mb-3">Add Data <i class="fa fa-plus-circle"></i> </a>
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <div class="row">
                            <div class="col-sm">
                                @if (session('edit'))
                                    <div class="alert alert-success">
                                        {{session('edit')}}
                                    </div>
                                @endif
                                @if (session('add'))
                                    <div class="alert alert-success">
                                        {{session('add')}}
                                    </div>
                                @endif
                                @if (session('delete'))
                                    <div class="alert alert-danger">
                                        {{session('delete')}}
                                    </div>
                                @endif
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table id="datable_1" class="table table-condensed table-striped" width="100%" cellpadding="0" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Jenis Produk</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach($produk as $p)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $p->id }}</td>
                                                <td>{{ ucwords($p->name) }}</td>
                                                <td>{{ ucwords($p->jenis) }}</td>
                                                <td>
                                                    <a href="produk/show/{{ $p->id }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                                                    <a href="produk/edit/{{ $p->id }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="produk/delete/{{ $p->id }}" onclick="return confirm('Anda Yakin?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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

    </script>
@endsection

