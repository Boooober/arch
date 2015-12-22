<div id="flying-panel" class="flying-panel white">
	<div class="topline-nav clearfix">
		<div id="logo" class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php get_template_part('assets/svg/logo.svg') ?></a>
		</div>

		<nav class="menu-wrap">

			<?php
			wp_nav_menu( array(
				'container'      => '',
				'menu_class'     => 'menu nav-menu',
				'menu_id'        => '',
				'theme_location' => 'header',
			) );

			wp_nav_menu( array(
				'container'      => '',
				'menu_class'     => 'menu langs-menu',
				'menu_id'        => '',
				'theme_location' => 'langs',
			) );
			?>

			<div class="menu-trigger divider js-overly-trigger" data-overlay="#pull-menu">MENU</div>
		</nav>

	</div>
</div>