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
 */

get_header(); ?>

<div class="container">
    <div id="header">
    <section id="heading" >
        <section id="#header_nav" class="header" >
            <a href="/"><span class="anim"></span></a>
            <span class="take-me-uptop" onclick="toTop()"><i class="fa fa-long-arrow-up"></i>top</span>
        </section>
    </section>

    <div class="inner">

    </div>

    <section id="content-section">
        <div class="inner clear">


            <div class="blog-posts">

                <?php if ( have_posts() ) :

                    // Start the Loop.
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part('content_cat', get_post_format());

                    endwhile;

                else :

                    echo "NONE";

                endif;
                ?>

            </div>

            <div class="right-column">

                <h1><i class="fa fa-archive"></i>Catagories</h1>
                <hr>
                <ul class="tags">
                    <li></li>

                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        $html = '<li><a href="/category/' . $category->category_nicename . '">';
                        $html .= $category->cat_name;
                        $html .= '</a></li>';
                        echo $html;
                    }
                    ?>

                </ul>

            </div>
        </div>







    </section>

<?php
get_footer();
