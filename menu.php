<div id="main-nav">
	<ul class="h-menu wrapper">

		<?php

			$menu = Array(

				'mesa' => Array(
					'title'   => 'Mesa',
					'submenu' => Array('Pratos', 'Refratarios', 'Linha Infantil', 'Bandejas', 'Queijo',)
				),
				'cozinha' => Array(
					'title'   => 'Cozinha',
					'submenu' => Array('Sub item A', 'Sub item B', 'Sub item C', 'Sub item D', 'Sub item E', 'Sub item F')
				),
				'bar' => Array(
					'title'   => 'Bar',
					'submenu' => Array('Sub item A', 'Sub item B', 'Sub item C', 'Sub item D', 'Sub item E', 'Sub item F')
				),
				'cheecafe<' => Array(
					'title'   => 'Chá & Café',
					'submenu' => Array('Sub item A', 'Sub item B', 'Sub item C', 'Sub item D', 'Sub item E', 'Sub item F')
				),
				'faqueiros' => Array(
					'title'   => 'Faqueiros & Ta.',
					'submenu' => Array('Sub item A', 'Sub item B', 'Sub item C', 'Sub item D', 'Sub item E', 'Sub item F')
				),
				'decoracao' => Array(
					'title'   => 'Decoração',
					'submenu' => Array('Sub item A', 'Sub item B', 'Sub item C', 'Sub item D', 'Sub item E', 'Sub item F')
				),
				'escritorio' => Array(
					'title'   => 'Escritório',
					'submenu' => Array('Sub item A', 'Sub item B', 'Sub item C', 'Sub item D', 'Sub item E', 'Sub item F')
				),
				'lavanderia' => Array(
					'title'   => 'Lavanderia',
					'submenu' => Array('Sub item A', 'Sub item B', 'Sub item C', 'Sub item D', 'Sub item E', 'Sub item F')
				),
				'limpeza' => Array(
					'title'   => 'Limpeza',
					'submenu' => Array('Sub item A', 'Sub item B', 'Sub item C', 'Sub item D', 'Sub item E', 'Sub item F')
				),
				'beleza' => Array(
					'title'   => 'Beleza',
					'submenu' => Array('Sub item A', 'Sub item B', 'Sub item C', 'Sub item D', 'Sub item E', 'Sub item F')
				),
			);

		?>
		<?php foreach($menu as $key => $value) { ?>
			<li class="main-menu-item" id="main-menu-item-<?php echo $key; ?>">
				<dl>
					<dt><a class="main-menu-item-title" href="<?php echo $siteUrl;?>/products.php"><?php echo $value['title']; ?></a></dt>
					<dd>
						<ul>
							<?php foreach($value['submenu'] as $key2 => $value2) { ?>
								<li><a href="<?php echo $siteUrlBase;?>catalogo/listar/1"><?php echo $value2; ?></a></li>
							<?php } ?>
						</ul>
					</dd>
				</dl>
			</li>
		<?php } ?>
	</ul>
</div>