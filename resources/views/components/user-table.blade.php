<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover align-middle mb-0">
        <thead class="table-primary text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td class="text-center">{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td class="text-center">{{ $user->nim }}</td>
                <td class="text-center">{{ $user->nama_kelas }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center text-muted py-3">Belum ada data pengguna yang terdaftar.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>