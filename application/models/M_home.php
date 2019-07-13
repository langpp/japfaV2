<?php
	// COPYRIGHT BY GILANG PERMANA PUTRA //
	// INSTAGRAM : @gprmnp_ //
	// **** Don't delete it, or your life will be unsafe **** //
class M_home extends CI_Model{

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

	public function get_edu(){
		$query = $this->db->query("SELECT * FROM tbedu WHERE status = 'Y' ORDER BY id_edu DESC");
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

	public function get_edu_program(){
		$query = $this->db->query("SELECT * FROM tbedudet WHERE status = 'Y' ORDER BY id_detedu DESC");
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


	public function get_nut(){
		$query = $this->db->query("SELECT * FROM tbnut WHERE status = 'Y' ORDER BY id_nut DESC");
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

	public function get_nut_program(){
		$query = $this->db->query("SELECT * FROM tbnutdet WHERE status = 'Y' ORDER BY id_detnut DESC");
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

	public function get_disas(){
		$query = $this->db->query("SELECT * FROM tbdisas WHERE status = 'Y' ORDER BY id_disas DESC");
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

	public function get_disas_program(){
		$query = $this->db->query("SELECT * FROM tbdisasdet WHERE status = 'Y' ORDER BY id_detdisas DESC");
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

	public function get_sport(){
		$query = $this->db->query("SELECT * FROM tbsport WHERE status = 'Y' ORDER BY id_sport DESC");
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

	public function get_sport_program(){
		$query = $this->db->query("SELECT * FROM tbsportdet WHERE status = 'Y' ORDER BY id_detsport DESC");
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

	public function get_news(){
		$query = $this->db->query("SELECT * FROM tbnews WHERE status = 'Y' ORDER BY id_news DESC");
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

	public function get_news_detail($id, $tab, $find){
		$query = $this->db->query("SELECT * FROM $tab WHERE $find = '$id'");
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

	public function get_video(){
		$query = $this->db->query("SELECT * FROM tb_video ORDER BY id DESC");
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

	public function sliderActive(){
		$query = $this->db->query("SELECT * FROM banner ORDER BY id_banner DESC LIMIT 3");
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

}
?>