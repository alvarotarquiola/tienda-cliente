<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
	<div id="content" class="narrowcolumn" role="main">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Leer el resto &raquo;'); ?>
				</div>

				<!--<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Escrito en <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('Sin comentarios &#187;', '1 Comentario &#187;', '% Comentarios &#187;'); ?></p>-->
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Entradas antiguas') ?></div>
			<div class="alignright"><?php previous_posts_link('Entradas recientes &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No encontrado</h2>
		<p class="center">Lo sentimos, no se encuentra lo que busca.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
