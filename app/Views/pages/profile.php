<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="page-header min-height-100 border-radius-xl mt-4"
        style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="../assets/img/cat.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1 text-capitalize">
                        <?= session()->get('name'); ?>
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        CEO / Co-Founder
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0 mx-2">Profil Pegawai</h6>
                        </div>
                        <div class="col-md-4 text-end">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <?php //Tombol modal 
                                      ?>
                                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit Profile" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <hr class="horizontal gray-light" style="margin: 0.5rem 0 !important;">
                    <table class="table table-borderless text-dark ps-0 text-sm">
                        <tr>
                            <td style="width: 20% !important;">Nama Lengkap</td>
                            <td style="width: 5% !important;">:</td>
                            <td style="width: 75% !important;"><?= session()->get('name'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20% !important;">Tanggal Lahir</td>
                            <td style="width: 5% !important;">:</td>
                            <td style="width: 75% !important;"><?= session()->get('name'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20% !important;">Jenis Kelamin</td>
                            <td style="width: 5% !important;">:</td>
                            <td style="width: 75% !important;"><?= session()->get('name'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20% !important;">Alamat</td>
                            <td style="width: 5% !important;">:</td>
                            <td style="width: 75% !important;"><?= session()->get('name'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20% !important;">E-mail</td>
                            <td style="width: 5% !important;">:</td>
                            <td style="width: 75% !important;"><?= session()->get('name'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20% !important;">Nomor Telepon</td>
                            <td style="width: 5% !important;">:</td>
                            <td style="width: 75% !important;"><?= session()->get('name'); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control ms-1" id="name">
                          <label for="name">Nama</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="date" class="form-control ms-1" id="date">
                          <label for="date">Tanggal Lahir</label>
                        </div>
                        <div class="form-floating mb-3">
                          <select class="form-select ms-1" aria-label=".form-select-sm">
                            <option value="Laki-laki" selected>Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                          <label for="gender">Jenis Kelamin</label>
                        </div>
                        <div class="form-floating mb-3">
                          <textarea class="form-control ms-1" id="address"></textarea>
                          <label for="address">Alamat</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="email" class="form-control ms-1" id="email">
                          <label for="email">E-mail</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control ms-1" id="phone">
                          <label for="phone">Nomor Telepon</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>