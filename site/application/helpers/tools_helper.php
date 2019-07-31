<?php
function get_product_cover_image($product_id)
{
	$t =& get_instance();
	$t->load->model("Product_image_model");
	$cover_image = $t->Product_image_model->get(
		array(
			"isCover" => 1,
			"product_id" => $product_id
		)
	);
	if (empty($cover_image)) {
		$cover_image = $t->Product_image_model->get(
			array(
				"product_id" => $product_id
			)
		);
	}
	return !empty($cover_image) ? $cover_image->img_url : "";
}
function get_readable_date($date)
{
	setlocale(LC_ALL, 'tr_TR.utf-8');
	setlocale(LC_CTYPE, 'C');
	return strftime('%e %B %Y', strtotime($date));
}
function get_portfolio_category_title($id){
	$t =&get_instance();
	$t->load->model("Portfolio_categories_model");
	$portfolio= $t->Portfolio_categories_model->get(
		array(
			"id" =>$id,
		)
	);
	return(empty($portfolio)) ? false: $portfolio->title;
}
function get_portfolio_cover_image($id)
{
	$t =& get_instance();
	$t->load->model("Portfolios_image_model");
	$cover_image = $t->Portfolios_image_model->get(
		array(
			"isCover" => 1,
			"portfolios_id" => $id
		)
	);
	if (empty($cover_image)) {
		$cover_image = $t->Portfolios_image_model->get(
			array(
				"portfolios_id" => $id
			)
		);
	}
	return !empty($cover_image) ? $cover_image->img_url : "";
}

function get_settings(){
	$t = &get_instance();
	$settings = $t->session->userdata("settings");
	if(empty($settings)){
		 // echo "db den çekilecek...";
		$t->load->model("Settings_model");
		$settings = $t->Settings_model->get();
		$t->session->set_userdata("settings", $settings);
	}
	return $settings;
}
