<?php $settings = get_settings(); ?>
<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('<?php echo base_url("assets/images"); ?>/background-img-3.jpg'); background-position: 50% 30%;">
	<div class="container">
		<div class="row justify-content-lg-center">
			<div class="col-lg-8 text-center pv-20">
				<h1 class="page-title text-center">Bize Ulaşın</h1>
				<div class="separator"></div>
				<p class="lead text-center">Bize ulaşmak için alttaki formu yada sosyal medya linklerimizi kullanabilirsiniz...</p>
				<ul class="list-inline mb-20 text-center">
					<li class="list-inline-item"> <i class="text-default fa fa-map-marker pr-2"></i> <?php echo strip_tags($settings->address); ?></li>
					<li class="list-inline-item"><a href="tel:+00 1234567890" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-2"></i> <?php echo $settings->phone_1; ?></a></li>
					<li class="list-inline-item"><a href="mailto:<?php echo $settings->email; ?>" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-2"></i> <?php echo $settings->email; ?></a></li>
				</ul>
				<div class="separator"></div>
				<ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
					<?php if($settings->facebook){  ?>
						<li class="facebook"><a target="_blank" href="<?php echo $settings->facebook; ?>"><i class="fa fa-facebook"></i></a></li>
					<?php }  ?>
					<?php if($settings->twitter){  ?>
						<li class="twitter"><a target="_blank" href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
					<?php }  ?>

					<?php if($settings->instagram){  ?>
						<li class="instagram"><a target="_blank" href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
					<?php }  ?>

					<?php if($settings->linkedin){  ?>
						<li class="linkedin"><a target="_blank" href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php }  ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- banner end -->
<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

	<div class="container">
		<div class="row">

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-12 space-bottom">
				<h2 class="title">Bize Yazın...</h2>
				<div class="row">
					<div class="col-lg-6">
						<p>Aşağıdaki formu doldurarak bize ulaşabilirsiniz...</p>
						<div class="alert alert-success hidden hidden-xs-up" id="MessageSent">
							Mesajınız başarıyla bize ulaştı. Kısa sürede size dönüş sağlayacağız....
						</div>
						<div class="alert alert-danger hidden hidden-xs-up" id="MessageNotSent">
							Olamaz Mesaj Bize Ulaşamadı! Birşeyler yanlış gitti. Lütfen girdiğiniz bilgileri kontrol ederek doğrulayın ve mesajınızı tekrar gönderin. Eğer sorun devam ediyorsa sistemlerimizde bakım olabilir daha sonra tekrar deneyin..
						</div>
						<div class="contact-form">
							<form id="" class="margin-clear" role="form" method="post" action="<?php echo base_url("mesaj-gonder"); ?>">
								<div class="form-group has-feedback">
									<label for="name">Ad Soyad*</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="">
									<i class="fa fa-user form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label for="email">E-mail*</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label for="subject">Konu*</label>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="">
									<i class="fa fa-navicon form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label for="message">Mesajınız*</label>
									<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
									<i class="fa fa-pencil form-control-feedback"></i>
								</div>
								<div class="row">
									<div class="col-md-4">
										<?php echo $captcha["image"]; ?>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">

											<input type="text" class="form-control" id="captcha" name="captcha" placeholder="Doğrulama Kodu..">

										</div>

									</div>
								</div>


								<button type="submit" class="submit-button btn btn-lg btn-default">Gönder</button>

							</form>
						</div>
					</div>
					<div class="col-lg-6">
						<div id="map-canvas"></div>
					</div>
				</div>
			</div>
			<!-- main end -->
		</div>
	</div>
</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->
<section class="section pv-40 parallax background-img-1 dark-translucent-bg" style="background-position:50% 60%;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="call-to-action text-center">
					<div class="row justify-content-lg-center">
						<div class="col-lg-8">
							<h2 class="title">En yeni haberler ve ürünler için Abone Olun</h2>
							<p>Öncelikli Olun...</p>

							<p>Kampanyalarımızdan, Yeni Ürünlerimizden, Fırsatlarımızdan yada Etkiinliklerimizden ilk önce haberdar olmak istiyorsanız lütfen email adresinizle abone olmayı unutmayın. </p>
							<div class="separator"></div>
							<form class="form-inline margin-clear d-flex justify-content-center">
								<div class="form-group has-feedback">
									<label class="sr-only" for="subscribe2">E-mail adresiiniz</label>
									<input type="email" class="form-control form-control-lg" id="subscribe2" placeholder="Email adresiniz ..." name="subscribe_email" required="">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
								<button type="submit" class="btn btn-lg btn-gray-transparent btn-animated margin-clear ml-3">Abone Ol <i class="fa fa-send"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section end -->