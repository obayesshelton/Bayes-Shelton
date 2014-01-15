<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="blog-post">
    <div class="blog-right">
        <h3>
            <a href="<?php echo esc_url( get_post_format_link( 'link' ) ); ?>" title="<?php the_title(); ?>">
                <i class="fa fa-code fa-fw"></i>
                <?php the_title(); ?>
            </a>
        </h3>
        <span class="posted">posted on <?php the_date(); ?></span>
    </div>
</div>