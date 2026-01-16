<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Windows Door
 */
$footer_text = get_theme_mod('footer_text');

$footerlogo = get_theme_mod('footer_logo_image'); 
$footerlogo_link = get_theme_mod('footer_logo_url'); 
$fb_link = get_theme_mod('fb_link'); 
$twitt_link = get_theme_mod('twitt_link');
$linked_link = get_theme_mod('linked_link');
$insta_link = get_theme_mod('insta_link');
$hidefooterbox = get_theme_mod('hide_footer_bar', 1);
?>

<div id="footer">
<?php
$footer_text = esc_html(get_theme_mod('footer_text'));
$hidefooter = esc_html(get_theme_mod('hide_footer_info', 1)); 
if($hidefooter == ''){?>
<div id="footer-info-area">
  <div class="container">
    <div class="contact-info">
      <div class="col-4">
        <div class="box">
         <?php 
		   $address_title = get_theme_mod('address_title'); 
		   if (!empty($address_title)) { 
		 ?>
         <img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/icon-address.png"/>
          <div class="yellowdivide"></div>
          <h5><?php echo esc_html($address_title); ?></h5>
          <?php }
		   $address = get_theme_mod('address'); 
		   if (!empty($address)) { 
		  ?>
          <p><?php echo esc_html($address); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="col-4">
        <div class="box">
           <?php 
		   $email_title = get_theme_mod('email_title'); 
		   if (!empty($email_title)) { 
		  ?>          
          <img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/icon-mail.png"/>
          <div class="yellowdivide"></div>
          <h5><?php echo esc_html($email_title); ?></h5>
          <?php } 
		   $email_address = get_theme_mod('email_address'); 
		   if (!empty($email_address)) { 
		  ?>          
          <p><?php echo esc_html( antispambot( $email_address ) ); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="col-4">
        <div class="box lbox">
		  <?php 
          $phone_title = get_theme_mod('phone_title'); 
          if (!empty($phone_title)) { 
          ?>          
          <img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/icon-callus.png"/>
          <div class="yellowdivide"></div>
          <h5><?php echo esc_html($phone_title); ?></h5>
          <?php } 
		   $phone_number = get_theme_mod('phone_number'); 
		   if (!empty($phone_number)) { 
		  ?>            
          <p><?php echo esc_html($phone_number); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php } ?>

<div class="copyright-area">
<?php if ( is_active_sidebar( 'fc-1-rfl' ) || is_active_sidebar( 'fc-2-rfl' ) || is_active_sidebar( 'fc-3-rfl' )) : ?>
<div class="footerarea">
    	<div class="container footer ftr-widg">
        	<div class="footer-row">
            <?php if ( is_active_sidebar( 'fc-1-rfl' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1-rfl' ); ?>
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-2-rfl' ) ) : ?>
            <div class="cols-3 widget-column-2">  
            <?php dynamic_sidebar( 'fc-2-rfl' ); ?>
            </div><!--end .widget-column-2-->
            <?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-3-rfl' ) ) : ?>    
            <div class="cols-3 widget-column-3">  
            <?php dynamic_sidebar( 'fc-3-rfl' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?> 	
            <div class="clear"></div>
            </div>
        </div><!--end .container--> 
</div>
<?php endif; ?>   
</div>      
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt">
     	<?php if (!empty($footer_text)) { ?>
	 		<?php echo esc_html($footer_text); ?>
		<?php } ?>
        <?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','skt-windows-door');?>
        <a href="<?php echo esc_url('https://www.sktthemes.org/shop/free-windows-doors-wordpress-theme/');?>" target="_blank">
        <?php esc_html_e('SKT Windows Door','skt-windows-door'); ?>
        </a>
        </div>
     <div class="clear"></div>
</div>           
</div>
</div><!--end #copyright-area-->
<?php wp_footer(); ?>
</body>
</html>