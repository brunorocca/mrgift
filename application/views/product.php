<?php
	$css = Array('fonts', 'main', 'products');
	require_once "header.php";
?>

<div id="products" class="content wrapper">

	<?php require_once "page_menu.php"; ?>

	<div id="products-content-wrapper">

		<ul id="products-breadcrumb" class="h-menu">
			<li><a href="<?php echo $siteUrlBase;?>/catalogo/categoria/<?php echo $categoria->id_tipo_produto;?>">
			<?php echo $categoria->nome_tipo_produto; ?>
			</a>></li>
			
			<li><a href="<?php echo $siteUrlBase;?>/catalogo/subcategoria/<?php echo $subCategoria->id_sub_tipo_produto;?>">
			<?php echo $subCategoria->nome_sub_tipo_produto; ?>
			</a>></li>
			
			<li><strong><?php echo $item->cod_produto; ?></strong></li>
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
		
		<?php if ($sugestions)  {?>

		<div id="products-list-wrapper">

			<h4>Confira mais produtos</h4>

			<div id="products-list">

				<?php foreach($sugestions as $itemSug) { ?>
					<div class="product-wrapper">
						<div class="product-image">
								<a href="<?php echo $siteUrlBase;?>/catalogo/detalhe/<?php echo $itemSug->id_produto;?>">
									<img src="<?php echo $siteUrl;?>/images/<?php echo $itemSug->imagem_produto;?>" alt="Produto" />
								</a>
						</div>
						<dl class="product-data">
							<dt><?php echo $itemSug->cod_produto; ?></dt>
							<dd><?php echo $itemSug->desc_produto; ?></dd>
						</dl>
						<div class="product-actions">
							<a href="<?php echo $siteUrlBase;?>/catalogo/detalhe/<?php echo $itemSug->id_produto;?>" class="default-button">+ detalhes</a>
							<a href="<?php echo $siteUrl;?>/product.php" class="default-button">FazerPedido</a>
						</div>
					</div>
				<?php } ?>

			</div>

		</div>
		
		<?php } ?>

	</div>

</div>
<?php require_once "footer.php";?>