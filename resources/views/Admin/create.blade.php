@extends('layouts.admin')

@section('content')

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Tambah Barang</h2>
        </div>
<form method="POST" action="{{ route('produk.store') }}">

    if ($errors->any())
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

    <div class="mb-3">
    <label for="nama_barang" class="form-label">Nama Barang</label>
    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang">
    @error('nama_barang')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>


  <div class="mb-3">
    <label for="kategori" class="form-label">Kategori</label>
    <select class="form-select" name="id_kategori" id="kategori">
    @foreach ( $kategori as $kategori )
      @if(old('id_kategori')== $kategori->id)
      <option value="{{ $kategori->id }}" selected>{{ $kategori->nama_kategori }}</option>
      @else
      <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
      @endif
    @endforeach

    </select>
  </div>

    <div class="mb-3">
        <label for="harga_barang" class="form-label ">Harga Barang</label>
        <input type="text" class="form-control @error('harga_barang') is-invalid @enderror" id="harga_barang" name="">
        @error('harga_barang')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok :</strong>
            <input type="number" name="stok_barang" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto :</strong>
                <input type="file" name="foto_barang" class="form-control" placeholder="Image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="deskripsi"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
