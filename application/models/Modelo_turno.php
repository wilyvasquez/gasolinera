<?php if ( ! defined('BASEPATH')) exit('no se permite acceso directo al scrip');

class Modelo_turno extends CI_Model
{	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getTurno($start,$length,$search)
	{
		$srch = "";
		if ($search) {
			$srch = "WHERE (p.turno like '%".$search."%' OR 
							p.inicio like '%".$search."%' OR 
							p.final like '%".$search."%' OR 
							p.alta_turno like '%".$search."%') ";
		}

		$qnr = "SELECT count(1) cant FROM turno p ".$srch;
		$qnr = $this->db->query($qnr);
		$qnr = $qnr->row();
		$qnr = $qnr->cant;

		$q = "SELECT * FROM turno p ".$srch." ORDER BY p.id_turno DESC limit $start, $length";
		$r = $this->db->query($q);

		$retornar = array(
			'numDataTotal' => $qnr,
			'datos' => $r, 
		);

		return $retornar;
	}

	function agregarTurno($data)
	{
		$this->db->insert('turno', $data);
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