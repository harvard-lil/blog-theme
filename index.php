
<?php get_header(); ?>
<?php get_sidebar(); // sidebar 1 ?>

			
		<div id="content" class="clearfix row">
			<div id="main" class="offset1 span6 clearfix" role="main">
				<section class="container _posts">
					<div class="sleeve">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
							<header class="post-header">
								<time class="post-date" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time>
								<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<p class="post-author">Posted by <?php the_author_posts_link(); ?></p>

							</header> <!-- end article header -->
						
							<section class="post-content">
								<?php the_content( __("Read more &raquo;","bonestheme") ); ?>
								
								<p class="post-meta">
								</p>
							</section> <!-- end article section -->
							
							<footer>
								<p class="post-tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
							</footer> <!-- end article footer -->
						</article> <!-- end article -->
						
						<?php comments_template(); ?>
						<?php endwhile; ?>	
					</div>
				</section><!-- end section._posts -->

				<section class="container _blognav">
					<div class="sleeve">					
						<nav class="pagination">
							<ul>
								<li class="prev"><?php previous_posts_link() ?></li>
								<li class="next"><?php next_posts_link() ?></li>
							</ul>
						</nav>
						
					<?php endif; ?>
					</div>
				</section><!-- end section._blognav -->
			</div><!-- end #main -->
		</div> <!-- end #content -->

<?php get_footer(); ?>