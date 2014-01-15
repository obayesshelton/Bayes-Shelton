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
 * Template Name: index
 */

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oliver &amp; bayes</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/blog.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer="defer"></script>
</head>
<body>

<div class="container">
    <section id="heading" >
        <section id="#header_nav" class="header" >
            <span class="anim"></span>
            <span class="take-me-uptop" onclick="toTop()"><i class="fa fa-long-arrow-up"></i>top</span>
        </section>
    </section>


    <div class="inner">

    </div>

    <section id="content-section">
        <div class="inner">

            <div class="blog-posts">

                <?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content_all', get_post_format() );

                    endwhile;

                else :
                    // If no content, include the "No posts found" template.
                    get_template_part( 'content', 'none' );

                endif;
                ?>

            </div>

         </div>

    </section>

    <div class="footer">
        <div class="inner">
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