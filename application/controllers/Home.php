<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data_rekrutmen = file_get_contents("http://103.226.55.159/json/data_rekrutmen.json");
        $data_attribut  = file_get_contents("http://103.226.55.159/json/data_attribut.json");
        $datas          = json_decode($data_rekrutmen, true);
        $data['datas']  = $datas['Form Responses 1'];        

        $this->load->view('template', $data);


    }
}

/* End of file Home.php and path \application\controllers\Home.php */