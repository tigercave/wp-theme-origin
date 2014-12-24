<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package origin
 */

get_header(); 
	include(TEMPLATEPATH . '/inc/featured.php');
	get_sidebar();
?>

	<div id="main-content">
		<h2><a href="#">Videos</a></h2>
		<div class="post">
			<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
			<a href="#"><img src="img/post-images/post.jpg" alt="Fuck you"/></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="meta-data">Posted by: Richard Nguyen | On: December 22,2014</p>
			<a class="comment-link" href="#">12</a>
			<a class="more-link">Continue reading ...</a>
		</div><!-- end div.post -->

		<h2><a href="#">PHP Videos</a></h2>
		<div class="post">
			<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
			<a href="#"><img src="img/post-images/post.jpg" alt="Fuck you"/></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="meta-data">Posted by: Richard Nguyen | On: December 22,2014</p>
			<a class="comment-link" href="#">12</a>
			<a class="more-link">Continue reading ...</a>
		</div><!-- end div.post -->

		<h2><a href="#">JQuery Tutorials</a></h2>
		<div class="post">
			<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
			<a href="#"><img src="img/post-images/post.jpg" alt="Fuck you"/></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="meta-data">Posted by: Richard Nguyen | On: December 22,2014</p>
			<a class="comment-link" href="#">12</a>
			<a class="more-link">Continue reading ...</a>
		</div><!-- end div.post -->
	</div><!-- end div#main-content -->
<?php 
	get_sidebar('second');
	get_footer(); 
?>
