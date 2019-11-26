<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerInformasi extends CI_Controller {

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
		$databeranda['tampil']=$this->db->query('select * from tbl_informasi');
		$databeranda['content']='informasi/i_kekerasan';
		$this->load->view('admin/home',$databeranda);
	}

	public function isi_informasi(){
		$databeranda['tampil']=$this->db->query('select * from tbl_informasi');
		$databeranda['content']='informasi/v_informasi';
		$this->load->view('admin/home',$databeranda);
	}

	public function edit_action(){
			$where['id']=$this->input->post('id');
			$data['latar_belakang']=$this->input->post("latar_belakang");
			$data['informasi_kekerasan']=$this->input->post("informasi_kekerasan");
			$data['informasi_uu']=$this->input->post("informasi_uu");
			$data['informasi_p2']=$this->input->post("informasi_p2");
			$data['informasi_kemitraan']=$this->input->post("informasi_kemitraan");
			//print_r($data);die;
			$this->RsModel->EditData("tbl_informasi",$data,$where);
			$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil ditambah</div>");
			header('location:'.base_url().'Informasi_input');
	}

	public function edit(){
		$id=$this->uri->segment(3);
		$where=array('id'=>$id);
		$databeranda['data_edit']=$this->db->query("select * from tbl_informasi where id='".$id."' ");
		$databeranda['content']='informasi/v_informasi_edit';
		$this->load->view('admin/home',$databeranda);
	}
	
	

}
