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

					<?php 

						$service = new WP_Query(array('post_type'=>'post', 'cat'=>$catID, 'posts_per_page'=>-1)); 
						$all_post = $service->found_posts;
						$count_post = 0;

						echo $all_posts;

					?>
					<div class="list-services-content">
							<div class="section-row">
							<?php if($service->have_posts()) : while($service->have_posts()) : $service->the_post(); ?>

									<div class="service-item">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<div class="info_service">
											<div class="img-block">
												<?php the_post_thumbnail('img-icon'); ?>
											</div>
											<div class="excerpt"><?php the_excerpt(); ?></div> 
										</div>	
									</div>

									<?php $count_post++; ?>
									<?php if($count_post%2==0) {
										if($count_post == $all_post){
											echo "</div>";
										}else{ 
											echo "</div><div class='section-row'>";
										}
									}?>

								<!--</div>end section-row-->
							<?php endwhile ?>
							<?php endif ?>
					</div><!--end list-services-content-->

					<div class="block-info-serv">
						<div class="inner">
							<h3>Прочее</h3>
							<a href="#" class="contact-btn"><img src="<?php bloginfo('template_url'); ?>/images/img-service7.png"></a>
							<p class="text-info">Если в перечне не указана услуга, которая вас интересует, свяжитесь с нами, и мы постараемся вам помочь. Нет задач без решений!</p>
						</div>	
					</div>

				</div>
			</div>

		</div><!--end main-container-->

<?php get_footer(); ?>