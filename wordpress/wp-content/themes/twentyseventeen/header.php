<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Azan Trade International</title>

<?php wp_head(); ?>
</head>

<body<?php body_class(); ?>>
<div >


    <div id="tophead">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 col-md-6">
                    <ul>
	                    <?php
	                    wp_nav_menu( array(
			                    'menu'              => 'top_menu',
			                    'theme_location'    => 'primary',
			                    'depth'             => 2,

			                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			                    'walker'            => new WP_Bootstrap_Navwalker())
	                    );

	                    ?>
                    </ul>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6">
                    <?php dynamic_sidebar('sidebar-3');?>
                </div>
            </div>
        </div>
    </div>




    <div id="topnav" data-spy="affix" data-offset-top="0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-6 col-md-3">
                    <div class="pt17">
                        <p class="logo">????</p>
                        <p class="logo2">Azan Trade International</p>
                    </div>
                </div>

                <div class="col-sm-12 col-xs-6 col-md-9">
                    <nav class="navbar navbar-default" id="menu">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="margin-top:30px;">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>


                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">

	                                <?php
	                                wp_nav_menu( array(
			                                'menu'              => 'main_menu',
			                                'theme_location'    => 'primary',
			                                'depth'             => 2,
			                                'container'         => 'div',
			                                'container_class'   => 'collapse navbar-collapse',
			                                'container_id'      => 'bs-example-navbar-collapse-1',
			                                'menu_class'        => 'nav navbar-nav',
			                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			                                'walker'            => new WP_Bootstrap_Navwalker())
	                                );

	                                ?>




                                    <form class="navbar-form" role="search">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
							<button type="submit" class="btn btn-default">
								<span class="glyphicon glyphicon-search">
									<span class="sr-only">Search...</span>
								</span>
							</button>
						</span>
                                        </div>
                                    </form>

                                </ul>

                            </div><!--/.navbar-collapse -->
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
