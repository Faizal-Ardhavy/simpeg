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
							<th style="">ID</th>
							<th style="">Nama</th>
							<th style="">Jabatan</th>
							<th style="">Gaji</th>
							<th style="">Masa Berlaku</th>
							<th style=""></th>
						</tr>
						<?php foreach ($employee as $dt) { ?>
						<tr>
							<td style="">ID</td>
							<td style=""><?= $dt->name; ?></td>
							<td style="">Jabatan</td>
							<td style="">Gaji</td>
							<td style="">Masa Berlaku</td>
							<td style="">
								<div class="row row-cols-auto">
									<a class="" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="bi bi-pencil" data-bs-toggle="tooltip" data-bs-placement="top"
											title="Edit" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-fullscreen-sm-down">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Jabatan dan Gaji</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" method="POST">
					<div class="form-floating mb-3">
						<input disabled type="text" class="form-control ms-1" id="name" name="name">
						<label for="name">Nama</label>
					</div>
					<div class="form-floating mb-3">
						<select class="form-select ms-1" aria-label=".form-select-sm" name="jabatan">
							<option value="Programmer" selected>Programmer</option>
							<option value="Manager">Manager</option>
						</select>
						<label for="jabatan">Jabatan</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control ms-1" id="gaji" name="gaji">
						<label for="gaji">Gaji</label>
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

	modalTitle.textContent = 'Edit Jabatan dan Gaji'
	modalBodyInput.value = recipient
})
</script>
<?= $this->endSection() ?>