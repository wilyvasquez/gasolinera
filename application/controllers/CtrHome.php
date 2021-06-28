<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrHome extends CI_Controller {

	public function home()
	{
		$data = array(
			"vcliente"    => "active",
			"title"       => "Cliente",
			"subtitle"    => "Registro",
			"contenido"   => "admin/usuario/usuario",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}
}
