<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

$about = get_post(57);
$get_about_title = $about->post_title;
$get_about_content = $about->post_content;

$contact = get_post(59);
$get_contact_title = $contact->post_title;
$get_contact_content = $contact->post_content;

?>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-xs-12 col-md-6">
                <ul>
                    <li><h4><?php echo $get_about_title;?></h4></li>
                    <li><?php echo $get_about_content;?></li>
                    <li>
                        <!-- <form class="input-group">
							<input type="text" class="form-control" placeholder="subscribe here" />
							<span class="input-group-addon btn btn-success"><i class="fa fa-send"></i></span>
						</form> -->
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-sm-12 col-xs-12 col-md-6">
                <section>
                    <ul style="line-height: 2">
                        <li><h4><?php echo $get_contact_title;?></h4></li>
                        <?php echo $get_contact_content;?>

                    </ul>
                </section>
            </div>

            <div class="col-lg-4 col-sm-12 col-xs-12 col-md-12">
                <ul>
                    <li><h4>Quick Email</h4></li>
                    <li>
                        <form>
                            <input type="text" class="form-control" placeholder="enter your name" />
                            <input type="text" class="form-control" placeholder="enter your email" />
                            <textarea class="form-control" style="height:105px" placeholder="type your message"></textarea>
                            <br><button type="submit" class="btn btn-info"><i class="fa fa-paper-plane-o"></i> send</button>
                        </form>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</div>


<div id="ender">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p class="float-left">&copy; 2016 All Rights Reserved</p>
            </div>
            <div class="col-sm-6">
                <div class="float-right">
                    <?php dynamic_sidebar('sidebar-2');?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</body>

</html>
