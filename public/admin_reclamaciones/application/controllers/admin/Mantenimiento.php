<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Mantenimiento extends MY_Controller
	{
	    /* DEPARTAMENTOS */
		public function departamentos()
		{
			$data['all_departamentos'] =  $this->mantenimiento_model->get_all_departamentos();
			$data['view'] = 'admin/mantenimiento/departamento_list';
			$this->load->view('admin/layout', $data);
		}
		
		public function departamento_add()
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('departamento', 'departamento', 'trim|required');

				if ($this->form_validation->run() == FALSE) 
				{
					$data['view'] = 'admin/mantenimiento/departamento_add';
					$this->load->view('admin/layout', $data);
				}
				else
				{
					$data = array(
						'departamento' => $this->input->post('departamento')
					);
					$data = $this->security->xss_clean($data);
					$result = $this->mantenimiento_model->add_departamento($data);
					if($result)
					{
						$this->session->set_flashdata('msg', 'Se agregó el departamento.');
						redirect(base_url('admin/mantenimiento/departamentos'));
					}
				}
			}
			else
			{
				$data['view'] = 'admin/mantenimiento/departamento_add';
				$this->load->view('admin/layout', $data);
			}
		}

		public function departamento_edit($id = 0)
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('departamento', 'departamento', 'trim|required');

				if ($this->form_validation->run() == FALSE) 
				{
					$data['departamento'] = $this->mantenimiento_model->get_departamento_by_id($id);
					$data['view'] = 'admin/mantenimiento/departamento_edit';
					$this->load->view('admin/layout', $data);
				}
				else
				{					
					$data = array(
						'departamento' => $this->input->post('departamento')
					);
					$data = $this->security->xss_clean($data);
					$result = $this->mantenimiento_model->edit_departamento($data, $id);
					if($result)
					{
						$this->session->set_flashdata('msg', 'Se actualizó el departamento.');
						redirect(base_url('admin/mantenimiento/departamentos'));
					}
				}
			}
			else
			{
				$data['departamento'] = $this->mantenimiento_model->get_departamento_by_id($id);
				$data['view'] = 'admin/mantenimiento/departamento_edit';
				$this->load->view('admin/layout', $data);
			}
		}

		public function departamento_del($id = 0)
		{
			$this->db->delete('departamento', array('iddepartamento' => $id));
			$this->session->set_flashdata('msg', 'Se eliminó el departamento.');
			redirect(base_url('admin/mantenimiento/departamentos'));
		}
		
		/* PROVINCIAS */
		public function provincias()
		{
			$data['all_provincias'] =  $this->mantenimiento_model->get_all_provincias();
			$data['view'] = 'admin/mantenimiento/provincia_list';
			$this->load->view('admin/layout', $data);
		}
		
				
		public function provincia_add()
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('provincia', 'Provincia', 'trim|required');
				$this->form_validation->set_rules('departamento', 'Departamento', 'trim|required');

				if ($this->form_validation->run() == FALSE) 
				{
					$data['all_departamentos'] =  $this->mantenimiento_model->get_all_departamentos();
					$data['view'] = 'admin/mantenimiento/provincia_add';
					$this->load->view('admin/layout', $data);
				}
				else
				{
					$data = array(
						'provincia' => $this->input->post('provincia'),
						'id_departamento' => $this->input->post('departamento')
					);
					$data = $this->security->xss_clean($data);
					$result = $this->mantenimiento_model->add_provincia($data);
					if($result)
					{
						$this->session->set_flashdata('msg', 'Se agregó la provincia.');
						redirect(base_url('admin/mantenimiento/provincias'));
					}
				}
			}
			else
			{
				$data['all_departamentos'] =  $this->mantenimiento_model->get_all_departamentos();
				$data['view'] = 'admin/mantenimiento/provincia_add';
				$this->load->view('admin/layout', $data);
			}
		}

		public function provincia_edit($id = 0)
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('provincia', 'Provincia', 'trim|required');
				$this->form_validation->set_rules('departamento', 'Departamento', 'trim|required');

				if ($this->form_validation->run() == FALSE) 
				{
					$data['all_departamentos'] =  $this->mantenimiento_model->get_all_departamentos();
					$data['provincia'] = $this->mantenimiento_model->get_provincia_by_id($id);
					$data['view'] = 'admin/mantenimiento/provincia_edit';
					$this->load->view('admin/layout', $data);
				}
				else
				{					
					$data = array(
						'provincia' => $this->input->post('provincia'),
						'id_departamento' => $this->input->post('departamento')
					);
					$data = $this->security->xss_clean($data);
					$result = $this->mantenimiento_model->edit_provincia($data, $id);
					if($result)
					{
						$this->session->set_flashdata('msg', 'Se actualizó el provincia.');
						redirect(base_url('admin/mantenimiento/provincias'));
					}
				}
			}
			else
			{
				$data['all_departamentos'] =  $this->mantenimiento_model->get_all_departamentos();
				$data['provincia'] = $this->mantenimiento_model->get_provincia_by_id($id);
				$data['view'] = 'admin/mantenimiento/provincia_edit';
				$this->load->view('admin/layout', $data);
			}
		}

		public function provincia_del($id = 0)
		{
			$this->db->delete('provincia', array('idprovincia' => $id));
			$this->session->set_flashdata('msg', 'Se eliminó el provincia.');
			redirect(base_url('admin/mantenimiento/provincias'));
		}
		
		/* DISTRITOS */
		public function distritos()
		{
			$data['all_distritos'] =  $this->mantenimiento_model->get_all_distritos();
			$data['view'] = 'admin/mantenimiento/distrito_list';
			$this->load->view('admin/layout', $data);
		}
		
		public function distrito_add()
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('distrito', 'Distrito', 'trim|required');
				$this->form_validation->set_rules('provincia', 'Provincia', 'trim|required');

				if ($this->form_validation->run() == FALSE) 
				{
					$data['all_provincias'] =  $this->mantenimiento_model->get_all_provincias();
					$data['view'] = 'admin/mantenimiento/distrito_add';
					$this->load->view('admin/layout', $data);
				}
				else
				{
					$data = array(
						'distrito' => $this->input->post('distrito'),
						'id_provincia' => $this->input->post('provincia')
					);
					$data = $this->security->xss_clean($data);
					$result = $this->mantenimiento_model->add_distrito($data);
					if($result)
					{
						$this->session->set_flashdata('msg', 'Se agregó el distrito.');
						redirect(base_url('admin/mantenimiento/distritos'));
					}
				}
			}
			else
			{
				$data['all_provincias'] =  $this->mantenimiento_model->get_all_provincias();
				$data['view'] = 'admin/mantenimiento/distrito_add';
				$this->load->view('admin/layout', $data);
			}
		}

		public function distrito_edit($id = 0)
		{
			if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('distrito', 'Distrito', 'trim|required');
				$this->form_validation->set_rules('provincia', 'Provincia', 'trim|required');

				if ($this->form_validation->run() == FALSE) 
				{
					$data['all_provincias'] =  $this->mantenimiento_model->get_all_provincias();
					$data['distrito'] = $this->mantenimiento_model->get_distrito_by_id($id);
					$data['view'] = 'admin/mantenimiento/distrito_edit';
					$this->load->view('admin/layout', $data);
				}
				else
				{					
					$data = array(
						'distrito' => $this->input->post('distrito'),
						'id_provincia' => $this->input->post('provincia')
					);
					$data = $this->security->xss_clean($data);
					$result = $this->mantenimiento_model->edit_distrito($data, $id);
					if($result)
					{
						$this->session->set_flashdata('msg', 'Se actualizó el distrito.');
						redirect(base_url('admin/mantenimiento/distritos'));
					}
				}
			}
			else
			{
				$data['all_provincias'] =  $this->mantenimiento_model->get_all_provincias();
				$data['distrito'] = $this->mantenimiento_model->get_distrito_by_id($id);
				$data['view'] = 'admin/mantenimiento/distrito_edit';
				$this->load->view('admin/layout', $data);
			}
		}

		public function distrito_del($id = 0)
		{
			$this->db->delete('distrito', array('iddistrito' => $id));
			$this->session->set_flashdata('msg', 'Se eliminó el distrito.');
			redirect(base_url('admin/mantenimiento/distritos'));
		}
		
	    /* REPORTE GENERAL */
		public function reportes_generales()
		{
			$data['all_reportes_generales'] =  $this->mantenimiento_model->get_all_reportes_generales();
			$data['view'] = 'admin/mantenimiento/reporte_general_list';
			$this->load->view('admin/layout', $data);
		}
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('admin/mantenimiento_model', 'mantenimiento_model');
		}
		
        /* SECTORES */
		public function sectores()
		{
			$data['all_sectores'] =  $this->mantenimiento_model->get_all_sectores();
			$data['view'] = 'admin/mantenimiento/sector_list';
			$this->load->view('admin/layout', $data);
		}
		
		/* GOBIERNOS */
		public function gobiernos()
		{
			$data['all_gobiernos'] =  $this->mantenimiento_model->get_all_gobiernos();
			$data['view'] = 'admin/mantenimiento/gobierno_list';
			$this->load->view('admin/layout', $data);
		}
		
		/* ENTIDADES */
		public function entidades()
		{
			$data['all_entidades'] =  $this->mantenimiento_model->get_all_entidades();
			$data['view'] = 'admin/mantenimiento/entidad_list';
			$this->load->view('admin/layout', $data);
		}

		/* CERTIFICADOS */
		public function certificados()
		{
			$data['all_certificados'] =  $this->mantenimiento_model->get_all_certificados();
			$data['view'] = 'admin/mantenimiento/certificado_list';
			$this->load->view('admin/layout', $data);
		}
		
		/* REPORTE LTGPC */
		public function reportes1()
		{
			$data['all_reportes1'] =  $this->mantenimiento_model->get_all_reportes1();
			$data['view'] = 'admin/mantenimiento/reporte1_list';
			$this->load->view('admin/layout', $data);
		}
		
		/* REPORTE PIR */
		public function reportes2()
		{
			$data['all_reportes2'] =  $this->mantenimiento_model->get_all_reportes2();
			$data['view'] = 'admin/mantenimiento/reporte2_list';
			$this->load->view('admin/layout', $data);
		}
		
		/* REPORTE PMEVAR */
		public function reportes3()
		{
			$data['all_reportes3'] =  $this->mantenimiento_model->get_all_reportes3();
			$data['view'] = 'admin/mantenimiento/reporte3_list';
			$this->load->view('admin/layout', $data);
		}
		
		/* REPORTE PMFIEIED */
		public function reportes4()
		{
			$data['all_reportes4'] =  $this->mantenimiento_model->get_all_reportes4();
			$data['view'] = 'admin/mantenimiento/reporte4_list';
			$this->load->view('admin/layout', $data);
		}
		
		/* REPORTE PPRRD */
		public function reportes5()
		{
			$data['all_reportes5'] =  $this->mantenimiento_model->get_all_reportes5();
			$data['view'] = 'admin/mantenimiento/reporte5_list';
			$this->load->view('admin/layout', $data);
		}
		
		/* REPORTE PRPZARM */
		public function reportes6()
		{
			$data['all_reportes6'] =  $this->mantenimiento_model->get_all_reportes6();
			$data['view'] = 'admin/mantenimiento/reporte6_list';
			$this->load->view('admin/layout', $data);
		}
		
	}
?>