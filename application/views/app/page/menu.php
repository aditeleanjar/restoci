<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Menu Page</h1>
    </div>
</div>
<div class="row mt-3 mr-3 ml-3">
    <div class="col-md-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-custom btn-block" data-toggle="modal" data-target="#exampleModal">
            Tambah Menu
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom-close-modal" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-custom">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3 mr-3 ml-3">
    <?php for ($i = 1; $i <= 12; $i++) : ?>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">
                        <img src="<?php echo base_url('assets/img/burger-image.png') ?>" class="img-fluid">
                    </div>
                    <div class="text-center">
                        <div class="text-title">Burger Deluxe</div>
                        <span class="text-stock">Makanan</span>
                        <div class="text-price pt-3">
                            Rp. 15.000
                        </div>
                        <span class="text-stock">15 Tersedia</span>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>