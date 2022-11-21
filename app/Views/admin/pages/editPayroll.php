<?= $this->extend('admin/templates/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card h-100">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-md-8 d-flex align-items-center">
							<h6 class="mb-0 mx-2">Edit Jabatan dan Gaji Pegawai</h6>
						</div>
					</div>
				</div>
				<div class="card-body">
					<hr class="horizontal gray-light" style="margin: 0.5rem 0 !important;">
					<form action="updatePayroll" method="POST">
						<div class="form-floating mb-3">
							<input type="hidden" class="form-control ms-1" id="id" name="id" value="<?= $data ?>">
							<label for="id">Username</label>
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
							<a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?= $this->endSection() ?>