<div id="main-nav">
	<ul class="h-menu wrapper">
		<?php
			$menu = Array(
				'mesa' => Array(
					'title'   => 'Mesa',
					'url'	  => 'catalogo/categoria/1',
					'submenu' => Array (
						Array('title'=>'Pratos', 
							'url'=>'catalogo/subcategoria/1'),
						Array('title'=>'Refratarios', 
							'url'=>'catalogo/subcategoria/2'), 
						Array('title'=>'Linha Infantil', 
							'url'=>'catalogo/subcategoria/3'),
						Array('title'=>'Bandejas', 
							'url'=>'catalogo/subcategoria/4'),
						Array('title'=>'Queijo', 
							'url'=>'catalogo/subcategoria/5')
					)
				),
				'cozinha' => Array(
					'title'   => 'Cozinha',
					'url'	  => 'catalogo/categoria/2',
					'submenu' => Array (
						Array('title'=>'Sub item A', 
							'url'=>'catalogo/subcategoria/6'),
						Array('title'=>'Sub item B', 
							'url'=>'catalogo/subcategoria/7'),
						Array('title'=>'Sub item C', 
							'url'=>'catalogo/subcategoria/8'),
						Array('title'=>'Sub item D', 
							'url'=>'catalogo/subcategoria/9'),
						Array('title'=>'Sub item E', 
							'url'=>'catalogo/subcategoria/10'),
						Array('title'=>'Sub item F', 
							'url'=>'catalogo/subcategoria/11')
					)
				),
				'bar' => Array(
					'title'   => 'Bar',
					'url'	  => 'catalogo/categoria/3',
					'submenu' => Array (
						Array('title'=>'Sub item A', 
							'url'=>'catalogo/subcategoria/12'),
						Array('title'=>'Sub item B', 
							'url'=>'catalogo/subcategoria/13'),
						Array('title'=>'Sub item C', 
							'url'=>'catalogo/subcategoria/14'),
						Array('title'=>'Sub item D', 
							'url'=>'catalogo/subcategoria/15'),
						Array('title'=>'Sub item E', 
							'url'=>'catalogo/subcategoria/16'),
						Array('title'=>'Sub item F', 
							'url'=>'catalogo/subcategoria/17')
					)
				),
				'cheecafe<' => Array(
					'title'   => 'Ch� & Caf�',
					'url'	  => 'catalogo/categoria/4',
					'submenu' => Array (
						Array('title'=>'Sub item A', 
							'url'=>'catalogo/subcategoria/18'),
						Array('title'=>'Sub item B', 
							'url'=>'catalogo/subcategoria/19'),
						Array('title'=>'Sub item C', 
							'url'=>'catalogo/subcategoria/20'),
						Array('title'=>'Sub item D', 
							'url'=>'catalogo/subcategoria/21'),
						Array('title'=>'Sub item E', 
							'url'=>'catalogo/subcategoria/22'),
						Array('title'=>'Sub item F',
							'url'=>'catalogo/subcategoria/23')
					)
				),
				'faqueiros' => Array(
					'title'   => 'Faqueiros & Ta.',
					'url'	  => 'catalogo/categoria/5',
					'submenu' => Array (
						Array('title'=>'Sub item A', 
							'url'=>'catalogo/subcategoria/24'),
						Array('title'=>'Sub item B', 
							'url'=>'catalogo/subcategoria/25'),
						Array('title'=>'Sub item C', 
							'url'=>'catalogo/subcategoria/26'),
						Array('title'=>'Sub item D', 
							'url'=>'catalogo/subcategoria/27'), 
						Array('title'=>'Sub item E', 
							'url'=>'catalogo/subcategoria/28'),
						Array('title'=>'Sub item F', 
							'url'=>'catalogo/subcategoria/29')
					)
				),
				'decoracao' => Array(
					'title'   => 'Decora��o',
					'url'	  => 'catalogo/categoria/6',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>'catalogo/subcategoria/30'),
						Array('title'=>'Sub item B', 
							'url'=>'catalogo/subcategoria/31'),
						Array('title'=>'Sub item C', 
							'url'=>'catalogo/subcategoria/32'),
						Array('title'=>'Sub item D', 
							'url'=>'catalogo/subcategoria/33'),
						Array('title'=>'Sub item E', 
							'url'=>'catalogo/subcategoria/34'),
						Array('title'=>'Sub item F', 
							'url'=>'catalogo/subcategoria/35')
					)
				),
				'escritorio' => Array(
					'title'   => 'Escrit�rio',
					'url'	  => 'catalogo/categoria/7',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>'catalogo/subcategoria/36'),
						Array('title'=>'Sub item B', 
							'url'=>'catalogo/subcategoria/37'),
						Array('title'=>'Sub item C', 
							'url'=>'catalogo/subcategoria/38'),
						Array('title'=>'Sub item D', 
							'url'=>'catalogo/subcategoria/39'),
						Array('title'=>'Sub item E', 
							'url'=>'catalogo/subcategoria/40'),
						Array('title'=>'Sub item F', 
							'url'=>'catalogo/subcategoria/41')
					)
				),
				'lavanderia' => Array(
					'title'   => 'Lavanderia',
					'url'	  => 'catalogo/categoria/8',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>'catalogo/subcategoria/42'),
						Array('title'=>'Sub item B', 
							'url'=>'catalogo/subcategoria/43'),
						Array('title'=>'Sub item C', 
							'url'=>'catalogo/subcategoria/44'),
						Array('title'=>'Sub item D', 
							'url'=>'catalogo/subcategoria/45'),
						Array('title'=>'Sub item E', 
							'url'=>'catalogo/subcategoria/46'),
						Array('title'=>'Sub item F', 
							'url'=>'catalogo/subcategoria/47')
					)
				),
				'limpeza' => Array(
					'title'   => 'Limpeza',
					'url'	  => 'catalogo/categoria/9',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>'catalogo/subcategoria/48'), 
						Array('title'=>'Sub item B', 
							'url'=>'catalogo/subcategoria/49'),
						Array('title'=>'Sub item C', 
							'url'=>'catalogo/subcategoria/50'),
						Array('title'=>'Sub item D', 
							'url'=>'catalogo/subcategoria/51'), 
						Array('title'=>'Sub item E', 
							'url'=>'catalogo/subcategoria/52'),
						Array('title'=>'Sub item F', 
							'url'=>'catalogo/subcategoria/53')
					)
				),
				'beleza' => Array(
					'title'   => 'Beleza',
					'url'	  => 'catalogo/categoria/10',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>'catalogo/subcategoria/54'), 
						Array('title'=>'Sub item B', 
							'url'=>'catalogo/subcategoria/55'),
						Array('title'=>'Sub item C', 
							'url'=>'catalogo/subcategoria/56'), 
						Array('title'=>'Sub item D', 
							'url'=>'catalogo/subcategoria/57'),
						Array('title'=>'Sub item E', 
							'url'=>'catalogo/subcategoria/58'),
						Array('title'=>'Sub item F', 
							'url'=>'catalogo/subcategoria/59')
					)
				),
			);
		?>
		<?php foreach($menu as $key => $value) { ?>
			<li class="main-menu-item" id="main-menu-item-<?php echo $key; ?>">
				<dl>
					<dt><a class="main-menu-item-title" href="<?php echo $siteUrlBase.$value['url'];?>"><?php echo $value['title']; ?></a></dt>
					<dd>
						<ul>
							<?php foreach($value['submenu'] as $subitem) { ?>
								<li><a href="<?php echo $siteUrlBase.$subitem['url'];?>"><?php echo $subitem["title"]; ?></a></li>
							<?php } ?>
						</ul>
					</dd>
				</dl>
			</li>
		<?php } ?>
	</ul>
</div>