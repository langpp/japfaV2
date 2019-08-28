<?php
	// COPYRIGHT BY GILANG PERMANA PUTRA //
	// INSTAGRAM : @gprmnp_ //
	// **** Don't delete it, or your life will be unsafe **** //
class M_Dashboard extends CI_Model{

	public function get_about(){
		$query = $this->db->query("SELECT * FROM tbprofil");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result_array() as $row)
			{
				$data[] = $row;
			}
			$query->free_result();
		}
		else
		{
			$data = NULL;
		}
		return $data;
	}

	public function totalNews(){
		$query = $this->db->query("SELECT COUNT(id_news) as total FROM tbnews")->result_array();
		return $query;
	}

	public function totalSubsciber(){
		$query = $this->db->query("SELECT COUNT(id_subscibe) as total FROM subscribe")->result_array();
		return $query;
	}

	public function tenNews(){
		$query = $this->db->query("SELECT * FROM tbnews ORDER BY id_news DESC LIMIT 10")->result_array();
		return $query;
	}

	public function tenSubsciber(){
		$query = $this->db->query("SELECT * FROM subscribe ORDER BY id_subscibe DESC LIMIT 10")->result_array();
		return $query;
	}

	public function allSubsciber(){
		$query = $this->db->query("SELECT * FROM subscribe ORDER BY id_subscibe DESC")->result_array();
		return $query;
	}

	public function allNews(){
		$query = $this->db->query("SELECT * FROM tbnews ORDER BY id_news DESC")->result_array();
		return $query;
	}

	public function aboutUs(){
		$query = $this->db->query("SELECT about FROM tbprofil")->result_array();
		return $query;
	}

	public function allSlider(){
		$query = $this->db->query("SELECT * FROM banner")->result_array();
		return $query;
	}

}
?>