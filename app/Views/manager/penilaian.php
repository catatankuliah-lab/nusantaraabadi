<?= $this->extend('manager/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 mb-lg-0">
        <div class="card">
            <div class="card-header p-3">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Kontrol Penilaian</p>
                </div>
                <hr class="horizontal dark" />
            </div>
            <div class="row px-3">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="tambahBulan" class="form-control-label">Bulan</label>
                        <select class="form-select" aria-label="Pilih Bulan" id="tambahBulan" onchange="coba()">
                            <option value="Januari">-- Pilih Bulan --</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="tambahTahun" class="form-control-label">Tahun</label>
                        <select class="form-select" aria-label="Pilih Tahun" id="tambahTahun" onchange="coba()">
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-header p-3">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Penilaian <span id="pbulan"></span> <span id="ptahun"></span></p>
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
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                Total Poin
                            </th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody id="tablepenilaian">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Disni -->
<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambah">Penilaian Karyawan</h5>
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
                            <label for="tambahNama" class="form-control-label">Nama Karyawan</label>
                            <select class="form-select" id="tambahNama">
                                <?php foreach ($datakaryawan as $data) : ?>
                                    <option value="<?= $data['id']; ?>"><?= $data['nama_lengkap'] ?> (<?= $data['posisi'] ?>)</option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <?php $no = 0;
                foreach ($datakriteria as $data) : $no++; ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label"><?= $data['nama_kriteria'] ?> (Bobot <?= $data['bobot'] ?>)</label>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="" value="20" name="r<?= $no ?>" />
                                            <input class="form-check-input" type="text" id="b<?= $no ?>" value="<?= $data['bobot'] ?>" hidden />
                                            <label class="form-check-label" for="">20</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="" value="40" name="r<?= $no ?>" />
                                            <label class="form-check-label" for="">40</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="" value="60" name="r<?= $no ?>" />
                                            <label class="form-check-label" for="">60</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="" value="80" name="r<?= $no ?>" />
                                            <label class="form-check-label" for="">80</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="" value="100" name="r<?= $no ?>" />
                                            <label class="form-check-label" for="">100</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="tombolClose">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL DETAIL PENILAIAN -->
<div class="modal fade" id="modalDetailNilai" tabindex="-1" role="dialog" aria-labelledby="modalDetailNilai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailNilai">Detail Penilaian</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="idpenilaian" hidden>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataNamaKriteria" class="form-control-label">Nama Karyawan</label>
                            <input class="form-control" type="text" id="pnama" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataNamaKriteria" class="form-control-label">Posisi</label>
                            <input class="form-control" type="text" id="pposisi" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataNamaKriteria" class="form-control-label">Kriteria 1</label>
                            <input class="form-control" type="text" id="pc1" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataNamaKriteria" class="form-control-label">Kriteria 2</label>
                            <input class="form-control" type="text" id="pc2" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataNamaKriteria" class="form-control-label">Kriteria 3</label>
                            <input class="form-control" type="text" id="pc3" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataNamaKriteria" class="form-control-label">Kriteria 4</label>
                            <input class="form-control" type="text" id="pc4" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataNamaKriteria" class="form-control-label">Kriteria 5</label>
                            <input class="form-control" type="text" id="pc5" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dataNamaKriteria" class="form-control-label">Total</label>
                            <input class="form-control" type="text" id="ptotal" readonly />
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

<!-- MODAL HAPUS -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapus" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapus">Hapus Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#modalDetailNilai">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin? Data Akan Dihapus.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="tombolHapus" data-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalDetailNilai">Yakin</button>
            </div>
        </div>
    </div>
</div>



<script>
    function coba() {

        var bulan = $('#tambahBulan').val();
        var tahun = $('#tambahTahun').val();

        document.getElementById('pbulan').innerHTML = bulan;
        document.getElementById('ptahun').innerHTML = tahun;

        $.ajax({
            url: "<?= site_url("/manager/penilaian/") ?>" + bulan + "/" + tahun,
            type: "GET",
            success: function(hasil) {
                var obj = $.parseJSON(hasil);
                console.log(obj);
                $("#tablepenilaian").html("");
                jQuery.each(obj, function(i, val) {
                    var kosong = "";
                    kosong += '<tr>';
                    kosong += '<td>';
                    kosong += '<div class="d-flex px-2 py-1">';
                    kosong += '<div>';
                    kosong += '<img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1"/>';
                    kosong += '</div>';
                    kosong += '<div class="d-flex flex-column justify-content-center">';
                    kosong += '<h6 class="mb-0 text-sm" id="namapenilaian">' + val.nama_lengkap + '</h6>';
                    kosong += '<p class="text-xs text-secondary mb-0" id="posisipenilaian">';
                    kosong += '' + val.posisi + '';
                    kosong += '</p>';
                    kosong += '</div>';
                    kosong += '</div>';
                    kosong += '</td>';
                    kosong += '<td>';
                    kosong += '<div class="text-sm text-center">';
                    kosong += '<span id="totalpenilaian">' + val.total + '</span>';
                    kosong += '</div>';
                    kosong += '</td>';
                    kosong += '<td >';
                    kosong += '<div class="text-end me-3">';
                    kosong += '<button type = "button" class = "btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target = "#modalDetailNilai"><i class = "ni ni-zoom-split-in text-dark" onclick="detailModel(' + val.id_p + ')" ></i></button>';
                    kosong += '</div>';
                    kosong += '</td>';
                    kosong += '</tr>';
                    $("#tablepenilaian").append(kosong);
                });
            }
        });
    }

    function detailModel($idp) {

        console.log($idp);

        $.ajax({
            url: "<?= site_url("/manager/detail") ?>/" + $idp,
            type: "GET",
            success: function(hasil) {
                var obj = $.parseJSON(hasil);
                // $('#pid').val($obj.nama_lengkap);
                $('#pnama').val(obj[0].nama_lengkap);
                $('#pposisi').val(obj[0].posisi);
                $('#pc1').val(obj[0].c1);
                $('#pc2').val(obj[0].c2);
                $('#pc3').val(obj[0].c3);
                $('#pc4').val(obj[0].c4);
                $('#pc5').val(obj[0].c5);
                $('#ptotal').val(obj[0].total);
            }
        });
    }

    $('#tombolSimpan').on('click', function() {

        var bulan = $('#tambahBulan').val();
        var tahun = $('#tambahTahun').val();
        var tambahNama = $('#tambahNama').val();
        var tambahB1 = parseFloat($('#b1').val());
        var tambahB2 = parseFloat($('#b2').val());
        var tambahB3 = parseFloat($('#b3').val());
        var tambahB4 = parseFloat($('#b4').val());
        var tambahB5 = parseFloat($('#b5').val());
        var tambahC1 = 0;
        var tambahC2 = 0;
        var tambahC3 = 0;
        var tambahC4 = 0;
        var tambahC5 = 0;
        tambahC1 = parseFloat($("input[name='r1']:checked").val());
        tambahC2 = parseFloat($("input[name='r2']:checked").val());
        tambahC3 = parseFloat($("input[name='r3']:checked").val());
        tambahC4 = parseFloat($("input[name='r4']:checked").val());
        tambahC5 = parseFloat($("input[name='r5']:checked").val());

        var hasilC1 = (tambahC1 / 100) * (tambahB1 / 100);
        var hasilC2 = (tambahC2 / 100) * (tambahB2 / 100);
        var hasilC3 = (tambahC3 / 100) * (tambahB3 / 100);
        var hasilC4 = (tambahC4 / 100) * (tambahB4 / 100);
        var hasilC5 = (tambahC5 / 100) * (tambahB5 / 100);

        var hasilTotal = hasilC1 + hasilC2 + hasilC3 + hasilC4 + hasilC5;

        $.ajax({
            url: "<?= site_url("/manager/tambahpenilaian") ?>",
            type: "POST",
            data: {
                bulan: bulan,
                tahun: tahun,
                id_karyawan: tambahNama,
                c1: tambahC1,
                c2: tambahC2,
                c3: tambahC3,
                c4: tambahC4,
                c5: tambahC5,
                total: hasilTotal
            },
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.sukses == false) {
                    $('.sukses').hide();
                    $('.error').slideDown("2000");
                    $('.error').html($obj.error);
                } else {
                    $('.error').hide();
                    $('.sukses').show();
                    $('.sukses').html("Berhasil Menambahkan Data");
                    // bersihkanTambah();
                    setTimeout(function() {
                        document.location.reload();
                    }, 2000);
                }
            }
        });
    });

    
</script>


<?= $this->endSection(); ?>