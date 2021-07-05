<?php if ( ! defined('BASEPATH')) exit('no se permite acceso directo al scrip');

class Modelo_gasolina extends CI_Model
{	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getGasolina($start,$length,$search)
	{
		$srch = "";
		if ($search) {
			$srch = "WHERE (p.gasolina like '%".$search."%' OR 
							p.precio like '%".$search."%' OR 
							p.numero like '%".$search."%' OR
							p.alta_gasolina like '%".$search."%') ";
		}

		$qnr = "SELECT count(1) cant FROM gasolina p ".$srch;
		$qnr = $this->db->query($qnr);
		$qnr = $qnr->row();
		$qnr = $qnr->cant;

		$q = "SELECT * FROM gasolina p ".$srch." ORDER BY p.id_gasolina DESC limit $start, $length";
		$r = $this->db->query($q);

		$retornar = array(
			'numDataTotal' => $qnr,
			'datos' => $r, 
		);

		return $retornar;
	}

	function agregarGasolina($data)
	{
		$this->db->insert('gasolina', $data);
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