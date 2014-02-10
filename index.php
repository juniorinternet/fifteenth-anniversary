<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class='main'>
	<div class='inside'>
		<div class='stars'></div>
		<?php the_content(__('(celý článek...)')); ?>
	</div>
</div>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>