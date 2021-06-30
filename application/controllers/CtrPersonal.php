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
}
