<?php
include "assets/barcode/vendor/autoload.php";
?>
<div class="main-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- banner start -->
				<!-- ================ -->
				<div class="pv-40 banner light-gray-bg">
					<div class="container clearfix">
						<!-- slideshow start -->
						<div class="slideshow">
							<!-- slider revolution start -->
							<!-- ================ -->
							<div class="slider-revolution-5-container">
								<div id="slider-banner-boxedwidth" class="slider-banner-boxedwidth rev_slider"
									 data-version="5.0">
									<ul class="slides">
										<?php foreach ($product_images as $image) { ?>
											<!-- slide 1 start -->
											<li class="text-center" data-transition="slidehorizontal"
												data-slotamount="default" data-masterspeed="default"
												data-title="<?php echo $product->title; ?>">
												<!-- main image -->
												<img
													src="<?php echo base_url("panel/uploads/product-v/$image->img_url"); ?>"
													alt="<?php echo $product->title; ?>" data-bgposition="center top"
													data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">
												<!-- Transparent Background -->
												<div class="tp-caption dark-translucent-bg"
													 data-x="center"
													 data-y="center"
													 data-start="0"
													 data-transform_idle="o:1;"
													 data-transform_in="o:0;s:600;e:Power2.easeInOut;"
													 data-transform_out="o:0;s:500;"
													 data-width="5000"
													 data-height="450">
												</div>
											</li>
											<!-- slide 1 end -->
										<?php } ?>
									</ul>
									<div class="tp-bannertimer"></div>
								</div>
							</div>
							<!-- slider revolution end -->

						</div>
						<!-- slideshow end -->
					</div>
				</div>
				<!-- banner end -->
				<!-- main-container start -->
				<!-- ================ -->
				<section class="main-container padding-ver-clear">
					<div class="container pv-40">
						<div class="row">

							<!-- main start -->
							<!-- ================ -->
							<div class="main col-md-12">
								<h1 class="title"><?php echo $product->title; ?></h1>
								<div class="separator-2"></div>
								<p><?php echo $product->description; ?></p>
								<h3>Ürün Barkodu</h3>
								<?php
								if(empty($product->barcode))
								{
									echo "Barkod Eklenmedi" ;
								}
								else
								{
									$bar = new Picqer\Barcode\BarcodeGeneratorHTML();
									$codes=$product->barcode;
									$code = $bar->getBarcode("{$codes}", $bar::TYPE_EAN_13);
									echo $code;
									echo $product->barcode;
								}
								?>
								<br>
								<blockquote class="margin-clear">
									<?php echo $product->content; ?>
									<br>
									<footer><cite title="Source Title">SUNTAT </cite></footer>
								</blockquote>
							</div>
							<!-- main end -->
						</div>
					</div>
				</section>
				<!-- main-container end -->

				<!-- section start -->
				<!-- ================ -->
				<section class="section light-gray-bg  pv-40 clearfix">
					<div class="container">
						<h3><strong>Diğer Ürünler</strong></h3>
						<div class="row grid-space-10">
							<?php foreach ($other_products as $other_product) { ?>

								<div class="col-sm-4">
									<div class="image-box style-2 mb-20 bordered light-gray-bg">
										<div class="overlay-container overlay-visible">

											<?php
											$image = get_product_cover_image($other_product->id);
											$image = ($image) ? base_url("panel/uploads/product-v/$image") : base_url("assets/images/portfolio-1.jpg");
											?>

											<img src="<?php echo $image; ?>" alt="">
											<div class="overlay-bottom text-left">
												<p class="lead margin-clear"><?php echo $other_product->title; ?></p>
											</div>
										</div>
										<div class="body">
											<p><?php echo character_limiter(strip_tags($other_product->description), 45); ?></p>
											<a href="<?php echo base_url("urun-detay/$other_product->url"); ?>"
											   class="btn btn-default btn-sm btn-hvr hvr-sweep-to-right margin-clear">Görüntüle<i
													class="fa fa-arrow-right pl-10"></i></a>
										</div>
									</div>
								</div>

							<?php } ?>
						</div>
					</div>
				</section>
				<!-- section end -->
			</div>
		</div>
	</div>
</div>
