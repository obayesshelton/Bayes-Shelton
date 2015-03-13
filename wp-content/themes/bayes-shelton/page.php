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
 * Template Name: Index
 */

get_header(); ?>

		<div class="container">
		    <div id="header">
			    <section id="heading" >
				    <section id="#header_nav" class="header" >
					    <span class="anim"></span>
					    <span class="take-me-uptop" onclick="toTop()"><i class="fa fa-long-arrow-up"></i>top</span>
				    </section>
			</section>

				<div class="inner">
				<div id="about-section">
					<!--<div class="avatar">
						<img src="<?php echo get_template_directory_uri(); ?>/images/me.jpg" data-stellar-ratio="1.2" />
					</div>-->

					<ul class="nav">
						<li><a href="https://www.bayes-shelton.co.uk/wp-content/themes/bayes-shelton/OliverBayes-Shelton-CV.pdf" target="_blank" class="blog btn">CV</a></li>
						<li><a href="/blog" class="blog btn">Blog</a></li>
						<li><a href="mailto:hello@bayes-shelton.co.uk" class="blog btn">Contact Me</a></li>
					</ul>

					<br clear="both"/>

					<!--<h1 class="uppercase">Oliver Bayes-Shelton...</h1>-->
					<hr>
					<p>
                        A highly-motivated and driven software engineer with over seven years experience specialising in agile software development process, test driven development and application development for both web, mobile and wearable applications. With previous experience ranging from application developer, software engineer and cloud architect, I possess an adaptable skills-set which ensures I constantly meet critical deadlines in the demands of a fast paced environment.
                        <br/><br/>
                        Seeking an opportunity as a Software Developer or Technical Architect be it project based, freelance or contract where I can deliver immediate value and continue to build innovative software.
                    </p>

        </div>
    </div>
</div>

<section id="content-section">
	<div class="inner">
<div id="github" class="some-area gh" >
<h1>Projects</h1>
<hr>
<ul>
    <?php

    /*
 * How to use: simply uncomment and comment out the unnecessary command to test
 */

    include_once "github/githubapi.php";
    include_once "github/config.php";

    $api = new githubApi($config);

    $res = $api->apiCall("/user/repos");
    if ($res) {

        foreach($res as $repo) {

    ?>
            <li class="g-project">
                <span class="title left">
                    <a href="<?php echo $repo['html_url']; ?>" target="_blank" title="<?php echo $repo['name']; ?>">
                        <?php echo $repo['name']; ?>
                     </a>
                </span>
                <span class="progress-wrapper right">
                    <span class="progress-bar green">
                        <span class="texter"><?php echo rand(0, 100);?></span>
                    </span>
                </span>
                <span class="info right">
                    <b><?php echo $repo['language']; ?></b>  &middot; updated <?php $time = $repo['updated_at']; $timeRaw = explode('T', $time); echo $timeRaw[0] ?>
                </span>
            </li>
    <?php

        }

    }

    ?>
</ul>



</div>

<div class="some-area">
<a hrf="/blog/"><h1>Articles</h1></a>
<hr>

    <?php

        $args = array( 'posts_per_page' => 5);

        $myposts = get_posts( $args );
        foreach ($myposts as $post) : setup_postdata($post); ?>
            <div class="blog-post">

                <div class="blog-right">

                    <h3><i class="fa fa-code fa-fw"></i><?php the_title(); ?></h3>
                    <span class="posted">posted on <?php the_date(); ?></span>
                    <br clear="both"/>
                    <p><?php the_excerpt(); ?></p>
                    <br clear="both"/>
                    <span class="read-more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">read more<i class="fa fa-long-arrow-right"></i></a></span>

                </div>
            </div>
        <?php endforeach;
        wp_reset_postdata();?>
</div>
<a href="/blog" class="blog btn">Visit the blog</a>

			</section>
<?php
get_footer();
