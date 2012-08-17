<?php
class Representantesuf_model extends CI_Model {
	
	var $id_representante = '';
	var $id_uf= '';

	function __construct()
	{
		parent::__construct();
	}

	function get_entries($num)
	{
		$query = $this->db->get('REPRESENTANTE_UF', $num);
		return $query->result();
	}
	
	function insert($id_representante, $id_uf)
	{
		$this->id_representante = $id_representante;
		$this->id_uf = $id_uf;
		
		$this->db->insert('REPRESENTANTE_UF', $this);
		
	}

}

?>