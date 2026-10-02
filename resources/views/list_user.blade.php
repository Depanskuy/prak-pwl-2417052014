@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3 border-bottom">
                <h5 class="mb-0 text-primary fw-bold">Manajemen Data Pengguna</h5>
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm px-3 shadow-sm">
                    + Tambah Baru
                </a>
            </div>
            <div class="card-body p-0">
                <!-- Memanggil komponen tabel dinamis dan mengirimkan variabel $users -->
                @include('components.user-table', ['users' => $users])
            </div>
        </div>
    </div>
</div>
@endsection