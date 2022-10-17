<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="page-header min-height-100 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
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
              <h6 class="mb-0 mx-2">Profile Information</h6>
            </div>
            <div class="col-md-4 text-end">
              <a href="javascript:;"> <?php //Tombol modal 
                                      ?>
                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
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
              <td style="width: 20% !important;">Tempat, Tanggal Lahir</td>
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
  <?= $this->endSection() ?>