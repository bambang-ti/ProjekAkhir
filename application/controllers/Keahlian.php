<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keahlian extends CI_Controller {
    public function index ()
    {
        $this->load->model('All_model', 'keahlian');
        $data['list_keahlian']=$this->keahlian->getALL('keahlian');

        $this->load->view('header');
        $this->load->view('keahlian/index',$data);
        $this->load->view('footer');
        
    }

    public function form (){
        $this->load->view('header');
        $this->load->view('keahlian/form_keahlian');
        $this->load->view('footer');
    }

    public function save (){
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');

        $this->load->model('All_model', 'keahlian');
        $data_keahlian = [$_nama];

        if($this->session->has_userdata('username') == 'admin'){
            if(!empty($_idedit)){ //update
                $data_keahlian['id'] = $_idedit;
                $this->keahlian->update('keahlian', $data_keahlian);
            }else{
                $this->keahlian->simpan('keahlian', $data_keahlian);
    
            }
            redirect('keahlian','refresh');
		}else{
			echo '<script>alert("Role tidak diizinkan")</script>';
			redirect(base_url(),'refresh');
		}
    }

    public function edit($id){
        $this->load->model('all_model','keahlian');
		$obj_keahlian = $this->keahlian->findById('keahlian',$id);

        $data['objkeahlian'] = $obj_keahlian;
        $this->load->view('header');
		$this->load->view('keahlian/edit', $data);
        $this->load->view('footer');
    }

    public function delete($id){
        $this->load->model('all_model','keahlian');
		$data_keahlian['id'] = $id;
		// pastikan role diizinkan
        if($this->session->has_userdata('username') == 'admin'){
            $this->keahlian->delete('keahlian', $data_keahlian);
            redirect('keahlian', 'refresh');
		}else{
			echo '<script>alert("Role tidak diizinkan")</script>';
			redirect(base_url(),'refresh');
		}
    }

}