<?= $this->extend('admin/templates/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card h-100">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-md-8 d-flex align-items-center">
							<h6 class="mb-0 mx-2">Data Pegawai</h6>
						</div>
					</div>
				</div>
				<div class="card-body">
					<hr class="horizontal gray-light" style="margin: 0 !important;">
					<table class="table text-dark ps-0 text-sm">
						<tr>
							<th style="">ID</th>
							<th style="">Nama</th>
							<th style="">Tanggal Lahir</th>
							<th style="">Jenis Kelamin</th>
							<th style="">Alamat</th>
							<th style="">Email</th>
							<th style="">No. Telepon</th>
							<th style="">Opsi</th>
						</tr>
						<?php foreach ($employee as $dt) { ?>
							<tr>
								<td style="">ID</td>
								<td style=""><?= $dt->name; ?></td>
								<td style=""><?= $dt->tgl_lahir; ?></td>
								<td style=""><?= $dt->kelamin; ?></td>
								<td style="">Email</td>
								<td style="">No. Telepon</td>
								<td style="">Opsi</td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>