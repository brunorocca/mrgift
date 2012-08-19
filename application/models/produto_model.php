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
	
	function get_categoria_by_sub_tipo($id_sub_tipo_produto)
	{
		$this->db->select('*');
		$this->db->from('TIPO_PRODUTO');
		$this->db->join('SUB_TIPO_PRODUTO', 'SUB_TIPO_PRODUTO.id_tipo_produto = TIPO_PRODUTO.id_tipo_produto');
		$this->db->where('SUB_TIPO_PRODUTO.id_sub_tipo_produto', $id_sub_tipo_produto);
	
		$query = $this->db->get();
	
		return $query->result();
	}
	
	function get_by_sub_type($id_sub_tipo_produto)
	{
		$query = $this->db->get_where('PRODUTOS',
				array('id_sub_tipo_produto' => $id_sub_tipo_produto));
	
		return $query->result();
	}
	
	function get_sugestions($id_sub_tipo_produto)
	{
		$query = $this->db->get_where('PRODUTOS',
				array('id_sub_tipo_produto' => $id_sub_tipo_produto));
	
		// Escolhe Produtos Aleatorios
		
		$result = $query->result();
		
		$produtos = $result;
		
		if (count($produtos) > 4 ) {
			for ($i = 0; $i < 4; $i++) {
				$randomico = rand(0, count($produtos));
				$produto = $result[$randomico];
					
				$sugestions[] = $produto;
					
			}
			return $sugestions;
		} else {
			$produtos;
		}
		
	}
	
	function get_by_id($id_produto)
	{
		$query = $this->db->get_where('PRODUTOS',
				array('id_produto' => $id_produto));
	
		return $query->result();
	}
	
	function get_sub_categoria_by_id($id_sub_tipo_produto)
	{
		$query = $this->db->get_where('SUB_TIPO_PRODUTO',
				array('id_sub_tipo_produto' => $id_sub_tipo_produto));
	
		return $query->result();
	}
	
	function get_categoria_by_id($id_tipo_produto)
	{
		$query = $this->db->get_where('TIPO_PRODUTO',
				array('id_tipo_produto' => $id_tipo_produto));
	
		return $query->result();
	}
	

}

?>