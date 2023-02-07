<style>
    .header-image {
        background-image: url("assets/sistem/img/header1.png");
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
                <h1 class="display-4 text-white mt-5 mb-2"><strong>INFORMASI SEMINAR</strong></h1>
                <p class="lead mb-5 text-white-50"><strong>seminar disini gaiseu biar depat manfaat</strong></p>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-md-5 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/sistem/img/seminar1.jpg') ?>" width="300" alt="">
                <div class="card-body">
                    <h4 class="card-title">Webinar PKM</h4>
                    <p class="card-text">Webinar yang diadakan oleh Fakultas Teknik Universitas Jenderal Soedirman.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('seminar/seminar1'); ?>" class="btn" style="background-color: #A97B70; color:white">Lihat Selengkapnya!</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-4 mb-5">
            <form class="form-inline" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                <button class="btn my-2 my-sm-0" type="submit" style="background-color: #A97B70; color:white">Cari</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/sistem/img/seminar2.jpeg') ?>" width="300" alt="">
                <div class="card-body">
                    <h4 class="card-title">Webinar Strategi Sukses Bisnis</h4>
                    <p class="card-text">Webinar tentang Strategi Bisnis yang sukses,diadakan oleh UKM Kewirausahaan Teknik Unsoed.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('seminar/seminar2'); ?>" class="btn" style="background-color: #A97B70; color:white">Lihat Selengkapnya!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/sistem/img/seminar3.jpg') ?>" width="300" alt="">
                <div class="card-body">
                    <h4 class="card-title">Study Bisnis</h4>
                    <p class="card-text">Webinar yang akan membahas seputar peluang bisnis di era milenial.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('seminar/seminar3'); ?>" class="btn" style="background-color: #A97B70; color:white">Lihat Selengkapnya!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/sistem/img/seminar4.jpg') ?>" width="300" alt="">
                <div class="card-body">
                    <h4 class="card-title">Webinar Lolos PKM PMW</h4>
                    <p class="card-text">Membahas seputar tips dan trik supaya lolos PKM PMW.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('seminar/seminar4'); ?>" class="btn" style="background-color: #A97B70; color:white">Lihat Selengkapnya!</a>
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