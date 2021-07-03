<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrBomba extends CI_Controller {

	public function __construct()
    {
        parent::__construct();        

        $this->load->library('Funciones');

        $this->load->helper('date');
        date_default_timezone_set('America/Monterrey');
    }

	public function bomba()
	{
		$data = array(
			"vadmin"	  => "active",
			"vbombas"     => "active",
			"title"       => "Bombas",
			"subtitle"    => "Registro",
			"contenido"   => "admin/bomba/bomba",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function perfil_bomba()
	{
		$data = array(
			"vadmin"	  => "active",
			"vbombas"     => "active",
			"title"       => "Bombas",
			"subtitle"    => "Registro",
			"contenido"   => "admin/bomba/perfil_bomba",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function bomba_lectura()
	{
		$data = array(
			"vlbombas"    => "active",
			"title"       => "Bombas",
			"subtitle"    => "Registro",
			"contenido"   => "admin/bomba/lectura_bomba",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function getBomba()
	{
		$this->load->model('Modelo_bomba');

        $start      = $this->input->post("start");
        $length     = $this->input->post("length");
        $search     = $this->input->post("search")['value'];
        
        $result     = $this->Modelo_bomba->getBombas($start,$length,$search);
        $resultado  = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();
        foreach ($resultado->result_array() as $row) {
            $array              = array();
			$array['id']            = $row['id_bomba'];
			$array['bomba']         = $row['bomba'];
			$array['dispensadores'] = $row['dispensadores'];
			$array['tipo']          = $row['tipo_gasolina'];
			$array['alta']          = $row['alta_bomba'];

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

	public function agregarBomba()
	{
		$this->load->model("Modelo_bomba");
		
		$data = array(
			'bomba'         => $this->input->post("bomba"), 
			'dispensadores' => $this->input->post("dispensadores"), 
			'tipo_gasolina' => $this->input->post("tipos"), 
			'alta_bomba'    => date("Y-m-d H:i:s")
		);
		$r   = $this->Modelo_bomba->agregarBomba($data);
		$msg = "Error, No se ha procesado la operacion.";
		if ($r) {
            $msg = "Exito, operacion procesado correctamente.";
        }
        echo json_encode($this->funciones->resultado($r,$msg));
	}
}
