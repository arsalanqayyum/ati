<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
global $post;
get_header(); ?>



    <div class="breadcrumb-bg">

        <h1><?php single_term_title();?></h1>
        <p><?php the_archive_description(); ?></p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="head">we deal in</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
	        <?php
	        if ( have_posts() ) {
		        while ( have_posts() ) {
			        the_post();
			        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large');
			        $meta = get_post_meta($post->ID,'rate',true);
                ?>
			        <div class="col-lg-6 col-md-6 col-sm-12 prod-img-brdr">
                <img src="<?php echo $image[0];?>" class="prod-img">
                <h2 class="prod-img-h2"><?php the_title();?></h2>
                        <p class="prod-img-p"><?php echo get_post_field('post_content');?></p>
                        <span class="prod-img-price"><?php echo $meta;?></span>
                    <div class="prod-img-a">
                        <a href="<?php echo get_permalink($post->ID);?>">view details</a>
                    </div>
                    </div>
                    <?php
		        } // end while
	        } // end if
	        ?>

        </div>
    </div>


<?php get_footer();
