<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<div class="card-body">
    <hr class="horizontal gray-light" style="margin: 0.5rem 0 !important;">
    <table class="table text-dark ps-0 text-sm">
        <tr>
            <th style="width: 25% !important;">ID</th>
            <th style="width: 25% !important;">Tanggal</th>
            <th style="width: 25% !important;">Jam</th>
            <th style="width: 25% !important;">Keterangan</th>
        </tr>
        <tr>
            <td style="width: 25% !important;">001</td>
            <td style="width: 25% !important;">10-31-2022</td>
            <td style="width: 25% !important;">08:33</td>
            <td style="width: 25% !important;">Hadir</td>
        </tr>
    </table>
</div>

<?= $this->endSection() ?>