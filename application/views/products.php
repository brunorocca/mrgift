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

				<?php for ($z=0;$z<5;$z++) { ?>
					<?php for ($i=1;$i<5;$i++) { ?>
						<div class="product-wrapper">
							<div class="product-image">
								<a href="product.php"><img src="<?php echo $siteUrl;?>/img/products/<?php echo $i;?>.png" alt="Produto" /></a>
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
				<?php } ?>

			</div>

		</div>

	</div>

</div>
<?php require_once "footer.php";?>