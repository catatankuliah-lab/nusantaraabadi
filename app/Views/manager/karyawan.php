<?= $this->extend('manager/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-header p-3">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Data Karyawan</p>
                    <a class="ms-auto me-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <i class="ni ni-fat-add text-success" data-bs-toggle="tooltip" data-bs-placement="left" title="Tambah Data"></i>
                    </a>
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
                                            <img src="<?= base_url('assets/img/team-2.jpg') ?>" class="avatar avatar-sm me-3" alt="user1" />
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
                                        <button type="button" class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalDetail" onclick="detail(<?= $data['id']; ?>)" id="tombolDetail"><i class="ni ni-zoom-split-in text-dark" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Detail Data"></i></button>
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
<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambah">Tambah Data Karyawan</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- KALAU ERROR -->
                <div class="alert alert-danger error text-white" role="alert" style="display: none;"></div>
                <!-- KALAU SUKSES -->
                <div class="alert alert-success sukses text-white" role="alert" style="display: none;"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tambahNama" class="form-control-label">Nama Lengkap</label>
                            <input class="form-control" type="text" placeholder="Nama Lengkap" id="tambahNama" />
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
                                        <input class="form-check-input" type="radio" id="tambahJKL" value="Laki-Laki" name="tambahJK" />
                                        <label class="form-check-label" for="tambahJKL">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="tambahJKP" value="Perempuan" name="tambahJK" />
                                        <label class="form-check-label" for="tambahJKP">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tambahNomor" class="form-control-label">Nomor Telpon</label>
                            <input class="form-control" type="number" placeholder="000000000000" id="tambahNomor" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tambahTanggal" class="form-control-label">Tanggal Masuk</label>
                            <input class="form-control" type="date" id="tambahTanggal" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tambahPosisi" class="form-control-label">Jabatan</label>
                            <select class="form-select" aria-label="Default select example" id="tambahPosisi">
                                <option value="Marketing">Marketing</option>
                                <option value="Gudang">Gudang</option>
                                <option value="Sales">Sales</option>
                                <option value="Produksi">Produksi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="tombolClose">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail-->
<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetail">Detail Data Karyawan</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- KALAU ERROR -->
                <div class="alert alert-danger error text-white" role="alert" style="display: none;"></div>
                <!-- KALAU SUKSES -->
                <div class="alert alert-success sukses text-white" role="alert" style="display: none;"></div>
                <div class="row">
                    <input type="text" id="detailId" hidden>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="detailNama" class="form-control-label">Nama Lengkap</label>
                            <input class="form-control" type="text" placeholder="Nama Lengkap" id="detailNama" />
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
                                        <input class="form-check-input" type="radio" id="detailJKL" value="Laki-Laki" name="detailJK" />
                                        <label class="form-check-label" for="detailJKL">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="detailJKP" value="Perempuan" name="detailJK" />
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
                            <input class="form-control" type="number" placeholder="000000000000" id="detailNomor" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="detailTanggal" class="form-control-label">Tanggal Masuk</label>
                            <input class="form-control" type="date" placeholder="000000000000" id="detailTanggal" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tambahPosisi" class="form-control-label">Jabatan</label>
                            <select class="form-select" aria-label="Default select example" id="detailPosisi">
                                <option value="Marketing">Marketing</option>
                                <option value="Gudang">Gudang</option>
                                <option value="Sales">Sales</option>
                                <option value="Produksi">Produksi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="tombolUpdate">Update</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapus" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapus">Hapus Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#modalDetail">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin? Data Akan Dihapus.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="tombolHapus" data-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalDetail">Yakin</button>
            </div>
        </div>
    </div>
</div>

<!-- End Modal -->

<script>
    $('#tombolSimpan').on('click', function() {

        var tambahNama = $('#tambahNama').val();
        var tambahJK = $("input[name='tambahJK']:checked").val();
        var tambahNomor = $('#tambahNomor').val();
        var tambahPosisi = $('#tambahPosisi').val();
        var tambahTanggal = $('#tambahTanggal').val();

        $.ajax({
            url: "<?= site_url("/manager/karyawan/create") ?>",
            type: "POST",
            data: {
                nama_lengkap: tambahNama,
                jenis_kelamin: tambahJK,
                nomor_telepon: tambahNomor,
                tanggal_masuk: tambahTanggal,
                posisi: tambahPosisi
            },
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.sukses == false) {
                    $('.sukses').hide();
                    $('.error').show();
                    $('.error').html($obj.error);
                } else {
                    $('.error').hide();
                    $('.sukses').show();
                    $('.sukses').html("Berhasil Menambahkan Data");
                    bersihkanTambah();
                    setTimeout(function() {
                        document.location.reload();
                    }, 2000);
                }
            }
        });
    });

    $('#tombolClose').on('click', function() {
        document.location.reload();
    });

    function bersihkanTambah() {
        $('#tambahNama').val('');
        $('#tambahNomor').val('');
        $('#tambahTanggal').val('');
    }

    function bersihkanEdit() {
        $('#detailNama').val('');
        $('#detailNomor').val('');
        $('#detailkTanggal').val('');
    }

    function detail($id) {
        $.ajax({
            url: "<?= site_url("/manager/karyawan/detail") ?>/" + $id,
            type: "GET",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                $('#detailId').val($obj.id);
                $('#detailNama').val($obj.nama_lengkap);
                if ($obj.jenis_kelamin == "Laki-Laki") {
                    $('#detailJKL').prop('checked', true);
                } else {
                    $('#detailJKP').prop('checked', true);
                }
                $('#detailNomor').val($obj.nomor_telepon);
                $('#detailTanggal').val($obj.tanggal_masuk);
                $('#detailPosisi').val($obj.posisi);
            }

        });
    }

    $('#tombolUpdate').on('click', function() {

        var detailId = $('#detailId').val();
        var detailNama = $('#detailNama').val();
        var detailJK = $("input[name='detailJK']:checked").val();
        var detailNomor = $('#detailNomor').val();
        var detailPosisi = $('#detailPosisi').val();
        var detailTanggal = $('#detailTanggal').val();

        $.ajax({
            url: "<?= site_url("/manager/karyawan/edit") ?>/" + detailId,
            type: "POST",
            data: {
                nama_lengkap: detailNama,
                jenis_kelamin: detailJK,
                nomor_telepon: detailNomor,
                tanggal_masuk: detailTanggal,
                posisi: detailPosisi
            },
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.sukses == false) {
                    $('.sukses').hide();
                    $('.error').show();
                    $('.error').html($obj.error);
                } else {
                    $('.error').hide();
                    $('.sukses').show();
                    $('.sukses').html("Berhasil Menambahkan Data");
                    bersihkanTambah();
                    setTimeout(function() {
                        document.location.reload();
                    }, 2000);
                }
            }
        });
    });

    $('#tombolHapus').on('click', function() {

        var detailId = $('#detailId').val();

        if (detailId == "") {
            $('.sukses').hide();
            $('.error').show();
            $('.error').html("Data Kosong, Tidak Dapat Menghapus Data");
        } else {
            $.ajax({
                url: "<?= site_url("/manager/karyawan/delete") ?>/" + detailId,
                type: "POST",
                success: function() {
                    $('.error').hide();
                    $('.sukses').show();
                    $('.sukses').html("Berhasil Hapus Data");
                    bersihkanEdit();
                    setTimeout(function() {
                        document.location.reload();
                    }, 2000);
                }
            });
        }

    });
</script>

<?= $this->endSection(); ?>