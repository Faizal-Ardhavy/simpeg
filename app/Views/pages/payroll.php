<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header mx-4 p-3 text-center">
									<div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
										<i class="fas fa-landmark opacity-10"></i>
									</div>
								</div>
								<div class="card-body pt-0 p-3 text-center">
									<h6 class="text-center mb-0">Gaji</h6>
									<span class="text-xs">per Oktober 2022</span>
									<hr class="horizontal dark my-3">
									<h5 class="mb-0">Rp <?= $dataAll[1]->gaji ?></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 mb-lg-0 mb-4">
					<div class="card mt-4">
						<div class="card-header pb-0 p-3">
							<div class="row">
								<div class="col-6 d-flex align-items-center">
									<h6 class="mb-0">Metode Pembayaran</h6>
								</div>
								<!-- <div class="col-6 text-end">
									<a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp; Tambah kartu baru</a>
								</div> -->
							</div>
						</div>
						<div class="card-body p-3">
							<div class="row">
								<div class="col-12 mb-md-0 mb-4">
									<div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
										<?=$img = null?>
										<?php
											if($dataAll[0]->bank=="Mandiri"){
												$img = "../assets/img/logos/mandiri.png";
											}else if($dataAll[0]->bank=="BNI"){
												$img = "../assets/img/logos/bni.png";
											}else if($dataAll[0]->bank=="BRI"){
												$img = "../assets/img/logos/bri.jpg";
											}else{
												$img = "../assets/img/logos/bca.png";
											}
											
										?>
										<img class="w-10 me-3 mb-0" src=<?=$img?> alt="logo">
										<h6 class="mb-0"><?= $dataAll[0]->rekening ?></h6>

										<div class="col-md-4 text-end">
											<a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <?php //Tombol modal 
																																?>
												<i class="fas fa-pencil-alt ms-auto cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card h-100">
				<div class="card-header pb-0 p-3">
					<div class="row">
						<div class="col-6 d-flex align-items-center">
							<h6 class="mb-0">Invoices</h6>
						</div>
						<!-- <div class="col-6 text-end">
							<button class="btn btn-outline-primary btn-sm mb-0">View All</button>
						</div> -->
					</div>
				</div>
				<div class="card-body p-3 pb-0">
					<ul class="list-group">
						<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
							<div class="d-flex flex-column">
								<h6 class="mb-1 text-dark font-weight-bold text-sm">01 September 2022</h6>
								<span class="text-xs">#MS-415646</span>
							</div>
							<div class="d-flex align-items-center text-sm">
								Rp12.500.000
								<!-- <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button> -->
							</div>
						</li>
						<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
							<div class="d-flex flex-column">
								<h6 class="text-dark mb-1 font-weight-bold text-sm">02 Agustus 2022</h6>
								<span class="text-xs">#RV-126749</span>
							</div>
							<div class="d-flex align-items-center text-sm">
								Rp12.500.000
								<!-- <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button> -->
							</div>
						</li>
						<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
							<div class="d-flex flex-column">
								<h6 class="text-dark mb-1 font-weight-bold text-sm">02 Juli 2022</h6>
								<span class="text-xs">#FB-212562</span>
							</div>
							<div class="d-flex align-items-center text-sm">
								Rp12.500.000
								<!-- <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button> -->
							</div>
						</li>
						<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
							<div class="d-flex flex-column">
								<h6 class="text-dark mb-1 font-weight-bold text-sm">01 Juni 2022</h6>
								<span class="text-xs">#QW-103578</span>
							</div>
							<div class="d-flex align-items-center text-sm">
								Rp10.000.000
								<!-- <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button> -->
							</div>
						</li>
						<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
							<div class="d-flex flex-column">
								<h6 class="text-dark mb-1 font-weight-bold text-sm">01 Mei 2022</h6>
								<span class="text-xs">#AR-803481</span>
							</div>
							<div class="d-flex align-items-center text-sm">
								Rp10.000.000
								<!-- <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button> -->
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable modal-fullscreen-sm-down">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Metode Pembayaran</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form action='paymentMethod' method="POST">
							<div class="form-floating mb-3">
								<select class="form-control ms-1" id="bank" name="bank">
									<option value="none" selected disabled hidden>Pilih Bank</option>
									<option value="Mandiri">Mandiri</option>
									<option value="BCA">BCA</option>
									<option value="BNI">BNI</option>
									<option value="BRI">BRI</option>
								</select>
								<label for="card">Jenis Bank</label>
							</div>
							<div class="form-floating mb-3">
								<input type="number" class="form-control ms-1" id="card" name="card" value=<?= $dataAll[0]->rekening ?>>
								<label for="card">Nomor Kartu Kredit/Debit</label>
							</div>
							<div class="form-floating mb-3">
								<input type="date" class="form-control ms-1" id="exp" name="exp" value=<?= $dataAll[0]->tgl_kadaluarsa?>>
								<label for="exp">Tanggal Kadaluarsa</label>
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
	</div>
	<?= $this->endSection() ?>