@extends('layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <div class="col-lg-8">
            <form action="{{ route('datasupplier.update', $dataSupplier->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="nama_supplier" class="form-label">
                        <h6>Nama Supplier</h6>
                    </label>
                    <input type="text" class="form-control @error('nama_supplier') is-invalid @enderror"
                        id="nama_supplier" name="nama_supplier" required autofocus
                        value="{{ old('nama_supplier', $dataSupplier->nama_supplier) }}">
                    @error('nama_supplier')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">
                        <h6>Kota</h6>
                    </label>
                    <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota"
                        name="kota" required autofocus value="{{ old('kota', $dataSupplier->kota) }}">
                    @error('kota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <a href="/dashboard/datasupplier" class="btn btn-primary">Batal</a>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </main>
@endsection
