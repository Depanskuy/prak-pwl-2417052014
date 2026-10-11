@extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Daftar Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-success mb-3">Tambah Mata Kuliah Baru</a>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table border="1" class="table table-striped" cellpadding="10" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mks as $mk)
                    <tr>
                        <td>{{ $mk->id }}</td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
                        <td>
                            <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm btn-primary me-2">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" 
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection