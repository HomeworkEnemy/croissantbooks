<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pest Control Treatment 
 */
?>

    <footer role="contentinfo">
        <div class="footer-section">
            <?php if (get_theme_mod('pest_control_treatment_topbar_hide_show', true)){ ?>
                <aside id="footer" class="copyright-wrapper" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'pest-control-treatment' ); ?>">
                    <div class="container">
                        <?php
                            $pest_control_treatment_count = 0;
                            
                            if ( is_active_sidebar( 'footer-1' ) ) {
                                $pest_control_treatment_count++;
                            }
                            if ( is_active_sidebar( 'footer-2' ) ) {
                                $pest_control_treatment_count++;
                            }
                            if ( is_active_sidebar( 'footer-3' ) ) {
                                $pest_control_treatment_count++;
                            }
                            if ( is_active_sidebar( 'footer-4' ) ) {
                                $pest_control_treatment_count++;
                            }
                            // $pest_control_treatment_count == 0 none
                            if ( $pest_control_treatment_count == 1 ) {
                                $pest_control_treatment_colmd = 'col-md-12 col-sm-12';
                            } elseif ( $pest_control_treatment_count == 2 ) {
                                $pest_control_treatment_colmd = 'col-md-6 col-sm-6';
                            } elseif ( $pest_control_treatment_count == 3 ) {
                                $pest_control_treatment_colmd = 'col-md-4 col-sm-4';
                            } else {
                                $pest_control_treatment_colmd = 'col-lg-3 col-md-6 col-sm-6';
                            }
                        ?>
                        <div class="row">
                        <div class="<?php echo !is_active_sidebar('footer-1') ? 'footer_hide' : esc_attr($pest_control_treatment_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                            <?php if (is_active_sidebar('footer-1')) : ?>
                                <?php dynamic_sidebar('footer-1'); ?>
                            <?php else : ?>
                                <aside id="search" class="widget py-3" role="complementary" aria-label="firstsidebar">
                                    <h3 class="widget-title"><?php esc_html_e( 'Search', 'pest-control-treatment' ); ?></h3>
                                    <?php get_search_form(); ?>
                                </aside>
                            <?php endif; ?>
                        </div>

                        <div class="<?php echo !is_active_sidebar('footer-2') ? 'footer_hide' : esc_attr($pest_control_treatment_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block pe-2">
                            <?php if (is_active_sidebar('footer-2')) : ?>
                                <?php dynamic_sidebar('footer-2'); ?>
                            <?php else : ?>
                                <aside id="archives" class="widget py-3" role="complementary" >
                                    <h3 class="widget-title"><?php esc_html_e( 'Archives', 'pest-control-treatment' ); ?></h3>
                                    <ul>
                                        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                                    </ul>
                                </aside>
                            <?php endif; ?>
                        </div>  

                        <div class="<?php echo !is_active_sidebar('footer-3') ? 'footer_hide' : esc_attr($pest_control_treatment_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                            <?php if (is_active_sidebar('footer-3')) : ?>
                                <?php dynamic_sidebar('footer-3'); ?>
                            <?php else : ?>
                                <aside id="meta" class="widget py-3" role="complementary" >
                                    <h3 class="widget-title"><?php esc_html_e( 'Meta', 'pest-control-treatment' ); ?></h3>
                                    <ul>
                                        <?php wp_register(); ?>
                                        <li><?php wp_loginout(); ?></li>
                                        <?php wp_meta(); ?>
                                    </ul>
                                </aside>
                            <?php endif; ?>
                        </div>

                        <div class="<?php echo !is_active_sidebar('footer-4') ? 'footer_hide' : esc_attr($pest_control_treatment_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                            <?php if (is_active_sidebar('footer-4')) : ?>
                                <?php dynamic_sidebar('footer-4'); ?>
                            <?php else : ?>
                                <aside id="categories" class="widget py-3" role="complementary"> 
                                    <h3 class="widget-title"><?php esc_html_e( 'Categories', 'pest-control-treatment' ); ?></h3>          
                                    <ul>
                                        <?php wp_list_categories('title_li=');  ?>
                                    </ul>
                                </aside>
                            <?php endif; ?>
                        </div>
                    </div>
        </div>
                    </div>
                </aside>
            <?php }?>
        </div>
        <?php if (get_theme_mod('pest_control_treatment_copyright_hide_show', true)) {?>
            <div id="footer-2" class="pt-2 pb-2">
              	<div class="copyright container">
                    <p class="mb-0"><?php pest_control_treatment_credit(); ?> <?php echo esc_html(get_theme_mod('pest_control_treatment_footer_text',__('By VWThemes','pest-control-treatment'))); ?></p>
                    <?php if ( ! dynamic_sidebar( 'footer-icon' ) ) : ?> 
                        <?php dynamic_sidebar('footer-icon'); ?>
                    <?php endif; ?>
                    <?php if( get_theme_mod( 'pest_control_treatment_hide_show_scroll',true) == 1 || get_theme_mod( 'pest_control_treatment_resp_scroll_top_hide_show',true) == 1) { ?>
                        <?php $pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_scroll_top_alignment','Right');
                        if($pest_control_treatment_theme_lay == 'Left'){ ?>
                            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'pest-control-treatment' ); ?></span></a>
                        <?php }else if($pest_control_treatment_theme_lay == 'Center'){ ?>
                            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'pest-control-treatment' ); ?></span></a>
                        <?php }else{ ?>
                            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'pest-control-treatment' ); ?></span></a>
                        <?php }?>
                    <?php }?>
              	</div>
              	<div class="clear"></div>
            </div>
        <?php }?>
    </footer>
        <?php wp_footer(); ?>
    </body>
</html>