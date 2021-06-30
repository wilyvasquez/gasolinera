<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrBomba extends CI_Controller {

	public function bomba()
	{
		$data = array(
			"vbombas"     => "active",
			"title"       => "Bombas",
			"subtitle"    => "Registro",
			"contenido"   => "admin/bomba/bomba",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}
}
