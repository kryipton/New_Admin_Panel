<?php class HomeWebPageController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);

        $this->session->set_userdata("dil", $dil);
    }

    public function index()
    {
        $this->load->view("front/home/whole_page");
    }




}
