<?php

?>

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			document.querySelector('#printButton').onclick = () => {

				window.print();

			}
		});
	</script>
	<style>
		@page {
			size: auto;
			margin: 0mm;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row g-4">
			<div class="col">
				<div class="rounded h-100">
					<header>
						<div class="d-flex align-items-end flex-column">
							<button class="btn btn-primary my-3" id="printButton">
								<i class="bi bi-printer"></i> Cetak
							</button>
						</div>
						<h4 class="mt-5 text-center text-uppercase fw-bold">Laporan Presensi</h4>
						<hr>
					</header>
					<div id="print">
						<h6 class="mt-5 text-uppercase fw-bold">Data Pegawai</h6>
						<table class="table table-borderless table-responsive">
							<tbody>
								<tr>
									<td scope="row">Jumlah Pegawai Aktif</td>
									<td width="1%">:</td>
									<td><?=$total?></td>
								</tr>
							</tbody>
						</table>
						<h6 class="mt-5 text-uppercase fw-bold">Riwayat Presensi Pegawai</h6>
						<table class="table table-borderless table-responsive align-middle">
							<thead>
								<tr>
									<th scope="col" width="1%">No</th>
									<th scope="col">Bulan</th>
									<th scope="col">Jumlah Kehadiran</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 0;
								foreach ($presensi as $dt) {
								?>
									<tr>
										<td scope="row"><?= ++$no; ?></td>
										<td><?php
											$m = DateTime::createFromFormat('!m', $no);
											echo $m->format('F');
											?></td>
										<td class="text-capitalize"><?= $dt ?></td>
									</tr>

								<?php } ?>
							</tbody>
						</table>

						<div class="text-end">
							<?php
							date_default_timezone_set('Asia/Jakarta');
							echo 'Dibuat pada ' . date('d-m-Y h:i:sa');
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>