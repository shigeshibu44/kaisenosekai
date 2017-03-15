<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dyad
 */

get_header(); ?>

	<main id="primary" class="content-area" role="main">


							<?php

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/diet-custom-header', 'blocks' );
							?>

		<div id="posts" class="posts">

			<header class="page-header">
				<?php
					get_the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/140-TYOAhLd4MAEOF7wEb_LzKjC3mKArhG2jLXPyJ0qw/pubchart?oid=1167655288&amp;format=image"></iframe>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'blocks' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		</div><!-- .posts -->

	</main><!-- #main -->


<?php get_footer(); ?>
