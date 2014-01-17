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

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Oliver &amp; bayes</title>
		<link rel="shortcut icon" href="">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints-sticky.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
	</head>
	<body>
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
                    I'm a dedicated self learner that has a passion for technology. I have been lucky enough to work with some amazing teams which have developed innovative, engaging and life changing software. I have been responsible for software development, planning and management of projects as well as the planning and implementation of the infrastructure. I have an interest in web and non-web systems, open source projects and the technology community in general.
                </p>

        </div>
    </div>
</div>

<section id="content-section">
	<div class="inner">
<div id="github" class="some-area gh" >
<h1><i class="fa fa-github"></i></h1>
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
                <span class="title left"><?php echo $repo['name']; ?></span>
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
<h1><i class="fa fa-bullhorn"></i></h1>
<hr>

    <?php

        $args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );

        $myposts = get_posts( $args );
        foreach ($myposts as $post) : setup_postdata($post); ?>
            <div class="blog-post">

                <div class="blog-right">
                    <h3><i class="fa fa-code fa-fw"></i><?php the_title(); ?></h3>
                    <span class="posted">posted on <?php the_date(); ?></span>
                    <p><?php the_title(); ?></p>
                    <span class="read-more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">mead more<i class="fa fa-long-arrow-right"></i></a></span>
                </div>
            </div>
        <?php endforeach;
        wp_reset_postdata();?>

</div>

<div id="tweet" class="some-area gh" >
<h1><i class="fa fa-twitter"></i></h1>
<hr>
<ul>
	<li class="tweet">
		<p>the main body of the tweet ill go here</p>
		<span class="posted">
			tweeted 5 days ago
		</span>
	</li>
</ul>



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
