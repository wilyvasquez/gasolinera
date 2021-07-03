<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrInventario extends CI_Controller {

	public function aceite()
	{
		$data = array(
			"vaceites"    => "active",
			"title"       => "Aceite",
			"subtitle"    => "Registro",
			"contenido"   => "admin/inventario/inventario",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function getInventario()
	{
		$this->load->model('Modelo_inventario');

        $start      = $this->input->post("start");
        $length     = $this->input->post("length");
        $search     = $this->input->post("search")['value'];
        
        $result     = $this->Modelo_inventario->getInventario($start,$length,$search);
        $resultado  = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();
        foreach ($resultado->result_array() as $row) {
            $array              = array();
			$array['id']          = $row['id_inventario'];
			$array['articulo']    = $row['articulo'];
			$array['descripcion'] = $row['descripcion'];
			$array['cantidad']    = $row['cantidad'];
			$array['costo']       = $row['costo'];

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

	public function agregarInventario()
	{
		$this->load->model("Modelo_inventario");
		
		$data = array(
			'articulo'      => $this->input->post("articulo"), 
			'cantidad'      => $this->input->post("cantidad"), 
			'costo'         => $this->input->post("costo"), 
			'descripcion'   => $this->input->post("descripcion"), 
			'alta_articulo' => date("Y-m-d H:i:s")
		);
		$r   = $this->Modelo_inventario->agregarInventario($data);
		$msg = "Error, No se ha procesado la operacion.";
		if ($r) {
            $msg = "Exito, operacion procesado correctamente.";
        }
        echo json_encode($this->funciones->resultado($r,$msg));
	}
}
