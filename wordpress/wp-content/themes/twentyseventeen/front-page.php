<?php
/* Template Name: Home Page
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
global $post;
$slider = array(
  'post_type' => 'slider',
  'post_per_page'    => -1,
    'order'         => 'ASC'
);

$get_slider = get_posts($slider);

get_header(); 


$terms_products = get_terms( array(
    'hide_empty' => false,
    'parent'   => 0,
    'taxonomy'  => 'product_taxonomies'
) );
$products_children_cats = [];
?>

    <div class="demo-2">
        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">

                <?php
                    foreach ($get_slider as $value){
                        setup_postdata($value);
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($value->ID),'large');
                        $post_meta = get_post_meta($value->ID,'link',true);
                ?>

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="bg-img"><img src="<?php echo $image[0];?>"></div>
                        <h2><?php echo get_the_title($value->ID);?></h2>
                        <blockquote><p><?php the_content();?></p>
                            <cite><a href="<?php echo $post_meta; ?>"><button type="button" class="btn btn-info">Read more</button></a></cite></blockquote>
                    </div>
                </div>
                <?php } ?>


            </div><!-- /sl-slider -->

            <nav id="nav-dots" class="nav-dots">
                <?php
                    foreach($get_slider as $dot){
                        setup_postdata($dot)
                ?>
                <span class=""></span>
                <?php }?>
            </nav>

        </div><!-- /slider-wrapper -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="head">our business</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item side-cat-head">BY CATEGORIES <i class="fa fa-bars"></i></li>
                    <?php
                        if( $terms_products != null){
                            foreach ($terms_products as $key => $terms_product) {
                                ?>
                                    <li class="list-group-item" data-toggle="collapse" data-target="#products_cat_<?php echo $terms_product->term_id; ?>">
                                        <?php echo $terms_product->name; ?> <i class="fa fa-caret-down"></i>
                                        <?php
                                            $terms_product_children = get_terms( $terms_product->taxonomy, array(
                                                'hide_empty' => false,
                                                'parent'   => $terms_product->term_id
                                            ) );
                                            if( $terms_product_children != null){
                                                ?>
                                                    <ul id="products_cat_<?php echo $terms_product->term_id; ?>" class="collapse list-unstyled">
                                                        <?php
                                                            foreach ($terms_product_children as $key => $terms_product_child) {
                                                                array_push($products_children_cats, $terms_product_child);
                                                                ?>
                                                                    <li class="side-cat-dd">
                                                                        <a data-toggle="tab" href="#child_prod_cat_<?php echo $terms_product_child->term_id ?>"><?php echo $terms_product_child->name; ?> <span class="badge"><?php echo $terms_product_child->count; ?></span></a>
                                                                    </li>
                                                                <?php
                                                            }
                                                        ?>
                                                    </ul>
                                                <?php
                                            }
                                        ?>
                                        
                                    </li>
                                <?php
                            }
                        }
                    ?>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                <?php
                    if($products_children_cats != null){
                        foreach ($products_children_cats as $key => $child_cat) {
                            ?>
                            <ul class="list-inline tab-pane fade in <?php echo ($key == 0) ? 'active' : ''; ?>" id="child_prod_cat_<?php echo $child_cat->term_id; ?>">
                            <?php
                                $products_by_cat = get_posts([
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'post_type' => 'products',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => $child_cat->taxonomy,
                                            'field' => 'id',
                                            'terms' => $child_cat->term_id
                                        ]
                                    ]
                                ]);
                                foreach ($products_by_cat as $key => $value) {
                                    ?>
                                    <li>
                                        <img src="<?php echo get_the_post_thumbnail_url($value->ID, 'full'); ?>" class="side-cat-img">
                                        <div class="side-cat-img-brdr">
                                            <h2 class="img-gal-h2"><?php echo $value->post_title; ?></h2>
                                            <span class="img-gal-price"><?php echo get_post_meta($value->ID,'rate',true);?></span>
                                            <div class="img-gal-a">
                                                <a href="<?php echo get_permalink($value->ID); ?>">view details</a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                            ?>
                                
                            </ul>   
                            <?php
                        }
                    }
                ?>
                </div>

            </div>
        </div>
    </div>


   
<?php get_footer();
