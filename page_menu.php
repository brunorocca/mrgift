<div id="page-menu-wrapper"><?php foreach($menu as $key => $value) { ?>
<ul id="category-menu">
	<li><a href="<?php echo $siteUrlBase.$value['url'];?>"><?php echo $value['title']; ?></a></li>
</ul>

<div id="active-menu">
<div id="active-menu-title">
<h2>Linhas</h2>
</div>
<dl>
	<dt><?php echo $value['title'];?></dt>
	<dd>
	<ul>
	<?php foreach($value['submenu'] as $subitem) { ?>
		<li><a href="<?php echo $siteUrlBase.$subitem['url'];?>"><?php echo $subitem["title"]; ?></a></li>
		<?php } ?>
	</ul>
	</dd>
</dl>
</div>


		<?php } ?></div>



