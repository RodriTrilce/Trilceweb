<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('admin/auth_model', 'auth_model');
		}

		public function index()
		{
			if($this->session->has_userdata('is_admin_login'))
			{
				redirect('admin/users');
			}
			else
			{
				redirect('admin/auth/login');
			}
		}

		public function login()
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required');
				$this->form_validation->set_rules('clave', 'Clave', 'trim|required');

				if ($this->form_validation->run() == FALSE) 
				{
					$this->load->view('admin/auth/login');
				}
				else 
				{
					$data = array(
					'usuario' => $this->input->post('usuario'),
					'clave' => $this->input->post('clave')
					);
					$result = $this->auth_model->login($data);
					if ($result == TRUE) 
					{
						$admin_data = array(
							'admin_id' 	=> $result['id_usuario'],
						 	'name' 		=> $result['usuario'],
						 	'nombres' 	=> $result['nombres'],
						 	'apellidos' => $result['apellidos'],
						 	'is_admin_login' => TRUE
						);
						$this->session->set_userdata($admin_data);
						redirect(base_url('admin/users'), 'refresh');
					}
					else
					{
						$data['msg'] = 'Usuario o Clave inválidas!';
						$this->load->view('admin/auth/login', $data);
					}
				}
			}
			else
			{
				$this->load->view('admin/auth/login');
			}
		}	

		public function change_pwd()
		{
			$id = $this->session->userdata('admin_id');
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('clave', 'Clave', 'trim|required');
				$this->form_validation->set_rules('confirmar_clave', 'Confirmar Clave', 'trim|required|matches[clave]');
				if ($this->form_validation->run() == FALSE) 
				{
					$data['view'] = 'admin/auth/change_pwd';
					$this->load->view('admin/layout', $data);
				}
				else
				{
					$data = array(
						'clave' => password_hash($this->input->post('clave'), PASSWORD_BCRYPT)
					);
					$result = $this->auth_model->change_pwd($data, $id);
					if($result)
					{
						$this->session->set_flashdata('msg', 'La clave ha sido actualizada!');
						redirect(base_url('admin/auth/change_pwd'));
					}
				}
			}
			else
			{
				$data['view'] = 'admin/auth/change_pwd';
				$this->load->view('admin/layout', $data);
			}
		}
				
		public function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url('admin/auth/login'), 'refresh');
		}
	}
?>