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

	function getDispensador($start,$length,$search,$id_bomba)
	{
		$srch = "";
		if ($search) {
			$srch = "AND (p.dispensador like '%".$search."%' OR 
							p.lectura_inicial like '%".$search."%' OR 
							p.lectura_final like '%".$search."%' OR 
							p.tipo_gasolina like '%".$search."%' OR 
							p.alta_dispensadores like '%".$search."%') ";
		}

		$qnr = "SELECT count(1) cant FROM dispensador p INNER JOIN gasolina g ON p.ref_gasolina = g.id_gasolina WHERE p.ref_bomba = $id_bomba ".$srch;
		$qnr = $this->db->query($qnr);
		$qnr = $qnr->row();
		$qnr = $qnr->cant;

		$q = "SELECT * FROM dispensador p INNER JOIN gasolina g ON p.ref_gasolina = g.id_gasolina WHERE p.ref_bomba = $id_bomba ".$srch." ORDER BY p.id_dispensador DESC limit $start, $length";
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

	function agregarDispensador($data)
	{
		$this->db->insert('dispensador', $data);
		if ($this->db->affected_rows() === 1) {
            $id = $this->db->insert_id();
            return $id;
        }
        else {
            return false;
        }	
	}

	function getDatosGasolina()
	{
		$this->db->select("*");
		$this->db->from("gasolina");
		$query = $this->db->get(); 
		if ($query->num_rows() > 0) {
			return $query;
		}else{ 
			return false;
		}
	}

	function getDatosBomba()
	{
		$this->db->select("*");
		$this->db->from("bomba");
		$query = $this->db->get(); 
		if ($query->num_rows() > 0) {
			return $query;
		}else{ 
			return false;
		}	
	}

	function getDatosDispensador($id_bomba)
	{
		$this->db->select("*");
		$this->db->from("bomba b");
		$this->db->join('dispensador d', 'd.ref_bomba = b.id_bomba', 'inner');
		$this->db->join('gasolina g', 'g.id_gasolina = d.ref_gasolina', 'inner');
		$this->db->where("b.id_bomba",$id_bomba);
		$query = $this->db->get(); 
		if ($query->num_rows() > 0) {
			return $query;
		}else{ 
			return false;
		}
	}

	function actualizarBomba($data,$id)
	{
		$this->db->set($data)->where("id_dispensador", $id)->update("dispensador");
		if ($this->db->trans_status() === true) {
            return true;
        } else {
            return false;
        }	
	}
}
?>