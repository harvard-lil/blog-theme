<?php get_header(); ?>
<?php get_sidebar(); // sidebar 1 ?>
			
			<div id="content" class="clearfix row">
				<div id="main" class="offset1 span6 clearfix" role="main">
					<section class="container _posts">
						<div class="sleeve">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							<time class="post-date" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time>
							<h1 class="post-title" itemprop="headline"><?php the_title(); ?></h1>
							<p class="post-author">Posted by <?php the_author_posts_link(); ?></p>
						</header> <!-- end article header -->
					
						<section class="post-content" itemprop="articleBody">
							<?php the_content(); ?>
							<?php wp_link_pages(); ?>
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
						</div>
					</section>
			
				</div> <!-- end #main -->
				
				
				
					
			
			</div> <!-- end #content -->

<?php get_footer(); ?>