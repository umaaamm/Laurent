<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerUtama extends CI_Controller {

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


	function __construct(){
	parent::__construct();
	
			if($this->session->userdata('status') != "login"){
			redirect(base_url('User'));
		}
	}

	public function index()
	{
		$databeranda['jumlah_pengaduan']=$this->db->query("select count(id_user) as total from tbl_user");
		$databeranda['jumlah_user']=$this->db->query("select count(id) as total from tbl_kronologi");
		$databeranda['jumlah_tanggapan']=$this->db->query("select count(id_tanggapan) as total from tbl_tanggapan");
		// $databeranda['jumlah_sum_masuk']="0";
		// $databeranda['jumlah_sum_tersedia']="0";
		$databeranda['content']='admin/v_beranda';
		$this->load->view('admin/home',$databeranda);
	}
}
