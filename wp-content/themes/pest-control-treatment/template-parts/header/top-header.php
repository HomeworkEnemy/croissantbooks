<?php
/**
 * The template part for Top Header
 *
 * @package Pest Control Treatment 
 * @subpackage pest-control-treatment
 * @since pest-control-treatment 1.0
 */
?>
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-3 col-sm-3 col-12 text-lg-start text-md-start text-center text-sm-start align-self-center py-md-0 py-2 p-0">
          <div class="logo text-center text-md-start pb-0 pb-md-0">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $pest_control_treatment_blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $pest_control_treatment_blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('pest_control_treatment_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php else : ?>
                  <?php if( get_theme_mod('pest_control_treatment_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $pest_control_treatment_description = get_bloginfo( 'description', 'display' );
                if ( $pest_control_treatment_description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('pest_control_treatment_tagline_hide_show',false) == 1){ ?>
                <p class="site-description mb-0">
                  <?php echo esc_html($pest_control_treatment_description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <?php if (get_theme_mod('pest_control_treatment_topbar_hide_show', true) || get_theme_mod('pest_control_treatment_responsive_topbar_hide',true)){ ?>
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-6 text-lg-end text-md-end text-sm-start text-center align-self-center py-md-0 py-2 topbar-text1">
            <?php if(get_theme_mod('pest_control_treatment_topbar_add_text_location') != '' || get_theme_mod('pest_control_treatment_topbar_location_text_icon') != ''){ ?>
             <p class="topbar-text mb-0">
             <a href="<?php echo esc_url(get_theme_mod('pest_control_treatment_find_us_btn_link',false));?>"><i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_topbar_location_text_icon')); ?>"></i><?php echo esc_html(get_theme_mod('pest_control_treatment_topbar_add_text_location'));?><span class="screen-reader-text"><?php esc_html_e( 'find us','pest-control-treatment');?></span>
                </a></p>
            <?php }?>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-6 text-lg-end text-md-end text-sm-start text-center align-self-center py-md-0 py-2 phone-call">
            <?php if(get_theme_mod('pest_control_treatment_phone_number') != '' || get_theme_mod('pest_control_treatment_phone_icon')){ ?>
              <span class="phone-number me-0 me-md-0 md-lg-0"><span class="calling-text"><i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_phone_icon')); ?> me-2"></i></span><a href="tel:<?php echo esc_attr( get_theme_mod('pest_control_treatment_phone_number','') ); ?>"><?php echo esc_html(get_theme_mod('pest_control_treatment_phone_number',''));?></a></span>
            <?php }?>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-12 text-lg-end text-md-end text-sm-start text-start align-self-center py-md-0 py-2 px-0 read-more1">
            <?php if ( get_theme_mod('pest_control_treatment_appointment_button_text') != '' || get_theme_mod('pest_control_treatment_banner_small_title_icon') != '' ) {?>
              <div class ="read-more">
                <a href="<?php echo esc_url(get_theme_mod('pest_control_treatment_appointment_btn_link',false));?>"><?php echo esc_html(get_theme_mod('pest_control_treatment_appointment_button_text'));?><span class="screen-reader-text"><?php esc_html_e( 'Appointment','pest-control-treatment');?></span>
                </a>
              </div>
            <?php }?>
          </div>
        <?php }?>
      </div>
    </div>
  </div>
