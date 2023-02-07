<div class="container text-left mt-12" style="padding-top: 50px; padding-bottom: 50px;">
	<div class="row">
		<div class="col-md-8 col-sm-8">
			<form class="hubungikami" method="POST" action="<?= base_url('beranda/hubungikami') ?>">
				<div class="card bg-light">
					<div class="card-body">
						<div class="row">
							<div class="col-md-2 col-sm-2 mx-auto">
								<img src="<?= base_url('assets/sistem/img/logo.png') ?>" width="60px">
							</div>
							<div class="col-md-10 col-sm-10 mr-auto">
								<?= $this->session->flashdata('pesan'); ?>
								<h3> Hubungi kami</h3>
								<p>Kirim saran dan masukan Anda</p>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-2 col-sm-2 mx-auto mb-2">
							</div>
							<div class="col-md-5 col-sm-5 mr-auto mb-2">
								<div class="form-group">
									<label>Nama depan</label>
									<input type="text" name="hnamadepan" id="hnamadepan" class="form-control" placeholder="Masukan nama depan">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="hemail" id="hemail" class="form-control" placeholder="Masukan email">
								</div>

							</div>
							<div class="col-md-5 col-sm-5 mr auto mb-2">

								<div class="form-group">
									<label>Nama belakang</label>
									<input type="text" name="hnamabelakang" id="hnamabelakang" class="form-control" placeholder="Masukan nama belakang">
								</div>
								<div class="form-group">
									<label>Nomor telepon</label>
									<input type="text" name="hnotelpon" id="hnotelpon" class="form-control" placeholder="Masukan nomor telepon">
								</div>

							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-2 col-sm-2 mx-auto">

							</div>
							<div class="col-md-10 col-sm-10 mr-auto">
								<label>Subjek</label>
								<input type="text" name="hsubjek" id="hsubjek" class="form-control" placeholder="Masukan subjek">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 col-sm-2 mx-auto">

							</div>
							<div class="col-md-10 col-sm-10 mr-auto">
								<label>Pesan Anda</label>
								<textarea name="hpesan" id="hpesan" class="form-control" placeholder="Masukan pesan Anda">
							  	</textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 col-sm-2 mx-auto">

							</div>
							<div class="col-md-10 col-sm-10 mr-auto mt-5">
								<button type="submit" class="btn float-right" style="background-color: #A97B70; color:white">Kirim</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="card text-black border-white mb-3">
				<div class="card-body">
					<h5 class="card-title">Kontak sales</h5>
					<hr class="bg-secundary mb-4 mt-0 d-inline-block mx-auto" style="width: 250px; height: 1px;">
					<ul class="list-unstyled">
						<li>Sosial Media</li>
						<li><a href="#" class="card-link" style="color: brown;">Instagram : @asahdirimu.id</a></li>
						<li><a href="#" class="card-link" style="color: brown;">Whatsapp : 083276257399</a></li>
						<li class="mt-4">Email</li>
						<li><a href="#" class="card-link" style="color: brown;">Email : asahdirimu@gmail.com</a></li>
						<li class="mt-4">Website</li>
						<li><a href="#" class="card-link" style="color: brown;">Website : asahdirimu.id</a></li>
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