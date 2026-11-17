<?php
require_once 'config/database.php';
?>


<div class="container-fluid">
    <h3>Data Produk</h3>

    <button class="btn btn-primary mb-3"
            data-bs-toggle="modal"
            data-bs-target="#modalProduk">
        + Tambah Produk
    </button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="4" class="text-center">
                    Belum ada data produk.
                </td>
            </tr>
        </tbody>
    </table>
</div>


<!-- Modal Tambah Produk -->
<div class="modal fade" id="modalProduk" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Tambah Produk</h5>
                <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control"
                               placeholder="Masukkan nama produk">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control"
                               placeholder="Masukkan harga">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" class="form-control"
                               placeholder="Masukkan stok">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">
                    Simpan
                </button>
            </div>

        </div>
    </div>
</div>


