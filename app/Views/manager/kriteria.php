<?= $this->extend('manager/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-header p-3">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Data Kriteria</p>
                </div>
                <hr class="horizontal dark" />
            </div>
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Kriteria
                            </th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datanya as $data): ?>
                        <tr>
                            <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="../assets/img/kriteria.png" class="avatar avatar-sm me-3" alt="user1"/>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"><?=$data['nama_kriteria'] ?></h6>
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data['bobot'] ?> Point
                                    </p>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="text-end me-3">
                                <button type="button" class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalDetail" onclick="detail(<?=$data['id'];?>)" id="tombolDetail"><i class="ni ni-zoom-split-in text-dark me-2" data-bs-toggle="tooltip" data-bs-placement="left" title="Detail Data"></i></button>
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
<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetail">Detail Kriteria</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- KALAU ERROR -->
                <div class="alert alert-danger error text-white" role="alert" style="display: none;">
                </div>
                <!-- KALAU SUKSES -->
                <div class="alert alert-success sukses text-white" role="alert" style="display: none;">
                </div>
                <input type="text" id="dataId" hidden>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataNamaKriteria" class="form-control-label">Nama Kriteria</label>
                            <input class="form-control" type="text" placeholder="Nama Kriteria" id="dataNamaKriteria"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataBobot" class="form-control-label">Bobot</label>
                            <input class="form-control" type="number" placeholder="Bobot" id="dataBobot"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-primary btn-sm text-white" id="tombolUpdate">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<script>

    function bersihkanDetail() {
        $('#dataId').val("");
        $('#dataNamaKriteria').val("");
        $('#dataBobot').val("");
    }
    

    $('#tombolUpdate').on('click', function() {

        var dataId = $('#dataId').val();
        var dataNamaKriteria = $('#dataNamaKriteria').val();
        var dataBobot = $('#dataBobot').val();

        if(dataId == "") {
            $('.sukses').hide();
            $('.error').show();
            $('.error').html("Data Kosong, Tidak Dapat Mengedit Data");
        } else {
            $.ajax({
                url: "<?= site_url("/manager/kriteria/edit") ?>/" + dataId,
                type: "POST",
                data: {
                    nama_kriteria : dataNamaKriteria,
                    bobot : dataBobot
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
                        $('.sukses').html("Berhasil Edit Data");
                        bersihkanDetail();
                        setTimeout(function(){ document.location.reload(); }, 2000);
                    }
                }
            });
        }

    });

    $('#modalDetail').on('hidden.bs.modal', function () {
	  document.location.reload();
	})

    function detail($id) {
        $.ajax({
            url: "<?= site_url("/manager/kriteria/detail") ?>/" + $id,
            type: "GET",
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                $('#dataId').val($obj.id);
                $('#dataNamaKriteria').val($obj.nama_kriteria);
                $('#dataBobot').val($obj.bobot);
            }

        });
    }
</script>

<?= $this->endSection(); ?>