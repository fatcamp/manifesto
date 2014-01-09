<?php get_header(); ?>

	<div id="main">
        
        <div id="blog">
            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
                
                <header class="article-header">
                    
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    <p class="postmetadata"><span class="date"><?php the_time('F j, Y'); ?></span> by <span class="author"><?php the_author(); ?></span></p>
                    
                </header>
            
                <section class="post-content">
                
                    <?php the_post_thumbnail(); ?>
                    
                    <?php the_excerpt(); ?>
    
                    <p class="commentmetadata">
                    <?php comments_popup_link('No comments', '<span>1</span> comment', '% comments', 'comment-count'); ?>
                    <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                    </p>
    
                </section>
                
                <footer class="article-footer">

                    <p class="categories"><?php the_category(', ') ?></p>

                    <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

                </footer>

            </article>
    
            <?php endwhile; ?>
            
            <div class="navigation">
                <?php posts_nav_link(); ?>
            </div>
            
            <?php endif; ?>
        </div>

<?php get_sidebar(); ?>	
<?php get_footer(); ?>