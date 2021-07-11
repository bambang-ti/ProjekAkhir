<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {
    public function index()
	{   
        $this->load->model('prodi_model', 'prodi');
        $data['list_prodi'] = $this->prodi->getAll();

        $this->load->view('header');
		$this->load->view('prodi/index',$data);
        $this->load->view('footer');
	}

    public function form(){
        $this->load->view('header');
		$this->load->view('prodi/form_prodi');
        $this->load->view('footer');
    }

    public function save(){
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');

        $this->load->model('prodi_model','prodi');
		$data_prodi = [$kode,$nama];

        if($this->session->has_userdata('username') == 'admin'){
            if(!empty($_idedit)){ //update
                $data_prodi['id'] = $_idedit;
                $this->prodi->update('prodi', $data_prodi);
            }else{
                $this->prodi->simpan('prodi', $data_prodi);
    
            }
            redirect('prodi','refresh');
		}else{
			echo '<script>alert("Role tidak diizinkan")</script>';
			redirect(base_url(),'refresh');
		}

    }

    public function edit($id){
        $this->load->model('prodi_model','prodi');
		$obj_prodi = $this->prodi->findById($id);

        $data['objprodi'] = $obj_prodi;
        $this->load->view('header');
		$this->load->view('prodi/edit', $data);
        $this->load->view('footer');
    }

    public function delete($id){
        $this->load->model('prodi_model','prodi');
		$data_prodi['id'] = $id;
		// pastikan role diizinkan
        if($this->session->has_userdata('username') == 'admin'){
            $this->prodi->delete('prodi', $data_prodi);
            redirect('prodi', 'refresh');
		}else{
			echo '<script>alert("Role tidak diizinkan")</script>';
			redirect(base_url(),'refresh');
		}
    }
}