@extends('layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <form class="col-lg-8">
            <div class="mb-3">
                <label for="kodecustomer" class="form-label">
                    <h6>Kode Customer</h6>
                </label>
                <input type="text" class="form-control" id="kodecustomer" name="kodecustomer"
                    value="{{ $old('kode_customer') }}">
            </div>
            <div class="mb-3">
                <label for="namacustomer" class="form-label">
                    <h6>Nama Customer</h6>
                </label>
                <input type="text" class="form-control" id="namacustomer" name="namacustomer">
            </div>
            <div class="mb-3">
                <label for="kota" class="form-label">
                    <h6>Kota</h6>
                </label>
                <input type="text" class="form-control" id="kota" name="kota">
            </div>
            <div class="mb-3">
                <label for="sales" class="form-label">
                    <h6>Sales</h6>
                </label>
                <input type="text" class="form-control" id="sales" name="sales">
            </div>
            <div class="mb-3">
                <label for="area" class="form-label">
                    <h6>Area</h6>
                </label>
                <input type="text" class="form-control" id="area" name="area">
            </div>
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </main>
@endsection
