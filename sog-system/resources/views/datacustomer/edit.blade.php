@extends('layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <div class="col-lg-8">
            <form action="{{ route('datacustomer.update', $dataCustomer->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="nama_customer" class="form-label">
                        <h6>Nama Customer</h6>
                    </label>
                    <input type="text" class="form-control @error('nama_customer') is-invalid @enderror"
                        id="nama_customer" name="nama_customer" required autofocus
                        value="{{ old('nama_customer', $dataCustomer->nama_customer) }}">
                    @error('nama_customer')
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
                        name="kota" required autofocus value="{{ old('kota', $dataCustomer->kota) }}">
                    @error('kota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sales" class="form-label">
                        <h6>Sales</h6>
                    </label>
                    <input type="text" class="form-control @error('sales') is-invalid @enderror" id="sales"
                        name="sales" required autofocus value="{{ old('sales', $dataCustomer->sales) }}">
                    @error('sales')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="area" class="form-label">
                        <h6>Area</h6>
                    </label>
                    <input type="text" class="form-control @error('area') is-invalid @enderror" id="area"
                        name="area" required autofocus value="{{ old('area', $dataCustomer->area) }}">
                    @error('area')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <a href="/dashboard/datacustomer" class="btn btn-primary">Batal</a>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </main>
@endsection
