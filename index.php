<html lang="ja">
	<head>
		<title></title>
	</head>
	<body>

		<!-- Blog Title -->
		<?php bloginfo('name'); ?>

		<!-- Blog description -->
		<?php bloginfo('description'); ?>
		
		<!-- Articles -->
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			
			<?php echo get_the_date(); ?> <!-- posted at -->
			<?php the_category(','); ?>	<!-- category -->
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>	<!-- title of article -->
			</a>
			<?php the_content('Read'); ?> <!-- show hidden article -->

		<?php endwhile; endif; ?>

	</body>
</html>
