<?php
/**
 * Title: Footer
 * Slug: educational-blocks/footer
 * Categories: educational-blocks, footer
 */
?>

<!-- wp:group {"className":"footer-widgets","style":{"spacing":{"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"footer-Bg","textColor":"white","fontSize":"small","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group footer-widgets has-white-color has-footer-bg-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"className":"footer-site-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','educational-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","iconBackgroundColor":"white","iconBackgroundColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-default footer-social","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default footer-social"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":5,"textColor":"white","fontFamily":"roboto-slab"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-roboto-slab-font-family"><?php esc_html_e('Contact Us','educational-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":479,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/location.png'); ?>" alt="" class="wp-image-479"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('9870 St Vincent Place, Glasgow,DC 45 Fr 45','educational-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":480,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/call.png'); ?>" alt="" class="wp-image-480"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('+44 785 462 358','educational-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":482,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/mail.png'); ?>" alt="" class="wp-image-482"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('support@example.com','educational-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":5,"textColor":"white","fontFamily":"roboto-slab"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-roboto-slab-font-family"><?php esc_html_e('Quick Links','educational-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<ul class="wp-block-list has-white-color has-text-color has-link-color">
<!-- wp:list-item --><li><a href="#"><?php esc_html_e('Home','educational-blocks'); ?></a></li><!-- /wp:list-item -->

<!-- wp:list-item --><li><a href="#"><?php esc_html_e('Courses','educational-blocks'); ?></a></li><!-- /wp:list-item -->

<!-- wp:list-item --><li><a href="#"><?php esc_html_e('Features','educational-blocks'); ?></a></li><!-- /wp:list-item -->

<!-- wp:list-item --><li><a href="#"><?php esc_html_e('Events','educational-blocks'); ?></a></li><!-- /wp:list-item -->
</ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":5,"textColor":"white","fontFamily":"roboto-slab"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-roboto-slab-font-family"><?php esc_html_e('Search','educational-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"footer-Bg","textColor":"white","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-white-color has-footer-bg-background-color has-text-color has-background" style="padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"align":"wide","className":"footer-rights","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide footer-rights"><!-- wp:group {"className":"copyright-text","style":{"spacing":{"padding":{"top":"20px"}},"border":{"top":{"color":"#757070","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group copyright-text" style="border-top-color:#757070;border-top-width:1px;padding-top:20px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-text-color has-link-color has-small-font-size"><a rel="noreferrer noopener" href="https://www.ovationthemes.com/products/free-education-wordpress-theme" target="_blank"><?php esc_html_e('Educational Blocks WordPress Theme','educational-blocks'); ?></a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"white","fontFamily":"roboto"} -->
<p class="has-white-color has-text-color has-link-color has-roboto-font-family"><?php esc_html_e('Proudly powered by ','educational-blocks'); ?><a rel="noreferrer noopener" href="https://www.ovationthemes.com/" target="_blank"><?php esc_html_e('Ovation Themes','educational-blocks'); ?></a> <?php esc_html_e('and','educational-blocks'); ?> <a href="https://wordpress.org"><?php esc_html_e('WordPress','educational-blocks'); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"scroll-top"} -->
<p class="scroll-top"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->