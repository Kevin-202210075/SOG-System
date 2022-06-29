@extends('layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <div class="col-lg-8">
            <form action="{{ route('databarang.update', $dataBarang->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="barcode" class="form-label">
                        <h6>Barcode</h6>
                    </label>
                    <input type="text" class="form-control @error('barcode') is-invalid @enderror" id="barcode"
                        name="barcode" required autofocus value="{{ old('barcode', $dataBarang->barcode) }}">
                    @error('barcode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">
                        <h6>Nama Barang</h6>
                    </label>
                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang"
                        name="nama_barang" required autofocus value="{{ old('nama_barang', $dataBarang->nama_barang) }}">
                    @error('nama_barang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="satuan" class="form-label">
                        <h6>Satuan</h6>
                    </label>
                    <input type="text" class="form-control @error('satuan') is-invalid @enderror" id="satuan"
                        name="satuan" required autofocus value="{{ old('satuan', $dataBarang->satuan) }}">
                    @error('satuan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <a href="/dashboard/databarang" class="btn btn-primary">Batal</a>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </main>
@endsection
