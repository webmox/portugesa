		<div class="footer">
			<div class="container">
				<div class="row">
					
					<div class="col-md-4">
						<div class="footer-menu-block">
							<?php if(dynamic_sidebar('footer1')); ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-links-block">
							<?php if(dynamic_sidebar('footer2')); ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-subscibe-block">
							<?php if(dynamic_sidebar('footer3')); ?>
						</div>
						<div class="social-block">
							<ul class="social-btns">
								<li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="gplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li class="p"><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							</ul>
						</div>

						<p class="copyright">&copy; 2016 <a href="<?php bloginfo('url') ?>">Casa Portugesa</a> Все права защищены.</p>

					</div>

				</div>
			</div>
		</div><!--end footer-->
	</div><!--end layout-->

	<div id="standart-form" class="white-popup-block zoom-anim-dialog  mfp-hide">
		<?php echo do_shortcode('[contact-form-7 id="144" title="Контактная форма"]'); ?>
	</div>

	<?php wp_footer(); ?>
</body>
</html>