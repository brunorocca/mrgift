<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalogo extends CI_Controller {

	public function categoria($tipoProduto)
	{

		$this->load->model('Produto_model');
		$return['query'] = $this->Produto_model->get_by_type($tipoProduto);

		$data['produtos'] = $return['query'];
		$categoria = $this->Produto_model->get_categoria_by_id($tipoProduto);
		$data['categoria'] = $categoria[0];
		
		$this->load->library('pagination');
		
		$this->pagination->initialize($config);
		
		echo $this->pagination->create_links();
		
		
		$this->load->view('products', $data);


	}
	
	public function subcategoria($tipoSubProduto)
	{
		$this->load->model('Produto_model');
		$data['query'] = $this->Produto_model->get_by_sub_type($tipoSubProduto);
	
		$data['produtos'] = $data['query'];
		$categoria = $this->Produto_model->get_categoria_by_sub_tipo($tipoSubProduto);
		$data['categoria'] = $categoria[0];
		
		$subCategoria = $this->Produto_model->get_sub_categoria_by_id($tipoSubProduto);
		$data['subCategoria'] = $subCategoria[0];
		
		$this->load->view('products', $data);
	
	}

	public function detalhe($idProduto)
	{
		$this->load->model('Produto_model');
		$return['query'] = $this->Produto_model->get_by_id($idProduto);

		$item = $return['query'][0];
		
		$data['item'] = $item;
		
		// Pega os dados da Categoria
		$categoria = $this->Produto_model->get_categoria_by_sub_tipo($item->id_sub_tipo_produto);
		$data['categoria'] = $categoria[0];
		
		// Pega os dados da Subcategoria
		$subCategoria = $this->Produto_model->get_sub_categoria_by_id($item->id_sub_tipo_produto);
		$data['subCategoria'] = $subCategoria[0];
		
		// Pega as sugestoes
		$sugestions = $this->Produto_model->get_sugestions($item->id_sub_tipo_produto);
		$data['sugestions'] = $sugestions;
		
		$this->load->view('product', $data);


	}
	
	public function telaproduto() {
		
		$this->load->model('Produto_model');
		$data['query'] = $this->Produto_model->get_entries(10);
		
		print_r($data); 
		
		$this->load->view('viewsalvarprodutos');
	}
	
	public function salvarprodutos()
	{
	
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
				$data['query'] = $this->Produto_model->insert('1', $nome, $nome, $nome_imagem);
	
				echo "OK";
					
	
			}
		}
	
	}

}