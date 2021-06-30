<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrCliente extends CI_Controller {

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
}
