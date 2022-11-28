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
		SIMPEG - Laporan Rekapitulasi Presensi
	</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<!-- CSS Files -->
	<link href="/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
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
			margin: 15mm 0mm;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="rounded">
					<header>
						<div class="d-flex align-items-end flex-column">
							<button class="btn btn-primary my-3" id="printButton">
								<i class="bi bi-printer"></i> Cetak
							</button>
						</div>
						<div class="mt-2 sidenav-header">
							<a class="navbar-brand m-0">
								<img src="/assets/img/logo-ct.png" class="navbar-brand-img h-50" alt="main_logo">
								<span class="ms-1 font-weight-bold bg-dark text-gradient">Portal Pegawai</span>
							</a>
						</div>
						<div class="title fw-bold">
							<h3 class="text-title text-center text-info text-gradient">Laporan Rekapitulasi Presensi Pegawai</h3>
						</div>
					</header>
					<div id="print">
						<h5 class="mt-4 text-uppercase fw-bold badge bg-gradient-info">Data Pegawai</h5>
						<div class="container-fluid card pt-3">
							<table class="table table-borderless table-responsive text-dark">
								<tbody>
									<tr>
										<td scope="row" width="1%">Jumlah Pegawai Aktif</td>
										<td width="1%">:</td>
										<td><?= $total ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<h5 class="mt-4 text-uppercase fw-bold badge bg-gradient-info">Riwayat Presensi Pegawai</h5>
						<div class="container-fluid card pt-3">
							<table class="table table-responsive align-middle text-dark">
								<tr>
									<th scope="col" width="1%">No.</th>
									<th scope="col">Bulan</th>
									<th scope="col">Jumlah Kehadiran</th>
								</tr>
								<tbody>
									<?php
									$no = 0;
									foreach ($presensi as $dt) {
									?>
										<tr>
											<td scope="row"><?= ++$no . '. '; ?></td>
											<td><?php
												$m = DateTime::createFromFormat('!m', $no);
												setlocale(LC_ALL, 'IND');
												echo $m->format('F');
												?></td>
											<td class="text-capitalize"><?= $dt ?></td>
										</tr>

									<?php } ?>
								</tbody>
							</table>
						</div>
						<tfoot>
							<div class="mt-4 timestamp text-end">
								<?php
								date_default_timezone_set('Asia/Jakarta');
								echo 'Dibuat pada ' . date('d-m-Y h:i:sa');
								?>
							</div>
						</tfoot>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>