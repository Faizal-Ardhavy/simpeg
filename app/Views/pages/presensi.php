<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>001</td>
                    <td>Kayla Atsila Ivanka</td>
                    <td>11-01-2022</td>
                    <td>07:01</td>
                    <td>Hadir</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Naufal Anbial Falah</td>
                    <td>11-01-2022</td>
                    <td>06:40</td>
                    <td>Hadir</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Karina Adityas Ramadhanti</td>
                    <td>11-01-2022</td>
                    <td>07:12</td>
                    <td>Hadir</td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>Muhammad Faizal Ardhavy Heru</td>
                    <td>11-01-2022</td>
                    <td>07:30</td>
                    <td>Hadir</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>