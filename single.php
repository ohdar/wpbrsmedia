<?php
/*
* This is our first theme single.php
*/

get_header() ?>
<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-8 col-12-medium">
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
                
<div class="col-12 ">

				<!-- Blog -->
				<section>
					<header class="major">
						<h2>Related Article</h2>
					</header>
					<div class="row">
						<?php
                            $blog_args = array(
                                'post_type'	=> 'post',
								'orderby' => 'rand',
                                'posts_per_page'	=> 3,	
                            );
                            $blog_posts = new WP_Query($blog_args);
                            while ($blog_posts->have_posts()) {
                                $blog_posts->the_post(); ?>
						<div class="col-4 col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" class="image featured">
									<?php the_post_thumbnail('home-featured') ?>
								</a>
								<header>
									<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
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

<?php
        //Create WordPress Query with 'orderby' set to 'rand' (Random)
        $the_query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '10' ) );
        // output the random post
        echo '<header class="major"><h2>Other Articles</h2> </header>';
         echo '<ul class="actions">';
        while ( $the_query->have_posts() ) : $the_query->the_post();
            echo ' --<li> ';
            echo '<a href=';
            the_permalink();
            echo '>';
            the_title();
            echo '</a>';
            echo '</li>';
            echo ',';
            echo '</br>';
        endwhile;
        echo '</ul>';
        // Reset Post Data
        wp_reset_postdata();

 ?>

						
					</div>

				</section>

			</div>

            </div>
            <?php get_sidebar() ?>
        </div>
    </div>

</section>

<?php get_footer() ?>