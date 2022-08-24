<?php
/*
* This is used to display about us single pages
* Template Name: Portfolio Template
*/


get_header() ?>
<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
		<div class="col-12 col-12-medium">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <!-- Content -->
                            <article class="box post">
                                <a href="<?php the_permalink() ?>" class="image featured">
                                    <?php the_post_thumbnail('single-post') ?>
                                </a>
                                <header>
                                    <h2><?php the_title() ?></h2>
                                </header>

                                <?php the_content() ?>

                            </article>
                    <?php }
                    }
                ?>
                <?php wp_reset_postdata() ?>

            </div>

            <div class="col-12 col-12-medium">
				<!-- Portfolio -->
				<section>
					
					<div class="row">

						<?php
                            $portfolio_args = array(
                                'post_type'	=> 'portfolio',
                                'posts_per_page'	=> 6
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
									<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
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
            
        </div>
    </div>
</section>
<?php get_footer() ?>