<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
                <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
		    <?php while ( have_posts() ) : the_post();
                          $services = get_field('services');	
                          $client = get_field('client');
                          $site_link = get_field('site_link');
                          $image_1 = get_field('image_1');
//$size = "full";
                    ?>
            <article class="case-study">
                <aside class="case-study-sidebar">
                    <h2><?php the_title(); ?></h2>
                    <h5 class="case-study-services"><?php echo $services; ?></h5>
                    <h6>Client: <?php echo $client; ?></h6> 
                    <p><strong><a href="<?php echo $site_link; ?> ">Visit Live Site</a></strong></p>
                            <?php the_excerpt(); ?>
                </aside>

                 <div class = "case-study-images">
                    <?php if($image_1) { ?><?php echo wp_get_attachment_image( $image_1, array('510', '380')); ?><?php }?>
                </div>
            </article>
                            
		  <?php endwhile; // end of the loop. ?>
                  <?php wp_reset_query(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>