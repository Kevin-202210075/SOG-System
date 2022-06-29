@extends('layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <div class="col-lg-8">
            <form action="/dashboard/datasupplier" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_customer" class="form-label">
                        <h6>Nama Customer</h6>
                    </label>
                    <select class="form-select" name="nama_customer">
                        @foreach ($dataCustomer as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->nama_customer }}</option>
                        @endforeach
                    </select>
                    @error('nama_customer')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="barcode" class="form-label">
                        <h6>Barcode</h6>
                    </label>
                    <input type="text" class="form-control @error('barcode') is-invalid @enderror" id="barcode"
                        name="barcode" required readonly>
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
                    <select class="form-select" name="nama_barang">
                        @foreach ($dataBarang as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                        @endforeach
                    </select>
                    @error('nama_barang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">
                        <h6>Harga</h6>
                    </label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                        name="harga" required>
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <a href="/dashboard/pricelist" class="btn btn-primary">Batal</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </main>
@endsection
