<?= $this->extend('direktur/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-header p-3">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Data Manager</p>
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
                                Manager
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
                                                <?= $data['email'] ?>
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
<!-- Modal Tambah-->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambah">Tambah Data Manager</h5>
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
                            <label for="tambahEmail" class="form-control-label">Email</label>
                            <input class="form-control" type="email" placeholder="Email" id="tambahEmail" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tambahPassword" class="form-control-label">Password</label>
                            <input class="form-control" type="password" placeholder="Password" id="tambahPassword" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tambahNama" class="form-control-label">Nama Lengkap</label>
                            <input class="form-control" type="email" placeholder="Nama Lengkap" id="tambahNama" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tambahNomor" class="form-control-label">Nomor Telpon</label>
                            <input class="form-control" type="email" placeholder="000000000000" id="tambahNomor" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-primary btn-sm text-white" id="tombolSimpan">Simpan</button>
            </div>
        </div>
    </div>
</div>

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
                <!-- KALAU ERROR -->
                <div class="alert alert-danger error text-white" role="alert" style="display: none;"></div>
                <!-- KALAU SUKSES -->
                <div class="alert alert-success sukses text-white" role="alert" style="display: none;"></div>
                <input type="text" id="editId" hidden>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="editEmail" class="form-control-label">Email</label>
                            <input class="form-control" type="email" placeholder="Email" id="editEmail" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="editPassword" class="form-control-label">Password</label>
                            <input class="form-control" type="password" placeholder="Password" id="editPassword" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="editNama" class="form-control-label">Nama Lengkap</label>
                            <input class="form-control" type="email" placeholder="Nama Lengkap" id="editNama" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="editNomor" class="form-control-label">Nomor Telpon</label>
                            <input class="form-control" type="email" placeholder="000000000000" id="editNomor" />
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
    function bersihkanDetail() {
        $('#editId').val("");
        $('#editEmail').val("");
        $('#editPassword').val("");
        $('#editNama').val("");
        $('#editNomor').val("");
    }

    function bersihkanTambah() {
        $('#tambahEmail').val("");
        $('#tambahPassword').val("");
        $('#tambahNama').val("");
        $('#tambahNomor').val("");
    }

    $('#tombolSimpan').on('click', function() {

        var tambahEmail = $('#tambahEmail').val();
        var tambahPassword = $('#tambahPassword').val();
        var tambahNama = $('#tambahNama').val();
        var tambahNomor = $('#tambahNomor').val();

        $.ajax({
            url: "<?= site_url("/direktur/users/create") ?>",
            type: "POST",
            data: {
                email: tambahEmail,
                password: tambahPassword,
                nama_lengkap: tambahNama,
                nomor_telepon: tambahNomor
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

    $('#tombolUpdate').on('click', function() {

        var editId = $('#editId').val();
        var editEmail = $('#editEmail').val();
        var editPassword = $('#editPassword').val();
        var editNama = $('#editNama').val();
        var editNomor = $('#editNomor').val();

        if (editId == "") {
            $('.sukses').hide();
            $('.error').show();
            $('.error').html("Data Kosong, Tidak Dapat Mengedit Data");
        } else {
            $.ajax({
                url: "<?= site_url("/direktur/users/edit") ?>/" + editId,
                type: "POST",
                data: {
                    email: editEmail,
                    password: editPassword,
                    nama_lengkap: editNama,
                    nomor_telepon: editNomor
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
                        $('.sukses').html("Berhasil Update Data");
                        bersihkanDetail();
                        setTimeout(function() {
                            document.location.reload();
                        }, 2000);
                    }
                }
            });
        }
    });

    $('#tombolHapus').on('click', function() {

        var editId = $('#editId').val();

        if (editId == "") {
            $('.sukses').hide();
            $('.error').show();
            $('.error').html("Data Kosong, Tidak Dapat Menghapus Data");
        } else {
            $.ajax({
                url: "<?= site_url("/direktur/users/delete") ?>/" + editId,
                type: "POST",
                success: function() {
                    $('.error').hide();
                    $('.sukses').show();
                    $('.sukses').html("Berhasil Hapus Data");
                    bersihkanDetail();
                    setTimeout(function() {
                        document.location.reload();
                    }, 2000);
                }
            });
        }

    });

    function detail($id) {
        $.ajax({
            url: "<?= site_url("/direktur/users/detail") ?>/" + $id,
            type: "GET",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                $('#editId').val($obj.id);
                $('#editEmail').val($obj.email);
                $('#editPassword').val($obj.password);
                $('#editNama').val($obj.nama_lengkap);
                $('#editNomor').val($obj.nomor_telepon);
            }

        });
    }
</script>

<?= $this->endSection(); ?>