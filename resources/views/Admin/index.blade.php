@extends('layouts.admin')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Daftar Barang</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('barang.create') }}">Tambah Barang</a>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <p>{{ $message }}</p>
        </div>

    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama Barang</th>
            <th>Id Kategori</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Foto Barang</th>
            <th>Deskripsi</th>
            <th width="280px" class="text-center">Aksi</th>
        </tr>
        @foreach ($barang as $a)
            <tr>
                <td>{{ $a->kategori->nama_kategori }}</td>
                <td>{{ $a->nama_barang }}</td>
                <td>{{  $a->harga_barang }}</td>
                <td>{{  $a->stok_barang }}</td>
                <td>{{  $a->foto_barang }}</td>
                <td>{{  $a->deskripsi }}</td>

                <td class="text-center">
                    <form action="{{ route('barang.destroy', $a->id_barang) }}" method="POST">
                        <a class="btn btn-primary btn-sm" href="{{ route('barang.edit', $bukus->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda Yakin Akan menghapus data ini ?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
