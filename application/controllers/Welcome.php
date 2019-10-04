<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MY_Controller{

    private $table_name= "";
    private $upload_path= "";
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "car";
        $this->upload_path = "uploads/img/";
    }

    public function index()
    {
        $label_name_and_input_name = array(
          "Ad"    => "name",
          "Brend" => "brand",
          "Zaman" => "date",
          "Sekil" => "file",//burda eger sekil olacaqsa name mutleq file olmalidi gelecekde belke duzeltdim
        );
        $input_name_type = array(
          "name" => "text",
          "brand" => "editor",
          "date" => "date",
          "file" => "file",
        );
        $action_link_update = base_url("Welcome/update/");
        $action_link_create = base_url("Welcome/add/");
        $data["create_modal"] = $this->create_view($label_name_and_input_name,$input_name_type,$action_link_create, $action_link_update);

        $this->load->view('admin/dashboard', $data);
    }

    public function get_data()
    {
        $field_names = array(
            0=>'id',
            1=>'name',
            2=>'brand',
            3=>'date',
            4=>'img',

        );
        $additional_links = array(
          "Galereya" =>  base_url("Welcome/asd/"),//burda linkin axirindaki id ni yazmiriq js nen ozu kod eliyir onu
          "Qiymetler" =>  base_url("Welcome/sdf/"),
          "Qiymetler2" =>  base_url("Welcome/ssdf/"),
        );
        $table_name = $this->table_name;
        $get_data_for_update_modal_link = base_url("Welcome/get_data_for_update/");
        $row_delete_link = base_url("Welcome/delete/");
        $upload_path = $this->upload_path;
        $this->data_table($field_names,$additional_links ,$table_name, $upload_path, $get_data_for_update_modal_link, $row_delete_link);

//        print_r("<pre>");
////
////
//        $result_array = $this->db->get("employees")->result_array();
//        $result = $this->db->get("employees")->result();
//
//
//        foreach ($result_array as $key => $item) {
//            $item = array_values($item);
//            foreach ($item as $k=>$v){
//                if (substr($v, -4) == ".jpg"){
//                    $item[$k] = 1;
//                }
//            }
//             $data[] = $item;
//             print_r($item);
//        }
//
//        foreach ($data as $element => $va) {
//            $va[] = '<a href="#" class="btn btn-warning mr-1">Edit</a> <a href="#" class="btn btn-danger mr-1">Delete</a>';
//
//            $data[$element] = $va;
//        }
//
//        print_r($data);

    }

    public function add()
    {
        $inputs_array = array(
            "name" => "name",
            "brand" => "(editor)brand",//eger input editordusa ve db ya strip tag olmadan oturmasini istiyirikse onda qabaqina (editor) yaziriq
            "date" => "date",
            "img" => "img_name",
        );
        $inputs_img_name = "file";
        $success_link = base_url("Welcome/index");
        $error_link = base_url("Welcome/index");
        $table_name = $this->table_name;
        $upload_path = $this->upload_path;

        $this->insert_db_img($inputs_array, $inputs_img_name, $success_link, $error_link, $upload_path ,$table_name);
    }

    public function get_data_for_update()
    {
        $id = strip_tags($this->input->post("my_data"));

        $where = array(
            "id" => $id,
        );
        $table_name = $this->table_name;
        $label_name_and_input_name = array(
            "Ad"    => "name",//inputun nameleri tabledki column nameleri ile eyni olmalidi onsuz onun ferqi yoxdu kim neyniyir inputun namesini :D
            "Brend" => "brand",
            "Zaman" => "date",
            "Sekil" => "file",//burda eger sekil olacaqsa name mutleq file olmalidi gelecekde belke duzeltdim
        );
        $input_name_type = array(
            "name" => "text",
            "brand" => "editor",//update modalda editorun namei avtomatik name + "_editor" olur onu update eliyende name olaraq burdakini yazin
            "date" => "date",
            "file" => "file",
        );
        echo $this->update_view($where,$table_name,$label_name_and_input_name, $input_name_type);

    }

    public function update($id)
    {
        $where =array(
            "id" => $id,
        );
        $inputs_array = array(
            "name" => "name",
            "brand  " => "(editor)brand_editor",//burda editor olan inputun nameinin qabaqina "_editor" yazilmalidi eks halda kod islemez
            "date" => "date",
            "img" => "img_name",
        );
        $inputs_img_name = "file";
        $success_link = base_url("Welcome/index");
        $error_link = base_url("Welcome/index");
        $table_name = $this->table_name;
        $upload_path = $this->upload_path;

        $this->update_db_img($where, $inputs_array, $inputs_img_name, $success_link, $error_link, $upload_path ,$table_name);
    }

    public function delete($id)
    {
        $where = array(
          "id"=> $id,
        );
        $success_link = base_url("Welcome/index");
        $error_link = base_url("Welcome/index");
        $upload_path = $this->upload_path;
        $table_name = $this->table_name;
        $img_column_name = "img";
        $this->delete_db_img($where, $success_link, $error_link, $upload_path, $table_name, $img_column_name);
    }



}