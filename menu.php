<div id="main-nav">
	<ul class="h-menu wrapper">
		<?php
			$menu = Array(
				'mesa' => Array(
					'title'   => 'Mesa',
					'url'	  => '',
					'submenu' => Array (
						Array('title'=>'Pratos', 
							'url'=>''),
						Array('title'=>'Refratarios', 
							'url'=>''), 
						Array('title'=>'Linha Infantil', 
							'url'=>''),
						Array('title'=>'Bandejas', 
							'url'=>''),
						Array('title'=>'Queijo', 
							'url'=>'')
					)
				),
				'cozinha' => Array(
					'title'   => 'Cozinha',
					'url'	  => '',
					'submenu' => Array (
						Array('title'=>'Sub item A', 
							'url'=>''), 
						Array('title'=>'Sub item B', 
							'url'=>''), 
						Array('title'=>'Sub item C', 
							'url'=>''), 
						Array('title'=>'Sub item D', 
							'url'=>''), 
						Array('title'=>'Sub item E', 
							'url'=>''), 
						Array('title'=>'Sub item F', 
							'url'=>'')
					)
				),
				'bar' => Array(
					'title'   => 'Bar',
					'url'	  => '',	
					'submenu' => Array (
						Array('title'=>'Sub item A', 
							'url'=>''), 
						Array('title'=>'Sub item B', 
							'url'=>''), 
						Array('title'=>'Sub item C', 
							'url'=>''), 
						Array('title'=>'Sub item D', 
							'url'=>''), 
						Array('title'=>'Sub item E', 
							'url'=>''), 
						Array('title'=>'Sub item F', 
							'url'=>'')
					)
				),
				'cheecafe<' => Array(
					'title'   => 'Chá & Café',
					'url'	  => '',
					'submenu' => Array (
						Array('title'=>'Sub item A', 
							'url'=>''),
						Array('title'=>'Sub item B', 
							'url'=>''),
						Array('title'=>'Sub item C', 
							'url'=>''),
						Array('title'=>'Sub item D', 
							'url'=>''),
						Array('title'=>'Sub item E', 
							'url'=>''),
						Array('title'=>'Sub item F',
							'url'=>'')
					)
				),
				'faqueiros' => Array(
					'title'   => 'Faqueiros & Ta.',
					'url'	  => '',
					'submenu' => Array (
						Array('title'=>'Sub item A', 
							'url'=>''), 
						Array('title'=>'Sub item B', 
							'url'=>''), 
						Array('title'=>'Sub item C', 
							'url'=>''), 
						Array('title'=>'Sub item D', 
							'url'=>''), 
						Array('title'=>'Sub item E', 
							'url'=>''), 
						Array('title'=>'Sub item F', 
							'url'=>'')
					)
				),
				'decoracao' => Array(
					'title'   => 'Decoração',
					'url'	  => '',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>''), 
						Array('title'=>'Sub item B', 
							'url'=>''), 
						Array('title'=>'Sub item C', 
							'url'=>''), 
						Array('title'=>'Sub item D', 
							'url'=>''), 
						Array('title'=>'Sub item E', 
							'url'=>''), 
						Array('title'=>'Sub item F', 
							'url'=>'')
					)
				),
				'escritorio' => Array(
					'title'   => 'Escritório',
					'url'	  => '',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>''), 
						Array('title'=>'Sub item B', 
							'url'=>''), 
						Array('title'=>'Sub item C', 
							'url'=>''), 
						Array('title'=>'Sub item D', 
							'url'=>''), 
						Array('title'=>'Sub item E', 
							'url'=>''), 
						Array('title'=>'Sub item F', 
							'url'=>'')
					)
				),
				'lavanderia' => Array(
					'title'   => 'Lavanderia',
					'url'	  => '',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>''), 
						Array('title'=>'Sub item B', 
							'url'=>''), 
						Array('title'=>'Sub item C', 
							'url'=>''), 
						Array('title'=>'Sub item D', 
							'url'=>''), 
						Array('title'=>'Sub item E', 
							'url'=>''), 
						Array('title'=>'Sub item F', 
							'url'=>'')
					)
				),
				'limpeza' => Array(
					'title'   => 'Limpeza',
					'url'	  => '',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>''), 
						Array('title'=>'Sub item B', 
							'url'=>''), 
						Array('title'=>'Sub item C', 
							'url'=>''), 
						Array('title'=>'Sub item D', 
							'url'=>''), 
						Array('title'=>'Sub item E', 
							'url'=>''), 
						Array('title'=>'Sub item F', 
							'url'=>'')
					)
				),
				'beleza' => Array(
					'title'   => 'Beleza',
					'url'	  => '',
					'submenu' => Array(
						Array('title'=>'Sub item A', 
							'url'=>''), 
						Array('title'=>'Sub item B', 
							'url'=>''), 
						Array('title'=>'Sub item C', 
							'url'=>''), 
						Array('title'=>'Sub item D', 
							'url'=>''), 
						Array('title'=>'Sub item E', 
							'url'=>''), 
						Array('title'=>'Sub item F', 
							'url'=>'')
					)
				),
			);
		?>
		<?php foreach($menu as $key => $value) { ?>
			<li class="main-menu-item" id="main-menu-item-<?php echo $key; ?>">
				<dl>
					<dt><a class="main-menu-item-title" href="<?php echo $siteUrl.$value['url'];?>"><?php echo $value['title']; ?></a></dt>
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