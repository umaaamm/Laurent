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
			// print_r($data);die;
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
	public function lupa_pass(){
		$this->load->view('lupapass');
	}

	public function lupa_pass_email(){
		$data['email']=$this->input->post("email");
		$data['no_kk']=$this->input->post("no_kk");

		$cek =  $this->db->query('select * from tbl_user where no_kk= "'.$data['no_kk'].'" ');
		if($cek->num_rows() > 0){
			$temp=$cek->result_array();

			$pass_new = rand();
			$data_pass['password'] = $pass_new;
			$where['id_user']=$temp[0]['id_user'];

			$config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'aldoduarsa.trial@gmail.com',  // Email gmail
            'smtp_pass'   => 'aldotrial28',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('aldoduarsa.trial@gmail.com', 'Lauren');

        // Email penerima
        $this->email->to($data['email']); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Layanan Pengaduan Kekerasan Perempuan dan Anak P2TP2A Provinsi Lampung');

        // Isi email
        $this->email->message("Ini adalah email yang dikirim oleh Layanan Pengaduan Kekerasan Perempuan dan Anak P2TP2A Provinsi Lampung.<br><br> berikut merupakan password baru anda : <strong>$pass_new</strong>.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
			$this->RsModel->EditData("tbl_user",$data_pass,$where);
			$this->session->set_flashdata("notif_l","<div class='alert alert-success'>Berhasil merubah password, silahkan cek email anda untuk melihat password baru anda.</div>");
			header('location:'.base_url().'User');

        }else{
        	$this->session->set_flashdata("notif_l","<div class='alert alert-success'>Gagal merubah password, silahkan silahkan ulangi kembali.</div>");
			header('location:'.base_url().'User');

        }
			
		}
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
			$verif = $this->input->post("no_kk");
			$email_penerima = $this->input->post("email");

			// print_r($verif);die;
			//email
		$config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'aldoduarsa.trial@gmail.com',  // Email gmail
            'smtp_pass'   => 'aldotrial28',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('aldoduarsa.trial@gmail.com', 'Lauren');

        // Email penerima
        $this->email->to($email_penerima); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Layanan Pengaduan Kekerasan Perempuan dan Anak P2TP2A Provinsi Lampung');

        // Isi email
        $this->email->message("Ini adalah email yang dikirim oleh Layanan Pengaduan Kekerasan Perempuan dan Anak P2TP2A Provinsi Lampung.<br><br> Klik <strong><a href='http://localhost/lauren/ControllerUser/verif/$verif' target='_blank' rel='noopener'>disini</a></strong> untuk melihat melakukan verifikasi akun.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
        	// print_r("ekoekoek");die;
            // echo 'Sukses! email berhasil dikirim.';
            $this->RsModel->TambahData("tbl_user",$data);
			$this->session->set_flashdata("notif_l","<div class='alert alert-success'>Data berhasil ditambah, Silahkan lakukan verifikasi akun anda di email yang kami kirim.</div>");
			header('location:'.base_url().'User');
        } else {
        	        	// print_r("gagal");die;

            // echo 'Error! email tidak dapat dikirim.';
            $this->session->set_flashdata("notif_l","<div class='alert alert-success'>Data gagal ditambah, Silahkan lakukan pendaftaran ulang.</div>");
			header('location:'.base_url().'User');
        }

			// print_r($data);die;
			
	}

	public function verif(){
		$where['no_kk']=$this->uri->segment(3);
		// $where=array('id_user'=>$id);
		// $where['id']=$this->input->post('id');
		$data['verif']='1';
		// print_r($where);die;
		$this->RsModel->EditData("tbl_user",$data,$where);
		$this->session->set_flashdata("notif","<div class='alert alert-success'>Berhasil memverifikasi Email, Silahkan login.</div>");
		header('location:'.base_url().'User');
	}

}
