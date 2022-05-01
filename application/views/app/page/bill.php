<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">Billing Page</h1>
    </div>
</div>

<div class="row mt-3 ml-3 mr-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Billing List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="order" class="display table  table-hover">
                        <thead>
                            <tr>
                                <th>Invoice</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Download</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php for ($i = 1; $i <= 6; $i++) : ?>
                                <tr>
                                    <td>Invoice #2022-01-01</td>
                                    <td>2022-01-01</td>
                                    <td>
                                        <span class="badge badge-success"><i class="fas fa-check"></i> Success</span>
                                    </td>
                                    <td>Rp. 1.000.000</td>
                                    <td>
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-cloud-download-alt fa-2x icon-custom"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endfor; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>