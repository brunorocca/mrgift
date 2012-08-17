<?php require_once "main.php"; ?>
<!DOCTYPE HTML>
<html>

	<head>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Gabriel Dal Rovere" />
		<meta charset="ISO-8859-1" />
		<title>MisterGift</title>

		<?php foreach($css as $key => $value) { ?>
			<link rel="stylesheet" type="text/css" href="<?php echo $siteUrl;?>/css/<?php echo $value;?>.css" />
		<?php } ?>
	</head>

	<body>

		<div id="main">

			<div id="main-header">

				<div id="main-header-content" class="wrapper">

					<h1 class="background"><a href="<?php echo $siteHome;?>">MisterGift</a></h1>

					<div id="main-header-nav-wrapper">

						<div id="areas-nav">
							<ul class="h-menu">
								<li><a href="<?php echo $siteUrl;?>">Cadastre-se</a></li>
								<li><a href="<?php echo $siteUrl;?>">Área do lojista</a></li>
							</ul>
						</div>

						<div id="institutional-nav">
							<ul class="h-menu">
								<li><a href="<?php echo $siteUrl;?>">Quem somos</a></li>
								<li><a href="<?php echo $siteUrl;?>">Representantes</a></li>
								<li><a href="<?php echo $siteUrl;?>">Catálogo</a></li>
								<li><a href="<?php echo $siteUrl;?>">Onde comprar</a></li>
								<li><a href="<?php echo $siteUrl;?>">Contato</a></li>
							</ul>
						</div>

						<div id="main-search">
							<form action="products.php" method="post">
								<div class="single-field">
									<input type="text" id="main-search-keywords" name="keywords" />
									<button type="submit" id="search-button">Buscar</button>
								</div>
							</form>
						</div>

					</div>

					<div id="cart-summary">
						<p>Lista de pedidos</p>
						<span><var>3</var> Produtos adicionados</span>
						<ul>
							<li><a href="<?php echo $siteUrl;?>">Meu pedido</a></li>
							<li><a href="<?php echo $siteUrl;?>">Meu Cadastro</a></li>
						</ul>
					</div>

				</div>

			</div>

			<?php require_once "menu.php" ;?>

			<div id="main-content">