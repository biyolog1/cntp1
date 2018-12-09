<?php

class Galleries extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "galleries-v";
        $this->load->model("Galleries_model");
        $this->load->model("Images_model");
        $this->load->model("Files_model");
        $this->load->model("Videos_model");
    }

    public function index()
    {
        $viewData = new stdClass();
        /** Tabloadn Verilerin Getirilmesi*/
        $items = $this->Galleries_model->get_all(
            array(), "rank ASC"

        );
        /** View'e gönderilecek değişkenlerin set edilmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $viewData->items = $items;
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form()
    {


        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save()
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("title", "Galeri Adı", "required|trim");
        $this->form_validation->set_message(
            array(
                "required" => "<b><i>{field}</i></b> alanı boş olamaz"
            )
        );
        $validate = $this->form_validation->run();
        if ($validate) {
            $gallery_type = $this->input->post("gallery_type");
            $path = "uploads/$this->viewFolder/";
            $folder_name = "";
            if ($gallery_type == "image") {
                $folder_name = convertToSeo($this->input->post("title"));
                $path = "$path/images/$folder_name";
            } else if ($gallery_type == "file") {
                $folder_name = convertToSeo($this->input->post("title"));
                $path = "$path/files/$folder_name";
            }

            if($gallery_type != "video"){

                if(!mkdir($path, 0755)){
                    $alert = array(
                        "title" => "BAŞARISIZ !",
                        "text" => "Galeri Klasörü Oluştururken Problem Oluştu. (Yetki Hatası)",
                        "type" => "error",
                    );
                    //işlem sonucunu sessiona yazma
                    $this->session->set_flashdata("alert", $alert);
                    redirect(base_url("Galleries"));
                }
            }


            $insert = $this->Galleries_model->add(
                array(
                    "title" => $this->input->post("title"),
                    "gallery_type" => $this->input->post("gallery_type"),
                    "url" => convertToSeo($this->input->post("title")),
                    "folder_name" => $folder_name,
                    "rank" => 0,
                    "isActive" => 1,
                    "createdAt" => date("Y-m-d H:i:s")
                )
            );

            //TODO Alert sistemi eklenecek
            if ($insert) {
                $alert = array(
                    "title" => "İşlem Başarılı.",
                    "text" => "Kayıt Başarılı Şekilde Eklendi.",
                    "type" => "success",

                );

            } else {
                $alert = array(
                    "title" => "BAŞARISIZ !",
                    "text" => "Bir Aksilik Oldu Kayıt Eklenemedi.",
                    "type" => "error",

                );
            }

            //işlem sonucunu sessiona yazma
            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("Galleries"));
        } else {
            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function update_form($id)
    {
        $viewData = new stdClass();

        $item = $this->Galleries_model->get(
            array(
                "id" => $id
            )
        );


        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update($id)
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("title", "Başlık", "required|trim");
        $this->form_validation->set_message(
            array(
                "required" => "<b><i>{field}</i></b> alanı boş olamaz"
            )
        );
        $validate = $this->form_validation->run();
        if ($validate) {
            $update = $this->Galleries_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "url" => convertToSeo($this->input->post("title"))
                )
            );

            //TODO Alert sistemi eklenecek
            if ($update) {

                $alert = array(
                    "title" => "İşlem Başarılı.",
                    "text" => "Kayıt Başarılı Şekilde Güncellendi.",
                    "type" => "success",

                );

            } else {
                $alert = array(
                    "title" => "BAŞARISIZ !",
                    "text" => "Bir Aksilik Oldu Kayıt Güncellenemedi.",
                    "type" => "error",

                );
            }
            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("Galleries"));
        } else {
            $viewData = new stdClass();
            $item = $this->Galleries_model->get(
                array(
                    "id" => $id
                )
            );

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $viewData->item = $item;


            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function delete($id)
    {
        $delete = $this->Galleries_model->delete(
            array(
                "id" => $id
            )
        );

        //TODO alert sistemi eklenecek
        if ($delete) {

            $alert = array(
                "title" => "İşlem Başarılı.",
                "text" => "Kayıt Başarılı Şekilde Silindi.",
                "type" => "success",

            );

        } else {
            $alert = array(
                "title" => "BAŞARISIZ !",
                "text" => "Bir Aksilik Oldu Kayıt Silinemedi.",
                "type" => "error",

            );
        }
        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("Galleries"));
    }

    public function imageDelete($id, $parent_id)
    {
        $fileName = $this->Galleries_image_model->get(
            array(
                "id" => $id
            )
        );

        $delete = $this->Galleries_image_model->delete(
            array(
                "id" => $id
            )
        );


        //TODO alert sistemi eklenecek
        if ($delete) {
            unlink("uploads/{$this->viewFolder}/$fileName->img_url");
            redirect(base_url("Galleries/image_form/$parent_id"));
        } else {

            redirect(base_url("Galleries/image_form/$parent_id"));
        }
    }

    public function isActiveSetter($id)
    {
        if ($id) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->Galleries_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "isActive" => $isActive
                )
            );

        }
    }

    public function imageIsActiveSetter($id)
    {
        if ($id) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->Galleries_image_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "isActive" => $isActive
                )
            );

        }
    }

    public function isCoverSetter($id, $parent_id)
    {
        if ($id && $parent_id) {
            $isCover = ($this->input->post("data") === "true") ? 1 : 0;

            //Kapak Yapılması istenen kayıt
            $this->Galleries_image_model->update(
                array(
                    "id" => $id,
                    "Galleries_id" => $parent_id
                ),
                array(
                    "isCover" => $isCover
                )
            );

            // kapak olamayac aynı ürüne ait diğer kayıtlar
            $this->Galleries_image_model->update(
                array(
                    "id !=" => $id,
                    "product_id" => $parent_id
                ),
                array(
                    "isCover" => 0
                )
            );

            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "image";
            $viewData->item_images = $this->Galleries_image_model->get_all(
                array(
                    "product_id" => $parent_id
                ), "rank ASC"
            );

            $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData, true);
            echo $render_html;

        }
    }

    public function rankSetter()
    {

        $data = $this->input->post("data");
        parse_str($data, $order);
        $items = $order["ord"];
        foreach ($items as $rank => $id) {
            $this->Galleries_model->update(
                array(
                    "id" => $id,
                    "rank !=" => $rank
                ),
                array(
                    "rank" => $rank
                )
            );
        }
    }

    public function imageRankSetter()
    {

        $data = $this->input->post("data");
        parse_str($data, $order);
        $items = $order["ord"];
        foreach ($items as $rank => $id) {
            $this->Galleries_image_model->update(
                array(
                    "id" => $id,
                    "rank !=" => $rank
                ),
                array(
                    "rank" => $rank
                )
            );
        }
    }

    public function image_form($id)
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";
        $viewData->item = $this->Galleries_model->get(
            array(
                "id" => $id

            )
        );
        $viewData->item_images = $this->Galleries_image_model->get_all(
            array(
                "product_id" => $id
            ), "rank ASC"
        );


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

    public function image_upload($id)
    {

        $file_name = convertToSeo(pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        $config["allowed_types"] = "jpg|jpeg|png";
        $config["upload_path"] = "uploads/$this->viewFolder/";
        $config["file_name"] = $file_name;


        $this->load->library("upload", $config);
        $upload = $this->upload->do_upload("file");
        if ($upload) {
            $uploaded_file = $this->upload->data("file_name");
            $this->Galleries_image_model->add(
                array(
                    "img_url" => $uploaded_file,
                    "rank" => 0,
                    "isActive" => 1,
                    "isCover" => 0,
                    "createdAt" => date("Y-m-d H:i:s"),
                    "Galleries_id" => $id
                )
            );
        } else {
            echo "İşlem Başarısız.";

        }

    }

    public function refresh_image_list($id)
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";
        $viewData->item_images = $this->Galleries_image_model->get_all(
            array(
                "product_id" => $id
            )
        );

        $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData, true);
        echo $render_html;
    }

}