<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card h-100">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-md-8 d-flex align-items-center">
							<h6 class="mb-0 mx-2">Cetak Laporan</h6>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="laporan/cetak">
						<div class="form-floating mb-3">
							<select class="form-select ms-1" aria-label=".form-select-sm" name="laporan">
								<option value="Laporan Kinerja" selected>Laporan Kinerja</option>
								<option value="Riwayat Gaji">Riwayat Gaji</option>
								<option value="Riwayat Presensi">Riwayat Presensi</option>
							</select>
							<label for="gender">Jenis Laporan</label>
						</div>
						<div class="text-end">
							<input class="btn btn-primary" type="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?= $this->endSection() ?>