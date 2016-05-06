<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->
        <aside id="coverletter"><p style="text-align: center;"><em><a href="http://2016.dev/wp-content/uploads/2016/05/Nicholas-Bass-Aerospace-Corp-BI-Internship.pdf">Nicholas Bass - Aerospace Corp BI Internship</a></em></p>
&nbsp;
<p style="text-align: center;"><img class="aligncenter size-full wp-image-146" src="http://2016.dev/wp-content/uploads/2016/02/Cover-Letter-AC.png" alt="My Cover Letter Image" width="567" height="737" /><em>
    </aside>
    
    
<div id="resume"><a href="http://2016.dev/wp-content/uploads/2016/05/Nicholas-Bass-Resume.pdf">Nicholas Bass - Resume</a></em></p>
    <br>
    <br>
<img class="size-full wp-image-147 aligncenter" src="http://2016.dev/wp-content/uploads/2016/02/Resume.png" alt="My Resume Image" width="570" height="740" />

    </div>
    
    
    
    
<div id="asof">This is my Resume as of Cinco De Mayo 2016</div>
	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
