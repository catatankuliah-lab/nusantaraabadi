<?= $this->extend('direktur/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-header pb-0 p-3">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Data Karyawan</p>
                </div>
                <hr class="horizontal dark" />
            </div>
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Karyawan
                            </th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datanya as $data) : ?>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1" />
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?= $data['nama_lengkap'] ?></h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <?= $data['posisi'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-end me-3">
                                        <button type="button" class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalDetail" onclick="detail(<?= $data['id']; ?>)" id="tombolDetail"><i class="ni ni-zoom-split-in text-dark me-2" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Detail Data"></i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Disni -->
<!-- Modal Detail-->
<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetail">Detail Data Manager</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="detailNama" class="form-control-label">Nama Lengkap</label>
                            <input class="form-control" type="text" placeholder="Nama Lengkap" id="detailNama" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="detailJKL" value="Laki-Laki" name="detailJK" disabled />
                                        <label class="form-check-label" for="detailJKL">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="detailJKP" value="Perempuan" name="detailJK" disabled />
                                        <label class="form-check-label" for="detailJKP">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="detailNomor" class="form-control-label">Nomor Telpon</label>
                            <input class="form-control" type="email" placeholder="000000000000" id="detailNomor" readonly />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<script>
    function detail($id) {
        $.ajax({
            url: "<?= site_url("/direktur/karyawan/detail") ?>/" + $id,
            type: "GET",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.jenis_kelamin == "Laki-Laki") {
                    $('#detailJKL').prop('checked', true);
                } else {
                    $('#detailJKP').prop('checked', true);
                }
                $('#detailNama').val($obj.nama_lengkap);
                $('#detailNomor').val($obj.nomor_telepon);
            }

        });
    }
</script>

<?= $this->endSection(); ?>