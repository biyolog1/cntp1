<?php
class Product extends  CI_Controller {
    public $viewFolder ="";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder="product-v";
        $this->load->model("Product_model");
    }
    public function index(){
        $viewData= new stdClass();



        /** Tabloadn Verilerin Getirilmesi*/
        $items=$this->Product_model->get_all();
        /** View'e gönderilecek değişkenlerin set edilmesi */
        $viewData->viewFolder= $this->viewFolder;
        $viewData->subViewFolder="list";

        $viewData->items=$items;
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }
}