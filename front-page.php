<?php get_header(); ?>

		<div class="main-container">
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); 
				
				$title_welcome = get_field('title_section_welcome');
				$text_welcome = get_field('text_welcome');

				$title_section = get_field('title_section');
				$text_section = get_field('text_section');

				endwhile ;
			 	endif ;
			?>

			<div class="section section-welcome">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="text_section">
								<h2 class="title-home-section"><?php echo $title_welcome; ?></h2>
								<?php echo $text_welcome; ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="btn_wrap">
								<a href="#standart-form" class="btn-style call-center style-section-btn">Получить консультацию</a>
							</div>
						</div>
					</div>
				</div>
			</div><!--end section-welcome-->

			<div class="section section-services">
				<div class="container">
					<h2 class="title-section">Наши услуги</h2>
					
					<?php $services = new WP_Query(array('post_type'=>'post', 'cat'=>'2', 'posts_per_page'=>'4')); ?>
					<div class="list-services">
						<div class="row">
							<?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post(); ?>
								<div class="col-md-3 col-sm-6">
									<div class="item-service">
										<div class="block-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-icon'); ?></a></div>
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									</div>
								</div>
							<?php endwhile ?>
							<?php endif ?>
						</div>

						<div class="wrap-btn">
							<a href="<?php echo get_category_link(2); ?>" class="btn-style all-services">Смотреть все услуги</a>
						</div>

					</div><!--end list-services-->

				</div>
			</div><!--end section-services-->



			<div class="section section-info">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="text_section">
								<h2 class="title-home-section"><?php echo $title_section; ?></h2>
								<?php echo $text_section; ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="btn_wrap">
								<a href="#standart-form" class="btn-style call-center  style-section-btn">Узанть больше</a>
							</div>
						</div>
					</div>
				</div>
			</div><!--end section-welcome-->


			<div class="section section-advantages">
				<div class="container">
					<h2 class="title-section">Наши преимудества</h2>
					
					<?php $advantage = new WP_Query(array('post_type'=>'post', 'cat'=>'6', 'posts_per_page'=>-1)); ?>

					<div class="wrap-list-advantages">
						<div class="list-advantages">
							<?php if($advantage->have_posts())  : while($advantage->have_posts()) : $advantage->the_post(); ?>
								<div class="item">
									<div class="block-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-icon'); ?></a></div>
									<h4 class="title-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<div class="exerpt"><?php echo limit_words(get_the_excerpt(), 10); ?></div>
								</div>
							<?php endwhile ?>
							<?php endif ?>
						</div>
					</div><!--end wrap-list-advantages-->

				</div>
			</div><!--end section-advantages-->



			<div class="section section-news">
				<div class="container">
					<h2 class="title-section">Новости</h2>
					
					<?php $news = new WP_Query(array('post_type'=>'post', 'cat'=>'7', 'posts_per_page'=>'2')); ?>
					<div class="list-news">
						<div class="row">
							<?php if($news->have_posts())  : while($news->have_posts()) : $news->the_post(); ?>
								<div class="col-sm-6">
									<div class="item">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-news'); ?></a>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<div class="date"><?php the_time('d.m.y'); ?></div>
										<div class="exerpt"><?php echo limit_words(get_the_excerpt(), 15); ?></div>
										<div class="btn_wrap wrap-read-more"><a href="#" class="btn-style">читать</a></div>
									</div>
								</div>
							<?php endwhile ?>
							<?php endif ?>
						</div>	
					</div><!--end list-news-->

					<div class="btn_wrap"><a href="#" class="btn-style all-news">Все новости</a></div>

				</div>
			</div><!--end section-advantages-->



		</div><!--end main-container-->

<?php get_footer(); ?>