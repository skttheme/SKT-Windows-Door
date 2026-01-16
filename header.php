<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Windows Door
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<a class="skip-link screen-reader-text" href="#content_navigator">
<?php esc_html_e( 'Skip to content', 'skt-windows-door' ); ?>
</a>
<?php
	$showpagebanner = esc_html(get_theme_mod('inner_page_banner_option', 1));
	$showpostbanner = esc_html(get_theme_mod('inner_post_banner_option', 1));
	$pagethumb = esc_html(get_theme_mod('inner_page_banner_thumb'));
	$postthumb = esc_html(get_theme_mod('inner_post_banner_thumb'));
	
	$contact_no = get_theme_mod('contact_no'); 
	$contact_mail = get_theme_mod('contact_mail');
	$fb_link = get_theme_mod('fb_link_scl'); 
	$twitt_link = get_theme_mod('twitt_link_scl');
	$linked_link = get_theme_mod('linked_link_scl');
	$insta_link = get_theme_mod('insta_link_scl');
	$hidetopbar = esc_html(get_theme_mod('hide_header_topbar', 1));
?>
<div id="main-set">
<div class="topmenu-bar">
<?php
if( $hidetopbar == '') { ?>
<div class="head-info-area">
<div class="center">
<div class="left">
<div class="social-icons">
		<?php if (!empty($fb_link)) { ?><a title="<?php echo esc_attr__('Facebook','skt-windows-door'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a><?php } if (!empty($twitt_link)) { ?><a title="<?php echo esc_attr__('Twitter','skt-windows-door'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a><?php } if (!empty($linked_link)) { ?><a title="<?php echo esc_attr__('Linkedin','skt-windows-door'); ?>" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a><?php } ?><?php if (!empty($insta_link)) { ?><a title="<?php echo esc_attr__('Instagram','skt-windows-door'); ?>" class="insta" target="_blank" href="<?php echo esc_url($insta_link); ?>"></a><?php } ?>                   
      </div>
</div> 
		<div class="right">        
         <?php if(!empty($contact_no)){?>
		 <span class="phntp">
          <span class="phoneno"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-phone.png" alt="" /> 
          <?php echo esc_html($contact_no); ?></span>
        </span>
        <?php } ?>
        
        <?php 
		if(!empty($contact_mail)){?>     
        <span class="emltp">
        <a href="mailto:<?php echo esc_attr( antispambot(sanitize_email( $contact_mail ) )); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-email.png" alt="" /><?php echo esc_html( antispambot( $contact_mail ) ); ?></a></span>
        <?php } ?>                             
</div>
<div class="clear"></div>                
</div>
</div>
<?php } ?>
</div>

<div class="header">
	<div class="container">
    <div class="logo">
		<?php skt_windows_door_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <div id="logo-main">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
        </div>
    </div> 
        <div id="navigation"><nav id="site-navigation" class="main-navigation">
				<button type="button" class="menu-toggle">
					<span></span>
					<span></span>
					<span></span>
				</button>
		<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'primary-menu menu' ) ); ?>
			</nav>
            </div>
        <div class="clear"></div>    
  </div>
  <div class="clear"></div> 
  </div> <!-- container --> 
  </div><!--main-set-->
  <?php if( !is_home() && !is_front_page() && is_page()) {?>
      <div class="clear"></div>	
      <?php if($showpagebanner == '') {?>
      <div class="inner-banner-thumb">      	
        <?php 	if ( has_post_thumbnail() ) {
                    echo esc_url(the_post_thumbnail('full'));
                }else{
			if(!empty($pagethumb)){ ?>
            <img src="<?php echo esc_url($pagethumb); ?>" />
            <?php } } ?>
        <?php } ?>    
        <div class="clear"></div>
      </div>
  <?php } ?>
  <?php if( !is_home() && !is_front_page() && !is_page() && is_single() && 'post' == get_post_type()) {?>
      <div class="clear"></div>
      <?php if($showpostbanner == '') {?>
      <div class="inner-banner-thumb">
        <?php 	if ( has_post_thumbnail() ) {
                    echo esc_url(the_post_thumbnail('full'));
                }else{
			if(!empty($postthumb)){ ?>
            <img src="<?php echo esc_url($postthumb); ?>" />
            <?php }  } ?>
        <div class="clear"></div>
      </div>
      <?php } ?>
      
  <?php } ?>  
  <?php if (is_category() || is_archive()) { ?>
  <div class="clear"></div>
  <?php if($showpostbanner == '') {?>
  <div class="inner-banner-thumb">
        <?php 
			if(!empty($postthumb)){ ?>
            <img src="<?php echo esc_url($postthumb); ?>" />
            <?php }   ?>
         <?php } ?>            
        <div class="clear"></div>
      </div>
  <?php } ?>  
  <div class="clear"></div>  