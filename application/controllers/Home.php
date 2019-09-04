<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('M_home');
	}
	private function load($title = '', $datapath = '')
	{

	}

	public function index() 
	{	
		$send_data = array(
			'news' => $this->M_home->get_news(),
			'about' => $this->M_home->aboutUs(),
			'sliderActive' => $this->M_home->sliderActive(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Beranda", $path),
			"content" =>$this->load->view('index', $send_data, true)
		);

		$this->load->view('index', $data);
	}

	public function aboutUs()
	{	
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("About Us", $path),
			"content" =>$this->load->view('aboutUs_page', $send_data, true)
		);
		$this->load->view('aboutUs_page', $data);
	}

	public function disasterImpact()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Disaster Impact", $path),
			"content" =>$this->load->view('disaster_impact', $send_data, true)
		);
		$this->load->view('disaster_impact', $data);
	}

	public function disasterPage()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Disaster", $path),
			"content" =>$this->load->view('disaster_page', $send_data, true)
		);
		$this->load->view('disaster_page', $data);
	}

	public function eduImpact()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Edu Impact", $path),
			"content" =>$this->load->view('edu_impact', $send_data, true)
		);
		$this->load->view('edu_impact', $data);
	}

	public function eduPage()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Edu", $path),
			"content" =>$this->load->view('edu_page', $send_data, true)
		);
		$this->load->view('edu_page', $data);
	}

	public function impact()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Impact", $path),
			"content" =>$this->load->view('impact', $send_data, true)
		);
		$this->load->view('impact', $data);
	}

	public function news()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("News", $path),
			"content" =>$this->load->view('news_page', $send_data, true)
		);
		$this->load->view('news_page', $data);
	}

	public function nutritionImpact()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Nutrition Impact", $path),
			"content" =>$this->load->view('nutrition_impact', $send_data, true)
		);
		$this->load->view('nutrition_impact', $data);
	}

	public function nutritionPage()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Nutrition", $path),
			"content" =>$this->load->view('nutrition_page', $send_data, true)
		);
		$this->load->view('nutrition_page', $data);
	}

	public function socialImpact()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Social Impact", $path),
			"content" =>$this->load->view('social_impact', $send_data, true)
		);
		$this->load->view('social_impact', $data);
	}

	public function socialStrategi()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Social Strategi", $path),
			"content" =>$this->load->view('social_strategic', $send_data, true)
		);
		$this->load->view('social_strategic', $data);
	}

	public function sportImpact()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Sport Impact", $path),
			"content" =>$this->load->view('sport_impact', $send_data, true)
		);
		$this->load->view('sport_impact', $data);
	}

	public function sport()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Sport", $path),
			"content" =>$this->load->view('sport', $send_data, true)
		);
		$this->load->view('sport', $data);
	}

	public function video()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
			'video' => $this->M_home->get_video(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Video", $path),
			"content" =>$this->load->view('video', $send_data, true)
		);
		$this->load->view('video', $data);
	}

	public function gallery()
	{
		$send_data = array(
			'news' => $this->M_home->get_news(),
			'gallery' => $this->M_home->allGallery(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Gallery", $path),
			"content" =>$this->load->view('gallery_page', $send_data, true)
		);
		$this->load->view('gallery_page', $data);
	}

	public function detail()
	{
		error_reporting(0);
		$tag = $_GET['tag'];
		$id = $_GET['id'];
		$tab = $_GET['tab'];
		$find = $_GET['find'];
		if (empty($tag) || empty($id) || empty($tab) || empty($find)) {
			redirect('', 'refresh');
		}else{
			$send_data = array(
				'isi' => $this->M_home->get_news_detail($id, $tab, $find),
				'type' => 'news',
				'folder' => 'news',
				'news' => $this->M_home->get_news(),
			);
		}
		
		$path = "";
		$data = array(
			"page" => $this->load("Detail News", $path),
			"content" =>$this->load->view('detail', $send_data, true)
		);
		$this->load->view('detail', $data);
	}

	public function insertSubscribe(){

		$first = $this->input->post("first");
		$last = $this->input->post("last");
		$email = $this->input->post("email");
		if (empty($first) || empty($last) || empty($email)) {
			echo "kosong";
		}
		else{
			$checked = $this->db->query("SELECT email from subscribe WHERE email = '$email'")or die(mysqli_error());
			if ($checked->num_rows() > 0) {
				echo "error";
			}else{
				$data = array(
					'first_name' => $first,
					'last_name' => $last, 
					'email' => $email
				);
				$this->db->insert("subscribe", $data);
				echo "success";
			}
		}

	}
	
}
