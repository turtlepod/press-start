<header role="banner" id="header">

	<div class="header-wrap">

		<?php tamatebako_menu_toggle( 'primary' ); ?>

		<div id="branding">

			<?php if( is_front_page() ){ ?>
				<h1 id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<?php } else { ?>
				<p id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
			<?php } ?>

		</div><!-- #branding -->

	</div>

</header><!-- #header-->