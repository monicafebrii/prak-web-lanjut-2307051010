@extends('layouts.app')

@section('content')

<!-- Basic Tables start -->
<section class="d-flex justify-content-center align-items-center vh-100"> <!-- Menengahkan secara vertikal & horizontal -->
    <div class="row justify-content-center w-100">
        <div class="col-12 col-md-8"> <!-- Ukuran card dibuat lebih besar agar seimbang -->
            <div class="card">
                <div class="card-header text-center"> <!-- Judul ditengah -->
                    <h4 class="card-title">List User</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-text text-center">Berikut adalah daftar pengguna yang terdaftar dalam sistem.</p>
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-lg table-bordered text-center"> <!-- Menengahkan teks dalam tabel -->
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>NPM</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="text-bold-500">{{ $user->id }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->npm }}</td>
                                        <td>{{ $user->nama_kelas }}</td>
                                        <td>
                                            {{-- <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Tables end -->

@endsection
