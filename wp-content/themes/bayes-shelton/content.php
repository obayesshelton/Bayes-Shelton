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

<div class="container">
    <section id="heading">
        <section id="#header_nav" class="header">

            <h1><?php the_title(); ?></h1>
            <span class="posted">posted on <?php the_date(); ?></span>

            <span class="take-me-uptop" onclick="toTop()"><i class="fa fa-long-arrow-up"></i>top</span>
        </section>
    </section>

    <div class="inner">

    </div>

    <section id="content-section">

        <div class="inner">

            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
            <p>Hope you enjoyed this and learned something new!</p>

        <div class="more_info">

            <ul class="tags">
            <li><i class="fa fa-tag"></i></li>
                <?php

                global $post;
                $tags = wp_get_post_tags($post->ID);
                foreach ($tags as $tag) {
                    $html = '<li><a href="/tag/' . $tag->slug . '">';
                    $html .= $tag->name;
                    $html .= '</a></li>';
                    echo $html;
                }
                ?>
            </ul>

            <ul class="author">
                <li><i class="fa fa-pencil"></i>oliver_admin</li>
            </ul>

        </div>

    </section>