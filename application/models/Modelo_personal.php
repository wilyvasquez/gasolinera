<?php if ( ! defined('BASEPATH')) exit('no se permite acceso directo al scrip');

class Modelo_personal extends CI_Model
{	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getPersonal($start,$length,$search)
	{
		$srch = "";
		if ($search) {
			$srch = "WHERE (p.nombre like '%".$search."%' OR 
							p.apellidos like '%".$search."%' OR 
							p.telefono like '%".$search."%' OR 
							p.direccion like '%".$search."%' OR 
							p.rfc like '%".$search."%' OR 
							p.alta_cliente like '%".$search."%') ";
		}

		$qnr = "SELECT count(1) cant FROM personal p ".$srch;
		$qnr = $this->db->query($qnr);
		$qnr = $qnr->row();
		$qnr = $qnr->cant;

		$q = "SELECT * FROM personal p ".$srch." ORDER BY p.id_personal DESC limit $start, $length";
		$r = $this->db->query($q);

		$retornar = array(
			'numDataTotal' => $qnr,
			'datos' => $r, 
		);

		return $retornar;
	}

	function agregarPersonal($data)
	{
		$this->db->insert('personal', $data);
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