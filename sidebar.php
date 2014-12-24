<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package origin
 */


?>
<div id="content-wrap">
	<div id="first-sidebar">
		<div class="widget">
			<h2>Site navigation</h2>
			<ul id="menu-category">
				<li><a href="#">Web Design</a></li>
				<li><a href="#">Photoshop</a></li>
				<li><a href="#">Hosting</a></li>
				<li><a href="#">Domain name</a></li>
				<li><a href="#">CSS</a></li>
			</ul><!-- end ul#menu-category -->
		</div><!-- end div.widget -->

		<div class="widget">
			<h2>RSS Feed</h2>
			<p class="date">August 20, 2014</p>
			<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
		</div><!-- end div.widget -->

		
		<?php if (is_active_sidebar( 'sidebar-1' ) ) {
			dynamic_sidebar( 'sidebar-1' );
		} ?>
	</div><!-- end div#first-sidebar -->