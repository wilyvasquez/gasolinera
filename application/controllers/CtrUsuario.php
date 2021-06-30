<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrUsuario extends CI_Controller {

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
}
