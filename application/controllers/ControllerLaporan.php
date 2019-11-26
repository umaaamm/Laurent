<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLaporan extends CI_Controller {

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
		$databeranda['tampil']=$this->db->query("select * from tbl_kronologi where flag='0'");
		// $databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_kronologi where flag='0'");

		$databeranda['tampil_join']=$this->db->query("SELECT * FROM tbl_kronologi INNER JOIN tbl_tanggapan on tbl_tanggapan.id = tbl_kronologi.id");

		$databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_pelayanan");
		$databeranda['content']='laporan/v_laporan';
		$this->load->view('admin/home',$databeranda);
	}


	public function laporan_user(){
		$databeranda['tampil']=$this->db->query("select * from tbl_kronologi where flag='0' and id_user='".$_SESSION['id_user']."'");
		$databeranda['tampil_join']=$this->db->query("SELECT * FROM tbl_kronologi INNER JOIN tbl_tanggapan on tbl_tanggapan.id = tbl_kronologi.id where id_user='".$_SESSION['id_user']."' ");
		$databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_pelayanan");
		$databeranda['content']='laporan/v_laporan_user';
		$this->load->view('admin/home',$databeranda);
	}

	public function filter(){
		$radio='periode';
		$tanggal1 = $this->input->post("tanggal1");
		$tanggal2 = $this->input->post("tanggal2");
		$id_pelayanan = $this->input->post("jenis_pelayanan");

		if ($radio == 'periode' && $id_pelayanan != '-' ) {
				$databeranda['tampil_join']=$this->db->query("SELECT * FROM tbl_kronologi INNER JOIN tbl_tanggapan on tbl_tanggapan.id = tbl_kronologi.id WHERE waktu BETWEEN '".$tanggal1."' AND '".$tanggal2."' and id_pelayanan='".$id_pelayanan."' ");
		}else{
			$databeranda['tampil_join']=$this->db->query("SELECT * FROM tbl_kronologi INNER JOIN tbl_tanggapan on tbl_tanggapan.id = tbl_kronologi.id WHERE waktu BETWEEN '".$tanggal1."' AND '".$tanggal2."' ");
			}
			
		$databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_pelayanan");
		$databeranda['content']='laporan/v_laporan';
		$this->load->view('admin/home',$databeranda);
	}

	public function filter_user(){
		$radio=$this->input->post("optionsRadios");
		$tanggal1 = $this->input->post("tanggal1");
		$tanggal2 = $this->input->post("tanggal2");

		if ($radio == 'periode') {
				$databeranda['tampil_join']=$this->db->query("SELECT * FROM tbl_kronologi INNER JOIN tbl_tanggapan on tbl_tanggapan.id = tbl_kronologi.id WHERE waktu BETWEEN '".$tanggal1."' AND '".$tanggal2."' AND id_user='".$_SESSION['id_user']."' ");
		}else{
			$databeranda['tampil_join']=$this->db->query("SELECT * FROM tbl_kronologi INNER JOIN tbl_tanggapan on tbl_tanggapan.id = tbl_kronologi.id where id_user='".$_SESSION['id_user']."'");
			}
			
		$databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_pelayanan");
		$databeranda['content']='laporan/v_laporan_user';
		$this->load->view('admin/home',$databeranda);
	}




	
	

	

}
