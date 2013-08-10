<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="widecolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

			<!--	<p class="postmetadata alt">
					<small>
						Entrada escrita el
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/wordpress/time-since/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						on <?php the_time('l, F jS, Y') ?> a las <?php the_time() ?>
						bajo la categoría <?php the_category(', ') ?>.
						Puede seguir las respuestas a través del enlace <?php post_comments_feed_link('RSS 2.0'); ?>.

						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							Puede <a href="#respond">dejar una respuesta</a>, o <a href="<?php trackback_url(); ?>" rel="trackback">enlazar</a> desde su web.

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Los comentarios están cerrados pero puede <a href="<?php trackback_url(); ?> " rel="trackback">enlazar</a> desde su web.

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							Puede dejar una respuesta. No se permite avisar de enlace.

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							No se permiten comentarios ni avisos de enlace.

						<?php } edit_post_link('Edit this entry','','.'); ?>

					</small>
				</p>-->

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Lo sentimos, no se encontró la entrada.</p>

<?php endif; ?>

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
