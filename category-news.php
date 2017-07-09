<?php get_header('page'); ?>

		<div class="main-container">
			<div class="wrap-breadcrumbs">
				<div class="container">
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				</div>
			</div>
			<div class="section content">
				<div class="container">
					<?php $catID = get_query_var('cat');  ?>
					<h1 class="title-page"><?php echo get_cat_name($catID); ?></h1>
					
					<div class="category-news">
						<div class="row">
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<div class="col-md-4 col-sm-6">
									<div class="item-news">
										<div class="block-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
										<div class="date"><?php the_time('d.m.y'); ?></div>
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<div class="excerpt"><?php echo limit_words(get_the_excerpt(), 20); ?></div>
									</div>
								</div>
							<?php endwhile ?>
							<?php endif ?>

							<div class="btn_wrap">
								<a class="btn-style all-news" href="#">Загрузить еще</a>
							</div>
						</div>
					</div><!--end list-news-->

				</div>
			</div>

		</div><!--end main-container-->

<?php get_footer(); ?>