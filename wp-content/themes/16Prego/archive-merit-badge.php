<?php
/*
Template Name: Merit B@dge
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
<!-- Creating page listing Custom Post Type           -->
            
            
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
<div id="list-merit-badges">
                <?php
                    $args = array(
                    'post_type' => 'merit-badge',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'showposts' => 100
                    );
                $merit = new WP_Query($args); ?>
                
                
                <ul>
                    <?php while ($merit ->have_posts() ): $merit->the_post(); ?>
                        <li class='one-badge'>
                                <header>
                                    <span <?php post_class(); ?>></span>    
                                    <p> 
                                        <a href="<?php the_permalink(); ?>"
                                        <?php the_title();
                                           ?>
                                        </a>   
                                    </p>
                                </header>
                        </li>
                    <?php endwhile; ?>
                </ul>
                
                
                
            </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
