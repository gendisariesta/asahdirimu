<style>
    .header-image {
        background-image: url('../assets/sistem/img/header1.png');
        height: 50%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>

<!-- Header -->
<header class="py-5 mb-5 header-image">
    <div class="container h-100 ">
        <div class="row h-100 align-items-center ">
            <div class="col-lg-12 ">
                <h1 class="display-4 text-white mt-5 mb-2"><strong>INFORMASI LOMBA</strong></h1>
                <p class="lead mb-5 text-white-50"><strong>Dapatkan informasi lomba untuk semua kalangan disini! Cari yang cocok dan daftarkan dirimu~ yuhuuu</strong></p>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-md-5 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/sistem/img/lomba1.jpeg') ?>" width="300" alt="">
                <div class="card-body">
                    <h4 class="card-title">Business Plan Competition 2020</h4>
                    <p class="card-text">Business Plan Competiton itu merupakan kompetisi kewirausahaan bagi Mahasiswa Teknik Unsoed (smt. 1-5) yang bertujuan untuk menumbuhkan jiwa wirausaha yang inovatif, produktif, dan kreatif di masa new normal ini.🤝🏼 📈</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('lomba/lomba1'); ?>" class="btn" style="background-color: #A97B70; color:white">Selengkapnya...</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-4 mb-5">
            <form class="form-inline" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
                <button class="btn my-2 my-sm-0" name="cari" type="submit" style="background-color: #A97B70; color:white">Cari</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/sistem/img/lomba2.jpeg') ?>" width="300" alt="">
                <div class="card-body">
                    <h4 class="card-title">MATHFEST 2020</h4>
                    <p class="card-text">Mathematics Festival dengan tema "Upgrade Your Creativity with Mathematic For The Better Future"</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('lomba/lomba2'); ?>" class="btn" style="background-color: #A97B70; color:white">Selengkapnya...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/sistem/img/lomba3.jpeg') ?>" width="300" alt="">
                <div class="card-body">
                    <h4 class="card-title">LOBASA 2020</h4>
                    <p class="card-text">Lomba Bahasa dan Sastra 2.0 Universitas Jenderal Soedirman dengan tema "Pemuda untuk Bangsa"</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('lomba/lomba3'); ?>" class="btn" style="background-color: #A97B70; color:white">Selengkapnya...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/sistem/img/lomba4.jpeg') ?>" width="300" alt="">
                <div class="card-body">
                    <h4 class="card-title">Advertise Competition 2020</h4>
                    <p class="card-text">ADVERTISE COMPETITION diadakan untuk menunjukkan kemampuan mahasiswa dalam memasarkan hasil karya yang dibuat.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('lomba/lomba4'); ?>" class="btn" style="background-color: #A97B70; color:white">Selengkapnya...</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/aos.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/smoothscroll.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/custom.js"></script>

</body>

</html>