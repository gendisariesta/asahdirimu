<br><br><br>
<div class="container text-left mt-12">
    <div class="row">
        <div class="col-md col-sm">

        </div>
        <div class="col-md-11 col-sm-11">
            <form method="post" action="">
                <div class="card bg-light mx-auto">
                    <h3 class="text-center mt-3">Data Member</h3>
                    <div class="card-body">
                        <a href="<?= base_url('member/tambah_data') ?>" class="btn btn-info">Tambah Data</a>
                        <br>
                        <br>

                        <div class="row">

                            <table id="data_member" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($list_data->result() as $data) { ?>

                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data->nama; ?></td>
                                            <td><?= $data->jenis_kelamin; ?></td>
                                            <td><?= $data->alamat; ?></td>
                                            <td><?= $data->email; ?></td>
                                            <td>
                                                <a href="<?= base_url('member/hapus/') . $data->id; ?>" class="btn btn-danger">Hapus</a>
                                                <a href="<?= base_url('member/edit/') . $data->id; ?>" class="btn btn-warning">Edit</a>
                                            </td>
                                        </tr>

                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md col-sm">
        </div>
    </div>
</div>
<br><br><br>

<script type="text/javascript">
    $(document).ready(function() {
        $('#data_member').DataTable();
    });
</script>