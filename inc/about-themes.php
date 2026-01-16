<?php
//about theme info
add_action( 'admin_menu', 'skt_windows_door_abouttheme' );
function skt_windows_door_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-windows-door'), esc_html__('About Theme', 'skt-windows-door'), 'edit_theme_options', 'skt_windows_door_guide', 'skt_windows_door_mostrar_guide');   
} 
//guidline for about theme
function skt_windows_door_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-windows-door'); ?>
		   </div>
          <p><?php esc_html_e('SKT Windows door is a furniture, carpentry and interior design related theme and can be used for handyman, interior, wood, repairing, decor, architecture, furniture, construction, welding, builders or constructors, cleaning agencies, mechanic workshops, logistics, gift shop, decor, movers, Modular , kitchen hardware, bungalow, false ceiling, vitrified tiles, wall hangings, decoration, constructor, modular, architect, dining Room, master bedroom, residential, commercial, hospital, cottage, pent house, exterior, living room, plumber, remodeling, wood work, plumbing, windows & doors installation, heating, welding company, fuel industry, metal construction companies, mining services, electricity, Sell Used Furniture, flowers and novelty items, Steel Furniture, Sell Woodcutting Tools, architecture, engineering, electronics, gardeners, plumbers, auto shop markets, maintenance services. Easy to use, flexible, scalable, Elementor template which is SEO plugins compatible and WooCommerce compatible for eCommerce and has CTA for good landing page.','skt-windows-door'); ?></p>
          <a href="<?php echo esc_url(SKT_WINDOWS_DOOR_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_WINDOWS_DOOR_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-windows-door'); ?></a> | 
				<a href="<?php echo esc_url(SKT_WINDOWS_DOOR_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-windows-door'); ?></a> | 
				<a href="<?php echo esc_url(SKT_WINDOWS_DOOR_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-windows-door'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_WINDOWS_DOOR_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>