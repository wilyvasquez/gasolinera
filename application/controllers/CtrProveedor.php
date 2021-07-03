<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrProveedor extends CI_Controller {

	public function __construct()
    {
        parent::__construct();        

        $this->load->library('Funciones');

        $this->load->helper('date');
        date_default_timezone_set('America/Monterrey');
    }

	public function proveedor()
	{
		$data = array(
			"vadmin"	  => "active",
			"vproveedor"  => "active",
			"title"       => "Proveedor",
			"subtitle"    => "Registro",
			"contenido"   => "admin/proveedor/proveedor",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function perfil_proveedor()
	{
		$data = array(
			"vadmin"	  => "active",
			"vproveedor"  => "active",
			"title"       => "Proveedor",
			"subtitle"    => "Registro",
			"contenido"   => "admin/proveedor/perfil_proveedor",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function getProveedor()
	{
		$this->load->model('Modelo_proveedor');

        $start      = $this->input->post("start");
        $length     = $this->input->post("length");
        $search     = $this->input->post("search")['value'];
        
        $result     = $this->Modelo_proveedor->getProveedor($start,$length,$search);
        $resultado  = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();
        foreach ($resultado->result_array() as $row) {
            $array              = array();
			$array['id']        = $row['id_proveedor'];
			$array['nombre']    = $row['nombre'];
			$array['telefono']  = $row['telefono'];
			$array['direccion'] = $row['direccion'];
			$array['rfc']       = $row['rfc'];
			$array['curp']      = $row['curp'];

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

	public function agregarProveedor()
	{
		$this->load->model("Modelo_proveedor");
		
		$data = array(
			'nombre'         => $this->input->post("nombre"), 
			'telefono'       => $this->input->post("telefono"), 
			'direccion'      => $this->input->post("direccion"), 
			'colonia'        => $this->input->post("colonia"), 
			'poblacion'      => $this->input->post("poblacion"), 
			'rfc'            => $this->input->post("rfc"),
			'curp'           => $this->input->post("curp"),  
			'alta_proveedor' => date("Y-m-d H:i:s")
		);
		$r   = $this->Modelo_proveedor->agregarProveedor($data);
		$msg = "Error, No se ha procesado la operacion.";
		if ($r) {
            $msg = "Exito, operacion procesado correctamente.";
        }
        echo json_encode($this->funciones->resultado($r,$msg));
	}
}
