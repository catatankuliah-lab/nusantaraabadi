<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script>
        function coba() {

            // AMBIL VALUE DARI BULAN DAN TAHUN
            var bulan = "<?= session()->get('bulan') ?>";
            var tahun = "<?= session()->get('tahun') ?>";

            console.log(bulan);
            console.log(tahun);

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

                        var kosong = "";
                        kosong += '<tr>';
                        kosong += '<td class = "px-2" >' + Number(n + 1) + '</td>';
                        kosong += '<td class = "px-2" >' + obj.datapenilaian[n].nama_lengkap + '</td>';
                        kosong += '<td class = "px-2" >' + obj.datapenilaian[n].posisi + '</td>';
                        kosong += '<td class = "px-2" >' + obj.datapenilaian[n].c1 + '</td>';
                        kosong += '<td class = "px-2" >' + obj.datapenilaian[n].c2 + '</td>';
                        kosong += '<td class = "px-2" >' + obj.datapenilaian[n].c3 + '</td>';
                        kosong += '<td class = "px-2" >' + obj.datapenilaian[n].c4 + '</td>';
                        kosong += '<td class = "px-2" >' + obj.datapenilaian[n].c5 + '</td>';
                        kosong += '<td class = "px-2" >' + hasilTotal + '</td>';
                        kosong += '</tr>';
                        $("#tablepenilaian").append(kosong);
                        n++;
                    });
                }
            });
        }
    </script>
    <title>Laporan Karyawan Terbaik CV Nusantara Abadi <?= session()->get('bulan') ?> <?= session()->get('tahun') ?></title>
</head>

<body onload="coba()" class="p-3">
    <table>
        <tr>
            <td style="width: 50px;"><img src="<?= base_url('assets/img/logo-ct-dark.png') ?>" style="width: 90%;"></td>
            <td style="font-family: 'Roboto', sans-serif; font-size: 25px;">| SPK Nusantara Abadi</td>
        </tr>
    </table>
    <br>
    <h4>
        Laporan Karyawan Terbaik CV Nusantara Abadi <?= session()->get('bulan') ?> <?= session()->get('tahun') ?>.
    </h4>
    <hr size="2px" color="black">
    <table border="1" style="width: 100%;" class="mb-3">
        <tr>
            <td style="font-weight: bolder;" class="px-2">No</td>
            <td style="font-weight: bolder;" class="px-2">Nama Lengkap</td>
            <td style="font-weight: bolder;" class="px-2">Posisi</td>
            <?php foreach ($kriteria as $data) : ?>
                <td style="font-weight: bolder;" class="px-2"><?= $data['nama_kriteria'] ?></td>
            <?php endforeach ?>
            <td style="font-weight: bolder;" class="px-2">Total Poin</td>
        </tr>
        <?php $no = 0;
        foreach ($penilaian as $data) : $no++ ?>
            <tbody id="tablepenilaian">
            <?php endforeach ?>
            </tbody>
    </table>
    <div class="text-right">
        Kuningan,<span id="tanggal"><?= date('d M Y') ?></span>
        <br>
        <br>
        <br>
        <span class="text-end">Kevin Elsy Jona</span>
    </div>
    <br>
    <button class="btn btn-danger d-print-none" style="width: 100px;" onclick="back()">Back</button>
    <button class="btn btn-success d-print-none" style="width: 100px;" onclick="print()">Print</button>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
        function back() {
            document.location = "/direktur/penilaian";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>

</html>