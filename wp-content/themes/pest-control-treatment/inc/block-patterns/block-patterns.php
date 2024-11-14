<?php
/**
 * Pest Control Treatment: Block Patterns
 *
 * @package Pest Control Treatment
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'pest-control-treatment',
		array( 'label' => __( 'Pest Control Treatment', 'pest-control-treatment' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'pest-control-treatment/banner-section',
		array(
			'title'      => __( 'Banner Section', 'pest-control-treatment' ),
			'categories' => array( 'pest-control-treatment' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":270,\"dimRatio\":50,\"customOverlayColor\":\"#00000000\",\"isUserOverlayColor\":true,\"minHeight\":600,\"align\":\"full\",\"className\":\"banner-section\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-cover alignfull banner-section\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\" style=\"background-color:#00000000\"></span><img class=\"wp-block-cover__image-background wp-image-270\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"className\":\"container banner-content\"} -->\n<div class=\"wp-block-columns container banner-content\"><!-- wp:column {\"className\":\"slider-left\"} -->\n<div class=\"wp-block-column slider-left\"><!-- wp:heading {\"style\":{\"typography\":{\"fontSize\":\"42px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"mb-3\"} -->\n<h2 class=\"wp-block-heading mb-3 has-black-color has-text-color has-link-color\" style=\"font-size:42px\">Guarding Your Home : Tailored Pest Control Solutions for Every Need</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color has-link-color\" style=\"font-size:16px\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"background\":\"#339d55\"},\"border\":{\"radius\":\"4px\"}},\"className\":\"read-more\"} -->\n<div class=\"wp-block-button has-custom-font-size read-more\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:4px;background-color:#339d55\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"slider-right\"} -->\n<div class=\"wp-block-column slider-right\"><!-- wp:image {\"id\":103,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"masquito\"} -->\n<figure class=\"wp-block-image size-full masquito\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/masquito.png\" alt=\"\" class=\"wp-image-103\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\n<div class=\"wp-block-group\"><!-- wp:html -->\n<i class=\"fa-solid fa-mosquito\"></i>\n<!-- /wp:html -->\n\n<!-- wp:image {\"id\":125,\"width\":\"660px\",\"height\":\"660px\",\"scale\":\"contain\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"banner-image\"} -->\n<figure class=\"wp-block-image size-full is-resized banner-image\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/girl.png\" alt=\"\" class=\"wp-image-125\" style=\"object-fit:contain;width:660px;height:660px\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:group -->\n\n<!-- wp:group {\"className\":\"review\",\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\n<div class=\"wp-block-group review\"><!-- wp:image {\"id\":131,\"width\":\"120px\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/view.png\" alt=\"\" class=\"wp-image-131\" style=\"width:120px\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"mb-0 review-number\"} -->\n<p class=\"mb-0 review-number has-black-color has-text-color has-link-color\">120+</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"review-text\"} -->\n<p class=\"review-text has-black-color has-text-color has-link-color\">Reviews</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"banner-social-icon\"} -->\n<div class=\"wp-block-columns banner-social-icon\"><!-- wp:column {\"width\":\"40%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:40%\"><!-- wp:paragraph {\"align\":\"left\",\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"social-text\"} -->\n<p class=\"has-text-align-left social-text has-black-color has-text-color has-link-color\">Follow On Social Media</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"60%\",\"className\":\"custom-social-icons\"} -->\n<div class=\"wp-block-column custom-social-icons\" style=\"flex-basis:60%\"><!-- wp:social-links {\"iconColor\":\"white\",\"iconColorValue\":\"#ffffff\",\"iconBackgroundColorValue\":\"#000000\",\"openInNewTab\":true,\"className\":\"is-style-default\"} -->\n<ul class=\"wp-block-social-links has-icon-color has-icon-background-color is-style-default\"><!-- wp:social-link {\"url\":\"www.facebook.com\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"www.twitter.com\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"www.instagram.com\",\"service\":\"instagram\"} /-->\n\n<!-- wp:social-link {\"url\":\"www.youtube.com\",\"service\":\"youtube\"} /-->\n\n<!-- wp:social-link {\"url\":\"www.dribbble.com\",\"service\":\"dribbble\"} /--></ul>\n<!-- /wp:social-links --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'pest-control-treatment/about-section',
		array(
			'title'      => __( 'About Section', 'pest-control-treatment' ),
			'categories' => array( 'pest-control-treatment' ),
			'content'    => "<!-- wp:columns {\"className\":\"about-section mt-5\"} -->\n<div class=\"wp-block-columns about-section mt-5\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:columns {\"className\":\"mb-3\"} -->\n<div class=\"wp-block-columns mb-3\"><!-- wp:column {\"width\":\"50%\",\"className\":\"heading-section\"} -->\n<div class=\"wp-block-column heading-section\" style=\"flex-basis:50%\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"30px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"abou\"} -->\n<h3 class=\"wp-block-heading abou has-black-color has-text-color has-link-color\" style=\"font-size:30px\">Professional Services</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color has-link-color\" style=\"font-size:15px\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"50%\",\"className\":\"d-flex gap-4 justify-content-end tab-section\"} -->\n<div class=\"wp-block-column d-flex gap-4 justify-content-end tab-section\" style=\"flex-basis:50%\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\n<div class=\"wp-block-group\"><!-- wp:buttons {\"className\":\"icon-tab\"} -->\n<div class=\"wp-block-buttons icon-tab\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"border\":{\"radius\":\"4px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|white\"}}},\"color\":{\"background\":\"#339d55\"},\"typography\":{\"fontSize\":\"15px\"}},\"className\":\"read-more\"} -->\n<div class=\"wp-block-button has-custom-font-size read-more\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-white-color has-text-color has-background has-link-color wp-element-button\" style=\"border-radius:4px;background-color:#339d55\">Commercial</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:buttons {\"className\":\"icon-tab\"} -->\n<div class=\"wp-block-buttons icon-tab\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"border\":{\"radius\":\"4px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|white\"}}},\"color\":{\"background\":\"#339d55\"},\"typography\":{\"fontSize\":\"15px\"}},\"className\":\"read-more\"} -->\n<div class=\"wp-block-button has-custom-font-size read-more\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-white-color has-text-color has-background has-link-color wp-element-button\" style=\"border-radius:4px;background-color:#339d55\">Residential</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"about-post\"} -->\n<div class=\"wp-block-columns about-post\"><!-- wp:column {\"className\":\"feature-box1\"} -->\n<div class=\"wp-block-column feature-box1\"><!-- wp:columns {\"className\":\"img-section\"} -->\n<div class=\"wp-block-columns img-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":196,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"box\"} -->\n<figure class=\"wp-block-image size-full box\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about1.png\" alt=\"\" class=\"wp-image-196\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:html -->\n<i class=\"fa-solid fa-hospital\"></i>\n<!-- /wp:html --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"post-innter-content\"} -->\n<div class=\"wp-block-columns post-innter-content\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"style\":{\"typography\":{\"fontSize\":\"22px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<h4 class=\"wp-block-heading has-text-align-center has-black-color has-text-color has-link-color\" style=\"font-size:22px\">Medical Cleaning</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#8d8b8b\"}}},\"color\":{\"text\":\"#8d8b8b\"}}} -->\n<p class=\"has-text-align-center has-text-color has-link-color\" style=\"color:#8d8b8b;font-size:15px\">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"background\":\"#339d55\"},\"border\":{\"radius\":\"4px\"}},\"className\":\"read-more\"} -->\n<div class=\"wp-block-button has-custom-font-size read-more\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:4px;background-color:#339d55\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"feature-box1\"} -->\n<div class=\"wp-block-column feature-box1\"><!-- wp:columns {\"className\":\"img-section\"} -->\n<div class=\"wp-block-columns img-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":205,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"box\"} -->\n<figure class=\"wp-block-image size-full box\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about2.png\" alt=\"\" class=\"wp-image-205\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:html -->\n<i class=\"fa-solid fa-building\"></i>\n<!-- /wp:html --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"post-innter-content\"} -->\n<div class=\"wp-block-columns post-innter-content\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"style\":{\"typography\":{\"fontSize\":\"22px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<h4 class=\"wp-block-heading has-text-align-center has-black-color has-text-color has-link-color\" style=\"font-size:22px\">Office Cleaning</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#8d8b8b\"}}},\"color\":{\"text\":\"#8d8b8b\"}}} -->\n<p class=\"has-text-align-center has-text-color has-link-color\" style=\"color:#8d8b8b;font-size:15px\">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"background\":\"#339d55\"},\"border\":{\"radius\":\"4px\"}},\"className\":\"read-more\"} -->\n<div class=\"wp-block-button has-custom-font-size read-more\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:4px;background-color:#339d55\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"feature-box1\"} -->\n<div class=\"wp-block-column feature-box1\"><!-- wp:columns {\"className\":\"img-section\"} -->\n<div class=\"wp-block-columns img-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":206,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"box\"} -->\n<figure class=\"wp-block-image size-full box\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about3.png\" alt=\"\" class=\"wp-image-206\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:html -->\n<i class=\"fa-solid fa-industry\"></i>\n<!-- /wp:html --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"post-innter-content\"} -->\n<div class=\"wp-block-columns post-innter-content\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"style\":{\"typography\":{\"fontSize\":\"22px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<h4 class=\"wp-block-heading has-text-align-center has-black-color has-text-color has-link-color\" style=\"font-size:22px\">Industrial Cleaning</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#8d8b8b\"}}},\"color\":{\"text\":\"#8d8b8b\"}}} -->\n<p class=\"has-text-align-center has-text-color has-link-color\" style=\"color:#8d8b8b;font-size:15px\">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"background\":\"#339d55\"},\"border\":{\"radius\":\"4px\"}},\"className\":\"read-more\"} -->\n<div class=\"wp-block-button has-custom-font-size read-more\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:4px;background-color:#339d55\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"feature-box1\"} -->\n<div class=\"wp-block-column feature-box1\"><!-- wp:columns {\"className\":\"img-section\"} -->\n<div class=\"wp-block-columns img-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":207,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"box\"} -->\n<figure class=\"wp-block-image size-full box\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about4.png\" alt=\"\" class=\"wp-image-207\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:html -->\n<i class=\"fa-solid fa-school\"></i>\n<!-- /wp:html --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"post-innter-content\"} -->\n<div class=\"wp-block-columns post-innter-content\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"style\":{\"typography\":{\"fontSize\":\"22px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<h4 class=\"wp-block-heading has-text-align-center has-black-color has-text-color has-link-color\" style=\"font-size:22px\">School Cleaning</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#8d8b8b\"}}},\"color\":{\"text\":\"#8d8b8b\"}}} -->\n<p class=\"has-text-align-center has-text-color has-link-color\" style=\"color:#8d8b8b;font-size:15px\">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"background\":\"#339d55\"},\"border\":{\"radius\":\"4px\"}},\"className\":\"read-more\"} -->\n<div class=\"wp-block-button has-custom-font-size read-more\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"border-radius:4px;background-color:#339d55\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
		)
	);

	register_block_pattern(
		'pest-control-treatment/sponsor-section',
		array(
			'title'      => __( 'Sponsor Section', 'pest-control-treatment' ),
			'categories' => array( 'pest-control-treatment' ),
			'content'    => "<!-- wp:columns {\"className\":\"sponsor-sec mt-5 py-5\"} -->\n<div class=\"wp-block-columns sponsor-sec mt-5 py-5\"><!-- wp:column {\"className\":\"mt-3\"} -->\n<div class=\"wp-block-column mt-3\"><!-- wp:heading {\"level\":5,\"style\":{\"typography\":{\"fontSize\":\"38px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<h5 class=\"wp-block-heading has-black-color has-text-color has-link-color\" style=\"font-size:38px\">What Our Clients Says?</h5>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color has-link-color\" style=\"font-size:15px\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\",\"className\":\"mb-4\"} -->\n<p class=\"mb-4 has-black-color has-text-color has-link-color\" style=\"font-size:15px\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:group {\"className\":\"author-section\",\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\n<div class=\"wp-block-group author-section\"><!-- wp:image {\"id\":243,\"width\":\"70px\",\"height\":\"70px\",\"scale\":\"cover\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"is-style-rounded\"} -->\n<figure class=\"wp-block-image size-full is-resized is-style-rounded\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/profile.png\" alt=\"\" class=\"wp-image-243\" style=\"object-fit:cover;width:70px;height:70px\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"author-name mt-3\"} -->\n<div class=\"wp-block-column author-name mt-3\"><!-- wp:heading {\"level\":6,\"style\":{\"typography\":{\"fontSize\":\"16px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<h6 class=\"wp-block-heading has-black-color has-text-color has-link-color\" style=\"font-size:16px\">Cries Morning</h6>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color has-link-color\" style=\"font-size:15px\">Manager</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"sponsor-col2\"} -->\n<div class=\"wp-block-column sponsor-col2\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"}} -->\n<div class=\"wp-block-group\"><!-- wp:html -->\n<i class=\"fa-solid fa-quote-right\"></i>\n<!-- /wp:html -->\n\n<!-- wp:image {\"id\":225,\"scale\":\"cover\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"is-style-default\"} -->\n<figure class=\"wp-block-image size-full is-style-default\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/sponser.png\" alt=\"\" class=\"wp-image-225\" style=\"object-fit:cover\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
		)
	);
}