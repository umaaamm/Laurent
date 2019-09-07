<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLoginUser extends CI_Controller {

	public function index()
	{
	//	$databeranda['content']='admin/v-beranda';
		$this->load->view('v_login_user');
	}
		//login
	function aksi_login_user(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		//$cek = $this->RsModel->cek_login("tbl_admin",$where)->num_rows();
		$cek = $this->db->query("SELECT * FROM tbl_user WHERE email='$username' AND password='$password' ");
		// $cek1 = $this->db->query("SELECT * FROM tbl_bagian WHERE username='$username' AND password='$password' ");
		if($cek->num_rows() > 0){
				foreach($cek->result() as $key){
				$lvl = $key->level;
				$nama = $key->nama;
				$id=$key->id_user;
			}
				$data_session = array(
				'id_user' => $id,
				'nama' => $nama,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata("notif_l","<div class='alert alert-success'>Selamat Anda Berhasil Login</div>");
				redirect('ControllerUtama');
 		}else{
			$this->session->set_flashdata("notif_l","<div class='alert alert-danger'>Password atau Username anda Salah</div>");
			redirect('User');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'User');
	
	}

}