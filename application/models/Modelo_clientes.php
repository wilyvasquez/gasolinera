<?php if ( ! defined('BASEPATH')) exit('no se permite acceso directo al scrip');

class Modelo_clientes extends CI_Model
{	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getClientes($start,$length,$search)
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

		$qnr = "SELECT count(1) cant FROM cliente p ".$srch;
		$qnr = $this->db->query($qnr);
		$qnr = $qnr->row();
		$qnr = $qnr->cant;

		$q = "SELECT * FROM cliente p ".$srch." ORDER BY p.id_cliente DESC limit $start, $length";
		$r = $this->db->query($q);

		$retornar = array(
			'numDataTotal' => $qnr,
			'datos' => $r, 
		);

		return $retornar;
	}

	function agregarCliente($data)
	{
		$this->db->insert('cliente', $data);
		if ($this->db->affected_rows() === 1) {
            $id = $this->db->insert_id();
            return $id;
        }
        else {
            return false;
        }
	}

	function agregarAbono($data)
	{
		$this->db->insert('abono_cliente', $data);
		if ($this->db->affected_rows() === 1) {
            $id = $this->db->insert_id();
            return $id;
        }
        else {
            return false;
        }	
	}

	function getAbonos($start,$length,$search)
	{
		$srch = "";
		if ($search) {
			$srch = "WHERE (p.tipo like '%".$search."%' OR 
							p.costo like '%".$search."%' OR
							p.descripcion like '%".$search."%' OR
							p.alta_abono like '%".$search."%') ";
		}

		$qnr = "SELECT count(1) cant FROM abono_cliente p ".$srch;
		$qnr = $this->db->query($qnr);
		$qnr = $qnr->row();
		$qnr = $qnr->cant;

		$q = "SELECT * FROM abono_cliente p ".$srch." ORDER BY p.id_abono DESC limit $start, $length";
		$r = $this->db->query($q);

		$retornar = array(
			'numDataTotal' => $qnr,
			'datos' => $r, 
		);

		return $retornar;
	}
}
?>