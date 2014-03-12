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
<span class="take-me-back"><a href="/blog"><i class="fa fa-long-arrow-left"></i>back</a></span>
            <h1><?php the_title(); ?></h1>
            <span class="posted">posted on <?php the_date(); ?></span>

            <span class="take-me-uptop" onclick="toTop()"><i class="fa fa-long-arrow-up"></i>top</span>
       </section>
    </section>

    <div class="inner">

    </div>

    <section id="content-section">

        <div class="inner">

            <p><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></p>
            <p><?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?></p>

        <div class="more_info">

            <ul class="author">
                <li><i class="fa fa-pencil"></i>Oliver</li>
            </ul>

        </div>

    </section>
