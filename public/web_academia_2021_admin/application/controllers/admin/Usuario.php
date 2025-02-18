<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->model('admin/usuario_model','usuario');
	}

	function index($id=1)
	{
		$cond="";
		$data['searchBy']='';
		$data['searchValue']='';
		$v_fields=$this->usuario->v_fields;
		$per_page_arr = array('5', '10', '20', '50', '100');

		if (isset($_GET['searchValue']) && isset($_GET['searchBy'])) {
			$data['searchBy']=$_GET['searchBy'];
			$data['searchValue']=$_GET['searchValue'];
			if (!empty($_GET['searchValue']) && $_GET['searchValue']!="" && !empty($_GET['searchBy']) && $_GET['searchBy']!="" ) {
					$cond="true";
			}
		}

		$data['sortBy']='';
        $order_by = isset($_GET['sortBy']) && in_array($_GET['sortBy'], $v_fields)?$_GET['sortBy']:'';
        $order = isset($_GET['order']) && $_GET['order']=='asc'?'asc':'desc';
        $searchBy = isset($_GET['searchBy']) && in_array($_GET['searchBy'], $v_fields)?$_GET['searchBy']:null;
        $searchValue = isset($_GET['searchValue'])?$_GET['searchValue']:'';
        $searchValue = addslashes($searchValue);

		if(isset($_GET['sortBy']) && $_GET['sortBy']!=''){
			$data['sortBy']=$_GET['sortBy'];
			if(isset($_GET['order']) && $_GET['order']!=''){
				$_GET['order']=$_GET['order']=='asc'?'desc':'asc';
			} else{
				$_GET['order']='desc';
			}
		}

		$get_q = $_GET;
		foreach ($v_fields as $key => $value) {
			$get_q['sortBy'] = $value;
			$query_result = http_build_query($get_q);
			$data['fields_links'][$value] =current_url().'?'.$query_result;
		}
		$data['csvlink'] = base_url().'admin/usuario/export/csv';
		$data['pdflink'] = base_url().'admin/usuario/export/pdf';
		$data['per_page'] = isset($_GET['per_page']) && in_array($_GET['per_page'], $per_page_arr)?$_GET['per_page']:"5";

		// PAGINATION
		$config = array();
		$config['suffix']='?'.$_SERVER['QUERY_STRING'];
        $config["base_url"] = base_url() . "admin/usuario/index";
        $total_row = $this->usuario->getCount('usuario', $searchBy, $searchValue);
        $config["first_url"] = base_url()."admin/usuario/index".'?'.$_SERVER['QUERY_STRING'];
        $config["total_rows"] = $total_row;
        $config["per_page"] = $per_page = $data['per_page'];
        $config["uri_segment"] = $this->uri->total_segments();
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 3; //$total_row
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_link'] = 'First';
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);

        if($this->uri->segment(2)){
        	$cur_page = $id;
        	$pagi = array("cur_page"=>($cur_page-1)*$per_page, "per_page"=>$per_page, 'order'=>$order, 'order_by'=>$order_by);
        }
        else{	
    		$pagi = array("cur_page"=>0, "per_page"=>$per_page);
    	}

        $data["results"] = $result = $this->usuario->getList("usuario",$pagi);
        $str_links = $this->pagination->create_links();

        $data["links"] = $str_links;
        // ./ PAGINATION /.

		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
        }
		else {
			$data['usuario']  = $this->usuario->getList('usuario');
		    $this->load->view('admin/usuario/manage',$data);
		}
	}

	public function add()
	{   
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

	    $data = NULL;

		$this->form_validation->set_rules('usuario', 'Usuario Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('clave', 'Clave Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('email', 'Email Name', 'required|valid_email');
		$this->form_validation->set_rules('nombres', 'Nombres Name', 'required|alpha');
		$this->form_validation->set_rules('apellidos', 'Apellidos Name', 'required|alpha');
		$this->form_validation->set_rules('experiencia', 'Experiencia Name', 'trim');
		$this->form_validation->set_rules('anio', 'Anio Name', 'trim');
		$this->form_validation->set_rules('id_distrito', 'Id_distrito Name', 'required');
		$this->form_validation->set_rules('direccion', 'Direccion Name', 'required');
		$this->form_validation->set_rules('telefono', 'Telefono Name', 'required|numeric');
		$this->form_validation->set_rules('celular', 'Celular Name', 'required|numeric');
		$this->form_validation->set_rules('id_perfil', 'Id_perfil Name', 'required');
			

        $data['errors'] = array();
        if($this->form_validation->run() == FALSE) 
        {
			$data["distrito"]=$this->usuario->getListTable("distrito");$data["perfil"]=$this->usuario->getListTable("perfil");
		
			$this->load->view('admin/usuario/add', $data);
        }
        else
        {
			$saveData['usuario'] = set_value('usuario');
			$saveData['clave'] = set_value('clave');
			$saveData['email'] = set_value('email');
			$saveData['nombres'] = set_value('nombres');
			$saveData['apellidos'] = set_value('apellidos');
			$saveData['experiencia'] = set_value('experiencia');
			$saveData['anio'] = set_value('anio');
			$saveData['id_distrito'] = set_value('id_distrito');
			$saveData['direccion'] = set_value('direccion');
			$saveData['telefono'] = set_value('telefono');
			$saveData['celular'] = set_value('celular');
			$saveData['id_perfil'] = set_value('id_perfil');

			$insert_id = $this->usuario->insert('usuario',$saveData);
			
			$this->session->set_flashdata('message', 'Usuario Added Successfully!');
			redirect('admin/usuario');
	   }
	}

	function view($id)
	{

	  if (!$this->ion_auth->logged_in()) {
	  redirect('/auth/login/');
	  }

	  if(isset($id) and !empty($id))
	  {
	   $data = NULL;

		$this->form_validation->set_rules('usuario', 'Usuario Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('clave', 'Clave Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('email', 'Email Name', 'required|valid_email');
		$this->form_validation->set_rules('nombres', 'Nombres Name', 'required|alpha');
		$this->form_validation->set_rules('apellidos', 'Apellidos Name', 'required|alpha');
		$this->form_validation->set_rules('experiencia', 'Experiencia Name', 'trim');
		$this->form_validation->set_rules('anio', 'Anio Name', 'trim');
		$this->form_validation->set_rules('id_distrito', 'Id_distrito Name', 'required');
		$this->form_validation->set_rules('direccion', 'Direccion Name', 'required');
		$this->form_validation->set_rules('telefono', 'Telefono Name', 'required|numeric');
		$this->form_validation->set_rules('celular', 'Celular Name', 'required|numeric');
		$this->form_validation->set_rules('id_perfil', 'Id_perfil Name', 'required');


       $data['errors'] = array();
       if($this->form_validation->run() == FALSE) 
       {
      	$data["distrito"]=$this->usuario->getListTable("distrito");$data["perfil"]=$this->usuario->getListTable("perfil");
      	
      	
        $data['usuario']=$this->usuario->getRow('usuario',$id);
        $this->load->view('admin/usuario/view', $data);
       }
       else
       {
		redirect('admin/usuario/view');
       }
    }
    else
    {
       $this->session->set_flashdata('message', ' Invalid Id !'); 
       redirect('admin/usuario/view');
	}
  }

	function edit($id)
    {
	 	if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

		if(isset($id) and !empty($id))
		{
			$data = NULL;

			    		$this->form_validation->set_rules('usuario', 'Usuario Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('clave', 'Clave Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('email', 'Email Name', 'required|valid_email');
		$this->form_validation->set_rules('nombres', 'Nombres Name', 'required|alpha');
		$this->form_validation->set_rules('apellidos', 'Apellidos Name', 'required|alpha');
		$this->form_validation->set_rules('experiencia', 'Experiencia Name', 'trim');
		$this->form_validation->set_rules('anio', 'Anio Name', 'trim');
		$this->form_validation->set_rules('id_distrito', 'Id_distrito Name', 'required');
		$this->form_validation->set_rules('direccion', 'Direccion Name', 'required');
		$this->form_validation->set_rules('telefono', 'Telefono Name', 'required|numeric');
		$this->form_validation->set_rules('celular', 'Celular Name', 'required|numeric');
		$this->form_validation->set_rules('id_perfil', 'Id_perfil Name', 'required');


            $data['errors'] = array();
            if($this->form_validation->run() == FALSE) 
            {
            	
            	
              	$data['usuario']=$this->usuario->getRow('usuario',$id);
              	$data["distrito"]=$this->usuario->getListTable("distrito");$data["perfil"]=$this->usuario->getListTable("perfil");
				$this->load->view('admin/usuario/edit', $data);
            }
            else
            {
			   				$saveData['usuario'] = set_value('usuario');
			$saveData['clave'] = set_value('clave');
			$saveData['email'] = set_value('email');
			$saveData['nombres'] = set_value('nombres');
			$saveData['apellidos'] = set_value('apellidos');
			$saveData['experiencia'] = set_value('experiencia');
			$saveData['anio'] = set_value('anio');
			$saveData['id_distrito'] = set_value('id_distrito');
			$saveData['direccion'] = set_value('direccion');
			$saveData['telefono'] = set_value('telefono');
			$saveData['celular'] = set_value('celular');
			$saveData['id_perfil'] = set_value('id_perfil');
					
				$this->usuario->updateData('usuario',$saveData,$id);
				
				$this->session->set_flashdata('message', 'Usuario Updated Successfully!');
				redirect('admin/usuario');
            }
		}
		else
		{
			$this->session->set_flashdata('message', ' Invalid Id !');	
		    redirect('admin/usuario');
		}
	 }

	 function delete($id='')
     {
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

 		if(isset($id) and !empty($id))
		{
			$count=$this->usuario->getCount('usuario','usuario.id_usuario',$id);
			if(isset($count) and !empty($count))
			{
				$this->usuario->delete('usuario','id_usuario',$id);
				$this->session->set_flashdata('message', ' Usuario Deleted Successfully !');
	            echo "success";
           		exit;
			}
			else
			{
				$this->session->set_flashdata('message', ' Invalid Id !');	
			}
		}
		else
		{
			$this->session->set_flashdata('message', ' Invalid Id !');
		}
	}

	function deleteAll($id='')
    {

		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

		$all_ids = $_POST["allIds"];

 		if(isset($all_ids) and !empty($all_ids))
		{
			
			//$count=$this->usuario->getCount('usuario','usuario.id',$id);
			for($a=0; $a<count($all_ids); $a++)
	  		{
	  			if($all_ids[$a]!="")
	  			{
					$this->usuario->delete('usuario','id_usuario',$all_ids[$a]);
					$this->session->set_flashdata('message', ' Usuario(s) Deleted Successfully !');
				}
	  		}	

            echo "success";
       		exit;
		}
		else
		{
			$this->session->set_flashdata('message', ' Invalid Id !');
		}
	}

	function export($filetype='csv'){

		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}
		
		$searchBy='';
		$searchValue='';
		$v_fields=array('usuario', 'clave', 'email', 'nombres', 'apellidos', 'experiencia', 'anio', 'id_distrito', 'direccion', 'telefono', 'celular', 'id_perfil');

		$data['sortBy']='';

        $order_by = isset($_GET['sortBy']) && in_array($_GET['sortBy'], $v_fields)?$_GET['sortBy']:'';
        $order = isset($_GET['order']) && $_GET['order']=='asc'?'asc':'desc';

        $searchBy = isset($_GET['searchBy']) && in_array($_GET['searchBy'], $v_fields)?$_GET['searchBy']:null;
        $searchValue = isset($_GET['searchValue'])?$_GET['searchValue']:'';
        $searchValue = addslashes($searchValue);
        $pagi = array('order'=>$order, 'order_by'=>$order_by);

		$result = $this->usuario->getList("usuario");

		if($filetype=='csv'){
			header('Content-Type: application/csv');
			header('Content-Disposition: attachment; filename=usuario.csv');
			header('Pragma: no-cache');
			$csv='Sr. No,'.implode(',', $v_fields)."\n";
			foreach ($result as $key => $value) {
				$line=($key+1).',';
				foreach ($v_fields as $field) {
					$line.='"'.addslashes($value->$field).'"'.',';
				}
				$csv.=ltrim($line,',')."\n";
			}
			echo $csv; exit;
		} elseif ($filetype=='pdf'){
			error_reporting(0);
			ob_start();
			$this->load->library('m_pdf');
			$table='
			<html>
			<head><title></title>
			<style>
			table{
				border:1px solid;
			}
			tr:nth-child(even)
			{
			    background-color: rgba(158, 158, 158, 0.82);
			}
			</style>
			</head>
			<body>
			<h1 align="center">Usuario</h1>
			<table><tr>';
			$table.='<th>Sr. No</th>';
			foreach ($v_fields as $value) {
				$table.='<th>'.$value.'</th>';
			}
			$table.='</tr>';
			foreach ($result as $key => $value) {
				$table.='<tr><td>'.($key+1).'</td>';
				foreach ($v_fields as $field) {
					$table.='<td>'.$value->$field.'</td>';
				}
				$table.='</tr>';
			}
			$table.='</table></body></html>';
			ob_clean();
			$pdf = $this->m_pdf->load();
			$pdf->WriteHTML($table);
			$pdf->Output('usuario.pdf', "D");
			exit;
		} else{
			echo 'Invalid option'; exit;
		}
	}


	function status($field,$id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

		if (in_array($field, array()))
		{
			if(isset($id) && !empty($id))
			{
				if (!is_null($usuario=$this->usuario->getRow('usuario',$id)))	
				{					
					$status = $usuario->$field;				
					if($status == 1){
						$status = 0;
					}else{
						$status = 1;
					}
						$statusData[$field] = $status;
						$this->usuario->updateData('usuario',$statusData,$id);
						$this->session->set_flashdata('message', ucfirst($field).' Updated Successfully');
						if(isset($_GET['redirect']) && $_GET['redirect']!=''){
							redirect($_GET['redirect']);
						} else{
							redirect('admin/usuario');
						}
				}else{
						$this->session->set_flashdata('error', 'Invalid Record Id!');
						redirect('admin/usuario');
				}
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Record Id!');
				redirect('admin/usuario');
			}
		}
	}


}

