@extends('layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <form class="col-lg-8">
            <div class="mb-3">
                <label for="kodeadmin" class="form-label">
                    <h6>Kode Admin</h6>
                </label>
                <input type="text" class="form-control" id="kodeadmin" name="kodeadmin">
            </div>
            <div class="mb-3">
                <label for="namaadmin" class="form-label">
                    <h6>Nama Admin</h6>
                </label>
                <input type="text" class="form-control" id="namaadmin" name="namaadmin">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">
                    <h6>Email</h6>
                </label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">
                    <h6>Username</h6>
                </label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">
                    <h6>Password</h6>
                </label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">
                    <h6>Konfirmasi Password</h6>
                </label>
                <input type="password" class="form-control" id="password2" name="password2">
            </div>
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
@endsection
