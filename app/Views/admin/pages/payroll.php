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
					<table class="table table-responsive text-dark ps-0 text-sm">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Jabatan</th>
							<th>Gaji</th>
							<th></th>
						</tr>
						<?php $count = 0 ?>
						<?php $no = 0?>
						<?php foreach ($dataAll[1] as $dt) { ?>
							
						<tr>
							<td><?= ++$count; ?></td>
							<td><?= $dt->name; ?></td>
							<td><?= $dataAll[2][$no]->jabatan ?></td>
							<td><?= $dataAll[2][$no]->gaji ?></td>
							<td>
								<div class="row row-cols-auto">
									<a class="" type="button" href="AdminEditPayroll/<?= $dt->username; ?>">
										<i class="bi bi-pencil"></i>
									</a>
								</div>
							</td>
						</tr>
						<?php $no++?>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>