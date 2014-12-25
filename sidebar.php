<div id="content-wrap">
	<div id="first-sidebar">
		<div class="widget">
			<h2>Site navigation</h2>
			<?php    /**
				* Displays a navigation menu
				* @param array $args Arguments
				*/
				$args = array(
					'theme_location' => 'sidebar_nav',
					'container' => ''
				);
			
				wp_nav_menu( $args ); 
				?>
		</div><!-- end div.widget -->

		<div class="widget">
			<h2>RSS Feed</h2>
			<?php if (function_exists('fetch_feed')) {
				include_once(ABSPATH . WPINC . '/feed.php');
				$feed = fetch_feed('http://www.izwebz.com/feed/');
				$limit = $feed->get_item_quantity(2);
				$items = $feed->get_items(0, $limit);
				if (!$items) echo "The feed is not available!";
				else {
					foreach ($items as $item) { ?>
					<p class="date"><?php echo $item->get_date('F j, Y'); ?></p>
					<h4><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h4>
					<p><?php 
						$value = substr($item->get_description(), 0, 200);
						$value = substr($value, 0, strrpos($value, ' '));
						echo $value;
					?></p>		
			
			<?php }}}?>
		</div><!-- end div.widget -->

		<?php if (is_active_sidebar( 'left-sidebar' ) ) {
			dynamic_sidebar( 'left-sidebar' );
		} ?>
	</div><!-- end div#first-sidebar -->