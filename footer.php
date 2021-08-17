<?php
/*
* This is used to show footer
*/

?>


			<!-- Footer -->
            <section id="footer">
					<div class="container">
						<div class="row">
							
							<div class="col-3 col-6-medium col-12-small">
								<?php dynamic_sidebar('footer-1') ?>
							</div>
							<div class="col-3 col-6-medium col-12-small">
								<?php dynamic_sidebar('footer-2') ?>
							</div>
							<div class="col-3 col-12-medium">
								<?php dynamic_sidebar('footer-3') ?>
							</div>
							<div class="col-3 col-12-medium">
								<?php dynamic_sidebar('footer-4') ?>
							</div>
							<div class="col-12">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; All rights reserved.</li><li>Design & Development: <a href="https://www.itsbrsmedia.com">BRS MEDIA</a></li>
										</ul>
									</div>

							</div>
						</div>
					</div>
				</section>

		</div>

    <?php wp_footer() ?>
	</body>
</html>