<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MY_Controller{
    public function index()
    {
        $this->load->view('admin/dashboard');
    }

    public function cavid()
    {
        $field_names = array(
            0=>'id',
            1=>'name',
            2=>'brand',
            3=>'date',
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
}