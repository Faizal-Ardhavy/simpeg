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
							<th style=""></th>
						</tr>
						<?php foreach ($employee as $dt) { ?>
						<tr>
							<td style="">ID</td>
							<td style=""><?= $dt->name; ?></td>
							<td style=""><?= $dt->tgl_lahir; ?></td>
							<td style=""><?= $dt->kelamin; ?></td>
							<td style="">Alamat</td>
							<td style="">Email</td>
							<td style="">No. Telepon</td>
							<td style="">
								<div class="row row-cols-auto">
									<a class="" type="button" href="AdminEditEmployee">
										<i class="bi bi-pencil"></i>
									</a>
									<a class="" type="button" data-bs-toggle="tooltip" data-bs-placement="top"
										title="Delete"><i class="bi bi-trash2"></i></a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-fullscreen-sm-down">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action='updateProfile' method="POST">
					<div class="form-floating mb-3">
						<input type="text" class="form-control ms-1" id="name" name="name">
						<label for="name">Nama</label>
					</div>
					<div class="form-floating mb-3">
						<input type="date" class="form-control ms-1" id="date" name="date">
						<label for="date">Tanggal Lahir</label>
					</div>
					<div class="form-floating mb-3">
						<select class="form-select ms-1" aria-label=".form-select-sm" name="kelamin">
							<option value="Laki-laki" selected>Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
						<label for="gender">Jenis Kelamin</label>
					</div>
					<div class="form-floating mb-3">
						<textarea class="form-control ms-1" id="address" name="address"></textarea>
						<label for="address">Alamat</label>
					</div>
					<div class="form-floating mb-3">
						<input type="email" class="form-control ms-1" id="email" name="email">
						<label for="email">E-mail</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control ms-1" id="phone" name="phone">
						<label for="phone">Nomor Telepon</label>
					</div>
					<div class="form-floating mb-3">
						<select class="form-select ms-1" aria-label=".form-select-sm" name="role">
							<option value="Pegawai" selected>Pegawai</option>
							<option value="Administrator">Administrator</option>
						</select>
						<label for="role">Role</label>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function(event) {

	var button = event.relatedTarget

	var modalTitle = exampleModal.querySelector('.modal-title')
	var modalBodyInput = exampleModal.querySelector('.modal-body input')

	modalTitle.textContent = 'Edit Profil'
	modalBodyInput.value = recipient
})
</script>

<?= $this->endSection() ?>