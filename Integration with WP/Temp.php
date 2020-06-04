	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tile' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$tile_description = get_bloginfo( 'description', 'display' );
			if ( $tile_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $tile_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tile' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">




												Динамичное меню WP
	                <!----------------------- Для интерактивного меню WP (ломается номер телефона и значок) --------------------------->  
<!--       <?php
			// wp_nav_menu( array(
			// 	'theme_location' => 'menu-1',
			// 	'menu_id' 	=>'primery-menu',
			// 	'menu_class'	=>'navigation',
			// 	'container_id'        => 'wrapper-nav-menu',
			// 	'container_class' 	=>'header',

			));
			?> -->


<!-- Hidden Required Fields -->
        						<input type="hidden" name="project_name" value="Название Сайта">
        						<input type="hidden" name="admin_email" value="ne01kit@gmail.com">
        						<input type="hidden" name="form_subject" value="Заявка с сайта">
        						<!-- END Hidden Required Fields -->