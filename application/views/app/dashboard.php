<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Dashboard Page</h1>
    </div>
</div>
<div class="row mt-3 mr-3 ml-3">
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-round bg-custom">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center  bubble-shadow-small">
                            <i class="flaticon-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category text-white">Pengunjung</p>
                            <h4 class="card-title text-white">1,294</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-round bg-custom">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center  bubble-shadow-small">
                            <i class="flaticon-graph"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category text-white">Penjualan</p>
                            <h4 class="card-title text-white">$ 1,345</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-round bg-custom">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center  bubble-shadow-small">
                            <i class="flaticon-success"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category text-white">Order</p>
                            <h4 class="card-title text-white">576</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3 mr-3 ml-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title fw-mediumbold">List Order</div>
                <div class="card-list">
                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                        <div class="item-list">
                            <div class="avatar">
                                <img src="<?php echo base_url() ?>assets/img/burger-image.png" alt="..." class="avatar-img rounded-circle">
                            </div>
                            <div class="info-user ml-3">
                                <div class="username">Jimmy Denis</div>
                                <div class="status">Rp. 100.000</div>
                            </div>

                            <button class="btn  btn-custom ">
                                Detail
                            </button>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>