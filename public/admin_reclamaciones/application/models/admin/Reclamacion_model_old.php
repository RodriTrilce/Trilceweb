<?php
class Reclamacion_model extends CI_Model
{
	public function add_user($data)
	{
		$this->db->insert('tc', $data);
		return true;
	}

	public function get_all_users()
	{
		$this->db->order_by('id_tc', 'DESC');
		$this->db->select('*');
		$this->db->from('tc');
		$query = $this->db->get();
		return $result = $query->result_array();
	}

	public function get_user_by_id($id)
	{
		$query = $this->db->get_where('tc', array('id_tc' => $id));
		return $result = $query->row_array();
	}

	public function edit_user($data, $id)
	{
		$this->db->where('id_tc', $id);
		$this->db->update('tc', $data);
		return true;
	}

	/* ESTUDIATES */
	public function get_all_reclamaciones()
	{
		$this->db->order_by('id', 'DESC');
		$this->db->select('*');
		$this->db->from('reclamaciones');
		$where = 'year(fecha_registro)="2021"';
		$this->db->where($where);
		//$this->db->where(' year(fecha_registro)', "2021");
		//$this->db->limit(10); 
		$query = $this->db->get();
		return $result = $query->result_array();
	}
}
?>