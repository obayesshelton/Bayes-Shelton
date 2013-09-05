<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

<link href="https://fonts.googleapis.com/css?family=Raleway:400,200,800" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" type="text/javascript" async=""></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41726147-4', 'bayes-shelton.co.uk');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start header
	/*-----------------------------------------------------------------------------------*/
?>

<div id="tab_container">
    <nav id="tabs">
        <ul id="nav" class="sticky">
            <li class="inactive"><a href="#"><?php bloginfo( 'name' ); ?> &mdash; <span><?php echo get_bloginfo( 'description' ); ?></a></li>
        </ul>
    </nav>
</div>

<div id="bodydiv">

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			
			<nav role="navigation" class="site-navigation main-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- .site-navigation .main-navigation -->
			
			<div class="clear"></div>
		</div><!--/container -->
			
	</header><!-- #masthead .site-header -->

	<div class="container">

		<div id="primary">
			<div id="content" role="main">


	<?php
		/*-----------------------------------------------------------------------------------*/
		/* Start Home loop
		/*-----------------------------------------------------------------------------------*/
		
		if( is_home() || is_archive() ) {
		
	?>
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<article class="post">
						
							<h1 class="title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title() ?>
								</a>
							</h1>
							<div class="clear"></div>
							<div class="post-meta">
								By: <?php the_author() ?> &bull; <?php the_date() ?> &bull; <?php echo get_the_category_list(); ?>
							</div><!--/post-meta -->
							
							<div class="the-content">
								<?php the_content( 'Continue...' ); ?>
								
								<?php wp_link_pages(); ?>

								<div class="more-link"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a></div>

								<div class="clear"></div>
								<div class="clear"></div>

							</div><!-- the-content -->
							
							<div class="meta clearfix">
								
							</div><!-- Meta -->
							
						</article>

					<?php endwhile; ?>
					
					<!-- pagintation -->
					<div id="pagination" class="clearfix">
						<div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
						<div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
					</div><!-- pagination -->


				<?php else : ?>
					
					<article class="post error">
						<h1 class="404">Nothing posted yet</h1>
					</article>

				<?php endif; ?>

			
		<?php } //end is_home(); ?>

	<?php
		/*-----------------------------------------------------------------------------------*/
		/* Start Single loop
		/*-----------------------------------------------------------------------------------*/
		
		if( is_single() ) {
	?>


				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<article class="post">
						
							<h1 class="title"><?php the_title() ?></h1>
							<div class="post-meta">
								By: <?php the_author() ?> &bull; <?php the_date() ?> &bull; <?php echo get_the_category_list(); ?> &bull; <?php comments_popup_link( __( 'No Comments', 'less' ), __( '1 Comment', 'less' ), __( '% Comments', 'less' ) ); ?>
							</div><!--/post-meta --><!--/post-meta -->
							
							<div class="the-content">
								<?php the_content( 'Continue...' ); ?>
								
								<?php wp_link_pages(); ?>
							</div><!-- the-content -->
							
						</article>

					<?php endwhile; ?>
					
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template( '', true );
					?>


				<?php else : ?>
					
					<article class="post error">
						<h1 class="404">Nothing posted yet</h1>
					</article>

				<?php endif; ?>


		<?php } //end is_single(); ?>
		
	<?php
		/*-----------------------------------------------------------------------------------*/
		/* Start Page loop
		/*-----------------------------------------------------------------------------------*/
		
		if( is_page()) {
	?>

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<article class="post">
						
							<h1 class="title"><?php the_title() ?></h1>
							
							<div class="the-content">
								<?php the_content(); ?>
								
								<?php wp_link_pages(); ?>
							</div><!-- the-content -->
							
						</article>

					<?php endwhile; ?>

				<?php else : ?>
					
					<article class="post error">
						<h1 class="404">Nothing posted yet</h1>
					</article>

				<?php endif; ?>

		<?php } // end is_page(); ?>

			<ul id="adverts">
				<li><a href="http://designmodo.com/shop/?u=536" target="_blank"><img src="http://designmodo.com/img/affiliate/pandora_180_150.jpg" border="0"/></a></li>
				<li class="middle"><a href="http://designmodo.com/shop/?u=536" target="_blank"><img src="http://designmodo.com/img/affiliate/flatui_180_150.jpg" border="0"/></a></li>
				<li><a href="http://designmodo.com/shop/?u=536" target="_blank"><img src="http://designmodo.com/img/affiliate/shop_180_150.jpg" border="0"/></a></li>
			</ul>


			<div class="clear"></div>

			</div><!-- #content .site-content -->

		</div><!-- #primary .content-area -->

	</div><!-- / container-->

	<?php
		/*-----------------------------------------------------------------------------------*/
		/* Start Footer
		/*-----------------------------------------------------------------------------------*/
	?>

	<footer class="site-footer" role="contentinfo">
		<div class="site-info container" style="width: 680px">
			You don’t need permission to reprint any articles on Bayes-Shelton — We need to make our children more knowledgeable.
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->

	<?php wp_footer(); ?>

</div>

</body>
</html>
