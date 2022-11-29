<?= $this->extend('admin/templates/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card h-100">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-md-8 d-flex align-items-center">
							<h6 class="mb-0 mx-2">Riwayat Presensi</h6>
						</div>
					</div>
				</div>
				<div class="card-body">
					<hr class="horizontal gray-light" style="margin: 0 !important;">
					<table class="table table-responsive text-dark ps-0 text-sm">
						<tr>
							<th width="10%">ID</th>
							<th width="10%">Nama</th>
							<th width="25%">Tanggal</th>
							<th width="25%">Keterangan</th>
						</tr>
						<?php foreach ($data as $dt) { ?>
						<tr>
							<td width="10%"><?= $dt->id; ?></td>
							<td width="10%"><?= $dt->user_presensi; ?></td>
							<td width="25%"><?= $dt->tanggal; ?></td>
							<td width="25%"><?= $dt->keterangan; ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>