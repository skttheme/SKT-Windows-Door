<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SKT Windows Door
 */
?>
<div id="sidebar">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
    	<div class="wp-block-group">
        <h2 class="wp-block-heading"><?php esc_html_e( 'Category', 'skt-windows-door' ); ?></h2>
        <aside id="categories" class="widget">           
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>
        </div>
        <div class="wp-block-group">
       <h2 class="wp-block-heading"><?php esc_html_e( 'Archives', 'skt-windows-door' ); ?></h2>
        <aside id="archives" class="widget">           
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        </div>
        
        <div class="wp-block-group">
         <h2 class="wp-block-heading"><?php esc_html_e( 'Meta', 'skt-windows-door' ); ?></h2>
         <aside id="meta" class="widget">           
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
        </div>
        
    <?php endif; // end sidebar widget area ?>	
</div><!-- sidebar -->