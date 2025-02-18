<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_detalle extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->model('admin/usuario_detalle_model','usuario_detalle');
	}

	function index($id=1)
	{
		$cond="";
		$data['searchBy']='';
		$data['searchValue']='';
		$v_fields=$this->usuario_detalle->v_fields;
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
		$data['csvlink'] = base_url().'admin/usuario_detalle/export/csv';
		$data['pdflink'] = base_url().'admin/usuario_detalle/export/pdf';
		$data['per_page'] = isset($_GET['per_page']) && in_array($_GET['per_page'], $per_page_arr)?$_GET['per_page']:"5";

		// PAGINATION
		$config = array();
		$config['suffix']='?'.$_SERVER['QUERY_STRING'];
        $config["base_url"] = base_url() . "admin/usuario_detalle/index";
        $total_row = $this->usuario_detalle->getCount('usuario_detalle', $searchBy, $searchValue);
        $config["first_url"] = base_url()."admin/usuario_detalle/index".'?'.$_SERVER['QUERY_STRING'];
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

        $data["results"] = $result = $this->usuario_detalle->getList("usuario_detalle",$pagi);
        $str_links = $this->pagination->create_links();

        $data["links"] = $str_links;
        // ./ PAGINATION /.

		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
        }
		else {
			$data['usuario_detalle']  = $this->usuario_detalle->getList('usuario_detalle');
		    $this->load->view('admin/usuario_detalle/manage',$data);
		}
	}

	public function add()
	{   
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

	    $data = NULL;

$this->form_validation->set_rules("antecedentes_penales", "Antecedentes_penales", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "antecedentes_penales", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("antecedentes_penales","Antecedentes_penales","trim");

	    }		$this->form_validation->set_rules('estado_ap', 'Estado_ap Name', 'trim');
$this->form_validation->set_rules("verificacion_domociliaria", "Verificacion_domociliaria", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "verificacion_domociliaria", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("verificacion_domociliaria","Verificacion_domociliaria","trim");

	    }		$this->form_validation->set_rules('estado_vd', 'Estado_vd Name', 'trim');
$this->form_validation->set_rules("ruc_personal", "Ruc_personal", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "ruc_personal", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("ruc_personal","Ruc_personal","trim");

	    }		$this->form_validation->set_rules('estado_rp', 'Estado_rp Name', 'trim');
$this->form_validation->set_rules("entrevista", "Entrevista", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "entrevista", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("entrevista","Entrevista","trim");

	    }		$this->form_validation->set_rules('estado_e', 'Estado_e Name', 'trim');
$this->form_validation->set_rules("evaluacion_destrezas", "Evaluacion_destrezas", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "evaluacion_destrezas", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("evaluacion_destrezas","Evaluacion_destrezas","trim");

	    }		$this->form_validation->set_rules('estado_ed', 'Estado_ed Name', 'trim');
$this->form_validation->set_rules("corroborar_referencia", "Corroborar_referencia", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "corroborar_referencia", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("corroborar_referencia","Corroborar_referencia","trim");

	    }		$this->form_validation->set_rules('estado_cr', 'Estado_cr Name', 'trim');
		$this->form_validation->set_rules('fecha_registro', 'Fecha_registro Name', 'trim');
		$this->form_validation->set_rules('fecha_actualizacion', 'Fecha_actualizacion Name', 'trim');
		$this->form_validation->set_rules('id_usuario', 'Id_usuario Name', 'trim');
			

        $data['errors'] = array();
        if($this->form_validation->run() == FALSE) 
        {
			$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["usuario"]=$this->usuario_detalle->getListTable("usuario");
		
			$this->load->view('admin/usuario_detalle/add', $data);
        }
        else
        {
if(isset($photo_data["antecedentes_penales"]) && !empty($photo_data["antecedentes_penales"]))

		{

	      $saveData["antecedentes_penales"] = $photo_data["antecedentes_penales"];

        }			$saveData['estado_ap'] = set_value('estado_ap');
if(isset($photo_data["verificacion_domociliaria"]) && !empty($photo_data["verificacion_domociliaria"]))

		{

	      $saveData["verificacion_domociliaria"] = $photo_data["verificacion_domociliaria"];

        }			$saveData['estado_vd'] = set_value('estado_vd');
if(isset($photo_data["ruc_personal"]) && !empty($photo_data["ruc_personal"]))

		{

	      $saveData["ruc_personal"] = $photo_data["ruc_personal"];

        }			$saveData['estado_rp'] = set_value('estado_rp');
if(isset($photo_data["entrevista"]) && !empty($photo_data["entrevista"]))

		{

	      $saveData["entrevista"] = $photo_data["entrevista"];

        }			$saveData['estado_e'] = set_value('estado_e');
if(isset($photo_data["evaluacion_destrezas"]) && !empty($photo_data["evaluacion_destrezas"]))

		{

	      $saveData["evaluacion_destrezas"] = $photo_data["evaluacion_destrezas"];

        }			$saveData['estado_ed'] = set_value('estado_ed');
if(isset($photo_data["corroborar_referencia"]) && !empty($photo_data["corroborar_referencia"]))

		{

	      $saveData["corroborar_referencia"] = $photo_data["corroborar_referencia"];

        }			$saveData['estado_cr'] = set_value('estado_cr');
			$saveData['fecha_registro'] = set_value('fecha_registro');
			$saveData['fecha_actualizacion'] = set_value('fecha_actualizacion');
			$saveData['id_usuario'] = set_value('id_usuario');

			$insert_id = $this->usuario_detalle->insert('usuario_detalle',$saveData);
			
			$this->session->set_flashdata('message', 'Usuario_detalle Added Successfully!');
			redirect('admin/usuario_detalle');
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

$this->form_validation->set_rules("antecedentes_penales", "Antecedentes_penales", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "antecedentes_penales", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("antecedentes_penales","Antecedentes_penales","trim");

	    }		$this->form_validation->set_rules('estado_ap', 'Estado_ap Name', 'trim');
$this->form_validation->set_rules("verificacion_domociliaria", "Verificacion_domociliaria", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "verificacion_domociliaria", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("verificacion_domociliaria","Verificacion_domociliaria","trim");

	    }		$this->form_validation->set_rules('estado_vd', 'Estado_vd Name', 'trim');
$this->form_validation->set_rules("ruc_personal", "Ruc_personal", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "ruc_personal", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("ruc_personal","Ruc_personal","trim");

	    }		$this->form_validation->set_rules('estado_rp', 'Estado_rp Name', 'trim');
$this->form_validation->set_rules("entrevista", "Entrevista", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "entrevista", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("entrevista","Entrevista","trim");

	    }		$this->form_validation->set_rules('estado_e', 'Estado_e Name', 'trim');
$this->form_validation->set_rules("evaluacion_destrezas", "Evaluacion_destrezas", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "evaluacion_destrezas", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("evaluacion_destrezas","Evaluacion_destrezas","trim");

	    }		$this->form_validation->set_rules('estado_ed', 'Estado_ed Name', 'trim');
$this->form_validation->set_rules("corroborar_referencia", "Corroborar_referencia", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "corroborar_referencia", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("corroborar_referencia","Corroborar_referencia","trim");

	    }		$this->form_validation->set_rules('estado_cr', 'Estado_cr Name', 'trim');
		$this->form_validation->set_rules('fecha_registro', 'Fecha_registro Name', 'trim');
		$this->form_validation->set_rules('fecha_actualizacion', 'Fecha_actualizacion Name', 'trim');
		$this->form_validation->set_rules('id_usuario', 'Id_usuario Name', 'trim');


       $data['errors'] = array();
       if($this->form_validation->run() == FALSE) 
       {
      	$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["usuario"]=$this->usuario_detalle->getListTable("usuario");
      	
      	
        $data['usuario_detalle']=$this->usuario_detalle->getRow('usuario_detalle',$id);
        $this->load->view('admin/usuario_detalle/view', $data);
       }
       else
       {
		redirect('admin/usuario_detalle/view');
       }
    }
    else
    {
       $this->session->set_flashdata('message', ' Invalid Id !'); 
       redirect('admin/usuario_detalle/view');
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

			    $this->form_validation->set_rules("antecedentes_penales", "Antecedentes_penales", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "antecedentes_penales", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("antecedentes_penales","Antecedentes_penales","trim");

	    }		$this->form_validation->set_rules('estado_ap', 'Estado_ap Name', 'trim');
$this->form_validation->set_rules("verificacion_domociliaria", "Verificacion_domociliaria", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "verificacion_domociliaria", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("verificacion_domociliaria","Verificacion_domociliaria","trim");

	    }		$this->form_validation->set_rules('estado_vd', 'Estado_vd Name', 'trim');
$this->form_validation->set_rules("ruc_personal", "Ruc_personal", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "ruc_personal", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("ruc_personal","Ruc_personal","trim");

	    }		$this->form_validation->set_rules('estado_rp', 'Estado_rp Name', 'trim');
$this->form_validation->set_rules("entrevista", "Entrevista", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "entrevista", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("entrevista","Entrevista","trim");

	    }		$this->form_validation->set_rules('estado_e', 'Estado_e Name', 'trim');
$this->form_validation->set_rules("evaluacion_destrezas", "Evaluacion_destrezas", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "evaluacion_destrezas", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("evaluacion_destrezas","Evaluacion_destrezas","trim");

	    }		$this->form_validation->set_rules('estado_ed', 'Estado_ed Name', 'trim');
$this->form_validation->set_rules("corroborar_referencia", "Corroborar_referencia", "trim|xss_clean");

         $this->usuario_detalle->uploadData($photo_data, "corroborar_referencia", "photo_path","","gif|jpg|png|jpeg");

	    if(isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"]))

	    {

	     $data["errors"]=$photo_data["photo_err"];

	     $this->form_validation->set_rules("corroborar_referencia","Corroborar_referencia","trim");

	    }		$this->form_validation->set_rules('estado_cr', 'Estado_cr Name', 'trim');
		$this->form_validation->set_rules('fecha_registro', 'Fecha_registro Name', 'trim');
		$this->form_validation->set_rules('fecha_actualizacion', 'Fecha_actualizacion Name', 'trim');
		$this->form_validation->set_rules('id_usuario', 'Id_usuario Name', 'trim');


            $data['errors'] = array();
            if($this->form_validation->run() == FALSE) 
            {
            	
            	
              	$data['usuario_detalle']=$this->usuario_detalle->getRow('usuario_detalle',$id);
              	$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["estado"]=$this->usuario_detalle->getListTable("estado");$data["usuario"]=$this->usuario_detalle->getListTable("usuario");
				$this->load->view('admin/usuario_detalle/edit', $data);
            }
            else
            {
			   	if(isset($photo_data["antecedentes_penales"]) && !empty($photo_data["antecedentes_penales"]))

		{

	      $saveData["antecedentes_penales"] = $photo_data["antecedentes_penales"];

        }			$saveData['estado_ap'] = set_value('estado_ap');
if(isset($photo_data["verificacion_domociliaria"]) && !empty($photo_data["verificacion_domociliaria"]))

		{

	      $saveData["verificacion_domociliaria"] = $photo_data["verificacion_domociliaria"];

        }			$saveData['estado_vd'] = set_value('estado_vd');
if(isset($photo_data["ruc_personal"]) && !empty($photo_data["ruc_personal"]))

		{

	      $saveData["ruc_personal"] = $photo_data["ruc_personal"];

        }			$saveData['estado_rp'] = set_value('estado_rp');
if(isset($photo_data["entrevista"]) && !empty($photo_data["entrevista"]))

		{

	      $saveData["entrevista"] = $photo_data["entrevista"];

        }			$saveData['estado_e'] = set_value('estado_e');
if(isset($photo_data["evaluacion_destrezas"]) && !empty($photo_data["evaluacion_destrezas"]))

		{

	      $saveData["evaluacion_destrezas"] = $photo_data["evaluacion_destrezas"];

        }			$saveData['estado_ed'] = set_value('estado_ed');
if(isset($photo_data["corroborar_referencia"]) && !empty($photo_data["corroborar_referencia"]))

		{

	      $saveData["corroborar_referencia"] = $photo_data["corroborar_referencia"];

        }			$saveData['estado_cr'] = set_value('estado_cr');
			$saveData['fecha_registro'] = set_value('fecha_registro');
			$saveData['fecha_actualizacion'] = set_value('fecha_actualizacion');
			$saveData['id_usuario'] = set_value('id_usuario');
					
				$this->usuario_detalle->updateData('usuario_detalle',$saveData,$id);
				
				$this->session->set_flashdata('message', 'Usuario_detalle Updated Successfully!');
				redirect('admin/usuario_detalle');
            }
		}
		else
		{
			$this->session->set_flashdata('message', ' Invalid Id !');	
		    redirect('admin/usuario_detalle');
		}
	 }

	 function delete($id='')
     {
		if (!$this->ion_auth->logged_in()) {
			redirect('/auth/login/');
		}

 		if(isset($id) and !empty($id))
		{
			$count=$this->usuario_detalle->getCount('usuario_detalle','usuario_detalle.id_usuario_detalle',$id);
			if(isset($count) and !empty($count))
			{
				$this->usuario_detalle->delete('usuario_detalle','id_usuario_detalle',$id);
				$this->session->set_flashdata('message', ' Usuario_detalle Deleted Successfully !');
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
			
			//$count=$this->usuario_detalle->getCount('usuario_detalle','usuario_detalle.id',$id);
			for($a=0; $a<count($all_ids); $a++)
	  		{
	  			if($all_ids[$a]!="")
	  			{
					$this->usuario_detalle->delete('usuario_detalle','id_usuario_detalle',$all_ids[$a]);
					$this->session->set_flashdata('message', ' Usuario_detalle(s) Deleted Successfully !');
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
		$v_fields=array('antecedentes_penales', 'estado_ap', 'verificacion_domociliaria', 'estado_vd', 'ruc_personal', 'estado_rp', 'entrevista', 'estado_e', 'evaluacion_destrezas', 'estado_ed', 'corroborar_referencia', 'estado_cr', 'fecha_registro', 'fecha_actualizacion', 'id_usuario');

		$data['sortBy']='';

        $order_by = isset($_GET['sortBy']) && in_array($_GET['sortBy'], $v_fields)?$_GET['sortBy']:'';
        $order = isset($_GET['order']) && $_GET['order']=='asc'?'asc':'desc';

        $searchBy = isset($_GET['searchBy']) && in_array($_GET['searchBy'], $v_fields)?$_GET['searchBy']:null;
        $searchValue = isset($_GET['searchValue'])?$_GET['searchValue']:'';
        $searchValue = addslashes($searchValue);
        $pagi = array('order'=>$order, 'order_by'=>$order_by);

		$result = $this->usuario_detalle->getList("usuario_detalle");

		if($filetype=='csv'){
			header('Content-Type: application/csv');
			header('Content-Disposition: attachment; filename=usuario_detalle.csv');
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
			<h1 align="center">Usuario_detalle</h1>
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
			$pdf->Output('usuario_detalle.pdf', "D");
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
				if (!is_null($usuario_detalle=$this->usuario_detalle->getRow('usuario_detalle',$id)))	
				{					
					$status = $usuario_detalle->$field;				
					if($status == 1){
						$status = 0;
					}else{
						$status = 1;
					}
						$statusData[$field] = $status;
						$this->usuario_detalle->updateData('usuario_detalle',$statusData,$id);
						$this->session->set_flashdata('message', ucfirst($field).' Updated Successfully');
						if(isset($_GET['redirect']) && $_GET['redirect']!=''){
							redirect($_GET['redirect']);
						} else{
							redirect('admin/usuario_detalle');
						}
				}else{
						$this->session->set_flashdata('error', 'Invalid Record Id!');
						redirect('admin/usuario_detalle');
				}
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Record Id!');
				redirect('admin/usuario_detalle');
			}
		}
	}


}

