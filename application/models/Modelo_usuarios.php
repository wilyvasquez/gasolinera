<?php if ( ! defined('BASEPATH')) exit('no se permite acceso directo al scrip');

class Modelo_usuarios extends CI_Model
{	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getUsuarios($start,$length,$search)
	{
		$srch = "";
		if ($search) {
			$srch = "WHERE (p.nombre like '%".$search."%' OR 
							p.apellidos like '%".$search."%' OR 
							p.telefono like '%".$search."%' OR 
							p.permisos like '%".$search."%' OR 
							p.alta_usuario like '%".$search."%') ";
		}

		$qnr = "SELECT count(1) cant FROM usuario p ".$srch;
		$qnr = $this->db->query($qnr);
		$qnr = $qnr->row();
		$qnr = $qnr->cant;

		$q = "SELECT * FROM usuario p ".$srch." ORDER BY p.id_usuario DESC limit $start, $length";
		$r = $this->db->query($q);

		$retornar = array(
			'numDataTotal' => $qnr,
			'datos' => $r, 
		);

		return $retornar;
	}

	function agregarUsuario($data)
	{
		$this->db->insert('usuario', $data);
		if ($this->db->affected_rows() === 1) {
            $id = $this->db->insert_id();
            return $id;
        }
        else {
            return false;
        }
	}
}
?>