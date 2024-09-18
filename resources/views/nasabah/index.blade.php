<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasabah Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .pagination {
            justify-content: center;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Nasabah List</h1>
    <a href="{{ route('nasabah.create') }}" class="btn btn-primary mb-3">Add Nasabah</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Pembuatan</th>
                <th>Saldo</th>
                <th>Status</th>
                <th>Rekening</th>
                <th>NIS</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nasabah as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->tanggal_pembuatan }}</td>
                    <td>{{ $item->saldo }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->rekening }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>
                        <a href="{{ route('nasabah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('nasabah.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $nasabah->links('pagination::bootstrap-5') }}
    </div>
</div>
</body>
</html>
