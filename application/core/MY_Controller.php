<?php
class MY_Controller extends CI_Controller{

    private $img_key;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_for_core");
    }


//======================================== Dinamik Insert functionlari ===================================================

    public function insert_db_img($inputs_array, $inputs_img_name, $success_link, $error_link, $upload_path, $table_name){



//      sekiller upload edilir
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES[$inputs_img_name]['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
//      sekiller upload edilir


//      post metoduynan qebul edilen deyerler bu arrayin icine toplanir ve data olaraq db ya insert olur
        $data = array();

//      eyer cond 1 dise proses ugurla basa catib eger 0 qaytarirsa demeli prosesde xeta var ve geri seyfeye aler sessionla birlikde qayidir
        $cond = 1;

//      type text ve password olan inputlarin namelerinin arraylari fore eache salinaraq data arrayina doldurulur(xususi filterler metodlardan kecerek)
        foreach ($inputs_array as $key => $value){

//          inputlarin arrayinin icinde gelen deyerin ilk 9 herfi "not_input" dursa demeli o input deyil manual deyer olaraq qebul edilir
            $additional_id  = substr($value, 0, 9);
            $additional_img  = substr($value, 0, 8);

//          inputlarin arrayinde gelen deyerin uzunluqu 9 dan boyukdurse bu if e kecir (eger 9 hrefden boyukdurse demeli "not_input" yazilmis ola biler )
            if (strlen($value) > 9){

//              eger inputun ilk 9 herfi "not_input" dursa onu postnan cagirmir sadece default deyer kimi goturur
                if ($additional_id != "not_input"){
                    $post_data = strip_tags($this->input->post($value));
                }else{
                    $post_data = substr($value, 9);
                }

            }else{
                if (strlen($value) != 0){
                    $post_data = strip_tags($this->input->post($value));
                }
            }

//          eger sekil upload olunsa sekilin name-ni db ya add ele eks halda default sekil add ele
            if ($additional_img == "img_name"){
                $this->img_key = $key;
            }

//          eger post data bosdursa cond 0 olsun
            if (empty($post_data) && $additional_img != "img_name"){
                $cond = 0;
            }

//          modele gonderilecek data nin doldurulmasi
            $data[$key] = $post_data;

        }


        if ($cond == 1){
            $is_upload = $this->upload->do_upload($inputs_img_name);
            if ($is_upload){
                $post_data = $this->upload->data('file_name');
            }else{
                $post_data = "default.png";
            }

            $data[$this->img_key] = $post_data;

        }


//      eyer cond 1 dise succes linke success alerti ile birlikde redirect edir
        if ($cond == 1){

//          core ucun modelde yazilmis xususi insert metodu
            $this->Model_for_core->core_add($data, $table_name);

            $this->session->set_flashdata("success", "Məlumat Əlavə Edildi!");
            redirect($success_link);

//      eyer cond 0 dise error linke error alerti ile birlikde redirect edir
        }else{
            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect($error_link);
        }


    }

    public function insert_db($inputs_array, $success_link, $error_link, $table_name){

//      post metoduynan qebul edilen deyerler bu arrayin icine toplanir ve data olaraq db ya insert olur
        $data = array();

//      eyer cond 1 dise proses ugurla basa catib eger 0 qaytarirsa demeli prosesde xeta var ve geri seyfeye aler sessionla birlikde qayidir
        $cond = 1;

//      type text ve password olan inputlarin namelerinin arraylari fore eache salinaraq data arrayina doldurulur(xususi filterler metodlardan kecerek)
        foreach ($inputs_array as $key => $value){

//          inputlarin arrayinin icinde gelen deyerin ilk 9 herfi "not_input" dursa demeli o input deyil manual deyer olaraq qebul edilir
            $additional_id  = substr($value, 0, 9);

//          inputlarin arrayinde gelen deyerin uzunluqu 9 dan boyukdurse bu if e kecir (eger 9 hrefden boyukdurse demeli "not_input" yazilmis ola biler )
            if (strlen($value) > 9){

//              eger inputun ilk 9 herfi "not_input" dursa onu postnan cagirmir sadece default deyer kimi goturur
                if ($additional_id != "not_input"){
                    $post_data = strip_tags($this->input->post($value));
                }else{
                    $post_data = substr($value, 9);
                }

            }else{
                if (strlen($value) != 0){
                    $post_data = strip_tags($this->input->post($value));
                }
            }


//          eger post data bosdursa cond 0 olsun
            if (empty($post_data)){
                $cond = 0;
            }

//          modele gonderilecek data nin doldurulmasi
            $data[$key] = $post_data;

        }

//      eyer cond 1 dise succes linke success alerti ile birlikde redirect edir
        if ($cond == 1){

//          core ucun modelde yazilmis xususi insert metodu
            $this->Model_for_core->core_add($data, $table_name);

            $this->session->set_flashdata("success", "Məlumat Əlavə Edildi!");
            redirect($success_link);

//      eyer cond 0 dise error linke error alerti ile birlikde redirect edir
        }else{
            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect($error_link);
        }


    }

//======================================== Dinamik Insert functionlari ===================================================





//======================================== Dinamik Update functionlari ===================================================

    public function update_db_img($where, $inputs_array, $inputs_img_name, $success_link, $error_link, $upload_path, $table_name){

        $row = $this->Model_for_core->core_get_where_row($where, $table_name);

//      sekiller upload edilir
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES[$inputs_img_name]['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
//      sekiller upload edilir


//      post metoduynan qebul edilen deyerler bu arrayin icine toplanir ve data olaraq db ya insert olur
        $data = array();

//      eyer cond 1 dise proses ugurla basa catib eger 0 qaytarirsa demeli prosesde xeta var ve geri seyfeye aler sessionla birlikde qayidir
        $cond = 1;

//      type text ve password olan inputlarin namelerinin arraylari fore eache salinaraq data arrayina doldurulur(xususi filterler metodlardan kecerek)
        foreach ($inputs_array as $key => $value){

//          inputlarin arrayinin icinde gelen deyerin ilk 9 herfi "not_input" dursa demeli o input deyil manual deyer olaraq qebul edilir
            $additional_id  = substr($value, 0, 9);
            $additional_img  = substr($value, 0, 8);

//          inputlarin arrayinde gelen deyerin uzunluqu 9 dan boyukdurse bu if e kecir (eger 9 hrefden boyukdurse demeli "not_input" yazilmis ola biler )
            if (strlen($value) > 9){

//              eger inputun ilk 9 herfi "not_input" dursa onu postnan cagirmir sadece default deyer kimi goturur
                if ($additional_id != "not_input"){
                    $post_data = strip_tags($this->input->post($value));
                }else{
                    $post_data = substr($value, 9);
                }

            }else{
                if (strlen($value) != 0){
                    $post_data = strip_tags($this->input->post($value));
                }
            }

//          eger sekil upload olunsa sekilin name-ni db ya add ele eks halda default sekil add ele
            if ($additional_img == "img_name"){
                $this->img_key = $key;
            }

//          eger post data bosdursa cond 0 olsun
            if (empty($post_data) && $additional_img != "img_name"){
                $cond = 0;
            }

//          modele gonderilecek data nin doldurulmasi
            $data[$key] = $post_data;

        }


        if ($cond == 1){
            $is_upload = $this->upload->do_upload($inputs_img_name);

            if ($is_upload && $row[$this->img_key] != "default.png"){
                unlink($upload_path . $row[$this->img_key]);
            }

            if ($is_upload){
                $post_data = $this->upload->data('file_name');
            }else{
                $post_data = $row[$this->img_key];
            }

            $data[$this->img_key] = $post_data;

        }


//      eyer cond 1 dise succes linke success alerti ile birlikde redirect edir
        if ($cond == 1){

//          core ucun modelde yazilmis xususi insert metodu
            $this->Model_for_core->core_update($where, $table_name, $data);

            $this->session->set_flashdata("success", "Məlumat Yeniləndi!");
            redirect($success_link);

//      eyer cond 0 dise error linke error alerti ile birlikde redirect edir
        }else{
            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect($error_link);
        }


    }

    public function update_db($where, $inputs_array, $success_link, $error_link, $table_name){

        $row = $this->Model_for_core->core_get_where_row($where, $table_name);

//      post metoduynan qebul edilen deyerler bu arrayin icine toplanir ve data olaraq db ya insert olur
        $data = array();

//      eyer cond 1 dise proses ugurla basa catib eger 0 qaytarirsa demeli prosesde xeta var ve geri seyfeye aler sessionla birlikde qayidir
        $cond = 1;

//      type text ve password olan inputlarin namelerinin arraylari fore eache salinaraq data arrayina doldurulur(xususi filterler metodlardan kecerek)
        foreach ($inputs_array as $key => $value){

//          inputlarin arrayinin icinde gelen deyerin ilk 9 herfi "not_input" dursa demeli o input deyil manual deyer olaraq qebul edilir
            $additional_id  = substr($value, 0, 9);

//          inputlarin arrayinde gelen deyerin uzunluqu 9 dan boyukdurse bu if e kecir (eger 9 hrefden boyukdurse demeli "not_input" yazilmis ola biler )
            if (strlen($value) > 9){

//              eger inputun ilk 9 herfi "not_input" dursa onu postnan cagirmir sadece default deyer kimi goturur
                if ($additional_id != "not_input"){
                    $post_data = strip_tags($this->input->post($value));
                }else{
                    $post_data = substr($value, 9);
                }

            }else{
                if (strlen($value) != 0){
                    $post_data = strip_tags($this->input->post($value));
                }
            }


//          eger post data bosdursa cond 0 olsun
            if (empty($post_data)){
                $cond = 0;
            }

//          modele gonderilecek data nin doldurulmasi
            $data[$key] = $post_data;

        }

//      eyer cond 1 dise succes linke success alerti ile birlikde redirect edir
        if ($cond == 1){

//          core ucun modelde yazilmis xususi insert metodu
            $this->Model_for_core->core_update($where, $table_name, $data);

            $this->session->set_flashdata("success", "Məlumat Yeniləndi!");
            redirect($success_link);

//      eyer cond 0 dise error linke error alerti ile birlikde redirect edir
        }else{
            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect($error_link);
        }


    }

//======================================== Dinamik Update functionlari ===================================================





//======================================== Dinamik Delete functionlari ===================================================

    public function delete_db_img($where, $success_link, $error_link, $upload_path, $table_name, $img_column_name){

        $row = $this->Model_for_core->core_get_where_row($where, $table_name);

        if ($row[$img_column_name] != "default.png" && !empty($row[$img_column_name])){
            unlink($upload_path . $row[$img_column_name]);
        }

        $result = $this->Model_for_core->delete_class($where, $table_name);

        if ($result == 1){
            $this->session->set_flashdata("success", "Məlumat Silindi!");
            redirect($success_link);
        }else{
            $this->session->set_flashdata("alert", "Xəta Baş Verdi!");
            redirect($error_link);
        }

    }

    public function delete_db($where, $success_link, $error_link, $table_name){

        $result = $this->Model_for_core->delete_class($where, $table_name);

        if ($result == 1){
            $this->session->set_flashdata("success", "Məlumat Silindi!");
            redirect($success_link);
        }else{
            $this->session->set_flashdata("alert", "Xəta Baş Verdi!");
            redirect($error_link);
        }

    }

//======================================== Dinamik Delete functionlari ===================================================




//======================================== Dinamik Ajax update functionlari ===================================================

    public function update_db_ajax($where, $data_post, $table_field_post ,$table_name){

        $changed_data = strip_tags($this->input->post($data_post));

        $table_field_name = strip_tags($this->input->post($table_field_post));

        $data = array(
          $table_field_name => $changed_data
        );

        $this->Model_for_core->core_update($where, $table_name, $data);

    }

    public function update_db_ajax_img($where, $upload_path, $input_name, $field_name ,$table_name, $link){

        $row = $this->CarModel_model->get_model_row($where);

        //      sekiller upload edilir
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES[$input_name]['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("file");

        if ($cond && $row[$field_name] != "default.png"){
            unlink($upload_path . $row[$field_name]);
        }

        $data = array(
            $field_name => ($cond) ? $this->upload->data('file_name') : $row[$field_name],
        );

        $this->Model_for_core->core_update($where, $table_name, $data);

        if ($cond){
            $this->session->set_flashdata("success", "Şəkil Yeniləndi!");
        }else{
            $this->session->set_flashdata("alert", "Şəkil Yenilənmədi!");
        }

        redirect($link);


    }

//======================================== Dinamik Ajax update functionlari ===================================================


//======================================== Dinamik Ajax Sekil upload(galereya) functionlari ===================================================

    public function insert_db_ajax_img($upload_date_field_name, $upload_path, $input_name, $field_name ,$table_name){

        //      sekiller dropzonedan upload edilir
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES[$input_name]['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("file");


        //      upload edilecek sekil database e yuklenir
        $data  = array(
            $field_name                => ($cond) ? $this->upload->data('file_name') : "default.png",
            $upload_date_field_name    => date("Y/m/d"),
        );


        //      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if ($cond){
            $this->session->set_flashdata("success", "Şəkil Yükləndi!");
        }else{
            $this->session->set_flashdata("alert", "Şəkil Yüklənmədi!");
        }

        $this->Model_for_core->core_add($data, $table_name);


    }

//======================================== Dinamik Ajax Sekil upload(galereya) functionlari ===================================================




//======================================== Dinamik Data table kodlari ===================================================

    public function data_table($valid_columns, $table_name, $upload_path)
    {
        $draw = intval($this->input->post("draw"));
        $start = intval($this->input->post("start"));
        $length = intval($this->input->post("length"));
        $order = $this->input->post("order");
        $search= $this->input->post("search");
        $search = $search['value'];
        $col = 0;
        $dir = "";



        if(!empty($order))
        {
            foreach($order as $o)
            {
                $col = $o['column'];
                $dir= $o['dir'];
            }
        }

        if($dir != "asc" && $dir != "desc")
        {
            $dir = "desc";
        }


//        $valid_columns = array(
//            0=>'emp_no',
//            1=>'birth_date',
//            2=>'first_name',
//            3=>'last_name',
//            4=>'gender',
//            5=>'hire_date',
//        );



        if(!isset($valid_columns[$col]))
        {
            $order = null;
        }
        else
        {
            $order = $valid_columns[$col];
        }
        if($order !=null)
        {
            $this->db->order_by($order, $dir);
        }

        if(!empty($search))
        {
            $x=0;
            foreach($valid_columns as $sterm)
            {
                if($x==0)
                {
                    $this->db->like($sterm,$search);
                }
                else
                {
                    $this->db->or_like($sterm,$search);
                }
                $x++;
            }
        }
        $this->db->limit($length,$start);
        $employees = $this->db->get($table_name);
        $data = array();
//        foreach($employees->result() as $rows)
//        {
//
//            $data[]= array(
////                $rows->emp_no,
//                $rows->birth_date,
//                $rows->first_name,
//                $rows->last_name,
//                $rows->gender,
//                $rows->hire_date,
//                '<a href="#" class="btn btn-warning mr-1">Edit</a>
//                 <a href="#" class="btn btn-danger mr-1">Delete</a>',
//
//            );
//        }


//        menim duzeltdiyim kodlar
        foreach ($employees->result_array() as $key => $item) {
            $item = array_values($item);

            foreach ($item as $k=>$v){
                if (substr($v, -4) == ".jpg" || substr($v, -4) == ".png" || substr($v, -4) == ".jpeg"){
                    $item[$k] = '<img width="100px" height ="100px" style="object-fit:contain" src="' . $upload_path . $v .'" alt="Sekil">';
                }else{
                    $item[$k] = '<span class="c_update_link" data-url = "'  . '">' . $v . '</span>';
                }
            }

            $data[] = $item;
        }
        foreach ($data as $element => $val) {
            $val[] = '<a class="btn btn-warning mr-1" onclick="document.querySelector(\'.dialog\').classList.add(\'open\')" >Edit</a> <a class="btn btn-danger mr-1">Delete</a>';

            $data[$element] = $val;
        }
//        menim duzeltdiyim kodlar




        $total_employees = $this->data_table_2($table_name);
        $output = array(
            "draw" => $draw,
            "recordsTotal" => $total_employees,
            "recordsFiltered" => $total_employees,
            "data" => $data,
        );
        echo json_encode($output);
        exit();
    }

    public function data_table_2($table_name)
    {
        $query = $this->db->select("COUNT(*) as num")->get($table_name);
        $result = $query->row();
        if(isset($result)) return $result->num;
        return 0;
    }

//======================================== Dinamik Data table kodlari ===================================================




/* Viewdaki alertlerin gorsenmesi ucun lazim olan kodlar sadece kopyalayib viewdeki php faylinin icine atin


<!--melumat alerti-->
<?php if($this->session->flashdata("success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("success")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>


<!--melumat alerti-->
<?php if($this->session->flashdata("alert")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>


   Viewdaki alertlerin gorsenmesi ucun lazim olan kodlar sadece kopyalayib viewdeki php faylinin icine atin */


}