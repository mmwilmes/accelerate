<?php
/**
 * Template Name: About Page Template
 *
 * This is the template that displays the about page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section>
<div id="content" role="main">
  <div class='about-header'>
     <div class="about-header-text">
        <h3><span style="color: #45ac9d">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. </h3>
     </div>
  </div>
</section>

 <section class="about-sections">
	<div id="primary" class="site-content">		
                        <?php query_posts('posts_per_page=4&post_type=about_sections'); ?>
			<?php while ( have_posts() ) : the_post();
                          $about_section = get_field('about_section');	
                          $image = get_field('about_section_image');
  ?>

            <article class="about-section">
                     <h2><?php the_title(); ?></h2>  
                     <div class="about_section-content">
                            <?php echo $about_section; ?>//</div>
                            //<div class = "about-section-image">
                            <?php if($image) { ?><?php echo wp_get_attachment_image( $image, array('200', '200')); ?><?php }?>
                     </div>
            </article>
			<?php endwhile; ?>
                            <?php wp_reset_query(); ?>
		</div><!-- #content -->
	</div><!-- #primary -->
  </section>

<?php get_footer(); ?>

