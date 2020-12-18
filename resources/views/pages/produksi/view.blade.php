@extends('layouts.admin')
@section('title','Produksi Page')
@prepend('add-style')

@endprepend
@section('content')

    <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item active" aria-current="page">
                    Produksi
                </li>
            </ol>
        </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="server"></i></span></span>List Produksi</h4>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <a href="{{ url('/produksi/create') }}" class="btn btn-primary btn-sm mb-3">Add Data <i class="fa fa-plus-circle"></i> </a>
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
                                                <th>ID Produksi</th>
                                                <th>Tanggal Produksi</th>
                                                <th>Nama Gudang</th>
                                                <!-- <th>Nama Produksi</th> -->
                                                <th>Qty</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach($produksi as $p)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $p->id }}</td>
                                                <td>{{ $p->created_at }}</td>
                                                <td>{{ ucwords($p->gudang) }}</td>
                                                <!-- <td>{{ ucwords($p->Produksi) }}</td> -->
                                                <td>{{ ucwords($p->qty_produksi) }}</td>
                                                <td>
                                                    <a href="produksisi/show/{{ $p->id }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
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

