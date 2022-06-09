@extends('layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <button type="button" class="btn btn-primary mb-3"><span data-feather="plus-square"></span>
            Tambah Customer</button>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ketikkan Sesuatu..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
        </nav>
        <div class="table-responsive col">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Sales</th>
                        <th scope="col">Area</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d['nama_customer'] }}</td>
                            <td>{{ $d['kota'] }}</td>
                            <td>{{ $d['sales'] }}</td>
                            <td>{{ $d['area'] }}</td>
                            <td>
                                <a href="#" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span>
                                    Ubah</a>
                                <a href="#" class="badge bg-danger text-decoration-none"><span
                                        data-feather="trash-2"></span>
                                    Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
