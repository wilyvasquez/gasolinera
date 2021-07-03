<?php if ( ! defined('BASEPATH')) exit('no se permite acceso directo al scrip');

class Modelo_inventario extends CI_Model
{	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getInventario($start,$length,$search)
	{
		$srch = "";
		if ($search) {
			$srch = "WHERE (p.articulo like '%".$search."%' OR 
							p.cantidad like '%".$search."%' OR 
							p.descripcion like '%".$search."%' OR 
							p.costo like '%".$search."%' OR
							p.alta_articulo like '%".$search."%') ";
		}

		$qnr = "SELECT count(1) cant FROM inventario p ".$srch;
		$qnr = $this->db->query($qnr);
		$qnr = $qnr->row();
		$qnr = $qnr->cant;

		$q = "SELECT * FROM inventario p ".$srch." ORDER BY p.id_inventario DESC limit $start, $length";
		$r = $this->db->query($q);

		$retornar = array(
			'numDataTotal' => $qnr,
			'datos' => $r, 
		);

		return $retornar;
	}

	function agregarInventario($data)
	{
		$this->db->insert('inventario', $data);
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