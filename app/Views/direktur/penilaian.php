<?= $this->extend('direktur/template'); ?>

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
                <div class="d-flex align-items-center justify-content-between">
                    <p class=" mb-0">Karyawan Terbaik <span id="pbulan"></span> <span id="ptahun"></span></p>
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
                    <tbody id="terbaik">
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1" />
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm" id="namapenilaian"><span id="namaterpilih1"></span></h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <span id="posisiterpilih1"></span>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-sm text-center">
                                    <span id="nilaiterpilih1"></span>
                                </div>
                            </td>
                            <td>
                                <div class="text-end me-3">
                                    <button type="button" id="b1" class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalDetailNilai"><i class="ni ni-zoom-split-in text-dark"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1" />
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm" id="namapenilaian"><span id="namaterpilih2"></span></h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <span id="posisiterpilih2"></span>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-sm text-center">
                                    <span id="nilaiterpilih2"></span>
                                </div>
                            </td>
                            <td>
                                <div class="text-end me-3">
                                    <button type="button" id="b2" class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalDetailNilai"><i class="ni ni-zoom-split-in text-dark"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1" />
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm" id="namapenilaian"><span id="namaterpilih3"></span></h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <span id="posisiterpilih3"></span>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-sm text-center">
                                    <span id="nilaiterpilih3"></span>
                                </div>
                            </td>
                            <td>
                                <div class="text-end me-3">
                                    <button type="button" id="b3" class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modalDetailNilai"><i class="ni ni-zoom-split-in text-dark"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-header p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <p class=" mb-0">Penilaian <span id="pbulan"></span> <span id="ptahun"></span></p>
                    <a onclick="kePrint()" class="text-dark"><i class="fas fa-light fa-print " data-bs-toggle="tooltip" data-bs-placement="left" title="Print Data"></i></a>
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
                                            <input class="form-check-input" type="radio" id="" value="99" name="r<?= $no ?>" />
                                            <label class="form-check-label" for="">99</label>
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
    var rank = [];

    function coba() {
        document.getElementById('posisiterpilih1').innerHTML = "";
        document.getElementById('namaterpilih1').innerHTML = "";
        document.getElementById('nilaiterpilih1').innerHTML = "";
        document.getElementById('b1').addEventListener("click", function() {
            detailModel();
        }, false);
        document.getElementById('posisiterpilih2').innerHTML = "";
        document.getElementById('namaterpilih2').innerHTML = "";
        document.getElementById('nilaiterpilih2').innerHTML = "";
        document.getElementById('b2').addEventListener("click", function() {
            detailModel();
        }, false);
        document.getElementById('posisiterpilih3').innerHTML = "";
        document.getElementById('namaterpilih3').innerHTML = "";
        document.getElementById('nilaiterpilih3').innerHTML = "";
        document.getElementById('b3').addEventListener("click", function() {
            detailModel();
        }, false);

        // AMBIL VALUE DARI BULAN DAN TAHUN
        var bulan = $('#tambahBulan').val();
        var tahun = $('#tambahTahun').val();

        // SET JUDUL PENILAIAN SESUAI BULAN DAN TAHUN
        document.getElementById('pbulan').innerHTML = bulan;
        document.getElementById('ptahun').innerHTML = tahun;

        // AMBIL DATA DENGAN AJAX
        $.ajax({
            url: "<?= site_url("/manager/penilaian/") ?>" + bulan + "/" + tahun,
            type: "GET",
            success: function(hasil) {
                var obj = $.parseJSON(hasil);

                // PILIH TABEL YANG AKAN DI MODIFIKASI
                $("#tablepenilaian").html("");

                // VARIABLE n UNTUK LOOPING DATA PENILAIAN
                var n = 0;

                // AMBIL BOBOT MASING MASING KRITERIA
                var nC1 = obj.datakriteria[0].bobot;
                var nC2 = obj.datakriteria[1].bobot;
                var nC3 = obj.datakriteria[2].bobot;
                var nC4 = obj.datakriteria[3].bobot;
                var nC5 = obj.datakriteria[4].bobot;

                // MENCARI NIALAI TERBESAR MASING MASING KRITERIA
                let terbesarC1 = 0;
                for (let i = 0; i < obj.datapenilaian.length; i++) {
                    if (terbesarC1 <= obj.datapenilaian[i].c1) {
                        terbesarC1 = obj.datapenilaian[i].c1;
                    }
                }

                let terbesarC2 = 0;
                for (let i = 0; i < obj.datapenilaian.length; i++) {
                    if (terbesarC2 <= obj.datapenilaian[i].c2) {
                        terbesarC2 = obj.datapenilaian[i].c2;
                    }
                }

                let terbesarC3 = 0;
                for (let i = 0; i < obj.datapenilaian.length; i++) {
                    if (terbesarC3 <= obj.datapenilaian[i].c3) {
                        terbesarC3 = obj.datapenilaian[i].c3;
                    }
                }

                let terbesarC4 = 0;
                for (let i = 0; i < obj.datapenilaian.length; i++) {
                    if (terbesarC4 <= obj.datapenilaian[i].c4) {
                        terbesarC4 = obj.datapenilaian[i].c4;
                    }
                }

                let terbesarC5 = 0;
                for (let i = 0; i < obj.datapenilaian.length; i++) {
                    if (terbesarC5 <= obj.datapenilaian[i].c5) {
                        terbesarC5 = obj.datapenilaian[i].c5;
                    }
                }

                // MEMBUAT TABEL SESUAI DENGAN DATA BULAN DAN TAHUN YANG DIPILIH
                jQuery.each(obj.datapenilaian, function() {

                    var hasilC1 = (obj.datapenilaian[n].c1 / terbesarC1) * (nC1 / 100);
                    var hasilC2 = (obj.datapenilaian[n].c2 / terbesarC2) * (nC2 / 100);
                    var hasilC3 = (obj.datapenilaian[n].c3 / terbesarC3) * (nC3 / 100);
                    var hasilC4 = (obj.datapenilaian[n].c4 / terbesarC4) * (nC4 / 100);
                    var hasilC5 = (obj.datapenilaian[n].c5 / terbesarC5) * (nC5 / 100);
                    var hasilTotal = hasilC1 + hasilC2 + hasilC3 + hasilC4 + hasilC5;
                    hasilTotal = hasilTotal.toFixed(2)
                    rank[n] = [hasilTotal, obj.datapenilaian[n].nama_lengkap, obj.datapenilaian[n].posisi, obj.datapenilaian[n].id_p];
                    var kosong = "";
                    kosong += '<tr>';
                    kosong += '<td>';
                    kosong += '<div class="d-flex px-2 py-1">';
                    kosong += '<div>';
                    kosong += '<img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1"/>';
                    kosong += '</div>';
                    kosong += '<div class="d-flex flex-column justify-content-center">';
                    kosong += '<h6 class="mb-0 text-sm" id="namapenilaian">' + obj.datapenilaian[n].nama_lengkap + '</h6>';
                    kosong += '<p class="text-xs text-secondary mb-0" id="posisipenilaian">';
                    kosong += '' + obj.datapenilaian[n].posisi + '';
                    kosong += '</p>';
                    kosong += '</div>';
                    kosong += '</div>';
                    kosong += '</td>';
                    kosong += '<td>';
                    kosong += '<div class="text-sm text-center">';
                    kosong += '<span id="totalpenilaian">' + hasilTotal + '</span>';
                    kosong += '</div>';
                    kosong += '</td>';
                    kosong += '<td >';
                    kosong += '<div class="text-end me-3">';
                    kosong += '<button type = "button" class = "btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target = "#modalDetailNilai"><i class = "ni ni-zoom-split-in text-dark" onclick="detailModel(' + obj.datapenilaian[n].id_p + ')" ></i></button>';
                    kosong += '</div>';
                    kosong += '</td>';
                    kosong += '</tr>';
                    $("#tablepenilaian").append(kosong);
                    n++;
                });
                printRank();
            }
        });
    }

    function detailModel($idp) {

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
            }
        });
    }

    $('#tombolSimpan').on('click', function() {

        var bulan = $('#tambahBulan').val();
        var tahun = $('#tambahTahun').val();
        var tambahNama = $('#tambahNama').val();
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

    function kePrint() {
        var bulan = $('#tambahBulan').val();
        var tahun = $('#tambahTahun').val();
        window.location = "<?= site_url("/direktur/penilaian/print/") ?>" + bulan + "/" + tahun;
    }

    function printRank() {
        rank.sort();
        var n = rank.length - 1;
        var id1 = parseInt(rank[n][3], 10)
        var id2 = parseInt(rank[n - 1][3], 10)
        var id3 = parseInt(rank[n - 2][3], 10)
        document.getElementById('posisiterpilih1').innerHTML = rank[n][2];
        document.getElementById('namaterpilih1').innerHTML = rank[n][1];
        document.getElementById('nilaiterpilih1').innerHTML = rank[n][0];
        document.getElementById('b1').addEventListener("click", function() {
            detailModel(id1);
        }, false);
        document.getElementById('posisiterpilih2').innerHTML = rank[n - 1][2];
        document.getElementById('namaterpilih2').innerHTML = rank[n - 1][1];
        document.getElementById('nilaiterpilih2').innerHTML = rank[n - 1][0];
        document.getElementById('b2').addEventListener("click", function() {
            detailModel(id2);
        }, false);
        document.getElementById('posisiterpilih3').innerHTML = rank[n - 2][2];
        document.getElementById('namaterpilih3').innerHTML = rank[n - 2][1];
        document.getElementById('nilaiterpilih3').innerHTML = rank[n - 2][0];
        document.getElementById('b3').addEventListener("click", function() {
            detailModel(id3);
        }, false);
        rank.splice(0, rank.length);
    }
</script>


<?= $this->endSection(); ?>