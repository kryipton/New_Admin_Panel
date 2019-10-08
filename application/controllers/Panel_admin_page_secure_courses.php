<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panel_admin_page_secure_courses extends MY_Controller{

    private $table_name= "";
    private $upload_path= "";
    private $label_name_and_input_name = "";
    private $update_link = "";
    private $add_link = "";
    private $delete_link = "";
    private $get_data_for_update_modal_link = "";
    private $success_link = "";
    private $error_link = "";
    private $get_data_link = "";
    private $input_name_type ="";

    public function __construct()
    {
        parent::__construct();
        $this->table_name = "courses";
        $this->upload_path = "uploads/courses/";
        $this->label_name_and_input_name = array(
            "Azərbaycanca adı" => "name_az",
            "Ingiliscə adı" => "name_en",
            "Rusca adı" => "name_ru",
            "Azərbaycanca haqqında" => "desc_az",
            "Ingiliscə haqqında" => "desc_en",
            "Rusca haqqında" => "desc_ru",
            "Şəkil" => "file",
            "Kursun başlama Tarixi" => "start_date",
            "Kursda iştirak edəcək maksimum tələbə sayı" => "max_student",
            "Kursun başlama Saatı" => "lesson_start_hour",
            "Kursun bitmə Saatı" => "lesson_end_hour",
            "Kursun toplam saat sayı" => "whole_hour",
            "Kursun neçə ay çəkəcək?" => "whole_month",

        );
        $this->input_name_type =array(
            "name_az" => "text",
            "name_en" => "text",
            "name_ru" => "text",
            "desc_az" => "editor",
            "desc_en" => "editor",
            "desc_ru" => "editor",
            "file" => "file",
            "start_date" => "date",
            "max_student" => "number",
            "lesson_start_hour" => "time",
            "lesson_end_hour" => "time",
            "whole_hour" => "number",
            "whole_month" => "number",
        );
        $this->update_link                    = base_url("panel_admin_page_secure_courses_secure_controller_update/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->add_link                       = base_url("panel_admin_page_secure_courses_secure_controller_add/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->delete_link                    = base_url("panel_admin_page_secure_courses_secure_controller_delete/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->get_data_for_update_modal_link = base_url("panel_admin_page_secure_courses_secure_controller_get_data_for_update/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->success_link                   = base_url("panel_admin_page_secure_courses_secure_controller/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->error_link                     = base_url("panel_admin_page_secure_courses_secure_controller/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->get_data_link                  = base_url("panel_admin_page_secure_courses_secure_controller_get_data/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
    }

    public function index()
    {
        $label_name_and_input_name = $this->label_name_and_input_name;
        $input_name_type = $this->input_name_type;
        $select_name_and_table_name = array();//eger select yoxdusa bos qoya bilerik
        $action_link_update =  $this->update_link;
        $action_link_create = $this->add_link;

        $data["create_modal"] = $this->create_view($label_name_and_input_name,$input_name_type,$action_link_create, $action_link_update, $select_name_and_table_name);
        $data["get_data_link"] = $this->get_data_link;

        $this->load->view('admin/courses/whole_page', $data);
    }

    public function get_data()
    {
        $field_names = array(//burda tablenin butun fieldleri ardicil yazilir hansinin gorsenmesini isdemirsense css de display none verirsen fso numunesi content.php de var
            0=>'id',
            1=>'name_az',
            2=>'name_en',
            3=>'name_ru',
            4=>'desc_az',
            5=>'desc_ru',
            6=>'desc_en',
            7=>'img',
            8=>'start_date',
            9=>'max_student',
            10=>'lesson_start_hour',
            11=>'lesson_end_hour',
            12=>'whole_hour',
            13=>'whole_month',
        );
        $additional_links = array();
        $table_name = $this->table_name;
        $get_data_for_update_modal_link = $this->get_data_for_update_modal_link;
        $row_delete_link =  $this->delete_link;
        $upload_path = $this->upload_path;
        $this->data_table($field_names,$additional_links ,$table_name, $upload_path, $get_data_for_update_modal_link, $row_delete_link);

    }

    public function add()
    {
        $inputs_array = array(
            "name_az" => "name_az",
            "name_en" => "name_en",
            "name_ru" => "name_ru",
            "desc_az" => "(editor)desc_az",
            "desc_en" => "(editor)desc_en",
            "desc_ru" => "(editor)desc_ru",
            "img" => "img_name",
            "start_date" => "start_date",
            "max_student" => "max_student",
            "lesson_start_hour" => "lesson_start_hour",
            "lesson_end_hour" => "lesson_end_hour",
            "whole_hour" => "whole_hour",
            "whole_month" => "whole_month",
        );
        $inputs_img_name = "file";
        $success_link = $this->success_link;
        $error_link =  $this->error_link;
        $table_name = $this->table_name;
        $upload_path = $this->upload_path;

        $this->insert_db_img($inputs_array, $inputs_img_name, $success_link, $error_link, $upload_path ,$table_name);

    }

    public function get_data_for_update()
    {
        $id = strip_tags($this->input->post("my_data"));//bu deyisilmir

        $where = array(
            "id" => $id,
        ); //bu deyisilmir ama isdesen dyise bilersen
        $table_name = $this->table_name;
        $label_name_and_input_name = $this->label_name_and_input_name;
        $input_name_type = $this->input_name_type;
        $select_name_and_table_name = array();

        echo $this->update_view($where,$table_name,$label_name_and_input_name, $input_name_type, $select_name_and_table_name);

    }

    public function update($id)
    {
        $where =array(
            "id" => $id,
        );
        $inputs_array = array(
            "name_az" => "name_az",
            "name_en" => "name_en",
            "name_ru" => "name_ru",
            "desc_az" => "(editor)desc_az_editor",
            "desc_en" => "(editor)desc_en_editor",
            "desc_ru" => "(editor)desc_ru_editor",
            "img" => "img_name  ",
            "start_date" => "start_date",
            "max_student" => "max_student",
            "lesson_start_hour" => "lesson_start_hour",
            "lesson_end_hour" => "lesson_end_hour",
            "whole_hour" => "whole_hour",
            "whole_month" => "whole_month",
        );
        $inputs_img_name = "file";
        $success_link = $this->success_link;
        $error_link =  $this->error_link;
        $table_name = $this->table_name;
        $upload_path = $this->upload_path;

        $this->update_db_img($where, $inputs_array, $inputs_img_name, $success_link, $error_link, $upload_path ,$table_name);
    }

    public function delete($id)
    {

        $where = array(
          "id"=> $id,
        );
        $success_link = $this->success_link;
        $error_link = $this->error_link;
        $upload_path = $this->upload_path;
        $table_name = $this->table_name;
        $img_column_name = "img";
        $this->delete_db_img($where, $success_link, $error_link, $upload_path, $table_name, $img_column_name);


    }



}