<?php 
class Video_model extends CI_Model {

	function select_videos()
	{
		$query = $this->db->get('info_video');
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $fila)
			{
				$data[] = $fila;
			}
			return $data;
		}
		else
		{
			return False;
		}
	}
	function insert($titulo, $costo, $formato, $portada)
	{
		$data = array(
					'titulo' => $titulo,
					'costo' => $costo,
					'formato' => $formato,
					'portada' => $portada,
			 );
		return $this->db->insert('info_video',$data);
	}
}