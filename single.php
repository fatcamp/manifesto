<?php get_header(); ?>

	<div id="main">
    
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
            
            <header class="article-header">
    
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                
                <p class="postmetadata"><span class="date"><?php the_date(); ?></span> by <span class="author"><?php the_author(); ?></span></p>
                
        	</header>
        
            <section class="post-content">
            
                <?php the_post_thumbnail(); ?>
                
                <?php the_content(); ?>

                <p class="commentmetadata">
                <?php comments_popup_link('No comments', '<span>1</span> comment', '% comments', 'comment-count'); ?>
                </p>

            </section>
            
            <footer class="article-footer">

                <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

            </footer>

			<?php comments_template(); ?>

			</div>
            
        </article>

        <?php endwhile; ?>
	
	<div class="navigation">	
		<?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
	</div>

    <?php endif; ?>

<?php get_sidebar(); ?>	
<?php get_footer(); ?>