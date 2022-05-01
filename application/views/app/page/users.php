<div class="row mt-3">
    <div class="col-md-12">
        <h1 class="text-center">User Page</h1>
    </div>
</div>

<div class="row mt-3 ml-3 mr-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal">
                    Tambah User
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
            <div class="card-body">
                <div class="table-responsive">
                    <table id="order" class="display table  table-hover">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Fullname</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php for ($i = 1; $i <= 6; $i++) : ?>
                                <tr>
                                    <td>lipsum</td>
                                    <td>lipsum@localhost</td>
                                    <td>
                                        Lorem Ipsum
                                    </td>
                                    <td>Administrator</td>
                                    <td><span class="badge badge-success">Aktif</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Detail</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                                <a class="dropdown-item" href="#">Approve</a>
                                            </div>
                                        </div>
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