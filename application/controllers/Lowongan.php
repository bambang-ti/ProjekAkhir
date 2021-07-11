<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {
    public function index()
	{   
        $this->load->model('lowongan_model');
        $data['lowongan']=$this->lowongan_model->getAll(); //query

        $this->load->view('header');
		$this->load->view('lowongan/index', $data);
        $this->load->view('footer');
	}
    public function view($id){
        $this->load->model('lowongan_model');
		$lowongan = $this->lowongan_model->findById($id);
        $this->load->model('mitra_model');
        $data['mitra']=$this->mitra_model->findById($lowongan->mitra_id);
		$data['lowongan']=$lowongan;
        $this->load->view('header');
        $this->load->view('lowongan/view',$data);
        $this->load->view('footer');
    }

	public function tambah(){
		$this->load->model('mitra_model','mitra');
		$data['list_mitra'] = $this->mitra->getAll();

		$this->load->view('header');
		$this->load->view('lowongan/form_lowongan',$data);
		$this->load->view('footer');
	}


    public function edit($id){
		$this->load->model('lowongan_model','lowongan');
		$editLowongan = $this->lowongan->findById($id);
        $data['editLowongan'] = $editLowongan;

		$this->load->view('header');
		$this->load->view('lowongan/edit', $data);
		$this->load->view('footer');
	}
    public function save(){
		$_desc_pekerjaan = $this->input->post('deskripsi_pekerjaan');
		$_tglAkhir = $this->input->post('tanggal_akhir');
		$_email = $this->input->post('email');
		$_deskripsi = $this->input->post('deskripsi');
		$_update = $this->input->post('update');

		$this->load->model('lowongan_model','lowongan');
		$data_lowongan = [$_desc_pekerjaan,$_tglAkhir,$_email,$_deskripsi];

		if($this->session->has_userdata('username') == 'admin'){
			if(!empty($_update)){ //update
				$data_lowongan['id'] = $_update;
				$this->lowongan->update($data_lowongan);
			}else{
				$this->lowongan->simpan($data_lowongan);
	
			}
		}else{
			echo '<script>alert("Role tidak diizinkan")</script>';
			redirect(base_url(),'refresh');
		}

		redirect('lowongan','refresh');
	}

    public function delete($id){
		$this->load->model('lowongan_model','lowongan');
		$data_lowongan['id'] = $id;
		// pastikan role diizinkan
		if($this->session->has_userdata('username') == 'admin'){
			$this->lowongan->delete($data_lowongan);
			redirect('lowongan', 'refresh');
		}else{
			echo '<script>alert("Role tidak diizinkan")</script>';
			redirect(base_url(),'refresh');
		}
	}

    
    public function simpan_lowongan(){
		$_desc_pekerjaan = $this->input->post('deskripsi_pekerjaan');
		$_tglAkhir = $this->input->post('tanggal_akhir');
		$mitra_id = $this->input->post('mitra_id');
		$_email = $this->input->post('email');
		$_deskripsi = $this->input->post('deskripsi');
		$_update = $this->input->post('update');

		$this->load->model('lowongan_model','lowongan');
		$data_lowongan = [$_desc_pekerjaan,$_tglAkhir,$mitra_id,$_email,$_deskripsi];

		if(!empty($_update)){ //update
			$data_lowongan['id'] = $_update;
			$this->lowongan->simpan($data_lowongan);
		}else{
			$this->lowongan->simpan($data_lowongan);

		}

		redirect('lowongan','refresh');
	}

}