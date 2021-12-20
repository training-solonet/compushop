@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Tables</h4>
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
                        <a href="#">Data Kategori</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <h2>Data Kategori</h2>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('kategori.create') }}">Tambah Barang</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{ $message }}</p>
                                    </div>

                                @endif

                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <th width="280px" class="text-center">Aksi</th>
                                    </tr>
                                    @foreach ($kategori as $a)
                                        <tr>

                                            <td>{{ $a->nama_kategori }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('kategori.destroy', $a->id) }}" method="POST">
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('kategori.edit', $a->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda Yakin Akan menghapus data ini ?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
