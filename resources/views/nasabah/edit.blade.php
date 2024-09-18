<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nasabah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Nasabah</h1>
    <form action="{{ route('nasabah.update', $nasabah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $nasabah->nama) }}" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="{{ old('kelas', $nasabah->kelas) }}" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ old('jurusan', $nasabah->jurusan) }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="L" {{ old('jenis_kelamin', $nasabah->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('jenis_kelamin', $nasabah->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_pembuatan" class="form-label">Tanggal Pembuatan</label>
            <input type="date" class="form-control" id="tanggal_pembuatan" name="tanggal_pembuatan" value="{{ old('tanggal_pembuatan', $nasabah->tanggal_pembuatan) }}" required>
        </div>
        <div class="mb-3">
            <label for="saldo" class="form-label">Saldo</label>
            <input type="number" step="0.01" class="form-control" id="saldo" name="saldo" value="{{ old('saldo', $nasabah->saldo) }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="aktif" {{ old('status', $nasabah->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="non-aktif" {{ old('status', $nasabah->status) == 'non-aktif' ? 'selected' : '' }}>Non-aktif</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="rekening" class="form-label">Rekening</label>
            <input type="text" class="form-control" id="rekening" name="rekening" value="{{ old('rekening', $nasabah->rekening) }}" required>
        </div>
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis', $nasabah->nis) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
