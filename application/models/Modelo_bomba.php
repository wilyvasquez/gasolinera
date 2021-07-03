<?php if ( ! defined('BASEPATH')) exit('no se permite acceso directo al scrip');

class Modelo_bomba extends CI_Model
{	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getBombas($start,$length,$search)
	{
		$srch = "";
		if ($search) {
			$srch = "WHERE (p.dispensadores like '%".$search."%' OR 
							p.bomba like '%".$search."%' OR 
							p.tipo_gasolina like '%".$search."%' OR 
							p.alta_bomba like '%".$search."%') ";
		}

		$qnr = "SELECT count(1) cant FROM bomba p ".$srch;
		$qnr = $this->db->query($qnr);
		$qnr = $qnr->row();
		$qnr = $qnr->cant;

		$q = "SELECT * FROM bomba p ".$srch." ORDER BY p.id_bomba DESC limit $start, $length";
		$r = $this->db->query($q);

		$retornar = array(
			'numDataTotal' => $qnr,
			'datos' => $r, 
		);

		return $retornar;
	}

	function agregarBomba($data)
	{
		$this->db->insert('bomba', $data);
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