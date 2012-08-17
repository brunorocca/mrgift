<?php
class Pedido_model extends CI_Model {
	
	var $id_pedido = '';
	var $id_representante = '';
	var $descricao_pedido = '';

	function __construct()
	{
		parent::__construct();
	}

	function get_entries($num)
	{
		$query = $this->db->get('PEDIDOS', $num);
		return $query->result();
	}
	
	function insert($id_representante, $descricao_pedido) 
	{
		$this->id_representante = $id_representante;
		$this->descricao_pedido = $descricao_pedido;
		
		$this->db->insert('PEDIDOS', $this);
		
	}

}

?>