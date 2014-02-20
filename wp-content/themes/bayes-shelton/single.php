<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme and one
* of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query,
* e.g., it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Bayes_Shelton
* @since Bayes Shelton 1.0
* Template Name: single
*/

get_header(); ?>

    <div class="container">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

        <?php else : ?>

        <?php endif; // end have_posts() check ?>

    </div>
    <div class="footer">
        <div class="inner">

            <?php
            $next_post = get_next_post();
            if (!empty( $next_post )) { ?>
                <h1><?php echo $next_post->post_title; ?></h1>
                <span class="posted">posted on 23th Nov 2013</span>
                <hr>
                <span class="read-more"><a href="<?php echo get_permalink( $next_post->ID ); ?>" title="<?php echo $next_post->post_title; ?>">read the next article<i class="fa fa-long-arrow-right"></i></a></span>
            <?php } else { ?>
                <h1>Latest Post</h1>
                <hr>
                <span class="read-more"><a href="/blog/">Home<i class="fa fa-long-arrow-right"></i></a></span>
            <?php } ?>

            <br>
            <br>
            <div class="anims"></div>
            <h3> am i doing something you like? <span><a class="contact-btn">contact me</a></h3>
            <a href="http://twitter.com"><i class="fa fa-twitter fa-fw"></i></a>

            <a href="http://github.com"><i class="fa fa-github fa-fw"></i></a>
            <a href="mailto:email@email.com"><i class="fa fa-envelope fa-fw"></i></a>
            <a href="http://linkedin.com"><i class="fa fa-linkedin fa-fw"></i></a>
        </div>
    </div>

    </div>
    <div id="contact-box">
        <div id="contact-area">
            <h1>Let me know...</h1>
            <hr>
            <p>Fill in the form below and i will get back to you.</p>
            <form>
                <ul>
                    <li class="half"><input placeholder="your name" /></li>
                    <li class="half"><input placeholder="your e-mail" /></li>
                    <li><textarea placeholder="your message"></textarea></li>
                    <li><button class="submit-contact">Send it to me</button></li>
                    <li class="close-me"><i class="fa fa-times"></i> close me</li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>