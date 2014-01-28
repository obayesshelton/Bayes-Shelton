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

get_header(); ?>

<div id="search-box">
    <div id="search-area">
        <input clsss="big-search" />
        <h3 class="helper-search">Type to begin search</h3>
        <div class="close-area">
            <span class="close-me"><i class="fa fa-times"></i> exit search</span>
        </div>
    </div>
</div>

<div class="container">
    <section id="heading">

        <section id="#header_nav" class="header" >
            <span class="anim"></span>
            <span class="take-me-uptop" onclick="toTop()"><i class="fa fa-long-arrow-up"></i>top</span>
            <span class="search-btn" ><i class="fa fa-search"></i></span>
        </section>

    </section>

    <div class="inner">

    </div>

    <section id="content-section">
        <div class="inner">

            <div class="blog-posts">

                <?php

                /**/
                $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date ASC");
                foreach($years as $year) :

                    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '".$year."' ORDER BY post_date ASC");
                    foreach($months as $month) :
                        ?>

                        <h1><i class="fa fa-calendar"></i><?php echo date( 'F', mktime(0, 0, 0, $month) );?></h1>
                        <hr>

                        <?php
                        $theids = $wpdb->get_results("SELECT ID, post_title, post_date FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND MONTH(post_date)= '".$month."' AND YEAR(post_date) = '".$year."' ORDER BY post_date ASC");
                        foreach ($theids as $theid):
                            ?>

                            <div class="blog-post">
                                <div class="blog-right">
                                    <h3><i class="fa fa-code fa-fw"></i><?php echo $theid->post_title; ?></h3>
                                    <span class="posted">posted on <?php echo $theid->post_date ;?></span>
                                </div>
                            </div>

                        <?php
                        endforeach;
                        ?>

                    <?php endforeach;?>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

<?php
get_footer();