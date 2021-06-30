<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrAceite extends CI_Controller {

	public function aceite()
	{
		$data = array(
			"vaceites"    => "active",
			"title"       => "Aceite",
			"subtitle"    => "Registro",
			"contenido"   => "admin/aceite/aceite",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}
}
