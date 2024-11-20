<!-- app/views/reservations/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Data Reservasi</h2>
        <a href="/reservasi/create" class="btn btn-primary mb-3">Tambah Reservasi Baru</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>NO</th>
                        <th>ID Reservasi</th>
                        <th>ID User</th>
                        <th>ID Destinasi</th>
                        <th>Tanggal Reservasi</th>
                        <th>Status Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($reservasi1 as $reservasi): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($reservasi['reservation_id']) ?></td>
                            <td><?= htmlspecialchars($reservasi['user_id']) ?></td>
                            <td><?= htmlspecialchars($reservasi['destination_id']) ?></td>
                            <td><?= htmlspecialchars($reservasi['tgl_reservasi']) ?></td>
                            <td><?= htmlspecialchars($reservasi['status_pembayaran']) ?></td>
                            <td>
                                <a href="/reservasi/edit/<?php echo $reservasi['reservation_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/reservasi/delete/<?php echo $reservasi['reservation_id']; ?>" 
                                   class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>