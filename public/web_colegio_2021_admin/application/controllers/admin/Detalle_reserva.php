<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Detalle_reserva extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->model('admin/detalle_reserva_model','detalle_reserva');
	}

	function index($id=1)
	{
		$cond="";
		$data['searchBy']='';
		$data['searchValue']='';
		$v_fields=$this->detalle_reserva->v_fields;
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
		$data['csvlink'] = base_url().'admin/detalle_reserva/export/csv';
		$data['pdflink'] = base_url().'admin/detalle_reserva/export/pdf';
		$data['per_page'] = isset($_GET['per_page']) && in_array($_GET['per_page'], $per_page_arr)?$_GET['per_page']:"5";

		// PAGINATION
		$config = array();
		$config['suffix']='?'.$_SERVER['QUERY_STRING'];
        $config["base_url"] = base_url() . "admin/detalle_reserva/index";
        $total_row = $this->detalle_reserva->getCount('detalle_reserva', $searchBy, $searchValue);
        $config["first_url"] = base_url()."admin/detalle_reserva/index".'?'.$_SERVER['QUERY_STRING'];
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

        $data["results"] = $result = $this->detalle_reserva->getList("detalle_reserva",$pagi);
        $str_links = $this->pagination->create_links();

        $data["links"] = $str_links;
        // ./ PAGINATION /.

		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
        }
		else {
			$data['detalle_reserva']  = $this->detalle_reserva->getList('detalle_reserva');
		    $this->load->view('admin/detalle_reserva/manage',$data);
		}
	}

	public function add()
	{   
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

	    $data = NULL;

		$this->form_validation->set_rules('id_reserva', 'Id_reserva Name', 'required');
		$this->form_validation->set_rules('id_servicio', 'Id_servicio Name', 'required');
		$this->form_validation->set_rules('precio', 'Precio Name', 'required|decimal');
			

        $data['errors'] = array();
        if($this->form_validation->run() == FALSE) 
        {
			$data["reserva"]=$this->detalle_reserva->getListTable("reserva");$data["servicio"]=$this->detalle_reserva->getListTable("servicio");
		
			$this->load->view('admin/detalle_reserva/add', $data);
        }
        else
        {
			$saveData['id_reserva'] = set_value('id_reserva');
			$saveData['id_servicio'] = set_value('id_servicio');
			$saveData['precio'] = set_value('precio');

			$insert_id = $this->detalle_reserva->insert('detalle_reserva',$saveData);
			
			$this->session->set_flashdata('message', 'Detalle_reserva Added Successfully!');
			redirect('admin/detalle_reserva');
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

		$this->form_validation->set_rules('id_reserva', 'Id_reserva Name', 'required');
		$this->form_validation->set_rules('id_servicio', 'Id_servicio Name', 'required');
		$this->form_validation->set_rules('precio', 'Precio Name', 'required|decimal');


       $data['errors'] = array();
       if($this->form_validation->run() == FALSE) 
       {
      	$data["reserva"]=$this->detalle_reserva->getListTable("reserva");$data["servicio"]=$this->detalle_reserva->getListTable("servicio");
      	
      	
        $data['detalle_reserva']=$this->detalle_reserva->getRow('detalle_reserva',$id);
        $this->load->view('admin/detalle_reserva/view', $data);
       }
       else
       {
		redirect('admin/detalle_reserva/view');
       }
    }
    else
    {
       $this->session->set_flashdata('message', ' Invalid Id !'); 
       redirect('admin/detalle_reserva/view');
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

			    		$this->form_validation->set_rules('id_reserva', 'Id_reserva Name', 'required');
		$this->form_validation->set_rules('id_servicio', 'Id_servicio Name', 'required');
		$this->form_validation->set_rules('precio', 'Precio Name', 'required|decimal');


            $data['errors'] = array();
            if($this->form_validation->run() == FALSE) 
            {
            	
            	
              	$data['detalle_reserva']=$this->detalle_reserva->getRow('detalle_reserva',$id);
              	$data["reserva"]=$this->detalle_reserva->getListTable("reserva");$data["servicio"]=$this->detalle_reserva->getListTable("servicio");
				$this->load->view('admin/detalle_reserva/edit', $data);
            }
            else
            {
			   				$saveData['id_reserva'] = set_value('id_reserva');
			$saveData['id_servicio'] = set_value('id_servicio');
			$saveData['precio'] = set_value('precio');
					
				$this->detalle_reserva->updateData('detalle_reserva',$saveData,$id);
				
				$this->session->set_flashdata('message', 'Detalle_reserva Updated Successfully!');
				redirect('admin/detalle_reserva');
            }
		}
		else
		{
			$this->session->set_flashdata('message', ' Invalid Id !');	
		    redirect('admin/detalle_reserva');
		}
	 }

	 function delete($id='')
     {
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

 		if(isset($id) and !empty($id))
		{
			$count=$this->detalle_reserva->getCount('detalle_reserva','detalle_reserva.id_detalle_reserva',$id);
			if(isset($count) and !empty($count))
			{
				$this->detalle_reserva->delete('detalle_reserva','id_detalle_reserva',$id);
				$this->session->set_flashdata('message', ' Detalle_reserva Deleted Successfully !');
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
			
			//$count=$this->detalle_reserva->getCount('detalle_reserva','detalle_reserva.id',$id);
			for($a=0; $a<count($all_ids); $a++)
	  		{
	  			if($all_ids[$a]!="")
	  			{
					$this->detalle_reserva->delete('detalle_reserva','id_detalle_reserva',$all_ids[$a]);
					$this->session->set_flashdata('message', ' Detalle_reserva(s) Deleted Successfully !');
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
		$v_fields=array('id_reserva', 'id_servicio', 'precio');

		$data['sortBy']='';

        $order_by = isset($_GET['sortBy']) && in_array($_GET['sortBy'], $v_fields)?$_GET['sortBy']:'';
        $order = isset($_GET['order']) && $_GET['order']=='asc'?'asc':'desc';

        $searchBy = isset($_GET['searchBy']) && in_array($_GET['searchBy'], $v_fields)?$_GET['searchBy']:null;
        $searchValue = isset($_GET['searchValue'])?$_GET['searchValue']:'';
        $searchValue = addslashes($searchValue);
        $pagi = array('order'=>$order, 'order_by'=>$order_by);

		$result = $this->detalle_reserva->getList("detalle_reserva");

		if($filetype=='csv'){
			header('Content-Type: application/csv');
			header('Content-Disposition: attachment; filename=detalle_reserva.csv');
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
			<h1 align="center">Detalle_reserva</h1>
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
			$pdf->Output('detalle_reserva.pdf', "D");
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
				if (!is_null($detalle_reserva=$this->detalle_reserva->getRow('detalle_reserva',$id)))	
				{					
					$status = $detalle_reserva->$field;				
					if($status == 1){
						$status = 0;
					}else{
						$status = 1;
					}
						$statusData[$field] = $status;
						$this->detalle_reserva->updateData('detalle_reserva',$statusData,$id);
						$this->session->set_flashdata('message', ucfirst($field).' Updated Successfully');
						if(isset($_GET['redirect']) && $_GET['redirect']!=''){
							redirect($_GET['redirect']);
						} else{
							redirect('admin/detalle_reserva');
						}
				}else{
						$this->session->set_flashdata('error', 'Invalid Record Id!');
						redirect('admin/detalle_reserva');
				}
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Record Id!');
				redirect('admin/detalle_reserva');
			}
		}
	}


}

