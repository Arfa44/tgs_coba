<!-- app/views/reservations/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Reservasi Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-secondary text-white text-center">
                        <h3 class="mb-0">Tambah Reservasi Baru</h3>
                    </div>
                    <div class="card-body">
                        <form action="/reservasi/store" method="POST">
                            <div class="mb-3">
                                <label for="user_id" class="form-label">ID Pengguna</label>
                                <input type="number" name="user_id" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="destination_id" class="form-label">ID Destinasi</label>
                                <input type="number" name="destination_id" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_reservasi" class="form-label">Tanggal Reservasi</label>
                                <input type="date" name="tgl_reservasi" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                                <select name="status_pembayaran" class="form-select">
                                    <option value="Pending">Pending</option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Dibatalkan">Dibatalkan</ ```html
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/reservasi/index" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>