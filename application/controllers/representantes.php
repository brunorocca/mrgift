<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Representantes extends CI_Controller {

	public function index()
	{
		//$this->load->view('representantes');

		// Insere o Representante
		$this->load->model('Representantes_model');
		$id_representante = $this->Representantes_model->insert("Nome", "contato", "5562-8406", "teste@teste.com.br");

		// Insere a UF do Representante
 		$this->load->model('Representantesuf_model');
 		$this->Representantesuf_model->insert($id_representante, 1);
 		$this->Representantesuf_model->insert($id_representante, 2);
		
		echo "->".$id_representante;

	}
}