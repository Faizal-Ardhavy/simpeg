<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100">
                            <p class="mb-1 pt-2 text-bold">Selamat datang di</p>
                            <h5 class="font-weight-bolder">Portal Pegawai!</h5>
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

<!-- <div class="container-fluid py-0">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Pegawai</p>
                                <h5 class="font-weight-bolder mb-0">
                                    291
                                    <span class="text-success text-sm font-weight-bolder">+3%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?= $this->endSection() ?>