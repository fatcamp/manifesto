<?php if ( have_comments() ) : ?>
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>
<?php endif; ?>

<?php comment_form(); ?>