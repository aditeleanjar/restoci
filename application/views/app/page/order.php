<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Order Page</h1>
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