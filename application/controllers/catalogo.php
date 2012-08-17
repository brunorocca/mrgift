<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalogo extends CI_Controller {

	public function listar($tipoProduto)
	{
		$this->load->view('catalogo');

		$this->load->model('Produto_model');
		$data['query'] = $this->Produto_model->get_by_type($tipoProduto);

		echo $data['query'];

		$this->load->view('products');


	}

	public function detalhe($idProduto)
	{
		$this->load->view('catalogo');

		$this->load->model('Produto_model');
		$produto = $this->Produto_model->get_by_id($idProduto);

		$sugestoes = $this->Produto_model->get_sugesions($produto['id_tipo_produto']);


		echo $produto;

		$this->load->view('product');


	}

}