<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
				Tambah Data Bahan
			</button>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL;  ?>/bahanmentah/cari" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Data Bahan" name="keyword" id="keyword" autocomplete="off">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="submit" id="tombolCari">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-lg-6">
			<h3>Daftar Bahan Mentah</h3>
			<ul class="list-group">
				<?php foreach ($data['dbd'] as $dbd) : ?>
					<li class="list-group-item">
						<?= $dbd['namaBahan']; ?>
						<a href="<?= BASEURL; ?>/bahanmentah/hapus/<?= $dbd['idBahan']; ?>" class="badge bg-danger float-end me-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
						<a href="<?= BASEURL; ?>/bahanmentah/detail/<?= $dbd['idBahan']; ?>" class="badge bg-primary float-end me-1">Detail</a>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>
	</div>

</div>



<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judulModal">Tambah Data Bahan</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<form action="<?= BASEURL; ?>/bahanmentah/tambah" method="post">

					<div class="form-group">
						<label for="namaBahan">Nama Bahan</label>
						<input type="text" class="form-control" id="namaBahan" name="namaBahan">
					</div>

					<div class="form-group">
						<label for="idPengadaan">Id Pengadaan</label>
						<input type="number" class="form-control" id="idPengadaan" name="idPengadaan">
					</div>

					<div class="form-group">
						<label for="tanggalPengadaan">Tanggal Pengadaan</label>
						<input type="date" class="form-control" id="tanggalPengadaan" name="tanggalPengadaan">
					</div>

					<div class="form-group">
						<label for="jumlahPengadaan">Jumlah Pengadaan</label>
						<input type="text" class="form-control" id="jumlahPengadaan" name="jumlahPengadaan">
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
			</div>
		</div>
	</div>
</div>