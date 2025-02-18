<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Students extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('admin/student_model', 'student_model');
			$this->load->model('admin/mantenimiento_model', 'mantenimiento_model');
		}

		public function index()
		{
			$data['all_students'] =  $this->student_model->get_all_students();
			$data['view'] = 'admin/students/student_list';
			$this->load->view('admin/layout', $data);
		}
		
		public function add()
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('nombres', 'Nombres', 'trim|required');
				$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required');
				$this->form_validation->set_rules('dni', 'DNI', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$this->form_validation->set_rules('perfil', 'Perfil', 'trim|required');

				if ($this->form_validation->run() == FALSE) 
				{
					$data['view'] = 'admin/students/student_add';
					$this->load->view('admin/layout', $data);
				}
				else
				{
					$data = array(
						'usuario' => $this->input->post('dni'),
						'nombres' => $this->input->post('nombres'),
						'apellidos' => $this->input->post('apellidos'),
						'dni' => $this->input->post('dni'),
						'email' => $this->input->post('email'),
						'id_perfil' => $this->input->post('perfil'),
						'clave' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'is_admin' => '1',
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->user_model->add_user($data);
					if($result)
					{
						$this->session->set_flashdata('msg', 'Usuario registrado!');
						redirect(base_url('admin/students'));
					}
				}
			}
			else
			{
			    $data['all_perfiles'] = $this->mantenimiento_model->get_all_perfiles();
				$data['view'] = 'admin/students/student_add';
				$this->load->view('admin/layout', $data);
			}
		}

		public function edit($id = 0)
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('nombres', 'Nombres', 'trim|required');
				$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required');
				$this->form_validation->set_rules('dni', 'DNI', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$this->form_validation->set_rules('perfil', 'Perfil', 'trim|required');

				if ($this->form_validation->run() == FALSE) 
				{
					$data['user'] = $this->user_model->get_user_by_id($id);
					$data['view'] = 'admin/users/user_edit';
					$this->load->view('admin/layout', $data);
				}
				else
				{
					$data = array(
						'usuario' => $this->input->post('dni'),
						'nombres' => $this->input->post('nombres'),
						'apellidos' => $this->input->post('apellidos'),
						'dni' => $this->input->post('dni'),
						'email' => $this->input->post('email'),
						'id_perfil' => $this->input->post('perfil'),
						'clave' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'is_admin' => '1',
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->user_model->edit_user($data, $id);
					if($result)
					{
						$this->session->set_flashdata('msg', 'Usuario actualizado!');
						redirect(base_url('admin/users'));
					}
				}
			}
			else
			{
			    $data['all_perfiles'] = $this->mantenimiento_model->get_all_perfiles();
				$data['user'] = $this->user_model->get_user_by_id($id);
				$data['view'] = 'admin/users/user_edit';
				$this->load->view('admin/layout', $data);
			}
		}

		public function del($id = 0)
		{
			$this->db->delete('ci_users', array('id' => $id));
			$this->session->set_flashdata('msg', 'Usuario eliminado!');
			redirect(base_url('admin/users'));
		}

	}

?>