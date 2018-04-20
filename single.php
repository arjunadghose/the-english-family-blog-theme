		<?php get_header(); ?>
			<div id="content">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>	
						<article class="post single">
							<h2 class="title">
								<?php the_title(); ?>
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
							<?php if(has_post_thumbnail()) : ?>
								<div class="post-thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>
							<?php endif; ?>
							<?php the_content(); ?>
						</article>
					<?php endwhile; ?>
				<?php else : ?>
					<?php wpautop('Sorry, no posts were found.'); ?>
				<?php endif; ?>
				<br />
				<?php comments_template(); ?>
			</div>
		</div><!-- main div -->
		
	<?php get_footer(); ?>