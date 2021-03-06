<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrPersonal extends CI_Controller {

	public function personal()
	{
		$data = array(
			"vpersonal"   => "active",
			"title"       => "Personal",
			"subtitle"    => "Registro",
			"contenido"   => "admin/personal/personal",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function getPersonal()
	{
		$this->load->model('Modelo_personal');

        $start      = $this->input->post("start");
        $length     = $this->input->post("length");
        $search     = $this->input->post("search")['value'];
        
        $result     = $this->Modelo_personal->getPersonal($start,$length,$search);
        $resultado  = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();
        foreach ($resultado->result_array() as $row) {
            $array              = array();
			$array['id']        = $row['id_usuario'];
			$array['nombre']    = $row['nombre'];
			$array['apellidos'] = $row['apellidos'];
			$array['telefono']  = $row['telefono'];

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
			'rfc'          => $this->input->post("rfc"),  
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
