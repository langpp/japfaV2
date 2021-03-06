<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('email') != true) { 
			redirect('login');
		}
		$this->load->model("M_Dashboard");
	}
	private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('dashboard/template/head', array("title" => $title), true),
			"sidebar" => $this->load->view('dashboard/template/sidebar', false, true),
			"header" => $this->load->view('dashboard/template/header', false, true),
			"main_js" => $this->load->view('dashboard/template/main_js', false, true),
			"footer" => $this->load->view('dashboard/template/footer', false, true)
		);
		return $page;
	}

	public function index()
	{
		$lemparan = array(
			'totalNews' => $this->M_Dashboard->totalNews(),
			'totalSubsciber' => $this->M_Dashboard->totalSubsciber(),
			'tenNews' => $this->M_Dashboard->tenNews(),
			'tenSubsciber' => $this->M_Dashboard->tenSubsciber(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Dashboard", $path),
			"content" =>$this->load->view('dashboard/dashboard/index', $lemparan, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function subscriber()
	{
		$lemparan = array(
			'allSubsciber' => $this->M_Dashboard->allSubsciber(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Subscriber", $path),
			"content" =>$this->load->view('dashboard/dashboard/subscriber', $lemparan, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function about()
	{
		$lemparan = array(
			'about' => $this->M_Dashboard->aboutUs(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("About", $path),
			"content" =>$this->load->view('dashboard/dashboard/about', $lemparan, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function news()
	{
		$lemparan = array(
			'allNews' => $this->M_Dashboard->allNews(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("News", $path),
			"content" =>$this->load->view('dashboard/dashboard/news', $lemparan, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function slider()
	{
		$lemparan = array(
			'allSlider' => $this->M_Dashboard->allSlider(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Slider", $path),
			"content" =>$this->load->view('dashboard/dashboard/slider', $lemparan, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function gallery()
	{
		$lemparan = array(
			'allGallery' => $this->M_Dashboard->allGallery(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Gallery", $path),
			"content" =>$this->load->view('dashboard/dashboard/gallery', $lemparan, true)
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function tambahNews()
	{
		$last_id = $this->db->query("SELECT id_news FROM tbnews ORDER BY id_news DESC LIMIT 1")->result_array();
		$id = $last_id[0]['id_news'] + 1;
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$file = $_FILES['file'];
		$foto = $_FILES['foto'];
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d H:i:s");
		$slug = str_replace(" ","-", $judul);
		$kirim = array(
			"id_news" => $id,
			"judul" => $judul,
			"judul_ing" => $judul,
			"deskripsi" => $deskripsi,
			"deskripsi_ing" => $deskripsi,
			"waktu" => $date,
			"status" => "Y",
			"slug" => $judul,
			"file" => $_FILES['file']['name'],
			"img" => $_FILES['foto']['name'],
		);
		$insert = $this->db->insert("tbnews", $kirim);
		if ($insert) {
			move_uploaded_file($_FILES['file']['tmp_name'], "./assets/news/file/" . $_FILES['file']['name']);
			move_uploaded_file($_FILES['foto']['tmp_name'], "./assets/news/" . $_FILES['foto']['name']);
			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Disimpan !", "success");</script>');
			redirect('dashboard/news'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Disimpan !", "error");</script>');
			redirect('dashboard/news'); 
		}
	}

	public function editNews()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$file = $_FILES['file'];
		$foto = $_FILES['foto'];
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d H:i:s");
		$slug = str_replace(" ","-", $judul);
		$kirim = array(
			"judul" => $judul,
			"judul_ing" => $judul,
			"deskripsi" => $deskripsi,
			"deskripsi_ing" => $deskripsi,
			"waktu" => $date,
			"status" => "Y",
			"slug" => $judul,
		);

		if ($file != NULL) {
			$kirim['file'] = $_FILES['file']['name'];
		}

		if ($foto != NULL) {
			$kirim['img'] = $_FILES['foto']['name'];
		}

		$this->db->where("id_news", $id);
		$update = $this->db->update("tbnews", $kirim);
		if ($update) {

			if ($file != NULL) {
				move_uploaded_file($_FILES['file']['tmp_name'], "./assets/news/file/" . $_FILES['file']['name']);
			}

			if ($foto != NULL) {
				move_uploaded_file($_FILES['foto']['tmp_name'], "./assets/news/" . $_FILES['foto']['name']);
			}

			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Diubah !", "success");</script>');
			redirect('dashboard/news'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Diubah !", "error");</script>');
			redirect('dashboard/news'); 
		}
	}

	public function deleteNews(){
		$id = $_GET['id'];

		$delete = $this->db->query("DELETE FROM tbnews WHERE id_news='$id'");
		if ($delete) {
			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Dihapus !", "success");</script>');
			redirect('dashboard/news'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Dihapus !", "error");</script>');
			redirect('dashboard/news'); 
		}
	}

	public function editAbout(){
		$isi = $this->input->post('isi');
		$kirim = array(
			'about' => $isi,
			'about_ing' => $isi,
		);
		$update = $this->db->update("tbprofil", $kirim);
		if ($update) {
			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Diubah !", "success");</script>');
			redirect('dashboard/about'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Diubah !", "error");</script>');
			redirect('dashboard/about'); 
		}
	}

	public function tambahSlider()
	{
		$file = $_FILES['file'];
		$kirim = array(
			"file" => $_FILES['file']['name'],
		);
		$insert = $this->db->insert("banner", $kirim);
		if ($insert) {
			move_uploaded_file($_FILES['file']['tmp_name'], "./assets/Images/" . $_FILES['file']['name']);
			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Disimpan !", "success");</script>');
			redirect('dashboard/slider'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Disimpan !", "error");</script>');
			redirect('dashboard/slider'); 
		}
	}

	public function editSlider()
	{
		$id = $this->input->post('id');
		$file = $_FILES['file'];
		$kirim = array(
			"file" => $_FILES['file']['name'],
		);
		$this->db->where("id_banner", $id);
		$update = $this->db->update("banner", $kirim);
		if ($update) {
			move_uploaded_file($_FILES['file']['tmp_name'], "./assets/Images/" . $_FILES['file']['name']);

			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Diubah !", "success");</script>');
			redirect('dashboard/slider'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Diubah !", "error");</script>');
			redirect('dashboard/slider'); 
		}
	}

	public function deleteSlider(){
		$id = $_GET['id'];

		$delete = $this->db->query("DELETE FROM banner WHERE id_banner='$id'");
		if ($delete) {
			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Dihapus !", "success");</script>');
			redirect('dashboard/slider'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Dihapus !", "error");</script>');
			redirect('dashboard/slider'); 
		}
	}

	public function tambahGallery()
	{
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d");
		$file = $_FILES['file'];
		$deskripsi = $this->input->post('deskripsi');
		$kirim = array(
			"gambar" => $_FILES['file']['name'],
			"descrip" => $deskripsi,
			"descrip_ing" => $deskripsi,
			"tb_galeri" => 'gallery',
			"id_table" => '000000',
			"tanggal" => $date,
			"slug" => '-',
			"status" => 'Y'
		);
		$insert = $this->db->insert("tbgaleri", $kirim);
		if ($insert) {
			move_uploaded_file($_FILES['file']['tmp_name'], "./assets/gallery/" . $_FILES['file']['name']);
			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Disimpan !", "success");</script>');
			redirect('dashboard/gallery'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Disimpan !", "error");</script>');
			redirect('dashboard/gallery'); 
		}
	}

	public function editGallery()
	{
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d");
		$file = $_FILES['file'];
		$deskripsi = $this->input->post('deskripsi');
		$id = $this->input->post('id');
		$kirim = array(
			"gambar" => $_FILES['file']['name'],
			"descrip" => $deskripsi,
			"descrip_ing" => $deskripsi,
			"tb_galeri" => 'gallery',
			"id_table" => '000000',
			"tanggal" => $date,
			"slug" => '-',
			"status" => 'Y'
		);
		$this->db->where("id", $id);
		$update = $this->db->update("tbgaleri", $kirim);
		if ($update) {
			move_uploaded_file($_FILES['file']['tmp_name'], "./assets/gallery/" . $_FILES['file']['name']);

			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Diubah !", "success");</script>');
			redirect('dashboard/gallery'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Diubah !", "error");</script>');
			redirect('dashboard/gallery'); 
		}
	}

	public function deleteGallery(){
		$id = $_GET['id'];

		$delete = $this->db->query("DELETE FROM tbgaleri WHERE id='$id'");
		if ($delete) {
			$this->session->set_flashdata('notif', '<script>swal("Success", "Data Berhasil Dihapus !", "success");</script>');
			redirect('dashboard/gallery'); 
		}else{
			$this->session->set_flashdata('notif', '<script>swal("Error", "Data Gagal Dihapus !", "error");</script>');
			redirect('dashboard/gallery'); 
		}
	}
	
}
