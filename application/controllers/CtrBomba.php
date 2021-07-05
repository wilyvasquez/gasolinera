<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrBomba extends CI_Controller {

	public function __construct()
    {
        parent::__construct();        

        $this->load->library('Funciones');

        $this->load->helper('date');
        date_default_timezone_set('America/Monterrey');
    }

	public function bomba()
	{
		$data = array(
			"vadmin"	  => "active",
			"vbombas"     => "active",
			"title"       => "Bombas",
			"subtitle"    => "Registro",
			"contenido"   => "admin/bomba/bomba",
			"menu"        => "menu/menu_admin",			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function perfil_bomba($id)
	{
		$this->load->model("Modelo_bomba");

		$data = array(
			"vadmin"	  => "active",
			"vbombas"     => "active",
			"title"       => "Bombas",
			"subtitle"    => "Registro",
			"contenido"   => "admin/bomba/perfil_bomba",
			"menu"        => "menu/menu_admin",
			"id_bomba"    => $id,
			"gasolina"    => $this->Modelo_bomba->getDatosGasolina(),			
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function bomba_lectura()
	{
		$this->load->model("Modelo_bomba");

		$data = array(
			"vlbombas"    => "active",
			"title"       => "Bombas",
			"subtitle"    => "Registro",
			"contenido"   => "admin/bomba/lectura_bomba",
			"menu"        => "menu/menu_admin",
			"bomba"       => $this->Modelo_bomba->getDatosBomba()		
		);
		$this->load->view('universal/plantilla',$data);
	}

	public function getBomba()
	{
		$this->load->model('Modelo_bomba');

        $start      = $this->input->post("start");
        $length     = $this->input->post("length");
        $search     = $this->input->post("search")['value'];
        // $id_bomba   = $this->input->post("id_bomba");
        
        $result     = $this->Modelo_bomba->getBombas($start,$length,$search);
        $resultado  = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();
        foreach ($resultado->result_array() as $row) {
            $array              = array();
			$array['id']            = $row['id_bomba'];
			$array['bomba']         = $row['bomba'];
			$array['dispensadores'] = $row['dispensadores'];
			$array['tipo']          = $row['tipo_gasolina'];
			$array['alta']          = $row['alta_bomba'];

            $datos[] = $array;
        }

        $totalDatoObtenido = $resultado->num_rows();

        $json_data = array(
            'draw'            => intval($this->input->post('draw')), 
            'recordsTotal'    => intval($totalDatoObtenido),
            'recordsFiltered' => intval($totalDatos),
            'data'            => $datos
        );
        echo json_encode($json_data);
	}

	public function getDispensador()
	{
		$this->load->model('Modelo_bomba');

        $start      = $this->input->post("start");
        $length     = $this->input->post("length");
        $search     = $this->input->post("search")['value'];
        $id_bomba   = $this->input->post("id_bomba");
        
        $result     = $this->Modelo_bomba->getDispensador($start,$length,$search,$id_bomba);
        $resultado  = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();
        foreach ($resultado->result_array() as $row) {
            $array              = array();
			$array['id']          = $row['id_dispensador'];
			$array['dispensador'] = $row['dispensador'];
			$array['tipo']        = $row['gasolina'];
			$array['inicial']     = $row['lectura_inicial'];
			$array['final']       = $row['lectura_final'];
			$array['alta']        = $row['alta_dispensador'];
			$array['litros']	  = $row['lectura_inicial'] - $row['lectura_final'];

            $datos[] = $array;
        }

        $totalDatoObtenido = $resultado->num_rows();

        $json_data = array(
            'draw'            => intval($this->input->post('draw')), 
            'recordsTotal'    => intval($totalDatoObtenido),
            'recordsFiltered' => intval($totalDatos),
            'data'            => $datos
        );
        echo json_encode($json_data);
	}

	public function agregarBomba()
	{
		$this->load->model("Modelo_bomba");
		$tipos = $this->input->post("tipo");
		$t     = "";

		for ($i = 0; $i < count($tipos); $i++)    
		{     
			$t = $t.",".$tipos[$i];
		}

		$data = array(
			'bomba'         => $this->input->post("bomba"), 
			'dispensadores' => $this->input->post("dispensadores"), 
			'tipo_gasolina' => substr($t, 1), 
			'alta_bomba'    => date("Y-m-d H:i:s")
		);
		$r   = $this->Modelo_bomba->agregarBomba($data);
		$msg = "Error, No se ha procesado la operacion.";
		if ($r) {
            $msg = "Exito, operacion procesado correctamente.";
        }
        echo json_encode($this->funciones->resultado($r,$msg));
	}

	public function agregarDispensador()
	{
		$this->load->model("Modelo_bomba");
		
		$data = array(
			'dispensador'	   => $this->input->post("dispensador"), 
			'ref_gasolina'     => $this->input->post("tipo"), 
			'lectura_inicial'  => $this->input->post("lectura_inicial"), 
			'lectura_final'    => $this->input->post("lectura_final"), 
			'alta_dispensador' => date("Y-m-d H:i:s"),
			'ref_bomba'		   => 1,
		);
		$r   = $this->Modelo_bomba->agregarDispensador($data);
		$msg = "Error, No se ha procesado la operacion.";
		if ($r) {
            $msg = "Exito, operacion procesado correctamente.";
        }
        echo json_encode($this->funciones->resultado($r,$msg));
	}

	function getDatosBomba()
	{
		$this->load->model("Modelo_bomba");

		$bomba = $this->input->post("bomba");
		$r     = $this->Modelo_bomba->getDatosDispensador($bomba);

		echo '<table class="table table-hover">
	          <tr style="background: #4C9DBD; color: white">
	            <th>Dispensador</th>
	            <th>Gasolina</th>
	            <th>Numero</th>
	            <th>Lectura inicial</th>
	            <th>Lectura final</th>
	            <th>Litros (Lts)</th>
	            <th>Precio ($)</th>
	            <th>Importe ($)</th>
	            <th>Editar</th>
	          </tr>';
	          if (!empty($r)) {
	          	foreach ($r ->result() as $dato) {
				$inicial = $dato->lectura_inicial;
				$final   = $dato->lectura_final;
				$litros  = $inicial - $final;
				$importe = round($litros * $dato->precio,2);
	    echo  '<tr>
	            <td>'.$dato->dispensador.'</td>
	            <td>'.$dato->gasolina.'</td>
	            <td>'.$dato->numero.'</td>
	            <td>'.$dato->lectura_inicial.'</td>
	            <td>'.$dato->lectura_final.'</td>
	            <td>'.$litros.' (Lts)</td>
	            <td>$ '.number_format($dato->precio,2).'</td>
	            <td>$ '.number_format($importe,2).'</td>
	            <td><a href="#" class="btn btn-block btn-primary btn-xs" onclick="editarDispensador('.$inicial.','.$final.','.$dato->id_dispensador.','.$dato->id_bomba.')">Editar</a></td>
	          </tr>';
	      	  } }
		echo '</table>';
	}

	public function actualizarDispensador()
	{
		$this->load->model("Modelo_bomba"); 

		$inicial  = $this->input->post("minicial");
		$final    = $this->input->post("mfinal");
		$id       = $this->input->post("id_dispensador");
		$id_bomba = $this->input->post("id_bomba");

		$dato = array(
			'lectura_inicial' => $inicial, 
			'lectura_final'   => $final, 
		);
		$this->Modelo_bomba->actualizarBomba($dato,$id);

		$data['r'] = $this->Modelo_bomba->getDatosDispensador($id_bomba);
		$this->load->view("admin/bomba/ajax_bomba",$data);
	}
}
