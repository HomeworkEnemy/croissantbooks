<?php
/**
 * The template part for displaying image post
 *
 * @package Pest Control Treatment 
 * @subpackage pest-control-treatment
 * @since pest-control-treatment 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="entry-content">
        <header>
            <h1><?php the_title();?></h1> 
        </header>
        <figure class="entry-attachment">
            <div class="attachment">
                <?php pest_control_treatment_the_attached_image(); ?>
            </div>

            <?php if ( has_excerpt() ) : ?>
                <figcaption class="entry-caption"><?php the_excerpt(); ?></figcaption>
            <?php endif; ?>
        </figure>
        <?php
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'pest-control-treatment' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>
    <?php edit_post_link( __( 'Edit', 'pest-control-treatment' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    <div class="clearfix"></div>
</article>