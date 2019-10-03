<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MY_Controller{
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
          "brand" => "password",
          "date" => "date",
          "file" => "file",
        );
        $action_link_update = base_url("Welcome/update");
        $action_link_create = base_url("Welcome/add");
        $data["update_modal"] = $this->update_view($label_name_and_input_name,$input_name_type,$action_link_update);
        $data["create_modal"] = $this->create_view($label_name_and_input_name,$input_name_type,$action_link_create);

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
        $table_name = "car";
        $upload_path = base_url("uploads/img/");
        $this->data_table($field_names, $table_name, $upload_path);

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
            "brand" => "brand",
            "date" => "date",
            "img" => "img_name",
        );
        $inputs_img_name = "file";
        $success_link = base_url("Welcome/index");
        $error_link = base_url("Welcome/index");
        $table_name = "car";
        $upload_path = "uploads/img";

        $this->insert_db_img($inputs_array, $inputs_img_name, $success_link, $error_link, $upload_path ,$table_name);
    }

}