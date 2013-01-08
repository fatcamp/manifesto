<?php get_header(); ?>

	<div id="main">
    
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
            
            <header class="article-header">
    
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
        	</header>
        
            <section class="post-content">
            
                <?php the_post_thumbnail(); ?>
                
                <?php the_content(); ?>

            </section>
            
            <footer class="article-footer">

                <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

            </footer>
            
            <div class="comments-template">
                
				<h2>What do you think?</h2>
					<?php comments_template(); ?>
			</div>
            
        </article>
		
		<?php endwhile; ?>

<?php endif; ?>

<?php get_sidebar(); ?>	
<?php get_footer(); ?>