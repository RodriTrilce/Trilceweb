<?php
	class Mantenimiento_model extends CI_Model
	{
	    /* DISTRITOS */
		public function get_all_distritos()
		{
		    $query = $this->db->query(" SELECT * FROM tab_distrito JOIN tab_provincia ON tab_distrito.id_provincia=tab_provincia.id_provincia");
			return $result = $query->result_array();
		}
        
        public function add_distrito($data)
		{
			$this->db->insert('tab_distrito', $data);
			return true;
		}
		
		public function edit_distrito($data, $id)
		{
			$this->db->where('id_distrito', $id);
			$this->db->update('tab_distrito', $data);
			return true;
		}
		
		public function get_distrito_by_id($id)
		{
			$query = $this->db->get_where('tab_distrito', array('id_distrito' => $id));
			return $result = $query->row_array();
		}
		
	    /* PROVINCIAS */
		public function get_all_provincias()
		{
		    $query = $this->db->query(" SELECT * FROM tab_provincia JOIN tab_departamento ON tab_provincia.id_departamento=tab_departamento.id_departamento");
			return $result = $query->result_array();
		}
        
        public function add_provincia($data)
		{
			$this->db->insert('tab_provincia', $data);
			return true;
		}
		
		public function edit_provincia($data, $id)
		{
			$this->db->where('id_provincia', $id);
			$this->db->update('tab_provincia', $data);
			return true;
		}
		
		public function get_provincia_by_id($id)
		{
			$query = $this->db->get_where('tab_provincia', array('id_provincia' => $id));
			return $result = $query->row_array();
		}
		
	    /* DEPARTAMENTOS */
		public function get_all_departamentos()
		{
		    $query = $this->db->query(" SELECT * FROM tab_departamento");
			return $result = $query->result_array();
		}
        
        public function add_departamento($data)
		{
			$this->db->insert('tab_departamento', $data);
			return true;
		}
		
		public function edit_departamento($data, $id)
		{
			$this->db->where('id_departamento', $id);
			$this->db->update('tab_departamento', $data);
			return true;
		}
		
		public function get_departamento_by_id($id)
		{
			$query = $this->db->get_where('tab_departamento', array('id_departamento' => $id));
			return $result = $query->row_array();
		}
		
	    /* ENTIDADES */
		public function get_all_entidades()
		{
		    $query = $this->db->query(" SELECT * FROM ci_entidades AS ce JOIN ci_gobiernos AS cg ON ce.id_gobierno = cg.id_gobierno JOIN ci_sectores AS cs ON cg.id_sector=cs.id_sector");
			return $result = $query->result_array();
		}
        
        public function add_entidad($data)
		{
			$this->db->insert('ci_entidades', $data);
			return true;
		}
		
		public function edit_entidad($data, $id)
		{
			$this->db->where('id_entidad', $id);
			$this->db->update('ci_entidades', $data);
			return true;
		}
		
		public function get_entidad_by_id($id)
		{
			$query = $this->db->get_where('ci_entidades', array('id_entidad' => $id));
			return $result = $query->row_array();
		}
	    
	    /* GOBIERNOS */
		public function get_all_gobiernos()
		{
		    $query = $this->db->query(" SELECT * FROM ci_gobiernos AS cg JOIN ci_sectores AS cs ON cg.id_sector=cs.id_sector");
			return $result = $query->result_array();
		}
        
        public function add_gobierno($data)
		{
			$this->db->insert('ci_gobiernos', $data);
			return true;
		}
		
		public function edit_gobierno($data, $id)
		{
			$this->db->where('id_gobierno', $id);
			$this->db->update('ci_gobiernos', $data);
			return true;
		}
		
		public function get_gobierno_by_id($id)
		{
			$query = $this->db->get_where('ci_gobiernos', array('id_gobierno' => $id));
			return $result = $query->row_array();
		}
		
	    /* SECTORES */
		public function get_all_sectores()
		{
		    $this->db->order_by('id_sector', 'DESC');
			$query = $this->db->get('ci_sectores');
			return $result = $query->result_array();
		}
        
        public function add_sector($data)
		{
			$this->db->insert('ci_sectores', $data);
			return true;
		}
		
		public function edit_sector($data, $id)
		{
			$this->db->where('id_sector', $id);
			$this->db->update('ci_sectores', $data);
			return true;
		}
		
		public function get_sector_by_id($id)
		{
			$query = $this->db->get_where('ci_sectores', array('id_sector' => $id));
			return $result = $query->row_array();
		}
		
		/* REPORTES GENERALES */
		public function get_all_reportes_generales()
		{
		    $query = $this->db->query("SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='4' AND cer.course='4'
			GROUP BY u.id
			UNION
			SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='16' AND cer.course='16'
			GROUP BY u.id
			UNION
			SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='3' AND cer.course='3'
			GROUP BY u.id
			UNION
			SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='13' AND cer.course='13'
			GROUP BY u.id
			UNION
			SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='15' AND cer.course='15'
			GROUP BY u.id
			UNION
			SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='5' AND cer.course='5'
			GROUP BY u.id");
			return $result = $query->result_array();
		}
		
		/* REPORTES LTGPC */
		public function get_all_reportes1()
		{
		    $query = $this->db->query("SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d/%m/%Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d/%m/%Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d/%m/%Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d/%m/%Y') AS Ultimo_acceso,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='4' AND cer.course='4'
			GROUP BY u.id");
			return $result = $query->result_array();
		}
		
		/* REPORTES PIR */
		public function get_all_reportes2()
		{
		    $query = $this->db->query("SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='16' AND cer.course='16'
			GROUP BY u.id");
			return $result = $query->result_array();
		}
		
		/* REPORTES PMEVAR */
		public function get_all_reportes3()
		{
		    $query = $this->db->query("SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='3' AND cer.course='3'
			GROUP BY u.id");
			return $result = $query->result_array();
		}
		
		/* REPORTES PMFIEIED */
		public function get_all_reportes4()
		{
		    $query = $this->db->query("SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='13' AND cer.course='13'
			GROUP BY u.id");
			return $result = $query->result_array();
		}
		
		/* REPORTES PPRRD */
		public function get_all_reportes5()
		{
		    $query = $this->db->query("SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='15' AND cer.course='15'
			GROUP BY u.id");
			return $result = $query->result_array();
		}
		
		/* REPORTES PRPZARM */
		public function get_all_reportes6()
		{
		    $query = $this->db->query("SELECT
			u.username AS Nombre_usuario,
			DATE_FORMAT(FROM_UNIXTIME(u.timecreated), '%d de %M de %Y') AS Fecha_creacion_cuenta,
			u.email AS Correo,
			u.lastname AS Apellidos,
			u.firstname AS Nombres,
			Max(IF(uid.fieldid = '7', uid.data, NULL)) AS DNI,
			Max(IF(uid.fieldid = '8', uid.data, NULL)) AS Genero,
			if(u.country='PE', 'Perú',' ') AS Pais,
			Max(IF(uid.fieldid = '9', uid.data, NULL)) AS Departamento,
			Max(IF(uid.fieldid = '10', uid.data, NULL)) AS Provincia,
			u.city AS Distrito,
			Max(IF(uid.fieldid = '6', uid.data, NULL)) AS Profesion,
			Max(IF(uid.fieldid = '3', uid.data, NULL)) AS Entidad_labora,
			Max(IF(uid.fieldid = '4', uid.data, NULL)) AS Cargo_desempena,
			if(c.category='1', 'CFB','CFE') AS Tipo_de_Curso,
			c.fullname AS Curso,
			CASE 
			WHEN max(qa.sumgrades) >= '14' THEN 'Aprobado'
			WHEN max(qa.sumgrades) <= '14' THEN 'Desaprobado'
			ELSE 'Sin Evaluar'
			END AS Estado,
			FORMAT(Max(qa.sumgrades),0) AS Calificacion,
			Max(qa.attempt) AS Intento,
			CASE qa.state 
			when 'finished' then 'Finalizado'
			when 'inprogress' then 'En Curso'
			when 'overdue' then 'Atrasado'
			when 'abandoned' then 'Nunca Presento'
			END AS Estado_Evaluacion,
			Min(IF(sst.element = 'x.start.time', DATE_FORMAT(FROM_UNIXTIME(sst.value), '%d de %M de %Y'), NULL)) AS Fecha_de_Inicio,
			DATE_FORMAT(FROM_UNIXTIME(qa.timefinish), '%d de %M de %Y') AS Fecha_Final,
			DATE_FORMAT(FROM_UNIXTIME(u.lastaccess), '%d de %M de %Y') AS Ultimo_acceso,
			CONCAT(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL)),' %') AS Puntaje_Scorm,
			IF(Max(IF(sst.element ='cmi.core.score.raw', sst.value, NULL))>=100,'Completo','Incompleto') AS Estado_Scorm,
			if(max(qa.sumgrades)>=14, 'Si','No') AS Tiene_certificado
			FROM
			mdl_user AS u
			JOIN mdl_user_enrolments AS ue ON u.id = ue.userid
			JOIN mdl_enrol AS e ON e.id = ue.enrolid
			JOIN mdl_course AS c ON c.id = e.courseid
			LEFT OUTER JOIN mdl_user_info_data AS uid ON u.id = uid.userid
			LEFT OUTER JOIN mdl_quiz_attempts AS qa ON u.id = qa.userid
			LEFT OUTER JOIN mdl_scorm_scoes_track AS sst ON u.id = sst.userid
			INNER JOIN mdl_certificate AS cer ON c.id = cer.course
			WHERE c.id='5' AND cer.course='5'
			GROUP BY u.id");
			return $result = $query->result_array();
		}
		
		/* CERTIFICADOS */
		public function get_all_certificados()
		{
		    $query = $this->db->query('SELECT 
			mu.id AS id,
			mu.username AS usuario,
			CONCAT(mu.firstname," ", mu.lastname) AS nombre_completo,
			mu.firstname AS firstname,
			mu.lastname AS lastname,
			mu.email AS email,
			mco.fullname AS fullname,
			mco.id AS idcourse,
			mci.code AS code,
			mci.timecreated AS fecha,
			mci.id AS idissue
			FROM mdl_user AS mu 
			JOIN mdl_certificate_issues AS mci ON mu.id=mci.userid 
			JOIN mdl_certificate AS mc ON mci.certificateid=mc.id 
			JOIN mdl_course AS mco ON mc.course=mco.id');
			return $result = $query->result_array();
		}
		
		/* ESTADOS */
		public function get_all_estados()
		{
		    $this->db->order_by('id_estado', 'DESC');
			$query = $this->db->get('ci_estados');
			return $result = $query->result_array();
		}
        
        public function add_estado($data)
		{
			$this->db->insert('ci_estados', $data);
			return true;
		}
		
		public function edit_estado($data, $id)
		{
			$this->db->where('id_estado', $id);
			$this->db->update('ci_estados', $data);
			return true;
		}
		
		public function get_estado_by_id($id)
		{
			$query = $this->db->get_where('ci_estados', array('id_estado' => $id));
			return $result = $query->row_array();
		}
		
		/* PERFILES */
		public function get_all_perfiles()
		{
		    $this->db->order_by('id_perfil', 'ASC');
			$query = $this->db->get('ci_perfiles');
			return $result = $query->result_array();
		}
        
        public function add_perfil($data)
		{
			$this->db->insert('ci_perfiles', $data);
			return true;
		}
		
		public function edit_perfil($data, $id)
		{
			$this->db->where('id_perfil', $id);
			$this->db->update('ci_perfiles', $data);
			return true;
		}
		
		public function get_perfil_by_id($id)
		{
			$query = $this->db->get_where('ci_perfiles', array('id_perfil' => $id));
			return $result = $query->row_array();
		}
	}
?>