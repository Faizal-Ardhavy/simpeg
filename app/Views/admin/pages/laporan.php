<?= $this->extend('admin/templates/header') ?>


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
					<div class="form-floating mb-3">
						<select class="form-select ms-1" aria-label=".form-select-sm" id="laporan">
							<option value="">Pilih jenis laporan</option>
							<option value="admin/laporan/presensi">Laporan Rekapitulasi Presensi Pegawai</option>
							<option value="admin/laporan/gaji">Laporan Rekapitulasi Gaji Pegawai</option>
						</select>
						<label for="laporan">Jenis Laporan</label>
					</div>
				</div>
			</div>
		</div>

		<?= $this->endSection() ?>