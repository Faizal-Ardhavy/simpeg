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
					<table class="table table-responsive text-dark ps-0 text-sm">
						<tr>
							<th width="1%">No</th>
							<th>Nama</th>
							<th>Tanggal Lahir</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>Email</th>
							<th>No. Telepon</th>
							<th>Role</th>
							<th></th>
						</tr>
						<?php $no = 0 ?>
						<?php foreach ($employee as $dt) { ?>
							<tr>
								<td><?= ++$no; ?></td>
								<td><?= $dt->name; ?></td>
								<td><?= $dt->tgl_lahir; ?></td>
								<td><?= $dt->kelamin; ?></td>
								<td><?= $dt->alamat; ?></td>
								<td><?= $dt->email; ?></td>
								<td><?= $dt->no_telp; ?></td>
								<td><?= $dt->role; ?></td>
								<td>
									<div class="row row-cols-auto">
										<a class="" type="button" href="AdminEditEmployee/<?= $dt->username; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
											<i class="bi bi-pencil"></i>
										</a>
										<a onclick="return confirm('Yakin ingin menghapus?');" class="" type="button" href="AdminDeleteEmployee/<?= $dt->username; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash2"></i></a>
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