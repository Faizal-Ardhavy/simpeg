<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0 mx-2">Riwayat Presensi</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <hr class="horizontal gray-light" style="margin: 0.5rem 0 !important;">
                    <table class="table text-dark ps-0 text-sm">
                        <tr>
                            <th style="width: 25% !important;">ID</th>
                            <th style="width: 25% !important;">Tanggal</th>
                            <th style="width: 25% !important;">Keterangan</th>
                        </tr>
                            <?php $count = 0;?>
                            <?php foreach ($data as $dt){ ?>
                        <tr>

                            <td style="width: 25% !important;"><?=$count++?></td>
                            <td style="width: 25% !important;"><?=$dt->tanggal?></td>
                            <td style="width: 25% !important;"><?=$dt->keterangan?></td>

                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>