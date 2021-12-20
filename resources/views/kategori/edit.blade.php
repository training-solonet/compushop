@extends('layouts.admin')

@section('content')

    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Edit Kategori</h2>
            </div>
            <form method="POST" action="{{ route('kategori.update', $kategori->id) }}">
                @method('PUT')
                @csrf
                <div class="container mt-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" value="{{ old('nama_kategori', $kategori->nama_kategori) }}"
                            name="nama_kategori" id="nama_kategori">
                    </div>



                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        @endsection
