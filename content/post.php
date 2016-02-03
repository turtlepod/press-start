<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<div class="entry-header">

			<?php tamatebako_entry_title(); ?>

			<div class="entry-byline">
				<span class="entry-author vcard"><?php the_author_posts_link(); ?></span>
				<?php tamatebako_entry_date(); ?>
			</div><!-- .entry-byline -->

		</div><!-- .entry-header -->

		<div class="entry-media">
			<?php get_the_image( array( 'size' => 'full', 'link_to_post' => true, 'caption' => false, 'order' => array( 'featured' ) ) ); ?>
		</div>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<?php tamatebako_read_more(); ?>
		</div><!-- .entry-summary -->

		<div class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_taxonomies(); ?>
		</div><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->
