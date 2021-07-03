<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrUsuario extends CI_Controller {

	public function __construct()
    {
        parent::__construct();        

        $this->load->library('Funciones');

        $this->load->helper('date');
        date_default_timezone_set('America/Monterrey');
    }

	public function usuario()
	{
		$data = array(
			"vusuario"    => "active",
			"title"       => "Usuario",
			"subtitle"    => "Registro",
			"contenido"   => "admin/usuario/usuario",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function getUsuarios()
	{
		$this->load->model('Modelo_usuarios');

        $start      = $this->input->post("start");
        $length     = $this->input->post("length");
        $search     = $this->input->post("search")['value'];
        
        $result     = $this->Modelo_usuarios->getUsuarios($start,$length,$search);
        $resultado  = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();
        foreach ($resultado->result_array() as $row) {
            $array              = array();
			$array['id']        = $row['id_usuario'];
			$array['nombre']    = $row['nombre'];
			$array['apellidos'] = $row['apellidos'];
			$array['telefono']  = $row['telefono'];
			$array['usuario']   = $row['usuario'];
			$array['permiso']   = $row['permisos'];
			$array['password']  = $row['password'];

            $datos[] = $array;
        }

        $totalDatoObtenido = $resultado->num_rows();

        $json_data = array(
            'draw'            => intval($this->input->post('draw')), 
            'recordsTotal'    => intval($totalDatoObtenido),
            'recordsFiltered' => intval($totalDatos),
            'data'            => $datos
        );
        echo json_encode($json_data);
	}

	public function agregarUsuarios()
	{
		$this->load->model("Modelo_usuarios");
		
		$data = array(
			'nombre'       => $this->input->post("nombre"), 
			'apellidos'    => $this->input->post("apellidos"), 
			'telefono'     => $this->input->post("telefono"), 
			'usuario'      => $this->input->post("usuario"), 
			'password'     => $this->input->post("password"), 
			'permisos'     => $this->input->post("permisos"), 
			'alta_usuario' => date("Y-m-d H:i:s")
		);
		$r   = $this->Modelo_usuarios->agregarUsuario($data);
		$msg = "Error, No se ha procesado la operacion.";
		if ($r) {
            $msg = "Exito, operacion procesado correctamente.";
        }
        echo json_encode($this->funciones->resultado($r,$msg));
	}
}
