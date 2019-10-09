<?php

// edileceklerin siyahisinin ardicilliqi
// evvelce ne qurassansa onun tablesini yarat
// 1) viewin icindeki admin papkasinin icindeki seyfelerden biri kopyalanir(hamsinin ici paşdi eynidi)
//      a) viewin icindeki admin papkasinin icindeki yaratdiqin seyfenin icindeki whole pagenin icinde contentin linkin deyisirsen
//      b) viewin icindeki admin papkasinin icindeki yaratdiqin seyfenin icindeki content in icinde tablenin head ve foot unu yazirsan onu yazanda tablenin fieldlerinin sirasina uygun yaz hansinin gorsenmesini isdemesen yuxarida style tagini icinde deyismek olur
// 2) route kopyalanib icindeki course sozunun yerine yeni soz yazilir (diger sozleri deyisme)
// 3) yeni controller yaradilir (yaxsi olarki coursesi kopyalasan)
// 4) controllerin icindeki constructor variableleri deyisdirilir
//      a) $table_name                      -- bu controllerin hansi tableynen isliyecek onu gosteririk
//      b) $upload_path                     -- bu controllerin sekilleri hansi yere yukleyeceyini yaziriq
//      c) $label_name_and_input_name       -- burda arrayin sol terefinde labelin icinde olacaq yazi olur sagda ise inputun name i eger sekil upload olacaqsa onun input name "file" olmalidi tabledeki name ise asagida verirlir (INPUTUN NAME I TABLEDEKI FIELDNAME ILE EYNI OLMALIDI!)
//      d) $update_link                     -- sehifedeki melumatlari hansi linke atib yeniliyecey
//      e) $add_link                        -- sehifedeki melumatlari hansi linke atib elave edecey
//      f) $delete_link                     -- sehifedeki melumatlari hansi linke atib silecey
//      g) $get_data_for_update_modal_link  -- ajaxla rowun melumatlarinin cagirmaq ucun lazim olan link
//      h) $success_link                    -- prosesler success olsa hansi linke atsin  (bu admin panelimizde ikisideele index page atir)
//      j) $error_link                      -- prosesler error olsa hansi linke atsin  (bu admin panelimizde ikisideele index page atir)
//      k) $get_data_link                   -- data table js pluginine ajaxla melumatlarinn getirilmesi ucun lazim olan link
//      l) $input_name_type                 -- burda sol terefde inputun namei labelnamedekiynen eyni olur sadece iki array arasinda core da elaqe yaratmaq ucun ikisindede name verilir (name tabledki fieldle eyni olmalidi) eger sekil upload olacaqsa onun input name "file" olmalidi tabledeki name ise asagida verirlir sag terefde ise inputun type i verilir istenilen type vermek olar elave olaraq editor isdiyirikse ty[e yerine "editor" yaziriq type i select olacaq onu bu array da yazmiriq
//
// 5) $select_name_and_table_name -- eger create ve update modalda select tag olmasini istiyirikse bu arrayi doldururq bunun sol terefinde noqteden evvel select taginin inputunun name i noqteden sora labelin icinde olacaq melumat olur sag terefde ise noqteden evvel select tagine gelecek melumatlarin tablesinin name i noqteden sora ise tablenin hansi fieldi gelecek onu yaziriq
// 6) index metodunun icindeki view() in icindeki pathi deyisirik
// 7) get_data() metodunun icindeki  $field_names in icinde tablenin columnlarini ardicil olaraq yeni sirasi deyismeden hamsini yaziriq hansi column gorsenmesini isdemesek css onu duzeltmekolur kodlari content.php icinde var
// 8) get_data() metodunun icindeki  $additional_links in icinde sol terefde linkin adini yaziriq sag terefde hansi linke atacaq onu yaziriq ama axirina id yazmiriq onu ozu eliyir her rowun idsine uygun meselen  "Qiymetler" =>  base_url("Welcome/sdf/"),)
// 9) add() metodunun icindeki  $inputs_array sol terefde tablenin fieldinin adi sag terfede ise inputun name in adi eger editordusa namein evveline moterize icinde (editor) yaziriqki strip tags vermesin ve eger inputun type i file dise yeni onnan sekil yukluyeceyiyse onun name ini yazmiriq "img_name" yaziriq default ki onu sekilolaraq yuklesin ele onun altinda $inputs_img_name de o inputun name ini veririk (belke bunu gelecekde duzeltdim)
// 10) update() metodunun icindeki  ele add metodundaki kimidi bidene ferq $inputs_array in icinde sag terefdeki inputun name yazanda eger o inputun tipi editordusa qabaqina (editor) yaziriq ve namein sonuna "_editor" yaziriq
// 11) delete() metodunun icinde $img_column_name bize skil olan columnun name ini verir onu yaziriqki unlink() eliyib sekili dbdan ve upload papkasinnan silsin
//elave olaraq core hem sekil ucun hem sekilsiz insert update delete metodlari var hemcinin delete metodu hem tek rowu hemde multi rowu silir o core da dinamik duzeldilib
//view a modallar ele controllerden cagirdigimiz core metodlariynan gedir  oikisini viewda yazmiriq
//view da style taginin icinde hansi rowun gorsenib gorsenmemesini yaziriq
//birde esas mesele yazanda inputlarin name ine fikir ver teacher yoxsa  teachers olmaqina fikri ver cunki ancaq ad sef olanda xeta verecek men basa dusene qeder cox ilisdim


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
        $select_name_and_table_name = array(
            "teacher_id.Müəllimi Seçin" => "teachers.name_az", //solda select tag inputunun name i sagda tablenin adi ve tabledeki columnun adi aralarinda noqte qoymaq lazimdi burda inputun namei ele tabelin neymidir adi az dilinde versen yaxsi gorsener
//          bunun sol terefinde noqteden qabaq inputun adi olur o ad hemcinin tabledeki adla eyni olmalidi noqteden sora ise labelin adidir
        );
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
            14=>'teacher_id',
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
            "teacher_id" => "teacher_id",
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
        $select_name_and_table_name = array(
            "teacher_id.Müəllimi Seçin" => "teachers.name_az", //solda select tag inputunun name i sagda tablenin adi ve tabledeki columnun adi aralarinda noqte qoymaq lazimdi burda inputun namei ele tabelin neymidir adi az dilinde versen yaxsi gorsener
//          bunun sol terefinde noqteden qabaq inputun adi olur o ad hemcinin tabledeki adla eyni olmalidi noqteden sora ise labelin adidir
//          yeni deyisiklik eledim artiq burda sag terefde tablenin name fieldi yazilir ama db ya idsi oturur onu avtomatik eliyir burda ekranda nameler gorsenecek ama  tablede idler olacaq
        );

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
            "teacher_id" => "teacher_id",
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