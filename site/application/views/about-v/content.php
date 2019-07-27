<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('<?php echo base_url("assets/images"); ?>/about2.jpg'); background-position: center;">
	<!-- breadcrumb start -->
	<!-- ================ -->
	<!-- 	<div class="breadcrumb-container"> -->
	<!--        <div class="container"> -->
	<!--             <ol class="breadcrumb"> -->
	<!--                 <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a class="link-dark" href="index.html">Home</a></li> -->
	<!--                <li class="breadcrumb-item active">Page About</li> -->
	<!--            </ol> -->
	<!--         </div> -->
	<!--     </div> -->

        <!-- breadcrumb end -->
	<div class="container">
		<div class="row justify-content-lg-center">
			<div class="col-lg-8 text-center pv-20">
				<h3 class="title logo-font object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><?php echo $settings->company_name ;?></h3>
				<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
				<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Alıştığınız Tat, Yeni Ad SUNTAT!</p>

			</div>
		</div>
	</div>
</div>
<!-- banner end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container padding-bottom-clear">

	<div class="container">
		<div class="row">

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-12">
				<h3 class="title"><strong>Hakkımızda</strong></h3>
				<div class="separator-2"></div>
				<div class="row">
					<div class="col-lg-6">
						<p><?php echo  $settings->about_us ; ?></p>


					</div>
					<div class="col-lg-6">
						<div class="owl-carousel content-slider-with-controls">
							<div class="overlay-container overlay-visible">
								<img src="<?php echo base_url("assets/images"); ?>/page-about-1.jpg" alt="">
								<div class="overlay-bottom hidden-sm-down">
									<div class="text">
										<h3 class="title">We Can Do It</h3>
									</div>
								</div>
								<a href="<?php echo base_url("assets/images"); ?>/page-about-1.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
							</div>
							<div class="overlay-container overlay-visible">
								<img src="<?php echo base_url("assets/images"); ?>/page-about-2.jpg" alt="">
								<div class="overlay-bottom hidden-sm-down">
									<div class="text">
										<h3 class="title">You Can Trust Us</h3>
									</div>
								</div>
								<a href="<?php echo base_url("assets/images"); ?>/page-about-2.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
							</div>
							<div class="overlay-container overlay-visible">
								<img src="<?php echo base_url("assets/images"); ?>/page-about-3.jpg" alt="">
								<div class="overlay-bottom hidden-sm-down">
									<div class="text">
										<h3 class="title">We Love What We Do</h3>
									</div>
								</div>
								<a href="<?php echo base_url("assets/images"); ?>/page-about-3.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main end -->

		</div>
	</div>

	<!-- section start -->
	<!-- ================ -->
	<div class="section light-gray-bg">
		<div class="container">
			<h3 class="mt-4">Biz <strong>Kimiz</strong></h3>
			<div class="separator-2"></div>
			<div class="row">
				<!-- accordion start -->
				<!-- ================ -->
				<div class="col-lg-12">
					<div id="accordion" class="panel-group collapse-style-1" >
						<div class="panel panel-default">
							<div class="panel-heading" >
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
										<i class="fa fa-rocket pr-10"></i>Misyonumuz
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" >
								<div class="panel-body">
									<?php echo $settings->mission ;?>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
										<i class="fa fa-leaf pr-10"></i>Vizyonumuz
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<?php echo $settings->vision ;?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- accordion end -->
			</div>
			<!-- clients start -->
			<!-- ================ -->
			<div class="separator"></div>
			<div class="clients-container">
				<div class="clients">
					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
						<a href="#"><img src="<?php echo base_url("assets/images"); ?>/client-1.png" alt=""></a>
					</div>
					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
						<a href="#"><img src="<?php echo base_url("assets/images"); ?>/client-2.png" alt=""></a>
					</div>
					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
						<a href="#"><img src="<?php echo base_url("assets/images"); ?>/client-3.png" alt=""></a>
					</div>
					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
						<a href="#"><img src="<?php echo base_url("assets/images"); ?>/client-4.png" alt=""></a>
					</div>
					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
						<a href="#"><img src="<?php echo base_url("assets/images"); ?>/client-5.png" alt=""></a>
					</div>
					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
						<a href="#"><img src="<?php echo base_url("assets/images"); ?>/client-6.png" alt=""></a>
					</div>
					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
						<a href="#"><img src="<?php echo base_url("assets/images"); ?>/client-7.png" alt=""></a>
					</div>
					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
						<a href="#"><img src="<?php echo base_url("assets/images"); ?>/client-8.png" alt=""></a>
					</div>
				</div>
			</div>
			<!-- clients end -->
		</div>
	</div>
	<!-- section end -->

</section>
<!-- main-container end -->
