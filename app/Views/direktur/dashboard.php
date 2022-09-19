<?= $this->extend('direktur/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Manager</p>
                            <h5 class="font-weight-bolder mb-0">
                                <?php foreach ($manager as $data) : ?><?= $data[0] ?><?php endforeach ?>
                                <span class="text-sm font-weight-bolder">Orang</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                            <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Karyawan</p>
                            <h5 class="font-weight-bolder mb-0">
                                <?php foreach ($karyawan as $data) : ?><?= $data[0] ?><?php endforeach ?>
                                <span class="text-sm font-weight-bolder">Orang</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                            <i class="ni ni-ungroup text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-lg-3">
    <div class="col-lg-12 mb-lg-0 mb-sm-0">
        <div class="card">
            <div class="card-header p-3">
                <div class="d-flex align-items-center">
                    <p class="mb-0" style=" font-weight: bolder;">Selamat Datang</p>
                </div>
            </div>
            <p class=" p-3">
                Sistem penunjang keputusan ini bertujuan untuk dapat membantu Direktur dalam menentukan pegawai terbaik yang berhak atas bonus bulanan pada CV Nusantara Abadi. Metode yang digunakan dalam pembuatan sistem penunjang keputusan ini adalah metode
                <span style="font-style: italic; font-weight: bolder;">Simply Additive Weightning (SAW)</span>.
            </p>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>