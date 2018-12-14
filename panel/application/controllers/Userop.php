<?php

class Userop extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "users-v";
        $this->load->model("Users_model");
    }

    public function login()
    {

        $viewData = new stdClass();
        $this->load->library("form_validation");

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "login";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function do_login()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("user_email", "E-Posta", "required|trim|valid_email");
        $this->form_validation->set_rules("user_password", "Şifre", "required|trim|min_length[6]");
        $this->form_validation->set_message(
            array(
                "required" => "<b><i>{field}</i></b> alanı boş olamaz",
                "valid_email" => "Lütfen kayıtlı bir E-posta adresi giriniz.",
                "min_length" => "<b><i>{field}</i></b> en az 6 karakterden oluşmalıdır"

            )
        );

        if ($this->form_validation->run() == FALSE) {

            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "login";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        } else {
            $user = $this->Users_model->get(
                array(
                    "email" => $this->input->post("user_email"),
                    "password" => md5($this->input->post("user_password")),
                )
            );
            if ($user) {
                $alert = array(
                    "title" => "Giriş Başarılı !",
                    "text" => "Hoşgeldiniz $user->full_name",
                    "type" => "success",

                );
                $this->session->set_userdata("user", $user);
                $this->session->set_flashdata("alert", $alert);
                redirect(base_url());

            } else {
                $alert = array(
                    "title" => "Giriş Başarısız !",
                    "text" => "Böyle bir hesap bulunamadı. Lütfen hesap bilgilerinizi kontrol ediniz",
                    "type" => "error",

                );
                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("login"));
            }

        }

    }

}