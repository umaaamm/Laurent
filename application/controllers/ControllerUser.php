<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerUser extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$databeranda['tampil']=$this->db->query("select * from tbl_user");
		$databeranda['content']='admin/v_user';
		$this->load->view('admin/home',$databeranda);
	}

	public function simpan(){
			$data['nama']=$this->input->post("nama");
			$data['ttl']=$this->input->post("ttl");
			$data['email']=$this->input->post("email");
			$data['no_kk']=$this->input->post("no_kk");
			$data['no_ktp']=$this->input->post("no_ktp");
			$data['no_telpon']=$this->input->post("no_telpon");
			$data['alamat']=$this->input->post("alamat");
			$data['password']=$this->input->post("password");
			//print_r($data);die;
			$this->RsModel->TambahData("tbl_user",$data);
			$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil ditambah</div>");
			header('location:'.base_url().'KelolaUser');
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$where=array('id_user'=>$id);
		$this->RsModel->HapusData('tbl_user',$where);
		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil dihapus</div>");
		header('location:'.base_url().'KelolaUser');
	}

	public function edit(){
			$where['id']=$this->input->post('id');
			$data['nama']=$this->input->post("nama");
			$data['ttl']=$this->input->post("ttl");
			$data['email']=$this->input->post("email");
			$data['no_kk']=$this->input->post("no_kk");
			$data['no_ktp']=$this->input->post("no_ktp");
			$data['no_telpon']=$this->input->post("no_telpon");
			$data['alamat']=$this->input->post("alamat");
			$data['password']=$this->input->post("password");
			//print_r($where);die;
			$this->RsModel->EditData("tbl_user",$data,$where);
			$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil diedit</div>");
			header('location:'.base_url().'KelolaUser');

	}
	public function daftar(){
		$this->load->view('user/v_user_daftar');
	}
	public function simpan_u(){
			$data['nama']=$this->input->post("nama");
			$data['ttl']=$this->input->post("ttl");
			$data['email']=$this->input->post("email");
			$data['no_kk']=$this->input->post("no_kk");
			$data['no_ktp']=$this->input->post("no_ktp");
			$data['no_telpon']=$this->input->post("no_telpon");
			$data['alamat']=$this->input->post("alamat");
			$data['password']=$this->input->post("password");
			//print_r($data);die;
			$this->RsModel->TambahData("tbl_user",$data);
			$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil ditambah</div>");
			header('location:'.base_url().'./');
	}

}
