<?php get_header(); ?>

	<div id="main">
    
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
            
            <header class="article-header">
    
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                
        	</header>
        
            <section class="post-content">
            
                <?php the_post_thumbnail(); ?>
                
                <?php the_content(); ?>

            </section>
            
            <footer class="article-footer">

                <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

            </footer>

            <?php comments_template(); ?>

        </article>
		
		<?php endwhile; ?>
        <?php endif; ?>

<?php get_sidebar(); ?>	
<?php get_footer(); ?>