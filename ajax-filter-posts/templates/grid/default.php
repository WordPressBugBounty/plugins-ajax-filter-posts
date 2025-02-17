<div class="am_grid_col">
	<div class="am_single_grid">
		<div class="am_thumb">
			<?php gridmaster_post_thumbnail( apply_filters( 'gridmaster_post_thumb_size', 'full' ) ); ?>
		</div>
		<div class="am_cont">
            <?php echo gridmaster_get_post_title('h4'); // phpcs:ignore ?>
            <?php echo gridmaster_the_content(); // phpcs:ignore ?>
            <?php echo gridmaster_read_more_link( __('Read More', 'ajax-filter-posts' ) ); // phpcs:ignore ?>
		</div>
	</div>
</div>
