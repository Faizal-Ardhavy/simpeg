<?= $this->extend('admin/templates/header') ?>


<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0 mx-2">Cetak Laporan</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-floating mb-3">
                          <select class="form-select ms-1" aria-label=".form-select-sm" name="kelamin">
                            <option value="Laporan Kepegawaian" selected>Laporan Kepegawaian</option>
                            <option value="Laporan Rekap Pegawai">Laporan Rekap Pegawai</option>
                            <option value="Laporan Rekap Presensi Pegawai">Laporan Rekap Presensi Pegawai</option>
                          </select>
                          <label for="gender">Jenis Laporan</label>
                        </div> 
                        <div class="text-end">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <?php //Tombol modal 
                                      ?>
                                <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Cetak Laporan" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"></i>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>