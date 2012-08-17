<div id="page-menu-wrapper">
<div id="active-menu-title">
<h2>Linhas</h2>
</div>
<?php foreach($menu as $key => $value) { ?>
<?php if($categoryId != $value['id']) { ?>
<ul id="category-menu">
	<li><a href="<?php echo $siteUrlBase.$value['url'];?>"><?php echo $value['title']; ?></a></li>
</ul>
<?php } else {?>
<div id="active-menu">
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
<?php }?>


		<?php } ?></div>



