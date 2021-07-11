<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan_keahlian extends CI_Controller {
    public function index()
	{   
        $this->load->model('all_model');
        $data['lowongan']=$this->all_model->join();



        $this->load->view('header');
		$this->load->view('lowongan_keahlian/index', $data);
        $this->load->view('footer');

    }
}

?>