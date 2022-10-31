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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>001</td>
                    <td>Kayla Atsila Ivanka</td>
                    <td>11-01-2022</td>
                    <td>07:01</td>
                    <td>Hadir</td>
                    </td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Naufal Anbial Falah</td>
                    <td>11-01-2022</td>
                    <td>06:40</td>
                    <td>Hadir</td>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Karina Adityas Ramadhanti</td>
                    <td>11-01-2022</td>
                    <td>07:12</td>
                    <td>Hadir</td>
                    </td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>Muhammad Faizal Ardhavy Heru</td>
                    <td>11-01-2022</td>
                    <td>07:30</td>
                    <td>Hadir</td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>