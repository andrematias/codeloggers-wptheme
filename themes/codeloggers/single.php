<?php get_header(); ?>

	<main id="app-content">
		<header id="search">
			<?php get_search_form(); ?>
		</header>
		
		<section id="posts-content">
			<?php if (have_posts()): ?>
				<?php while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="post <?php post_class(); ?>">
						<header>
							<h1><?php the_title(); ?></h1>
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<figure class="post-image">
									<?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
								</figure>
							<?php endif; ?>
							<section class="article-post-metadata">                
								<div>
									<small><i class="fa fa-user"></i> <?php the_author(); ?></small>
									<ul>
										<li><i class="tag-ico"></i> <small><?php the_tags( '&nbsp;', '&nbsp;' ); ?></small></li>
										<li><i class="calendar-ico"></i> <small> <?php the_time('F j, Y'); ?></small></li>
									</ul>
								</div>
							</section>
						</header>
						<main>
							<?php the_content(); ?>
						</main>

						<footer>
							<span class="line-separator"></span>
							<section class="author-mini-bio">
								<aside id="author-image-mini-bio">
									<?php 
										// grab admin email and their photo
										$admin_email = get_option('admin_email');
										$avatar = get_avatar_url( $admin_email ); 
									?>
									<img src="<?php echo $avatar; ?>" alt="<?php the_author() ?>">
								</aside>
								<article>
									<span>Written by</span><br>
									<header id="author-mini-bio-metadata">
										<h3 class="text-dark m-0"><?php the_author(); ?></h3>
										
										<?php
											if (has_nav_menu('mobile-menu')){
												wp_nav_menu( array( 
														'theme_location' => 'social-menu', 
														'container_id' => 'social-media',
														'container' => 'nav',
														'fallback_cb' => false
													) 
												); 
											}
										?>

									</header>
									<section>
										<span><?php the_author_meta('description'); ?></span>										
									</section>
								</article>
							</section>
							<?php if(comments_open()): ?>
							<section id="comments">
								<span class="line-separator"></span>
								<?php comments_template(); ?>
							</section>
							<?php endif; ?>
						</footer>
					</article>

					
				<?php endwhile; ?>
			<?php endif; ?>
		</section>
	</main>

<?php get_footer(); ?>