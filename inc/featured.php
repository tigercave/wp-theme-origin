<div id="page-info">
	<div id="featured">
		<dl>
            <?php 
            global $post;
            $args = array('numberposts' => 5, 'category' => 4);
            $custom_posts = get_posts($args);
            foreach ($custom_posts as $post) : setup_postdata($post); ?>
                <dt><?php the_title(); ?></dt>
                <dd>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                    <p><?php the_post_thumbnail() ;the_excerpt();?>
                    <a class="more-link" href="<?php the_permalink(); ?>">Continue Reading ...</a></p>
                </dd>    
            <?php endforeach; wp_reset_postdata();?>
        </dl>
	</div><!-- end div#featured -->
	<div id="facebook">
		<img src="<?php echo bloginfo('template_directory'); ?>/img/facebook.jpg" alt="facebook"/>
	</div><!-- end div#facebook -->
</div><!-- end div#page-info -->