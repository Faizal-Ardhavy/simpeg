<?= $this->extend('admin/templates/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card h-100">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-md-8 d-flex align-items-center">
							<h6 class="mb-0 mx-2">Edit Profil Pegawai</h6>
						</div>
					</div>
				</div>
				<div class="card-body">
					<hr class="horizontal gray-light" style="margin: 0.5rem 0 !important;">
					<form action='updateProfile' method="POST">
						<div class="form-floating mb-3">
							<input type="text" class="form-control ms-1" id="name" name="name" value="<?=$employee['name']?>">
							<label for="name">Nama</label>
						</div>
						<div class="form-floating mb-3">
							<input type="date" class="form-control ms-1" id="date" name="date" value="<?=$employee['tgl_lahir']?>">
							<label for="date">Tanggal Lahir</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select ms-1" aria-label=".form-select-sm" name="kelamin">
							<?php if($employee['kelamin']=="Laki-laki"):?>
								<option selected value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							<?php else: ?>
								<option selected value="Perempuan">Perempuan</option>
								<option value="Laki-laki">Laki-laki</option>
							<?php endif; ?>
							</select>
							<label for="gender">Jenis Kelamin</label>
						</div>
						<div class="form-floating mb-3">
							<textarea class="form-control ms-1" id="address" name="address"><?=$employee['alamat']?></textarea>
							<label for="address">Alamat</label>
						</div>
						<div class="form-floating mb-3">
							<input type="email" class="form-control ms-1" id="email" name="email" value="<?=$employee['email']?>">
							<label for="email">E-mail</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control ms-1" id="phone" name="phone" value="<?=$employee['no_telp']?>">
							<label for="phone">Nomor Telepon</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select ms-1" aria-label=".form-select-sm" name="role" >
								<!-- <option value="pegawai" selected>Pegawai</option>
								<option value="admin">Administrator</option> -->
								<?php if($employee['role']=="admin"):?>
									<option selected value="admin">admin</option>
									<option value="pegawai">pegawai</option>
								<?php else: ?>
									<option selected value="pegawai">pegawai</option>
									<option value="admin">admin</option>
								<?php endif; ?>
							</select>
							<label for="role">Role</label>
						</div>
						<div class="modal-footer">
							<input type="hidden" class="form-control ms-1" name="id" value="<?= $data ?>">
							<button type="button" class="btn btn-secondary">Close</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?= $this->endSection() ?>