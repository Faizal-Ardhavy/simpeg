<?= $this->extend('admin/templates/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card h-100">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-md-8 d-flex align-items-center">
							<h6 class="mb-0 mx-2">Data Gaji dan Jabatan Pegawai</h6>
						</div>
					</div>
				</div>
				<div class="card-body">
					<hr class="horizontal gray-light" style="margin: 0 !important;">
					<table class="table text-dark ps-0 text-sm">
						<tr>
							<th style="">No</th>
							<th style="">Nama</th>
							<th style="">Jabatan</th>
							<th style="">Gaji</th>
							<!-- <th style="">Masa Berlaku</th> -->
							<th style=""></th>
						</tr>
						<?php $count = 0 ?>
						<?php foreach ($employee as $dt) { ?>
						<tr>
							<td style=""><?= ++$count; ?></td>
							<td style=""><?= $dt->name; ?></td>
							<td style=""><?= $dt->jabatan; ?></td>
							<td style=""><?= $dt->gaji; ?></td>
							<!-- <td style="">Masa Berlaku</td> -->
							<td style="">
								<div class="row row-cols-auto">
									<a class="" type="button" href="AdminEditPayroll/<?= $dt->username; ?>">
										<i class="bi bi-pencil"></i>
									</a>
								</div>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>