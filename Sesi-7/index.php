<?php
include 'config.php';

$result = $conn->query("SELECT * FROM products ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">CRUD Produk</h2>

    <div class="card mb-4">
        <div class="card-body">
            <form id="addForm" action="process.php" method="POST">
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required min="0">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" required min="0">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <table class="table table-bordered table-striped">
       <thead>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    </thead>
        <tbody>
    <?php $no = 1; while($row = $result->fetch_assoc()): ?>
    <tr>
    <td><?= $no++ ?></td>
    <td><?= htmlspecialchars($row['nama_produk']) ?></td>
    <td><?= number_format($row['harga'], 0, ',', '.') ?></td>
    <td><?= htmlspecialchars($row['deskripsi']) ?></td>
    <td><?= $row['stok'] ?></td>
    <td>
        <button class="btn btn-warning btn-sm" onclick='openEditModal(<?= json_encode($row) ?>)'>Edit</button>
        <button class="btn btn-danger btn-sm" onclick='openDeleteModal(<?= $row["id"] ?>)'>Hapus</button>
    </td>
</tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="editForm" action="process.php" method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <input type="hidden" name="id" id="modal_id">
          <div class="mb-3">
              <label for="modal_nama_produk" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="modal_nama_produk" name="nama_produk" required>
          </div>
          <div class="mb-3">
              <label for="modal_harga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="modal_harga" name="harga" required min="0">
          </div>
          <div class="mb-3">
              <label for="modal_deskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="modal_deskripsi" name="deskripsi" required></textarea>
          </div>
          <div class="mb-3">
              <label for="modal_stok" class="form-label">Stok</label>
              <input type="number" class="form-control" id="modal_stok" name="stok" required min="0">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus produk ini?
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-danger" id="confirmDeleteBtn">Hapus</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<script>
function openEditModal(data) {
    document.getElementById('modal_id').value = data.id;
    document.getElementById('modal_nama_produk').value = data.nama_produk;
    document.getElementById('modal_harga').value = data.harga;
    document.getElementById('modal_deskripsi').value = data.deskripsi;
    document.getElementById('modal_stok').value = data.stok;
    new bootstrap.Modal(document.getElementById('editModal')).show();
}

function openDeleteModal(id) {
    document.getElementById('confirmDeleteBtn').href = 'process.php?delete=' + id;
    new bootstrap.Modal(document.getElementById('deleteModal')).show();
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
