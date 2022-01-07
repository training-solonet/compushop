@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">DataTables.Net</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <h2>Data Barang</h2>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('barang.create') }}">
                                    <i class="far fa-plus-square">  Tambah Barang </i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Id Kategori</th>
                                            <th>Harga Barang</th>
                                            <th>Stok Barang</th>
                                            <th>Foto Barang</th>
                                            <th>Deskripsi</th>
                                            <th width="280px" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no=1;
                                        @endphp
                                        @foreach ($barang as $a)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $a->nama_barang }}</td>
                                                <td>{{ $a->kategori->nama_kategori }}</td>
                                                <td>{{ $a->harga_barang }}</td>
                                                <td>{{ $a->stok_barang }}</td>
                                                <td> <img style="width: 30px" src="{{ url('img/' . $a->foto_barang) }}"
                                                        class="img-fluid mt-3 mb-3"></td>
                                                <td>{{ $a->deskripsi }}</td>

                                                <td class="text-center">
                                                    <form action="{{ route('barang.destroy', $a->id) }}" method="POST">
                                                        <a class="btn btn-primary btn-sm"
                                                            href="{{ route('barang.edit', $a->id) }}">
                                                            <i class="far fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda Yakin Akan menghapus data ini ?')">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
