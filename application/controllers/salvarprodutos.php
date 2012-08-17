<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Salvarprodutos extends CI_Controller {

	public function index()
	{
		
		$this->load->view('salvarprodutos');
		
		// Se o usu‡rio clicou no bot‹o cadastrar efetua as a›es
		if ($_POST['cadastrar']) {
		
			// Recupera os dados dos campos
			$nome = $_POST['nome'];
			$foto = $_FILES["foto"];
		
			// Se a foto estiver sido selecionada
			if (!empty($foto["name"])) {
		
				// Verifica se o arquivo Ž uma imagem
				if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
				}
		
				// Pega as dimens›es da imagem
				$dimensoes = getimagesize($foto["tmp_name"]);
		
				// Pega extens‹o da imagem
				preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
	
				// Gera um nome œnico para a imagem
				$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
	
				// Caminho de onde ficar‡ a imagem
				$caminho_imagem = "/Users/brunocostarocca/Sites/mrgift/application/images/" . $nome_imagem;
	
				// Faz o upload da imagem para seu respectivo caminho
				move_uploaded_file($foto["tmp_name"], $caminho_imagem);
	
				// Insere os dados no banco
				$this->load->model('Produto_model');
				$data['query'] = $this->Produto_model->insert('2', $nome, $nome, $nome_imagem);
	
				echo "OK";
			
		
			}
		}
				
	}
}