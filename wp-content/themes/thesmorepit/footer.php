			<!-- footer -->
			<footer class="dark-background footer" role="contentinfo">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-4">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
					</div>
					<div class="col-md-4">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
					</div>
					<div class="col-md-4">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
					</div>
				</div>
				<!-- copyright -->

				<!-- /copyright -->

			</footer>
			<div class="copyright fluid-container">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <br />
				<a href="http://thejameswilliam.com" title="Designed by">Designed By: James W. Johnson.</a>
			</div>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->


	</body>
</html>
