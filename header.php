<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brazos_Abiertos
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="<?php bloginfo('description')?>">

<title><?php bloginfo('name');?> |
        <?php  is_front_page() ? bloginfo('description') : wp_title();?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">		
		<nav id="site-navigation" class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            	<?php if ( get_header_image() ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
							</a>
						<?php else:?>	
		            		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; // End header image check. ?>
		        </div>	
				<?php wp_nav_menu( 
					array( 
					'theme_location' => 'primary',
					'menu_id' => 'primary-menu',
					'depth' => 3,
					'container' => 'div',
					'container_class'   => 'collapse navbar-collapse',
		            'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class' => 'nav navbar-nav',
					'walker' => new wp_bootstrap_navwalker()
					) 
				  ); ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<section id="slider">
			<?php if(is_front_page()):?>

		    <?php if(is_active_sidebar('slider')): ?>
		    <?php dynamic_sidebar('slider');?>
		    <?php endif;?>
		<?php endif;?>
	</section>
	<div id="content" class="site-content">


