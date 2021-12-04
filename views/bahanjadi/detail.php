<div class="container mt-5">
    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['dbd']['namaBahanJadi']; ?></h5>
            <li class="card-text">Id Bahan Jadi : <?= $data['dbd']['idBahanJadi']; ?></li>
            <li class="card-text">Jumlah Porsi Stok Awal : <?= $data['dbd']['jumlahPorsiStok']; ?></li>
            <li class="card-text mb-3">Tanggal Restok Bahan : <?= $data['dbd']['tanggalReStok']; ?></li>
            <a href="<?= BASEURL; ?>/bahanjadi" class="card-link">Kembali</a>
        </div>
    </div>
</div>