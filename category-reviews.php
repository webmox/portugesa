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

					<div class="category-reviews-list">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						    <?php $prof = get_field('profesion'); ?>


							<div class="item-review">
								<div class="block-img">
									<?php if(has_post_thumbnail()){ ?>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-review'); ?></a>
									<?php }else { ?>
										<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/images/devault-reviews-img.png"></a>
									<?php } ?>
								</div>
								<div class="block-excerpt">
									<?php echo limit_words(get_the_excerpt(), 50) ?>
									<div class="dop-info">
										<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
										<div class="porf"><?php echo  $prof; ?></div>
									</div>
								</div>
							</div>
						<?php endwhile ?>
						<?php endif ?>
						<div class="btn_wrap">
							<a class="btn-style all-reviews" href="#">Загрузить еще</a>
						</div>
					</div><!--end category-reviews-list-->

					<div class="write-reviews-btn">
						<a class="btn-style write-reviews" href="#">Написать отзыв</a>
					</div>

				</div>
			</div>

		</div><!--end main-container-->

<?php get_footer(); ?>