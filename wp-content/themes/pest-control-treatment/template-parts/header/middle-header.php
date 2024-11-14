<?php
/**
 * The template part for Top Header
 *
 * @package Pest Control Treatment 
 * @subpackage pest-control-treatment
 * @since pest-control-treatment 1.0
 */
?>

<div class="middle-header pt-2 <?php if( get_theme_mod( 'pest_control_treatment_sticky_header', false) == 1 || get_theme_mod( 'pest_control_treatment_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="row top-header">
      <div class="col-xl-8 col-lg-7 col-md-3 col-2 text-lg-start text-md-start text-center align-self-center">
        <?php get_template_part('template-parts/header/navigation'); ?>
      </div>
       <div class="col-xl-1 col-lg-2 col-md-4 col-3 text-lg-start text-md-start text-center align-self-center cart-wishlist">
        <!-- wishlist -->
         <?php if( get_theme_mod( 'pest_control_treatment_wishlist_hide_show', true) == 1) { ?>
          <div class="wishlist">
            <?php if(class_exists('woocommerce')){ ?>
              <?php if(defined('YITH_WCWL')){ ?>
                <a class="wishlist_view" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','pest-control-treatment'); ?>"><i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_heart_icon','fa-solid fa-heart')); ?> me-2"></i>
                </a>
              <?php }?>
            <?php }}?>
          </div>
          <?php if( get_theme_mod( 'pest_control_treatment_cart_hide_show', true) == 1) { ?>
            <?php if(class_exists('woocommerce')){ ?>
              <span class="cart_shop">
                <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','pest-control-treatment' ); ?>"><i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_cart_icon','fa-solid fa-cart-shopping')); ?> me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Shopping Cart','pest-control-treatment' );?></span></a>
              </span>
          <?php }} ?>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-7 text-lg-start text-md-start text-sm-end text-center align-self-center top-search">
          <?php if( get_theme_mod( 'pest_control_treatment_header_search',true) == 1) { ?>
            <div class="menu-search text-md-end text-center">
              <?php get_search_form(); ?>
            </div>
          <?php }?>
      </div>
    </div>
  </div>
</div>