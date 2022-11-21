<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="/assets/img/favicon.png">
	<title>
		SIMPEG - Cetak
	</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<!-- CSS Files -->
	<link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
	<link href="/assets/css/laporan.css" rel="stylesheet" />
</head>

<body>
	<div class="container-fluid">
		<div class="row g-4">
			<div class="col">
				<div class="rounded h-100">
					<header>
						<div class="d-flex align-items-end flex-column">
							<div class="">
								<button class="btn btn-dark my-3" id="printButton" onClick="window.print();">
									<i class="bi bi-printer"></i> Cetak</button>
							</div>
						</div>
						<div class="d-flex justify-content-between">
							<div class="text-center">

							</div>
						</div>
						<hr>
					</header>
					<h6 class="mt-5 text-uppercase fw-bold">Data Diri Pegawai</h6>
					<table class="table table-borderless table-responsive">
						<tbody>
							<tr>
								<td>Nama Lengkap</td>
								<td>:</td>
								<td></td>
							</tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td>:</td>
								<td></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td< /td>
							</tr>
							<tr>
								<td>E-mail</td>
								<td>:</td>
								<td></td>
							</tr>
							<tr>
								<td>Nomor Telepon</td>
								<td>:</td>
								<td></td>
							</tr>
						</tbody>
					</table>
					<h6 class="mt-5 text-uppercase fw-bold">Rekapitulasi Pegawai</h6>
					<h4 class="text-uppercase">Presensi</h4>
					<table class="table table-borderless table-responsive align-middle">
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>

							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>