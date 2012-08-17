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
					<img src="<?php echo $siteUrl;?>/images/<?php echo $item->imagem_produto;?>" alt="<?php echo $item->cod_produto; ?>" />
				</div>
				<span class="default-button">Clique na imagem para ampliar</span>
			</div>

			<div id="product-data">

				<div id="product-title">
					<h1><NOME DO PRODUTO></h1>
					<h2><?php echo $item->cod_produto; ?></h2>
				</div>

				<div id="product-description-wrapper">
					<div id="product-description">
						<h3>Descrição do produto</h3>
						<p>
							<?php echo $item->desc_produto; ?>
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