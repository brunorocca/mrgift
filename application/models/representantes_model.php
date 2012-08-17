<?php
class Representantes_model extends CI_Model {
	
	var $id_representante = '';
	var $nome = '';
	var $contato = '';
	var $telefone = '';
	var $email = '';

	function __construct()
	{
		parent::__construct();
	}

	function get_entries($num)
	{
		$query = $this->db->get('REPRESENTANTES', $num);
		return $query->result();
	}
	
	function insert($nome, $contato, $telefone, $email)
	{
		$this->nome = $nome;
		$this->contato = $contato;
		$this->telefone = $telefone;
		$this->email = $email;
		
		$this->db->insert('REPRESENTANTES', $this);
		
		return $this->db->insert_id();
		
	}

}

?>