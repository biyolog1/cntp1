<?php

class Home extends CI_Controller {

	public $viewFolder = "";

	public function __construct()
	{
		parent::__construct();

		$this->viewFolder = "homepage";
		$this->load->helper("text");

	}

	public function index(){

		// Anasayfa...

		echo $this->viewFolder;

	}

	public function product_list(){

		$viewData = new stdClass();
		$viewData->viewFolder = "product_list-v";

		$this->load->model("Product_model");


		$viewData->products = $this->Product_model->get_all(
			array(
				"isActive"  => 1
			), "rank ASC"
		);


		$this->load->view($viewData->viewFolder, $viewData);

	}

	public function product_detail($url = ""){

		$viewData = new stdClass();
		$viewData->viewFolder = "product-v";

		$this->load->model("Product_model");
		$this->load->model("Product_image_model");


		$viewData->product = $this->Product_model->get(
			array(
				"isActive"  => 1,
				"url"       => $url
			)
		);

		$viewData->product_images=$this->Product_image_model->get_all(
		array(
			"isActive" =>1,
			"product_id" =>$viewData->product->id,
		), "rank ASC"
		);

		$viewData->other_products = $this->Product_model->get_all(
			array(
				"isActive"  => 1,
				"id !="     => $viewData->product->id
			), "rand()", array("start" => 0, "count" => 3)
		);

		$this->load->view($viewData->viewFolder, $viewData);

	}

	public function portfolio_list(){
		$viewData = new stdClass();
		$viewData->viewFolder = "portfolio_list-v";
		$this->load->model("Portfolios_model");


		$viewData->portfolios = $this->Portfolios_model->get_all(
			array(
				"isActive"  => 1
			), "rank ASC"
		);

		$this->load->view($viewData->viewFolder, $viewData);
	}

	public function portfolio_detail($url = ""){
		$viewData = new stdClass();
		$viewData->viewFolder = "portfolios-v";

		$this->load->model("Portfolios_model");
		$this->load->model("Portfolios_image_model");


		$viewData->portfolios = $this->Portfolios_model->get(
			array(
				"isActive"  => 1,
				"url"       => $url
			)
		);

		$viewData->portfolio_images=$this->Portfolios_image_model->get_all(
			array(
				"isActive" =>1,
				"portfolios_id" =>$viewData->portfolios->id,
			), "rank ASC"
		);

		$viewData->other_portfolios = $this->Portfolios_model->get_all(
			array(
				"isActive"  => 1,
				"id !="     => $viewData->portfolios->id
			), "rand()", array("start" => 0, "count" => 3)
		);

		$this->load->view($viewData->viewFolder, $viewData);


	}
public function  course_list(){
		$viewData=new stdClass();
		$viewData->viewFolder="course_list-v";
		$this->load->model("Course_model");
		$viewData->courses=$this->Course_model->get_all(
			array(
				"isActive"  => 1
				), "rank ASC, event_date ASC"
		);
	$this->load->view($viewData->viewFolder, $viewData);
}



}
