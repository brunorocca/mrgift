<?php
class Produto_model extends CI_Model {
	
	var $id_produto = '';
	var $id_sub_tipo_produto = '';
	var $cod_produto = '';
	var $desc_produto = '';
	var $imagem_produto = '';

	function __construct()
	{
		parent::__construct();
	}

	function get_entries($num)
	{
		$query = $this->db->get('PRODUTOS', $num);
		return $query->result();
	}
	
	function insert($id_tipo, $codigo, $desc, $imagem) 
	{
		$this->id_sub_tipo_produto = $id_tipo;
		$this->cod_produto = $codigo;
		$this->desc_produto = $desc;
		$this->imagem_produto = $imagem;
		
		$this->db->insert('PRODUTOS', $this);
		
	}
	
	function get_by_type($id_tipo_produto) 
	{
		
		$this->db->select('*');
		$this->db->from('PRODUTOS');
		$this->db->join('SUB_TIPO_PRODUTO', 'PRODUTOS.id_sub_tipo_produto = SUB_TIPO_PRODUTO.id_sub_tipo_produto');
		$this->db->join('TIPO_PRODUTO', 'TIPO_PRODUTO.id_tipo_produto = SUB_TIPO_PRODUTO.id_tipo_produto');
		$this->db->where('TIPO_PRODUTO.id_tipo_produto', $id_tipo_produto);
		
		$query = $this->db->get();
		
		return $query->result();
	}
	
	function get_by_sub_type($id_sub_tipo_produto)
	{
		$query = $this->db->get_where('PRODUTOS',
				array('id_sub_tipo_produto' => $id_sub_tipo_produto));
	
		return $query->result();
	}
	
	function get_sugesions($id_tipo_produto)
	{
		$query = $this->db->get_where('PRODUTOS',
				array('id_sub_tipo_produto' => $id_tipo_produto));
	
		// TODO RANDON 4 PRODUTOS
		
		return $query->result();
	}
	
	function get_by_id($id_produto)
	{
		$query = $this->db->get_where('PRODUTOS',
				array('id_produto' => $id_produto));
	
		return $query->result();
	}

}

?>