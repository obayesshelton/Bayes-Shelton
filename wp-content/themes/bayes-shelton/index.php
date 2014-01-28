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
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/blog.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer="defer"></script>
</head>
<body>


<div id="search-box">
    <div id="search-area">
        <input clsss="big-search" />
        <h3 class="helper-search">Type to begin search</h3><h3 class="helper-search">Press enter when you are done!</h3>
        <div class="close-area">
            <span class="close-me"><i class="fa fa-times"></i> exit search</span>
        </div>
    </div>
</div>
<div class="container">
    <section id="heading" >
        <span class="anims"></span>
        <section id="#header_nav" class="header" >
            <span class="take-me-uptop" onclick="toTop()"><i class="fa fa-long-arrow-up"></i>top</span>
            <span class="search-btn" ><i class="fa fa-search"></i></span>
        </section>

    </section>


    <div class="inner">

    </div>

    <section id="content-section">
        <div class="inner clear">


            <div class="blog-posts">

                <?php

                /**/
                $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date ASC");
                foreach($years as $year) :

                    $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '".$year."' ORDER BY post_date ASC");
                    foreach($months as $month) :
                        ?>

                        <div class="some-area">
                        <h1><i class="fa fa-calendar"></i><?php echo date( 'F', mktime(0, 0, 0, $month) );?></h1>
                        <hr>

                        <?php
                        $theids = $wpdb->get_results("SELECT ID, post_title, post_date FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND MONTH(post_date)= '".$month."' AND YEAR(post_date) = '".$year."' ORDER BY post_date ASC");
                        foreach ($theids as $theid):
                            ?>

                            <div class="blog-post">
                                <div class="blog-right">
                                    <a href="<?php echo get_permalink( $theid->ID ); ?>"><h3><i class="fa fa-code fa-fw"></i><?php echo $theid->post_title; ?></h3></a>
                                    <span class="posted">posted on <?php echo $theid->post_date ;?></span>
                                </div>
                            </div>

                        <?php
                        endforeach;
                        ?>

                        </div>

                    <?php endforeach;?>

                <?php endforeach; ?>

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
                <h1><i class="fa fa-tag"></i>Tags</h1>
                <hr>
                <ul class="tags">
                    <li></li>
                    <?php
                    $tags = get_tags();
                    $html = '<div class="post_tags">';
                    foreach ( $tags as $tag ) {
                        $tag_link = get_tag_link( $tag->term_id );
                        $html .= '<li><a href="/tag/' . $tag->slug . '" title="$tag->name Tag" class="$tag->slug">';
                        $html .= $tag->name . '</a>';
                    }
                    $html .= '</li>';
                    echo $html;
                    ?>
                </ul>


            </div>
        </div>







    </section>

<?php
get_footer();
