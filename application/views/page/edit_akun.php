<br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md col-sm">
        </div>
        <div class="col-md-7 col-sm-7">
            <div class="card mt-12 text-left">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= base_url('page/update_akun') ?>">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <input type="hidden" name="role_id" value="<?= $user['role_id'] ?>">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="enama" value="<?= $user['nama'] ?>" class="form-control" placeholder="Masukan nama" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="ealamat" class="form-control" placeholder="Masukan alamat">
				  			<?= $user['alamat'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="ekelamin">
                                <option></option>
                                <option value="laki-laki" <?= ($user['jenis_kelamin'] == "Laki-laki") ? "selected=selected" : "";  ?>>Laki-laki</option>
                                <option value="perempuan" <?= ($user['jenis_kelamin'] == "Perempuan") ? "selected=selected" : "";  ?>>Perempuan</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="eemail" value="<?= $user['email'] ?>" class="form-control" placeholder="Masukan email" required>
                        </div>
                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <input type="password" name="esandi" value="<?= @$vsandi ?>" class="form-control" placeholder="Masukan sandi">
                        </div> -->
                        <button type="reset" class="btn btn-brown" name="breset">Reset</button>
                        <button type="submit" class="btn btn-dark float-right" name="bsimpan">Update</button>


                    </form>
                </div>
            </div>
        </div>
        <div class="col-md col-sm">
        </div>
    </div>
</div>
<br><br><br>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/aos.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/smoothscroll.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/custom.js"></script>

</body>

</html>