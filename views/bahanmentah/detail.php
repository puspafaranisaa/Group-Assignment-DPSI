<div class="container mt-5">
  <div class="card" style="width: 25rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['dbd']['namaBahan']; ?></h5>
      <li class="card-text">Id Pengadaan Bahan : <?= $data['dbd']['idPengadaan']; ?></li>
      <li class="card-text">Tanggal Pengadaan Bahan : <?= $data['dbd']['tanggalPengadaan']; ?></li>
      <li class="card-text mb-3">Jumlah Pengadaan Bahan : <?= $data['dbd']['jumlahPengadaan']; ?></li>
      <a href="<?= BASEURL; ?>/bahanmentah" class="card-link">Kembali</a>
    </div>
  </div>
</div>