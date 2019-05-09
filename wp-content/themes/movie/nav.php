<nav>

	<a href="/">
		<div id="mobile-logo" class="nav-logo mobile">	
			<img src="<?php echo get_template_directory_uri() ?>/img/site_logo.png" alt="Site Logo"/>
		</div>	
	</a>
	<div id="menu-btn" class="mobile"> <i class="fas fa-bars"></i></div>
	<div id="nav-btns">
		<div id="menu-close-btn" class="mobile"> <i class="fas fa-times"></i></div>
		<a href="/">
			<div id="mmobile-nav-logo" class="nav-logo mobile">	
				<img src="<?php echo get_template_directory_uri() ?>/img/site_logo.png" alt="Site Logo"/>
			</div>	
		</a>
		<?php

			$menu_items = wp_get_nav_menu_items( 'Main Menu' );
			$total_items = count($menu_items);
			$half = floor($total_items/2);
			$count = 1;
			foreach ( (array) $menu_items as $key => $menu_item ) {
			    $title = $menu_item->title;
			    $url = $menu_item->url;
			    $attr_title = $menu_item->attr_title;
			    $btn_class = "nav-btn";
			    //if($attr_title == $segments[0]) $btn_class = "activeBtn";
			    echo '<a href="' . $url . '" class="' . $btn_class . '">' . $title . '</a>';
			    if($count == $half) {
			    	echo '<a href="/">
							<div id="desktop-logo" class="nav-logo desktop">	
								<img src="'. get_template_directory_uri() .'/img/site_logo.png" alt="Site Logo"/>
							</div>	
						</a>';
			    }
			    $count++;

			}
		?>
		<div class="social-nav mobile">
			<?php
				$GLOBALS['social_btns'] = "";
				$btn_class;
				$menu_items = wp_get_nav_menu_items( 'Social Menu' );
				foreach ( (array) $menu_items as $key => $menu_item ) {
				    $title = $menu_item->title;
				    $url = $menu_item->url;
				    $attr_title = $menu_item->attr_title;
				    $icon_class = get_field('icon_class', $menu_item);
				    $btn_class = "social-btn ";
				    $GLOBALS['social_btns'] .= '<a href="'.$url.'" target="_blank" >
                        <div class="'.$btn_class.'">
                          <span class="'.$icon_class.'" aria-hidden="true" ></span>
                          <span class="screen-reader-text">'.$title.'</span>
                        </div>
                    </a>'; 
				}
				echo $GLOBALS['social_btns'];
			?>
		</div>	
	</div>
</nav>