<?php

/**
 * Template Name: Custom Home Page
 */

get_header();

?>
<!-- banner section -->
<main id="maincontent" role="main">
  <?php if( get_theme_mod( 'pest_control_treatment_banner_hide_show',true) == 1 || get_theme_mod( 'pest_control_treatment_resp_banner_hide_show', true) == 1) { ?>
    <section id="banner" class="position-relative wow bounceInDown delay-1000" data-wow-duration="3s">
      <div class="mask-img-section">
        <div class="container pt-xl-5 mt-xl-4 pt-lg-3 mt-lg-3 pt-md-2">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12 banner-main-text align-self-center">
              <div class="inner_carousel">
                <?php if(get_theme_mod('pest_control_treatment_slider_tagline_title') != '') {?>
                  <h2 class="mb-3 mt-3"><?php echo esc_html(get_theme_mod('pest_control_treatment_slider_tagline_title')) ?></h2>
                <?php }?>
                <?php if(get_theme_mod('pest_control_treatment_slider_text') != '') {?>
                  <p class="slider-para"><?php echo esc_html(get_theme_mod('pest_control_treatment_slider_text')) ?></p>
                <?php }?>
                <?php if ( get_theme_mod('pest_control_treatment_banner_button_text') != '' || get_theme_mod('pest_control_treatment_banner_small_title_icon') != '' ) {?>
                  <div class ="read-more">
                    <a href="<?php echo esc_url(get_theme_mod('pest_control_treatment_banner_btn_link',false));?>"><?php echo esc_html(get_theme_mod('pest_control_treatment_banner_button_text'));?><span class="screen-reader-text"><?php esc_html_e( 'icon','pest-control-treatment');?></span>
                    </a>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 banner-col-left align-self-lg-center position-relative text-md-center text-center p-0">
              <div class="banner-image">
                <?php if(get_theme_mod('pest_control_treatment_service_banner_player_image',false) != '') {?>
                  <img src="<?php echo esc_url(get_theme_mod('pest_control_treatment_service_banner_player_image')); ?>" alt="" />
                <?php }?>
                <?php if(get_theme_mod('pest_control_treatment_banner_small_masquito_icon',true) != '') {?>
                  <div class="large-masquito-icon">
                    <i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_banner_small_masquito_icon', 'fa-solid fa-mosquito')); ?> ms-2"></i>
                  </div>
                <?php }?>
              </div>
              <?php if(get_theme_mod('pest_control_treatment_service_banner_player_image',false) != '') {?>
                <div class="masquito"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/masquito.png" alt=""></div>
              <?php }?>
              <div class="review">
                <?php if(get_theme_mod('pest_control_treatment_review_number') != '' ) {?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/view.png" alt="" />
                <?php }?>
                <div class="text-lg-start">
                  <?php if(get_theme_mod('pest_control_treatment_review_number') != '') {?>
                    <p class="review-number"><?php echo esc_html( get_theme_mod('pest_control_treatment_review_number','') ); ?><?php esc_html_e( '+','pest-control-treatment');?></p>
                  <?php }?>  
                  <?php if(get_theme_mod('pest_control_treatment_review_text') != '') {?>
                    <p class="review-text"><?php echo esc_html( get_theme_mod('pest_control_treatment_review_text','') ); ?></p>
                  <?php }?>  
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
      <div class="banner-social-icon">
        <div class="row">
          <div class="col-xl-5 col-md-12 col-12 align-self-center text-lg-start text-md-center text-center">
            <?php if(get_theme_mod('pest_control_treatment_social_icon_text') != '') {?>
              <p class="social-text mb-0"><?php echo esc_html( get_theme_mod('pest_control_treatment_social_icon_text','') ); ?></p>
            <?php }?>  
          </div>
          <div class="col-xl-7 col-md-12 col-12 align-self-center text-lg-start text-md-center text-center">
            <?php dynamic_sidebar('social-widget-banner'); ?>
          </div>
        </div>
      </div>
       <div class="clearfix"></div>
    </section>
  <?php }?>
<?php do_action('pest_control_treatment_after_banner'); ?>

<!-- Professional Services Section -->
<?php if( get_theme_mod('pest_control_treatment_about_section',true) != ''){ ?>
  <section id="about-sec" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="about-setting align-self-center">
            <?php if(get_theme_mod('pest_control_treatment_section_title') != '') {?>
              <h3><?php echo esc_html(get_theme_mod('pest_control_treatment_section_title')) ?></h3>
            <?php }?>
            <?php if(get_theme_mod('pest_control_treatment_feature_courses_tagline_title') != ''){ ?>
              <p><?php echo esc_html(get_theme_mod('pest_control_treatment_feature_courses_tagline_title')) ?></p>
            <?php }?>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 text-md-end text-sm-end text-center align-self-center">
          <div class="tab-section position-relative">
            <div class="tab  align-self-center d-flex gap-4 justify-content-end">
              <?php
              $pest_control_treatment_featured_post = get_theme_mod('pest_control_treatment_services_number', '');
              for ($pest_control_treatment_j = 1; $pest_control_treatment_j <= $pest_control_treatment_featured_post; $pest_control_treatment_j++) { ?>
                <div class="icon-tab">
                  <button class="tablinks" onclick="pest_control_treatment_services_tab(event, '<?php $pest_control_treatment_main_id = get_theme_mod('pest_control_treatment_services_text' .$pest_control_treatment_j);
                      $tab_id = str_replace(' ', '-', $pest_control_treatment_main_id);
                        echo $tab_id; ?> ')">
                      <span><?php echo esc_html(get_theme_mod('pest_control_treatment_services_text'.$pest_control_treatment_j)); ?></span>
                  </button>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
        <?php for ($pest_control_treatment_j = 1; $pest_control_treatment_j <= $pest_control_treatment_featured_post; $pest_control_treatment_j++) { ?>
          <div id="<?php $pest_control_treatment_main_id = get_theme_mod('pest_control_treatment_services_text'.$pest_control_treatment_j);
            $tab_id = str_replace(' ', '-', $pest_control_treatment_main_id);
            echo $tab_id; ?>" class="tabcontent">
            <div class="owl-carousel">
            <?php
            $pest_control_treatment_services_post_count = get_theme_mod('pest_control_treatment_services_post_count'.$pest_control_treatment_j, '');
            for ($pest_control_treatment_i=1; $pest_control_treatment_i <= $pest_control_treatment_services_post_count; $pest_control_treatment_i++) { 
              $pest_control_treatment_postData=  get_theme_mod('pest_control_treatment_services_category'.$pest_control_treatment_i.$pest_control_treatment_j);
              if($pest_control_treatment_postData){ ?>
                <div class="feature-box1">
                  <?php 
                    $args = array( 
                      'p' => esc_html($pest_control_treatment_postData ,'pest-control-treatment'),
                      'post_type' => 'post'
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                      while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="box">
                          <?php if(has_post_thumbnail()){ ?>
                            <?php the_post_thumbnail(); ?>
                          <?php } else {?>
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/post-image.png" alt="<?php echo esc_attr('Post Image', 'pest-control-treatment'); ?>">
                          <?php }?>
                          <div class="icon text-center text-sm-center text-md-start text-lg-start">
                            <a href="<?php the_permalink(); ?>"><i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_single_icon'.$pest_control_treatment_i.$pest_control_treatment_j,'fas fa-building')); ?>"></i></a>
                          </div>
                        </div>
                        <div class="post-innter-content class-box-content text-center mx-3">
                          <h4 class="text-center mt-2 "><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h4>
                          <p class="text-center"><?php $pest_control_treatment_excerpt = get_the_excerpt(); echo esc_html( pest_control_treatment_string_limit_words( $pest_control_treatment_excerpt, esc_attr(get_theme_mod('pest_control_treatment_feature_courses_number_post','15')))); ?> <?php echo esc_html(get_theme_mod('pest_control_treatment_blog_excerpt_suffix1'));?>
                          </p>
                          <div class="slider-btn">
                            <a href="<?php the_permalink();?>"><?php esc_html_e('Read More','pest-control-treatment'); ?><span class="screen-reader-text"><?php esc_html_e('Read More','pest-control-treatment'); ?></span></a>
                          </div>
                        </div>
                      <?php endwhile;
                        wp_reset_postdata();
                    endif; ?> 
                  </div>
              <?php }
            } ?>   
        </div>
      </div>
    <?php }?>
    </div>
  </section>
<?php }?>
<?php do_action( 'pest_control_treatment_after_service' ); ?>

<!-- Our Client Say Settings -->
<?php
    $pest_control_treatment_number = get_theme_mod('pest_control_treatment_slide_number');
    if($pest_control_treatment_number != '')
  {?>
  <div id="sponsor-section" class="py-5 wow bounceInLeft delay-1000">
    <div class="container">
      <div class="owl-carousel">
        <?php for ($pest_control_treatment_i=1; $pest_control_treatment_i<=$pest_control_treatment_number; $pest_control_treatment_i++) {?>
          <div class="row">
            <div class="col-xl-6 col-lg-6 sponsor-col">
              <?php if(get_theme_mod('pest_control_treatment_client_tagline_title'.$pest_control_treatment_i) != '') {?>
                <h5 class="mb-3 mt-3"><?php echo esc_html(get_theme_mod('pest_control_treatment_client_tagline_title'.$pest_control_treatment_i)) ?></h5>
              <?php }?>
              <?php if(get_theme_mod('pest_control_treatment_client_text'.$pest_control_treatment_i) != '') {?>
                <p class="client-para"><?php echo esc_html(get_theme_mod('pest_control_treatment_client_text'.$pest_control_treatment_i)) ?></p>
              <?php }?>
              <?php if(get_theme_mod('pest_control_treatment_client_text1'.$pest_control_treatment_i) != '') {?>
                <p class="client-para1 mt-3"><?php echo esc_html(get_theme_mod('pest_control_treatment_client_text1'.$pest_control_treatment_i)) ?></p>
              <?php }?>
              <div class="d-flex align-items-center gap-4 justify-content-md-start justify-content-sm-center justify-content-center">
                <?php if(get_theme_mod('pest_control_treatment_service_sponsor_image'.$pest_control_treatment_i) != '') {?>
                  <img src="<?php echo esc_url(get_theme_mod('pest_control_treatment_service_sponsor_image'.$pest_control_treatment_i)); ?>" alt="" />
                <?php }?>
                <div class="author-name mt-3">
                  <?php if(get_theme_mod('pest_control_treatment_author_tagline_title'.$pest_control_treatment_i) != '') {?>
                    <h6 class=""><?php echo esc_html(get_theme_mod('pest_control_treatment_author_tagline_title'.$pest_control_treatment_i)) ?></h6>
                  <?php }?>
                  <?php if(get_theme_mod('pest_control_treatment_author_text'.$pest_control_treatment_i) != '') {?>
                    <p class="mb-0"><?php echo esc_html(get_theme_mod('pest_control_treatment_author_text'.$pest_control_treatment_i)) ?></p>
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 sponsor-col2 align-self-center">
              <div class="client-img position-relative">
                <?php if(get_theme_mod('pest_control_treatment_service_client_image'.$pest_control_treatment_i) != '' || get_theme_mod('pest_control_treatment_sponser_img_icon'.$pest_control_treatment_i) != '') {?>
                <img src="<?php echo esc_url(get_theme_mod('pest_control_treatment_service_client_image'.$pest_control_treatment_i)); ?>" alt="" />
              <?php }?>
              <div class="sponser-img-icon"><i class="<?php echo esc_attr(get_theme_mod('pest_control_treatment_sponser_img_icon'.$pest_control_treatment_i,'fa-solid fa-quote-right')); ?>"></i></div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </div>
<?php }?>

  <div id="content-vw" class="entry-content py-5">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
  
</main>

<?php get_footer(); ?> 