<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrReporte extends CI_Controller {

	public function reporte()
	{
		$data = array(
			"vreporte"    => "active",
			"title"       => "Reportes",
			"subtitle"    => "Registro",
			"contenido"   => "admin/reporte/reporte",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}
}
