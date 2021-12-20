@extends('layouts.admin')

@section('content')

    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Tambah Barang</h2>
            </div>
            <form method="POST" action="{{ route('barang.store') }}" enctype="multipart/form-data">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <div class="container mt-5">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" value="{{ old('nama_barang') }}" name="nama_barang"
                            id="exampleFormControlInput1" placeholder="nama_barang">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Id Kategori</label>
                        <select class="form-control"  name="id_kategori">
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga_barang" class="form-label">Harga Barang</label>
                        <input type="text" class="form-control" value="{{ old('harga_barang') }}" name="harga_barang"
                            id="exampleFormControlInput1" placeholder="harga_barang">
                    </div>

                    <div class="mb-3">
                        <label for="stok_barang" class="form-label">Stok Barang</label>
                        <input type="text" class="form-control" value="{{ old('stok_barang') }}" name="stok_barang"
                            id="exampleFormControlInput1" placeholder="stok_barang">
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <strong>Foto :</strong>
                            <input type="file" name="foto_barang" class="form-control" placeholder="Image">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" value="{{ old('deskripsi') }}" name="deskripsi"
                            id="exampleFormControlInput1" placeholder="deskripsi">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        @endsection
