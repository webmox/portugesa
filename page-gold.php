<?php get_header('page'); ?>

		<div class="main-container">
			<div class="wrap-breadcrumbs">
				<div class="container">
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				</div>
			</div>
			<div class="section content gold-page">
				<div class="container">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<h1 class="title-page"><?php the_title(); ?></h1>
						<div class="img-block"><?php the_post_thumbnail('full'); ?></div>

						<div class="advantage-list">
							<h2><?php echo get_field('sub_title'); ?></h2>
							<?php $list_adv = get_field('advantages_program'); ?>

							<?php //print_array($list_adv); ?>
							<?php if($list_adv){ ?>
							<ul class="list">
								<?php foreach($list_adv as $item){ ?>
									<li><?php echo $item['advantage']; ?></li>
								<?php } ?>
							</ul>
							<?php } ?>
						</div><!--end advantage-list-->


						<div class="conditions">
							<h3 class="title-page">Условия получения</h3>
							
							<?php $conditions = new WP_Query(array('post_type'=>'page', 'post_parent'=>get_the_ID())); ?>
							<div class="list-conditions">
								<div class="row">
									<?php if($conditions->have_posts()) : while($conditions->have_posts()) : $conditions->the_post(); ?>
										<div class="col-md-6">
											<div class="item-condition">
												<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-cond'); ?></a>
												<div class="extend"><?php echo  limit_words(get_the_excerpt(), 20); ?></div>
											</div>
										</div>
									<?php endwhile ?>
									<?php endif ?>
								</div>
							</div><!--end list-conditions-->
						</div><!--end conditions-->

						<div class="write-admin-btn">
							<a class="btn-style call-consultant call-center" href="#standart-form">Получить консультацию</a>
						</div>

						<div class="consultant-info">
							<p>Напишите или позвоните мне чтобы получить всю необходимою дополнительную информацию о программе Золотая Виза.</p>
						</div>

					<?php endwhile ?>
					<?php endif ?>
				</div>
			</div>

		</div><!--end main-container-->

<?php get_footer(); ?>