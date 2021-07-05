<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrTurno extends CI_Controller {

	public function __construct()
    {
        parent::__construct();        

        $this->load->library('Funciones');

        $this->load->helper('date');
        date_default_timezone_set('America/Monterrey');
    }

	public function turno()
	{
		$data = array(
			"vadmin"    => "active",
			"vturnos"   => "active",
			"title"     => "Turno",
			"subtitle"  => "Registro",
			"contenido" => "admin/turno/turno",
			"menu"      => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function getTurno()
	{
		$this->load->model('Modelo_turno');

        $start      = $this->input->post("start");
        $length     = $this->input->post("length");
        $search     = $this->input->post("search")['value'];
        
        $result     = $this->Modelo_turno->getTurno($start,$length,$search);
        $resultado  = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();
        foreach ($resultado->result_array() as $row) {
			$array           = array();
			$array['id']     = $row['id_turno'];
			$array['turno']  = $row['turno'];
			$array['inicio'] = $row['inicio'];
			$array['final']  = $row['final'];
			$array['alta']   = $row['alta_turno'];

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

	public function agregarTurno()
	{
		$this->load->model("Modelo_turno");
		
		$data = array(
			'turno'      => $this->input->post("turno"), 
			'inicio'     => $this->input->post("inicio"), 
			'final'      => $this->input->post("final"), 
			'alta_turno' => date("Y-m-d H:i:s")
		);
		$r   = $this->Modelo_turno->agregarTurno($data);
		$msg = "Error, No se ha procesado la operacion.";
		if ($r) {
            $msg = "Exito, operacion procesado correctamente.";
        }
        echo json_encode($this->funciones->resultado($r,$msg));
	}
}
