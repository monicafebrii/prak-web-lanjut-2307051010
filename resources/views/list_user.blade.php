@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('user_create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <div class="card">
        <div class="card-header text-center">
            <h4 class="card-title">List User</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <p class="card-text text-center">Berikut adalah daftar pengguna yang terdaftar dalam sistem.</p>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Kelas</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->npm }}</td>
                                <td>{{ $user->kelas_id }}</td>
                                <td>
                                @if ($user->foto)
                                    <img src="{{ asset('storage/uploads/' . $user->foto) }}" alt="Foto {{ $user->nama }}" width="50">
                                @else
                                    <span class="text-muted">Tidak ada foto</span>
                                @endif
                                </td>
                                <td>
                                    <a href="{{ route('users.show', $user['id']) }}" class="btn btn-warning">Detail</a>
                                    <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning">Edit</a>
                                    <form action= "{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('apakah anda yakiningin menghapus ini?')">Delete</button>
                                    </form>
                                        
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
@endsection