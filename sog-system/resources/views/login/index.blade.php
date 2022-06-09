<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOG System | Login</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- My CSS --}}
    <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>

<body>

    <div class="position-absolute top-50 start-50 translate-middle">
        <main class="form-signin w-100 m-auto">
            <form action="/" method="post">
                @csrf
                <img class="mb-4" src="/img/Logo.png">
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="Masukkan Email..." autofocus required value="{{ old('email') }}">
                    <label for="email">Email Address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan Password..." required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </main>
    </div>



</body>

</html>
