<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block"><img src="<?= base_url('assets/login/img/login.png') ?>" width="400" hidden background-position: center; background-size: cover></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Masuk</h1>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <?= $this->session->flashdata('pesan1'); ?>
                                <form class="user" method="POST" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" placeholder="Ketik alamat email" name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>')  ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>')  ?>
                                    </div>
                                    <div class="form-group"></div>
                                    <button type="submit" class="btn btn-user btn-block" style="background-color: #A97B70; color:white">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?php echo base_url('Auth/registration'); ?>">Belum punya akun, ayo daftar disini!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>