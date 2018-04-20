		<?php get_header(); ?>
			<div id="content">
				<?php
					// Define our WP Query Parameters
					$the_query = new WP_Query( 'posts_per_page=1' ); 

					// Start our WP Query
					while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						<article class="post main">
							<?php if(has_post_thumbnail()) : ?>
									<div class="post-thumbnail-container-container">
										<div class="post-thumbnail-container">
											<div class="post-thumbnail">
												<?php the_post_thumbnail(); ?>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<h3 class="latest-post-heading">
									<span>></span>Latest Post
								</h3>
								<h2 class="title">
									<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
								</h2>
								<p class="meta">
									Posted at <?php the_time(); ?> 
									on <?php the_time('D M j, Y'); ?>
									by 
									<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
										<?php the_author(); ?>
									</a>
									<span class="categories-list"> | Posted in: 
										<?php
											$categories = get_the_category();
											$separator = ", ";
											$output = '';
											
											if(isset($categories)) {
												foreach($categories as $category) {
													$output .= '<a href="'. 
													get_category_link($category->term_id) . '">' .
													$category->cat_name . '</a>' . $separator;
												}
											}
											
											echo trim($output, $separator);
										?>
									</span>
								</p>
								<div class="main-post-excerpt">
									<?php the_excerpt(); ?>
									<a class="button" href="<?php the_permalink(); ?>">Read More</a>
								</div>
						</article>
					<?php 
						// Repeat the process and reset once it hits the limit
						endwhile; 
						wp_reset_postdata();
					?>
					<div id="sub-content">
						<?php
							// Define our WP Query Parameters
							$the_query = new WP_Query( 'posts_per_page=4' ); 
							$count = 0;
							// Start our WP Query
							while ($the_query -> have_posts()) : $the_query -> the_post(); 
								
								$count++;
							
								if($count > 1) {
						?>
									<article class="post sub">
										<?php if($count == 2) { ?>
											<h3 class="latest-post-heading">
												<span>></span>Second Latest Post
											</h3>
										<?php } else if($count == 3) { ?>
											<h3 class="latest-post-heading">
												<span>></span>Third Latest Post
											</h3>
										<?php } else if($count ==4) { ?> 
											<h3 class="latest-post-heading">
												<span>></span>Fourth Latest Post
											</h3>
										<?php } ?>
										<h2 class="title">
											<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
										</h2>
										<?php if(has_post_thumbnail()) : ?>
											<div class="post-thumbnail-container-container">
												<div class="post-thumbnail-container">
													<div class="post-thumbnail">
														<?php the_post_thumbnail(); ?>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<p class="meta">
											Posted at <?php the_time(); ?> 
											on <?php the_time('D M j, Y'); ?>
											by 
											<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
												<?php the_author(); ?>
											</a>
											<span class="categories-list"> | Posted in: 
												<?php
													$categories = get_the_category();
													$separator = ", ";
													$output = '';
													
													if(isset($categories)) {
														foreach($categories as $category) {
															$output .= '<a href="'. 
															get_category_link($category->term_id) . '">' .
															$category->cat_name . '</a>' . $separator;
														}
													}
													
													echo trim($output, $separator);
												?>
											</span>
										</p>
										<div class="excerpt"><?php the_excerpt(); ?></div>
										<a class="button" href="<?php the_permalink(); ?>">Read More</a>
									</article>
						<?php
								}
					 
							// Repeat the process and reset once it hits the limit
							endwhile; 
							wp_reset_postdata();
						?>
					</div>
			</div>
		</div><!-- main div -->

	<?php get_footer(); ?>