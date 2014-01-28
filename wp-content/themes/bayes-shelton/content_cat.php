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

<div class="some-area">

    <?php
    global $post;
    $category = get_the_category($post->ID);
    $category = $category[0]->cat_ID;
    $myposts = get_posts(array('numberposts' => 30, 'offset' => 0, 'category__in' => array($category), 'post_status'=>'publish', 'order'=>'ASC' ));
    foreach($myposts as $post) :
        setup_postdata($post);
        ?>
        <div class="blog-post">
            <div class="blog-right">
                <a href="<?php the_permalink(); ?>"><h3><i class="fa fa-code fa-fw"></i><?php the_title(); ?></h3></a>
                <span class="posted">posted on <?php the_date(); ?></span>
            </div>
        </div>

        <br clear="all"/>

    <?php endforeach; ?>
    <?php wp_reset_query(); ?>

</div>