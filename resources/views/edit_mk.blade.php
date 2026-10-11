@extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Edit Mata Kuliah</h1>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary mb-3">Kembali</a>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_mk" class="form-label">Nama Mata Kuliah:</label>
                <input type="text" class="form-control" id="nama_mk" name="nama_mk" value="{{ old('nama_mk', $mk->nama_mk) }}" required>
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label">SKS:</label>
                <input type="number" class="form-control" id="sks" name="sks" value="{{ old('sks', $mk->sks) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @endsection