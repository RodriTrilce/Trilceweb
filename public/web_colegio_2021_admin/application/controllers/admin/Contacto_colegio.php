<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contacto_colegio extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->model('admin/contacto_colegio_model','contacto_colegio');
	}

	function index($id=1)
	{
		$cond="";
		$data['searchBy']='';
		$data['searchValue']='';
		$v_fields=$this->contacto_colegio->v_fields;
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
		$data['csvlink'] = base_url().'admin/contacto_colegio/export/csv';
		$data['pdflink'] = base_url().'admin/contacto_colegio/export/pdf';
		$data['per_page'] = isset($_GET['per_page']) && in_array($_GET['per_page'], $per_page_arr)?$_GET['per_page']:"5";

		// PAGINATION
		$config = array();
		$config['suffix']='?'.$_SERVER['QUERY_STRING'];
        $config["base_url"] = base_url() . "admin/contacto_colegio/index";
        $total_row = $this->contacto_colegio->getCount('contacto_colegio', $searchBy, $searchValue);
        $config["first_url"] = base_url()."admin/contacto_colegio/index".'?'.$_SERVER['QUERY_STRING'];
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

        $data["results"] = $result = $this->contacto_colegio->getList("contacto_colegio",$pagi);
        $str_links = $this->pagination->create_links();

        $data["links"] = $str_links;
        // ./ PAGINATION /.

		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
        }
		else {
			$data['contacto_colegio']  = $this->contacto_colegio->getList('contacto_colegio');
		    $this->load->view('admin/contacto_colegio/manage',$data);
		}
	}

	public function add()
	{   
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

	    $data = NULL;

		$this->form_validation->set_rules('nombres_apellidos', 'Nombres_apellidos Name', 'trim');
		$this->form_validation->set_rules('correo', 'Correo Name', 'trim');
		$this->form_validation->set_rules('telefono', 'Telefono Name', 'trim');
		$this->form_validation->set_rules('consulta', 'Consulta Name', 'trim');
		$this->form_validation->set_rules('fecha_registro', 'Fecha_registro Name', 'trim');
			

        $data['errors'] = array();
        if($this->form_validation->run() == FALSE) 
        {
			
		
			$this->load->view('admin/contacto_colegio/add', $data);
        }
        else
        {
			$saveData['nombres_apellidos'] = set_value('nombres_apellidos');
			$saveData['correo'] = set_value('correo');
			$saveData['telefono'] = set_value('telefono');
			$saveData['consulta'] = set_value('consulta');
			$saveData['fecha_registro'] = set_value('fecha_registro');

			$insert_id = $this->contacto_colegio->insert('contacto_colegio',$saveData);
			
			$this->session->set_flashdata('message', 'Contacto_colegio Added Successfully!');
			redirect('admin/contacto_colegio');
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

		$this->form_validation->set_rules('nombres_apellidos', 'Nombres_apellidos Name', 'trim');
		$this->form_validation->set_rules('correo', 'Correo Name', 'trim');
		$this->form_validation->set_rules('telefono', 'Telefono Name', 'trim');
		$this->form_validation->set_rules('consulta', 'Consulta Name', 'trim');
		$this->form_validation->set_rules('fecha_registro', 'Fecha_registro Name', 'trim');


       $data['errors'] = array();
       if($this->form_validation->run() == FALSE) 
       {
      	
      	
      	
        $data['contacto_colegio']=$this->contacto_colegio->getRow('contacto_colegio',$id);
        $this->load->view('admin/contacto_colegio/view', $data);
       }
       else
       {
		redirect('admin/contacto_colegio/view');
       }
    }
    else
    {
       $this->session->set_flashdata('message', ' Invalid Id !'); 
       redirect('admin/contacto_colegio/view');
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

			    		$this->form_validation->set_rules('nombres_apellidos', 'Nombres_apellidos Name', 'trim');
		$this->form_validation->set_rules('correo', 'Correo Name', 'trim');
		$this->form_validation->set_rules('telefono', 'Telefono Name', 'trim');
		$this->form_validation->set_rules('consulta', 'Consulta Name', 'trim');
		$this->form_validation->set_rules('fecha_registro', 'Fecha_registro Name', 'trim');


            $data['errors'] = array();
            if($this->form_validation->run() == FALSE) 
            {
            	
            	
              	$data['contacto_colegio']=$this->contacto_colegio->getRow('contacto_colegio',$id);
              	
				$this->load->view('admin/contacto_colegio/edit', $data);
            }
            else
            {
			   				$saveData['nombres_apellidos'] = set_value('nombres_apellidos');
			$saveData['correo'] = set_value('correo');
			$saveData['telefono'] = set_value('telefono');
			$saveData['consulta'] = set_value('consulta');
			$saveData['fecha_registro'] = set_value('fecha_registro');
					
				$this->contacto_colegio->updateData('contacto_colegio',$saveData,$id);
				
				$this->session->set_flashdata('message', 'Contacto_colegio Updated Successfully!');
				redirect('admin/contacto_colegio');
            }
		}
		else
		{
			$this->session->set_flashdata('message', ' Invalid Id !');	
		    redirect('admin/contacto_colegio');
		}
	 }

	 function delete($id='')
     {
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

 		if(isset($id) and !empty($id))
		{
			$count=$this->contacto_colegio->getCount('contacto_colegio','contacto_colegio.id',$id);
			if(isset($count) and !empty($count))
			{
				$this->contacto_colegio->delete('contacto_colegio','id',$id);
				$this->session->set_flashdata('message', ' Contacto_colegio Deleted Successfully !');
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
			
			//$count=$this->contacto_colegio->getCount('contacto_colegio','contacto_colegio.id',$id);
			for($a=0; $a<count($all_ids); $a++)
	  		{
	  			if($all_ids[$a]!="")
	  			{
					$this->contacto_colegio->delete('contacto_colegio','id',$all_ids[$a]);
					$this->session->set_flashdata('message', ' Contacto_colegio(s) Deleted Successfully !');
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
		$v_fields=array('nombres_apellidos', 'correo', 'telefono', 'consulta', 'fecha_registro');

		$data['sortBy']='';

        $order_by = isset($_GET['sortBy']) && in_array($_GET['sortBy'], $v_fields)?$_GET['sortBy']:'';
        $order = isset($_GET['order']) && $_GET['order']=='asc'?'asc':'desc';

        $searchBy = isset($_GET['searchBy']) && in_array($_GET['searchBy'], $v_fields)?$_GET['searchBy']:null;
        $searchValue = isset($_GET['searchValue'])?$_GET['searchValue']:'';
        $searchValue = addslashes($searchValue);
        $pagi = array('order'=>$order, 'order_by'=>$order_by);

		$result = $this->contacto_colegio->getList("contacto_colegio");

		if($filetype=='csv'){
			header('Content-Type: application/csv');
			header('Content-Disposition: attachment; filename=contacto_colegio.csv');
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
			<h1 align="center">Contacto_colegio</h1>
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
			$pdf->Output('contacto_colegio.pdf', "D");
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
				if (!is_null($contacto_colegio=$this->contacto_colegio->getRow('contacto_colegio',$id)))	
				{					
					$status = $contacto_colegio->$field;				
					if($status == 1){
						$status = 0;
					}else{
						$status = 1;
					}
						$statusData[$field] = $status;
						$this->contacto_colegio->updateData('contacto_colegio',$statusData,$id);
						$this->session->set_flashdata('message', ucfirst($field).' Updated Successfully');
						if(isset($_GET['redirect']) && $_GET['redirect']!=''){
							redirect($_GET['redirect']);
						} else{
							redirect('admin/contacto_colegio');
						}
				}else{
						$this->session->set_flashdata('error', 'Invalid Record Id!');
						redirect('admin/contacto_colegio');
				}
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Record Id!');
				redirect('admin/contacto_colegio');
			}
		}
	}


}

