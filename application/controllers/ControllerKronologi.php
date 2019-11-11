<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerKronologi extends CI_Controller {

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
		
		$databeranda['tampil']=$this->db->query("select * from tbl_kronologi");

		$databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_pelayanan");
		$databeranda['content']='kronologi/v_kronologi';
		$this->load->view('admin/home',$databeranda);
	}

	public function untuk_user(){
		$databeranda['tampil']=$this->db->query("select * from tbl_kronologi where id_user='".$_SESSION['id_user']."' ");

		$databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_pelayanan");
		$databeranda['content']='kronologi/v_kronologi';
		$this->load->view('admin/home',$databeranda);
	}

	public function datakronologi(){
		$databeranda['tampil']=$this->db->query("select * from tbl_kronologi where flag='0'");

		$databeranda['tampil_join']=$this->db->query("SELECT * FROM tbl_kronologi INNER JOIN tbl_tanggapan on tbl_tanggapan.id = tbl_kronologi.id");

		$databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_pelayanan");
		$databeranda['content']='kronologi/data_kronologi';
		$this->load->view('admin/home',$databeranda);
	}

	public function datakronologiuser(){
		$databeranda['tampil']=$this->db->query("select * from tbl_kronologi where flag='0' and id_user='".$_SESSION['id_user']."'");

		$databeranda['tampil_join']=$this->db->query("SELECT * FROM tbl_kronologi INNER JOIN tbl_tanggapan on tbl_tanggapan.id = tbl_kronologi.id where id_user='".$_SESSION['id_user']."' ");

		$databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_pelayanan");
		$databeranda['content']='kronologi/data_kronologi_user';
		$this->load->view('admin/home',$databeranda);
	}

	public function tanggapan(){
		$id=$this->uri->segment(3);
		$databeranda['data_tanggapan']=$this->db->query("select * from tbl_kronologi where id='".$id."'");

		// $where=array('id'=>$id);
		// $this->RsModel->HapusData('tbl_kronologi',$where);
		// $this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil dihapus</div>");
		$databeranda['content']='kronologi/tanggapan';
		$this->load->view('admin/home',$databeranda);
	}

	public function simpan_tanggapan(){
		$data['id']=$this->input->post("id");
		$id=$this->input->post("id");
		// $data['id_pelayanan']=$this->input->post("jenis_pelayanan");
		$data['tanggapan']=$this->input->post("tanggapan");
		$tanggapan_admin = $this->input->post("tanggapan");

		$temp_email = $this->db->query('select * from tbl_user JOIN tbl_kronologi on tbl_kronologi.id_user = tbl_user.id_user where tbl_kronologi.id = "'.$id.'" ')->result_array();

		// print_r($temp_email[0]['email']);die;

		//email kirim ke pengaduan
		$config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'aldoduarsa.webpengaduan@gmail.com',  // Email gmail
            'smtp_pass'   => 'aldo1997',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('aldoduarsa.webpengaduan@gmail.com', 'Lauren');

        // Email penerima
        $this->email->to($temp_email[0]['email']); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Layanan Pengaduan Kekerasan Perempuan dan Anak P2TP2A Provinsi Lampung');

        // Isi email
        $this->email->message("Ini adalah email balasan atas pengaduan anda yang dikirim ke Layanan Pengaduan Kekerasan Perempuan dan Anak P2TP2A Provinsi Lampung.
        	<br><br> Tanggapan Admin : $tanggapan_admin");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
        	$this->RsModel->TambahData("tbl_tanggapan",$data);
			$this->db->query("update tbl_kronologi set flag='1' where id='".$id."'");
			$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil disimpan dan berhasil dikirim ke email.</div>");
		header('location:'.base_url().'DataKronologi');
        } else {
        	$this->session->set_flashdata("notif","<div class='alert alert-success'>Data gagal disimpan dan gagal dikirim ke email.</div>");
			header('location:'.base_url().'DataKronologi');
        }


		
	}

	public function simpan(){
			$data['nama']=$this->input->post("nama");
			$data['id_pelayanan']=$this->input->post("jenis_pelayanan");
			$data['kronologi']=$this->input->post("kronologi");
			$data['flag']='0';
			
			$data['file']= $_FILES['file']['name'];
			$data['id_user']=$_SESSION['id_user'];
			$config['upload_path']          = './img/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf';

		    $config['file_name']            = $_FILES['file']['name'];
		    
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;
		    

		    $this->load->library('upload', $config);
		    if ($this->upload->do_upload('file')) {
		        $this->upload->data("file_name");
		        $this->RsModel->TambahData("tbl_kronologi",$data);
				$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil disimpan</div>");
				header('location:'.base_url().'KelolaKronologiUser');
		    }else{
		    	$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data gagal disimpan</div>");
				header('location:'.base_url().'KelolaKronologiUser');
		    }
			
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$where=array('id'=>$id);
		$this->RsModel->HapusData('tbl_kronologi',$where);
		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil dihapus</div>");
		header('location:'.base_url().'KelolaKronologi');
	}


	public function edit(){
		$databeranda['tampil_pelayanan']=$this->db->query("select * from tbl_pelayanan");

		$id=$this->uri->segment(3);
		$where=array('id'=>$id);
		$databeranda['data_edit']=$this->db->query("select * from tbl_kronologi where id='".$id."' ");
		$databeranda['content']='kronologi/edit_kronologi';
		$this->load->view('admin/home',$databeranda);
	}

	public function edit_kronologi(){
			
			$where['id']=$this->input->post('id');
			$data['nama']=$this->input->post("nama");
			$data['kronologi']=$this->input->post("kronologi");
			$data['id_pelayanan']=$this->input->post("jenis_pelayanan");
			// $data['file']='aaa';
			$data['id_user']=$this->input->post("id_user");
			$data['flag']=$this->input->post("flag");
			// $data['file']= $_FILES['file']['name'];

			// print_r($data['file']);die;
			
			$config['upload_path']          = './img/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf';
		    $config['file_name']            = $_FILES['file']['name'];
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    // print_r($config['file_name']);die;

		    if (empty($config['file_name'])) {
		   		// print_r($data);die;
		   		$this->RsModel->EditData("tbl_kronologi",$data,$where);
		   		// $this->RsModel->EditData("tbl_admin",$data,$where);

		   		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil diedit</div>");
				header('location:'.base_url().'KelolaKronologi');
		   //  	}else{
		   //  		$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data gagal disimpan</div>");
					// header('location:'.base_url().'KelolaKronologi');
		   //  	}	
		   	
		   	}else{
		   		$this->load->library('upload', $config);
		   		$data['file']= $_FILES['file']['name'];
		    	if ($this->upload->do_upload('file')) {
		        	$this->upload->data("file_name");
		         

		        // $this->RsModel->TambahData("tbl_kronologi",$data);
					$this->RsModel->EditData("tbl_kronologi",$data,$where);

					$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil diedit</div>");
					header('location:'.base_url().'KelolaKronologi');
		    	}else{
		    		$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data gagal diedit</div>");
					header('location:'.base_url().'KelolaKronologi');
		    	}
		   	}


		    // $this->load->library('upload', $config);


		  //   if ($this->upload->do_upload('file')) {
		  //       $this->upload->data("file_name");
		  //       $this->RsModel->TambahData("tbl_kronologi",$data);
				// $this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil disimpan</div>");
				// header('location:'.base_url().'KelolaKronologi');
		  //   }else{
		  //   	$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data gagal disimpan</div>");
				// header('location:'.base_url().'KelolaKronologi');
		  //   }


	// 	    if (!empty($_FILES["file"]["name"])) {
	// 	    	// print_r("wowkwo");die;
 //    			// $this->image = $this->_uploadImage();
 //    			if ($this->upload->do_upload('file')) {
	//     			$this->upload->data();
	// 				$data['file']=$this->upload->data('file_name');
	// 				// $this->load->view('v_upload_sukses', $data);
	// 				// $this->RsModel->TambahData("tbl_bayar_dp",$data);
	// 				$this->RsModel->EditData("tbl_kronologi",$data,$where);
	// 				$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil diedit</div>");
	// 				header('location:'.base_url().'KelolaKronologi');
	// 			}else{
	// 				$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data gagal diedit</div>");
	// 				header('location:'.base_url().'KelolaKronologi');
	// 			}

			
	// 		} else {
	// 				if ($this->upload->do_upload('file')) {
	//     			$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data gagal diedit</div>");
	// 				header('location:'.base_url().'KelolaKronologi');
	// 			}else{
	// 				$this->upload->data();
	// 				$data['file']=$this->input->post('file_name');
	// 				// $this->load->view('v_upload_sukses', $data);
	// 				// $this->RsModel->TambahData("tbl_bayar_dp",$data);
	// 				$this->RsModel->EditData("tbl_kronologi",$data,$where);
	// 				$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil diedit</div>");
	// 				header('location:'.base_url().'KelolaKronologi');
	// 			}
	// 		}
	// }
		   }

public function notif(){
		$q = $this->db->query("select count(id) as notif from tbl_kronologi where flag='0' ")->result_array();
		// print_r($q['0']['notif']);die;
		
		if ($q['0']['notif'] == '0') {
			$data = array(
		   'notification' => ''
			);
		}else {
			$data = array(
		   'notification' => $q['0']['notif']
		);
		}
		
		echo json_encode($data);
		// print_r($data);die;

	}

}
