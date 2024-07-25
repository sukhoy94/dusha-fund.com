<?php get_header();?>
<?php global $post;?>

<div class="container color-white blog-post pb-9rem">
	<article>
		<h1>
			<?php echo $post->post_title;?>
		</h1>

		<time datetime="<?php echo $post->post_date; ?>">
			Opublikowano <?php echo $post->post_date; ?>		
		</time>

		<div class="post-content">
			<?php echo $post->post_content;?>		
		</div>
	</article>
</div>

<?php wp_reset_postdata();?>
<?php get_footer();?>