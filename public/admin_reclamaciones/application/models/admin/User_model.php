<?php
class User_model extends CI_Model
{
	public function add_user($data)
	{
		$this->db->insert('tab_usuario', $data);
		return true;
	}

	public function get_all_users()
	{
		$this->db->order_by('id_usuario', 'DESC');
		$this->db->select('*');
		$this->db->from('tab_usuario');
		$this->db->join('tab_perfil', 'tab_perfil.id_perfil = tab_usuario.id_perfil');
		$this->db->where('tab_perfil.id_perfil', '1');
		$query = $this->db->get();
		return $result = $query->result_array();
	}

	public function get_user_by_id($id)
	{
		$query = $this->db->get_where('tab_usuario', array('id_usuario' => $id));
		return $result = $query->row_array();
	}

	public function edit_user($data, $id)
	{
		$this->db->where('id_usuario', $id);
		$this->db->update('tab_usuario', $data);
		return true;
	}

	/* ESTUDIATES */
	public function get_all_students()
	{
		$this->db->order_by('id_usuario', 'DESC');
		$this->db->select('*');
		$this->db->from('tab_usuario');
		$this->db->join('tab_perfil', 'tab_perfil.id_perfil = tab_usuario.id_perfil');
		$this->db->where('tab_perfil.id_perfil', '2');
		$query = $this->db->get();
		return $result = $query->result_array();
	}
}
?>