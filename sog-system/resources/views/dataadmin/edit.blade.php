@extends('layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <div class="col-lg-8">
            <form action="{{ route('dataadmin.update', $user->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">
                        <h6>Nama Admin</h6>
                    </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" required autofocus value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">
                        <h6>Email</h6>
                    </label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" required autofocus value="{{ old('email', $user->email) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">
                        <h6>Username</h6>
                    </label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        name="username" required autofocus value="{{ old('username', $user->username) }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">
                        <h6>Password</h6>
                    </label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" required autofocus value="{{ old('password', $user->password) }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <a href="/dashboard/dataadmin" class="btn btn-primary">Batal</a>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </main>
@endsection
