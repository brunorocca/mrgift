<?php

	$css = Array('fonts', 'main', 'home');

	$banners = Array(
		'alpha' => Array(
			'title' => 'SFASFSAFASFSADFDSAa',
			'content' => 'Algum conteúdo aqui. Revolução 1932, MMDC na veia.'
		),
		'beta' => Array(
			'title' => 'FASDFASFASFSAFSA',
			'content' => 'Algum conteúdo aqui. Revolução 1932, MMDC na veia.'
		),
		'gama' => Array(
			'title' => 'Tha',
			'content' => 'Algum conteúdo aqui. Revolução 1932, MMDC na veia.'
		),
		'delta' => Array(
			'title' => 'TituloSDFASFASDFSADFASDAlpha',
			'content' => 'Algum conteúdo aqui. Revolução 1932, MMDC na veia.'
		),
		'epsilon' => Array(
			'title' => '1231231231213121 Alpha',
			'content' => 'Algum conteúdo aqui. Revolução 1932, MMDC na veia.'
		),
		'digama' => Array(
			'title' => 'TiSFSFSFSDFDSFSDa',
			'content' => 'Algum conteúdo aqui. Revolução 1932, MMDC na veia.'
		),
		'zeta' => Array(
			'title' => 'Titulo Alpha',
			'content' => 'Algum conteúdo aqui. Revolução 1932, MMDC na veia.'
		),
		'eta' => Array(
			'title' => 'Titulo Alpha',
			'content' => 'Algum conteúdo aqui. Revolução 1932, MMDC na veia.'
		),
		'omega' => Array(
			'title' => 'Titulo Alpha',
			'content' => 'Algum conteúdo aqui. Revolução 1932, MMDC na veia.'
		)
	);

	require_once "header.php";

?>

<div id="banners-wrapper" class="red-gradient-background">

	<?php foreach($banners as $key => $value) { ?>
		<div class="banner" id="banner-<?php echo $key;?>">
			<div class="wrapper">
				<dl>
					<dt><?php echo $value['title']; ?></dt>
					<dd><?php echo $value['content']; ?></dd>
				</dl>
			</div>
		</div>
	<?php } ?>

</div>

<div id="banners-nav">
	<ul class="h-menu">
		<?php foreach($banners as $key => $value) { ?>
			<li class="background" id="view-banner-<?php echo $key;?>"><?php echo $value['title']; ?></li>
		<?php } ?>
	</ul>
</div>

<div id="home" class="content wrapper">

	<div id="home-tools">

		<div class="home-tool red-gradient-background-invert" id="go-to-departments">
			<a href="#">Veja todos os departamentos</a>
		</div>

		<div class="home-tool red-gradient-background" id="add-to-mail-list">
			<label for="guest-mail">Cadastre seu email e acompanhe todas as dicas e novidades do MisterGift</label>
			<form action="#" method="post">
				<div class="single-field">
					<input type="email" id="guest-mail" name="mail" />
					<button type="button" id="add-to-mail-list-button" class="red-gradient-background">OK</button>
				</div>
			</form>
		</div>

	</div>

	<div id="home-products">
		<h3>Destaques MisterGift</h3>
		<div id="home-products-list">
			<?php for ($i=0;$i<5;$i++) { ?>
				<div class="home-product-wrapper">
					<div class="home-product-image">
						<a href="products.php"><img src="/img/home-product.png" alt="Produto" /></a>
					</div>
					<dl class="home-product-data">
						<dt>2006 Fifa World Cup</dt>
						<dd>Ano de Copa, e nada melhor do que acessar o site oficial do campeonato como aperitivo.</dd>
					</dl>
					<div class="home-product-actions">
						<a href="products.php" class="default-button">+ detalhes</a>
						<a href="products.php" class="default-button">FazerPedido</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

</div>
<?php require_once "footer.php";?>