	<div id="side">
		<div id="search-form">
			<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
				<input type="text" name="s" placeholder="Search..." />
			</form>
		</div>
		<nav class="nav main-nav">
			<?php
				$header_args = array(
					'theme_location' => 'primary'
				);
				
				wp_nav_menu($header_args);
			?>
		</nav>
		<div class="side-widget-container" style="clear:both;">
			<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div>
	</div>
</div><!-- class container -->
	<footer class="main-footer">
		<div class="f_left">
			&copy; <?php echo date('Y') ?> - The English Family Blog
		</div>
		<nav class="f_right nav">
			<?php
				$footer_args = array(
					'theme_location' => 'footer'
				);
				
				wp_nav_menu('$footer_args');
			?>
		</nav>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>