<?php
		global $footerFile;
		$Template=new Template();
?>
		<!-- Footer -->
		<div id="template-page-footer" class="template-page-footer">

			<!-- Top footer -->
			<div id="template-page-footer-top" class="template-page-footer-top">
				<?php require_once($footerFile); ?>
			</div>
			<!-- /Top footer -->
			
			<!-- Bottom footer -->
			<div id="template-page-footer-bottom" class="template-page-footer-bottom template-clear-fix"> 
				<div>
					<a href="<?php $Template->_getURL('home'); ?>" class="template-border-reset">
						<img src="media/image/logo_footer.png" alt=""/>
					</a>
					<span>
						&copy; 2014 NODE - Responsive Portfolio Template.<br/>
						<a href="http://themeforest.net/item/node-responsive-portfolio-template/8083493?ref=QuanticaLabs">Click here to buy it</a> By <a href="http://themeforest.net/item/node-responsive-portfolio-template/8083493?ref=QuanticaLabs">QuanticaLabs</a>
					</span>
				</div>
			</div>
			<!-- /Bottom footer -->

		</div>
		<!-- /Footer -->