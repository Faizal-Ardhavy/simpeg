<?= $this->extend('admin/templates/header') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100">
                            <p class="mb-1 pt-2 text-bold">Selamat datang di</p>
                            <h5 class="font-weight-bolder">Portal Admin!</h5>
                            <p class="mb-5">Sistem Informasi Kepegawaian
                            </p>
                            <!-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                href="javascript:;">
                                Read More
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a> -->
                        </div>
                    </div>
                    <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                        <div class="bg-gradient-primary border-radius-lg h-100">
                            <img src="../assets/img/shapes/waves-white.svg"
                                class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                            <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                <img class="w-100 position-relative z-index-2 pt-4"
                                    src="../assets/img/illustrations/rocket-white.png" alt="rocket">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-1">
    <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2">
            <div class="card-body p-3">
                <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                    <div class="chart">
                        <canvas id="adminChart" height="170"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-column container-fluid py-4">
    <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2">
            <div class="card-body p-3">
                <h6 class="ms-2 mt-4 mb-0">Peningkatan Jumlah Pegawai Per-tahun</h6>
                <div class="container border-radius-lg">
                    <div class="row">
                        <div class="col-10 py-3 ps-0">
                            <div class="d-flex mb-2">
                                <div
                                    class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                    <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>document</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(154.000000, 300.000000)">
                                                        <path class="color-background"
                                                            d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                            opacity="0.603585379"></path>
                                                        <path class="color-background"
                                                            d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <p class="text-xs mt-1 mb-0 font-weight-bold">Jumlah Pegawai Keseluruhan</p>
                            </div>
                            <p class="font-weight-bolder">455 orang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var xValues = ["2012", "2013", "2014", "2015", "2016"];
var yValues = [55, 49, 44, 24, 100];

new Chart("adminChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: "white",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Jumlah Pegawai Per-tahun"
    },
    scales: {
        xAxes: [{
            barPercentage: 0.4
        }]
    }
  }
});
</script>

<?= $this->endSection() ?>