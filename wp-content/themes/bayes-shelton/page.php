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
					<div class="avatar">
						<img src="<?php echo get_template_directory_uri(); ?>/images/me.jpg" data-stellar-ratio="1.2" />
					</div>
				
			<h1 class="uppercase">Oliver Bayes-Shelton...</h1>
			<hr>
			<p>
                    	Besides being a software engineer with extensive development experience, I am a skilled problem solver with a positive attitude. I continuously look for optimum solutions — all the while enjoying the challenge of satisfying the needs of the business, the development teams and, most importantly, the user.
			<br/>
			<br/>
			My past experience spans several software development methodologies (such as SCRUM), all of which I have successfully worked within, building strong relationships with each stakeholder while never losing sight of the goal: to turn concepts into reality. And to do so on time.
			<br/>
			<br/>
			Extensive experience with Data Analysis, Database Design, Application Design and Object Oriented Programming.
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
