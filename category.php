<?php get_header(); ?>

	<div id="main">
		<div id="blog">
        
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?>:</h2>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Archive for <?php the_time('Y'); ?>:</h2>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Author Archive</h2>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Blog Archives</h2>
		<?php } ?>
	
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
                
                <header class="article-header">
    
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
                <p class="postmetadata"><span class="date"><?php the_date(); ?></span> by <span class="author"><?php the_author(); ?></span></p>
                
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