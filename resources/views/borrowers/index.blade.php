@extends('layouts.main')

@section('container-fluid')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Peminjam</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($borrowers as $borrower)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $borrower->name }}</td>
                            <td>{{ $borrower->judul }}</td>
                            <td>{{ $borrower->tanggal_pinjam }}</td>
                            <td>{{ $borrower->tanggal_kembali }}</td>
                            <td>{{ $borrower->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection