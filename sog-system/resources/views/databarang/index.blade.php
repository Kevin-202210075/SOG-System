@extends('layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>
        <a href="{{ route('databarang.create') }}" class="btn btn-primary mb-3"><span data-feather="plus-square"></span>
            Tambah
            Barang</a>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

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
            <form action="/dashboard/databarang" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ketikkan Sesuatu..." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Cari</button>
            </form>
        </nav>
        <div class="table-responsive col">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($dataBarangs->count())
                        @foreach ($dataBarangs as $dataBarang)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dataBarang['barcode'] }}</td>
                                <td>{{ $dataBarang['nama_barang'] }}</td>
                                <td>{{ $dataBarang['satuan'] }}</td>
                                <td>{{ $dataBarang['jumlah_barang'] }}</td>
                                <td>
                                    <a href="{{ route('databarang.edit', $dataBarang->id) }}"
                                        class="badge bg-warning text-decoration-none"><span data-feather="edit"></span>
                                        Ubah</a>
                                    <form action="{{ route('databarang.destroy', $dataBarang->id) }}" method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="badge bg-danger border-0"><span
                                                data-feather="trash-2"></span>Hapus</button>
                                    </form>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">
                                <p class="text-center fs-5">Data Tidak Ditemukan</p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </main>
@endsection
