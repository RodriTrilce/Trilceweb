<?php
class Auth_model extends CI_Model
{
    public function login($data)
    {
        $datos = array('usuario' => $data['usuario']);
        $this->db->select('*');
        $this->db->from('tab_usuario');
        $this->db->join('tab_perfil', 'tab_perfil.id_perfil = tab_usuario.id_perfil');
        $this->db->where($datos);
        $query = $this->db->get();
        // $query = $this->db->get_where('tab_usuario', array('usuario' => $data['usuario']));
		if ($query->num_rows() == 0)
		{
			return false;
		}
		else
		{
			$result = $query->row_array();
			$validPassword = ($data['clave']= $result['clave']);
			//$validPassword = ($data['clave'], $result['clave']);
			if($validPassword)
			{
				return $result = $query->row_array();
			}
		}
	}

	public function change_pwd($data, $id)
	{
		$this->db->where('id_usuario', $id);
		$this->db->update('tab_usuario', $data);
		return true;
	}
}
?>