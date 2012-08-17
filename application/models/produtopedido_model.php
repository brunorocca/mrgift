<?php
class Produtopedido_model extends CI_Model {
	
	var $id_pedido = '';
	var $id_produto = '';
	var $quantidade = '';

	function __construct()
	{
		parent::__construct();
	}

	function get_entries($num)
	{
		$query = $this->db->get('PRODUTOS_PEDIDOS', $num);
		return $query->result();
	}
	
	function insert($id_pedido, $id_produto, $quantidade)
	{
		$this->id_pedido = $id_pedido;
		$this->id_produto = $id_produto;
		$this->quantidade = $quantidade;
		
		$this->db->insert('PRODUTOS_PEDIDOS', $this);
		
	}

}

?>