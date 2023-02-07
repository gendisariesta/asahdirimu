<style>
    .hero-bg {
        background: linear-gradient(180deg, var(--primary-color) 100%, var(--white-color) 30%);
    }

    .hero-image {
        position: relative;
        top: 1em;
    }

    html {
        scroll-behavior: smooth;
    }
</style>
<!-- HERO -->
<section class="hero hero-bg d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9 col-12 d-flex flex-column justify-content-center align-items-center text-left">
                <div class="hero-text">
                    <h1 class="text-white" data-aos="fade-up">Selamat datang, <br><strong><?= $user['nama']; ?></strong> Siap untuk #AsahDirimu ?</h1>

                    <a href="#section2" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Mulai Sekarang</a>

                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                    <img src="<?= base_url('assets/sistem/img/beranda.png') ?>" class="img-fluid" alt="working girl">
                </div>
            </div>

        </div>
    </div>
</section>

<section id="section2">
    <div class="jumbotron mt-200" style="background-color: #d9d9d9;">
        <div class="row">
            <div class="col-md col-sm">
                <p>Bermimpi setinggi mungkin karena mimpi adalah kunci untuk kita mewarnai dunia</p>
            </div>
            <div class="col-md col-sm">
                <p>Berkarya dengan indah seperti kupu-kupu yang sedang terbang ke luar angkasa</p>
            </div>
            <div class="col-md col-sm">
                <p>Terus melangkah melupakanmu lelah hati perhatikan sikapmu</p>
            </div>
            <div class="col-md col-sm">
                <p>Jangan menyerah jangan menyerah jeangan menyerah oooooooo</p>
            </div>
        </div>
    </div>
</section>
<section id="section3">
    <div class="container">
        <div class="row mx-auto">
            <div class="col-md col-sm">

            </div>
            <center>
                <div class="col-md col-sm">
                    <div class="card mx-auto" style="width: 18rem;">
                        <center><span class="fa-stack fa-4x">
                                <i class="fas fa-users"></i>
                            </span></center>
                        <div class="card-body">
                            <h5 class="card-title">Seminar</h5>
                            <p class="card-text">Seminar selalu mengarahkan kita pada hal yang baik dan benar.</p>
                            <a class="btn btn-lg" style="background-color: #A97B70; color:white" href="<?= base_url('seminar'); ?>" role="button">Mulai Sekarang</a><br><br>
                        </div>
                    </div>
                </div>
            </center>
            <center>
                <div class="col-md col-sm">
                    <div class="card mx-auto" style="width: 18rem;">
                        <center><span class="fa-stack fa-4x">
                                <i class="fas fa-trophy"></i>
                            </span></center>
                        <div class="card-body">
                            <h5 class="card-title">Lomba</h5>
                            <p class="card-text">Lomba selalu mengajarkan kita untuk terus berjuang dan semangat.</p>
                            <a class="btn btn-lg" style="background-color: #A97B70; color:white" href="<?= base_url('lomba'); ?>" role="button">Mulai Sekarang</a><br><br>
                        </div>
                    </div>
                </div>
            </center>
            <div class="col-md col-sm">

            </div>
        </div>
    </div>
</section>
<br>