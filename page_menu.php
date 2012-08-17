<div id="page-menu-wrapper">
	<div id="active-menu">
		<div id="active-menu-title">
			<h2>Linhas</h2>
		</div>
		<dl>
			<dt>Mesa</dt>
			<dd>
				<ul>
					<li><a href="<?php echo $siteUrl;?>/products.php">Pratos</a></li>
					<li><a href="<?php echo $siteUrl;?>/products.php">Refratários</a></li>
					<li><a href="<?php echo $siteUrl;?>/products.php">Linha infantil</a></li>
					<li><a href="<?php echo $siteUrl;?>/products.php">Bandejas</a></li>
					<li><a href="<?php echo $siteUrl;?>/products.php">Queijo</a></li>
				</ul>
			</dd>
		</dl>
	</div>
	<ul id="category-menu">
		<?php foreach($menu as $key => $value) { ?>
			<li><a href="<?php echo $siteUrl;?>/products.php"><?php echo $value['title'];?></a></li>
		<?php } ?>
	</ul>
</div>