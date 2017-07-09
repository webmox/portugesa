<?php get_header('page'); ?>

		<div class="main-container single-page">
			<div class="wrap-breadcrumbs">
				<div class="container">
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				</div>
			</div>
			<div class="section content">
				<div class="container">
					<?php if(have_posts()) : while(have_posts())  : the_post(); ?>
						<h1 class="title-page"><?php the_title(); ?></h1>
						<div class="text">
							<?php the_content(); ?>
						</div>
					<?php endwhile ?>
					<?php endif ?>
				</div>
			</div>

		</div><!--end main-container-->

<?php get_footer(); ?>