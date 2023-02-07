<br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md col-sm">
        </div>
        <div class="col-md-7 col-sm-7">
            <div class="card mt-12 text-left">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= base_url('member/add_data') ?>">

                        <div class="form-group">

                            <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap" name="nama">

                        </div>
                        <div class="form-group">
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option>Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="alamat" placeholder="Alamat" name="alamat">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" placeholder="Email" name="email">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">

                        </div>
                        <div class="form-group">
                            <select class="form-control" name="role_id" id="role_id">
                                <option>Level</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>

                            </select>

                        </div>
                        <button type="submit" class="btn btn-user btn-block" name="tambah" style="background-color: #A97B70; color:white">
                            Tambah
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md col-sm">
        </div>
    </div>
</div>
<br><br><br>