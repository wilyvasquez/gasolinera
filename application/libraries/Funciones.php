<?php if ( ! defined('BASEPATH')) exit('No esta permitido el acceso'); 
//La primera línea impide el acceso directo a este script
class Funciones {

	public function __construct()
    {
        $CI =& get_instance();
        $CI->load->library('session');
        $CI->load->helper('date');
        date_default_timezone_set('America/Monterrey');
    }

    function menu()
    {
        $CI =& get_instance();
        $permiso = $CI->session->userdata('permiso');
        if ($permiso == "GERENTE OPERATIVO") {
            $pmenu = "admin/home/menu_principal";
        }else if($permiso == "GERENTE ADMINISTRATIVO") {
            $pmenu = "admin/home/menu_principal";
        }else if($permiso == "GESTION DE CREDITO") {
            $pmenu = "admin/home/menu_creditos";
        }else if($permiso == "COBRANZA") {
            $pmenu = "admin/home/menu_cobranza";
        }else if($permiso == "INVERSIONISTA") {
            $pmenu = "admin/home/menu_inversionista";
        }
        
        return $pmenu;
    }

    function redireccion()
    {
        $CI =& get_instance();
        $permiso = $CI->session->userdata('permiso');
        if($permiso == FALSE || ( $permiso != "GERENTE OPERATIVO" && $permiso != "GERENTE ADMINISTRATIVO" && $permiso != "GESTION DE CREDITO" && $permiso != "COBRANZA" && $permiso != 'INVERSIONISTA') )
        {
            redirect(base_url().'login');
        }
    }


    function resultado($peticion,$msg)
	{
		if($peticion)
		{
			$result = array(
				'respuesta' => 'correcto',
				'msg'       => '<div class="alert alert-success" role="alert">'.$msg.'</div>',
			);
		}else{
			$result = array(
				'respuesta' => 'error',
				'msg'       => '<div class="alert alert-danger" role="alert">'.$msg.'</div>',
			);
		}
		return $result;
	}
}