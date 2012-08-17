<?php
	$css = Array('fonts', 'main', 'products');
	require_once "header.php";
?>

<div id="products" class="content wrapper">

	<?php require_once "page_menu.php"; ?>

	<div id="products-content-wrapper">

		<ul id="products-breadcrumb" class="h-menu">
			<li><a href="products.php">Categoria</a>></li>
			<li><a href="products.php">Sub-categoria</a>></li>
			<li><a href="products.php">Sub-categoria 2</a>></li>
			<li><strong>Produto</strong></li>
		</ul>

		<div id="product-wrapper">

			<div id="product-image-wrapper">
				<div id="product-image">
					<img src="<?php echo $siteUrl;?>/img/products/3.png" alt="2006 Fifa World Cup" />
				</div>
				<span class="default-button">Clique na imagem para ampliar</span>
			</div>

			<div id="product-data">

				<div id="product-title">
					<h1>2006 Fifa World Cup</h1>
					<h2>Cod. do produto: 1111432007</h2>
				</div>

				<div id="product-description-wrapper">
					<div id="product-description">
						<h3>Descrição do produto</h3>
						<p>
							Para relembrar o penta brasileiro, o site oficial da Fifa para a Copa do Mundo de 2002 segue o esquema da página da entidade,
							com notícias da competição e informações de cada seleção que disputou o Mundial em 2002.
							Há a tabela completa do campeonato, uma galeria de fotos, informações das cidades sedes dos jogos,
							uma seção de entretenimento e arquivos históricos do Mundiais. Em inglês, espanhol, francês, alemão, coreano e japonês.
						</p>
					</div>
				</div>

			</div>

			<div id="product-buttons">
				<span class="default-button">Fechar pedido</span>
				<span class="default-button">Adicionar aos pedidos</span>
			</div>

		</div>

		<div id="products-list-wrapper">

			<h4>Confira mais produtos</h4>

			<div id="products-list">

				<?php for ($i=1;$i<5;$i++) { ?>
					<div class="product-wrapper">
						<div class="product-image">
							<a href="product.php"><img width="" src="<?php echo $siteUrl;?>/img/products/<?php echo $i;?>.png" alt="Produto" /></a>
						</div>
						<dl class="product-data">
							<dt>2006 Fifa World Cup</dt>
							<dd>Ano de Copa, e nada melhor do que acessar o site oficial do campeonato como aperitivo.</dd>
						</dl>
						<div class="product-actions">
							<a href="<?php echo $siteUrl;?>/product.php" class="default-button">+ detalhes</a>
							<a href="<?php echo $siteUrl;?>/product.php" class="default-button">FazerPedido</a>
						</div>
					</div>
				<?php } ?>

			</div>

		</div>

	</div>

</div>
<?php require_once "footer.php";?>