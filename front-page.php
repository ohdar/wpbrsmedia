<?php
/*
* This is used to show header
*/

?>
<?php get_header(); ?>

<!-- Banner -->
<?php if (true == get_theme_mod('toggle_home_banner', true)) : ?>
	<section id="banner">
		<header>
			<h2><?php echo get_theme_mod('home_banner_heading_text', 'Howdy. This is Dopetrope.') ?></h2>
			<p><?php echo get_theme_mod('home_banner_paragraph_text', 'A responsive template by HTML5 UP.') ?></p>
		</header>
	</section>
<?php endif;?>

<!-- Intro -->
<?php if (true == get_theme_mod('toggle_home_intro', true)) : ?>
<div id="homeintro" class="row home-intro">
	<section id="intro" class="container">
		<div class="row">
			<div class="col-3 col-12-medium">
				<section class="first">
					<i class="dashicons featured dashicons-<?php echo esc_attr(get_theme_mod('intro_box_1_icon', 'admin-generic')); ?>"></i>
					<header>
					<h2><?php echo get_theme_mod('intro_box_1_heading_text', 'Complete Website Solution.') ?></h2>						
					</header>
					<p><?php echo get_theme_mod('intro_box_1_paragraph_text', 'Domain Registration.') ?></p>
					
				</section>
			</div>			
			<div class="col-3 col-12-medium">
				<section class="first">
				<i class="dashicons featured dashicons-<?php echo esc_attr(get_theme_mod('intro_box_2_icon', 'admin-generic')); ?>"></i>
					<header>
					<h2><?php echo get_theme_mod('intro_box_2_heading_text', 'Complete Website Solution.') ?></h2>						
					</header>
					<p><?php echo get_theme_mod('intro_box_2_paragraph_text', 'Domain Registration.') ?></p>
				</section>
			</div>
			<div class="col-3 col-12-medium">
				<section class="first">
				<i class="dashicons featured dashicons-<?php echo esc_attr(get_theme_mod('intro_box_3_icon', 'admin-generic')); ?>"></i>
				<header>
					<h2><?php echo get_theme_mod('intro_box_3_heading_text', 'Complete Website Solution.') ?></h2>						
					</header>
					<p><?php echo get_theme_mod('intro_box_3_paragraph_text', 'Domain Registration.') ?></p>
				</section>
			</div>
			<div class="col-3 col-12-medium">
				<section class="last">
				<i class="dashicons featured dashicons-<?php echo esc_attr(get_theme_mod('intro_box_4_icon', 'admin-generic')); ?>"></i>
				<header>
					<h2><?php echo get_theme_mod('intro_box_4_heading_text', 'Complete Website Solution.') ?></h2>						
					</header>
					<p><?php echo get_theme_mod('intro_box_4_paragraph_text', 'Domain Registration.') ?></p>
					<p><b>Please contact us via info[at]brsmedia[dot]in to schedule your repair.</b></p>
				</section>
			</div>
		</div>
		
	</section>
</div>
<?php endif; ?>



<!-- Main -->
	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-12">			

				<!-- Services -->
				<section>
					<header class="major">
						<h2>Our Services</h2>
					</header>
					<div class="row">

						<?php
                            $service_args = array(
                                'post_type'	=> 'service',
                                'posts_per_page'	=> 3
                                //'order' => 'ASC'
                            );
                            $service_posts = new WP_Query($service_args);
                            while ($service_posts->have_posts()) {
                                $service_posts->the_post(); ?>
						<div class="col-4 col-6-medium col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" class="image featured">
									<?php the_post_thumbnail('services-thumb') ?>
								</a>
								<header>
									<h3><?php the_title() ?></h3>
								</header>
								<?php the_excerpt() ?>
								<footer>
									<ul class="actions">
										<li><a href="<?php the_permalink() ?>" class="button alt">Find out more</a></li>
									</ul>
								</footer>
							</section>
						</div>
						<?php
                            } ?>
						<?php wp_reset_postdata() ?>
						
					</div>
				</section>

			</div>
			<div class="col-12">
				<!-- Portfolio -->
				<section>
					<header class="major">
						<h2>Portfolio</h2>
					</header>
					<div class="row">

						<?php
                            $portfolio_args = array(
                                'post_type'	=> 'portfolio',
                                'posts_per_page'	=> 3
                            );
                            $portfolio_posts = new WP_Query($portfolio_args);
                            while ($portfolio_posts->have_posts()) {
                                $portfolio_posts->the_post(); ?>
						<div class="col-4 col-6-medium col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" class="image featured">
									<?php the_post_thumbnail('portfolio-thumb') ?>
								</a>
								<header>
									<h3><?php the_title() ?></h3>
								</header>
								<?php the_excerpt() ?>
								<footer>
									<ul class="actions">
										<li><a href="<?php the_permalink() ?>" class="button alt">Find out more</a></li>
									</ul>
								</footer>
							</section>
						</div>
						<?php
                            } ?>
						<?php wp_reset_postdata() ?>
						
					</div>
				</section>

			</div>
			<div class="col-12 ">

				<!-- Blog -->
				<section>
					<header class="major">
						<h2>Tech Blog</h2>
					</header>
					<div class="row">
						<?php
                            $blog_args = array(
                                'post_type'	=> 'post',
                                'posts_per_page'	=> 4
                            );
                            $blog_posts = new WP_Query($blog_args);
                            while ($blog_posts->have_posts()) {
                                $blog_posts->the_post(); ?>
						<div class="col-3 col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" class="image featured">
									<?php the_post_thumbnail('home-featured') ?>
								</a>
								<header>
									<h3><?php the_title() ?></h3>
									<p>Posted on <?php the_date() ?> at <?php the_time() ?></p>
								</header>
								<?php the_excerpt() ?>
								<footer>
									<ul class="actions">
										<li><a href="<?php the_permalink() ?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
										
									</ul>
								</footer>
							</section>
						</div>
						<?php
                            } ?>
						
					</div>
				</section>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>