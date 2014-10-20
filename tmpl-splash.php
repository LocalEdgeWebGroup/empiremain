<?php
/*
Template Name: Splash Page Template
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
    <div class="col-sm-8">
      
        <section class="entry-content clearfix">
        
            <?php the_content(); ?>
            
        </section>
       
    </div>
    
</article>
<?php endwhile; ?>
<?php else : ?>
<?php get_template_part('includes/template','error'); // WordPress template error message ?>
<?php endif; ?>
<?php get_footer();
