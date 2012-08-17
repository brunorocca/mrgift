<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedido extends CI_Controller {

	public function index()
	{
		$this->load->view('pedido');

		$this->load->model('Produto_model');
		$data['query'] = $this->Produto_model->get_by_type(2);

		
	}
}