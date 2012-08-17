<?php
	$css = Array('fonts', 'main', 'products');
	require_once "header.php";
?>

<div id="banners-wrapper" class="red-gradient-background">

	<div class="banner" id="banner-alpha">
		<div class="wrapper">

			<div id="page-title">
				<h1>Mesa</h1>
			</div>

		</div>
	</div>

</div>

<div id="products" class="content wrapper">

	<?php require_once "page_menu.php"; ?>

	<div id="products-content-wrapper">

		<ul id="products-breadcrumb" class="h-menu">
			<li><a href="<?php echo $siteUrl;?>/products.php">Categoria</a>></li>
			<li><a href="<?php echo $siteUrl;?>/products.php">Sub-categoria</a>></li>
			<li><strong>Sub-categoria 2</strong></li>
		</ul>

		<div id="products-list-wrapper">

			<div id="products-list-pagination">
				<span>Página:</span>
				<ul class="h-menu">
					<li><a href="<?php echo $siteUrl;?>/products.php">1</a></li>
					<li><a href="<?php echo $siteUrl;?>/products.php">2</a></li>
					<li><a href="<?php echo $siteUrl;?>/products.php"><strong>3</strong></a></li>
					<li><a href="<?php echo $siteUrl;?>/products.php">4</a></li>
					<li><a href="<?php echo $siteUrl;?>/products.php">5</a></li>
					<li><a href="<?php echo $siteUrl;?>/products.php">6</a></li>
				</ul>
			</div>

			<div id="products-list">
			
				<?php foreach($produtos as $item) { ?>
					
					
						<div class="product-wrapper">
							<div class="product-image">
								<a href="product.php"><img src="<?php echo $siteUrl;?>/images/<?php echo $item->imagem_produto;?>" alt="Produto" /></a>
							</div>
							<dl class="product-data">
								<dt><?php echo $item->cod_produto; ?></dt>
								<dd><?php echo $item->desc_produto; ?></dd>
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