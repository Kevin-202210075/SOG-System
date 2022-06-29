<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOG System | {{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">SOG System</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-bg-dark" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Log Out <span data-feather="log-out"></button>
                </form>
            </ul>
        </li>

    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                                href="/dashboard">
                                <span data-feather="grid" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/dataadmin*') ? 'active' : '' }}"
                                href="/dashboard/dataadmin">
                                <span data-feather="user" class="align-text-bottom"></span>
                                Data Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/datacustomer*') ? 'active' : '' }}"
                                href="/dashboard/datacustomer">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Data Customer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/datasupplier*') ? 'active' : '' }}"
                                href="/dashboard/datasupplier">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Data Supplier
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/databarang*') ? 'active' : '' }}"
                                href="/dashboard/databarang">
                                <span data-feather="package" class="align-text-bottom"></span>
                                Data Barang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/pricelist*') ? 'active' : '' }}"
                                href="/dashboard/pricelist">
                                <span data-feather="dollar-sign" class="align-text-bottom"></span>
                                Pricelist
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/transaksi*') ? 'active' : '' }}"
                                href="/dashboard/transaksi">
                                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                Transaksi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/laporan*') ? 'active' : '' }}"
                                href="/dashboard/laporan">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Laporan
                            </a>
                        </li>
                    </ul>


                </div>
            </nav>

            @yield('container')

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>
</body>

</html>
