<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			<div class="entry">
				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
				<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<div class="navigation">
					<div class="alignleft"><?php previous_image_link() ?></div>
					<div class="alignright"><?php next_image_link() ?></div>
				</div>
				<br class="clear" />

				<p class="postmetadata alt">
					<small>
						Esta entrada se escribió el <?php the_time('l, F jS, Y') ?> a las <?php the_time() ?>
						bajo la categoría <?php the_category(', ') ?>.
						<?php the_taxonomies(); ?>
						Puede seguir las respuestas a través del enlace <?php post_comments_feed_link('RSS 2.0'); ?>.

						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							Puede <a href="#respond">responder</a>, o <a href="<?php trackback_url(); ?>" rel="trackback">enlazar</a> desde su web.

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Los comentarios están cerrados pero puede <a href="<?php trackback_url(); ?> " rel="trackback">enlazar</a> desde su web.

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							Puede dejar una respuesta. No se permite avisar de enlace.

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							No se permiten comentarios ni avisos de enlace.

						<?php } edit_post_link('Editar.','',''); ?>

					</small>
				</p>

			</div>

		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>No se han encontrado adjuntos.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
