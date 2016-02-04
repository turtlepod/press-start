<header role="banner" id="header">

	<div class="header-wrap">

		<div class="menu-toggle" id="menu-toggle-primary">
			<a href="#menu-toggle-primary" class="menu-toggle-button button"><span class="screen-reader-text"><?php echo tamatebako_get_menu_name( 'primary' ); ?></span></a>
		</div>

		<div id="branding">

			<?php if( is_front_page() ){ ?>
				<h1 id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<?php } else { ?>
				<p id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
			<?php } ?>

		</div><!-- #branding -->

	</div>

</header><!-- #header-->