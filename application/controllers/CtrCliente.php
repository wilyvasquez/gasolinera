<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrCliente extends CI_Controller {

	public function __construct()
    {
        parent::__construct();        

        $this->load->library('Funciones');

        $this->load->helper('date');
        date_default_timezone_set('America/Monterrey');
    }

	public function cliente()
	{
		$data = array(
			"vcliente"    => "active",
			"title"       => "Clientes",
			"subtitle"    => "Registro",
			"contenido"   => "admin/cliente/cliente",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function perfil_cliente()
	{
		$data = array(
			"vcliente"    => "active",
			"title"       => "Clientes",
			"subtitle"    => "Perfil",
			"contenido"   => "admin/cliente/perfil_cliente",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function getClientes()
	{
		$this->load->model('Modelo_clientes');

        $start      = $this->input->post("start");
        $length     = $this->input->post("length");
        $search     = $this->input->post("search")['value'];
        
        $result     = $this->Modelo_clientes->getClientes($start,$length,$search);
        $resultado  = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();
        foreach ($resultado->result_array() as $row) {
            $array              = array();
			$array['id']        = $row['id_cliente'];
			$array['nombre']    = $row['nombre'];
			$array['apellidos'] = $row['apellidos'];
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

	public function agregarCliente()
	{
		$this->load->model("Modelo_clientes");
		
		$data = array(
			'nombre'       => $this->input->post("nombre"), 
			'apellidos'    => $this->input->post("apellidos"), 
			'telefono'     => $this->input->post("telefono"), 
			'direccion'    => $this->input->post("direccion"), 
			'colonia'	   => $this->input->post("colonia"), 
			'poblacion'	   => $this->input->post("poblacion"), 
			'rfc'          => $this->input->post("rfc"),
			'curp'         => $this->input->post("curp"),  
			'alta_cliente' => date("Y-m-d H:i:s")
		);
		$r   = $this->Modelo_clientes->agregarCliente($data);
		$msg = "Error, No se ha procesado la operacion.";
		if ($r) {
            $msg = "Exito, operacion procesado correctamente.";
        }
        echo json_encode($this->funciones->resultado($r,$msg));
	}
}
