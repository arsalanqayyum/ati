<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

$name = wp_get_post_terms(get_queried_object()->ID,'product_taxonomies',array("fields" => "all",'parent'=>0));

$terms = wp_get_post_terms( get_queried_object()->ID, 'product_taxonomies', ['fields' => 'ids'] );
$defaults = [
	'post_type' => 'products',
	'post__not_in' => [$post->ID],
    'posts_per_page'=> -1,
	'tax_query'=> [
	        [
	                'taxonomy'=>'product_taxonomies',
                    'terms'=>$terms
            ],
    ],
];

$related = get_posts($defaults);

get_header(); ?>


    <div class="breadcrumb-bg">

        <h1><?php echo $name[0]->name;?></h1>
        <p><?php echo $name[0]->description; ?></p>
        <p></p>
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
            <div class="col-sm-6">
                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large')[0];?>" class="single-img">
            </div>
            <div class="col-sm-6">
                <h2 class="single-head"><?php the_title();?></h2>
                <span class="single-rate"><?php echo get_post_meta($post->ID,'rate',true);?></span>
                <p class="single-p"><?php echo get_post_field('post_content');?></p>

            </div>
        </div>
    </div>


    <?php
    if($related != null) {
	    ?>
        <div class="related-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="head">More Related Products</h1>
                </div>
            </div>
        </div>
        <div id="owl-demo">
	    <?php
	    foreach ( $related as $product ) {
		    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->ID, 'large' ) );
            $meta = get_post_meta($product->ID,'rate',true);
		    ?>
            <div class="item"><img src="<?php echo $image[0]; ?>" alt="Owl Image">
                <p class="carousal-content"><?php echo get_post_field('post_content');?></p>
                <span class="price"><?php echo $meta;?></span>
                <p class="carousal-btn"><a href="<?php echo get_permalink($product->ID);?>">Discover More</a></p>
            </div>
	    <?php }
	    wp_reset_postdata();
    }
            ?>

        </div>
    </div>

<?php get_footer();
