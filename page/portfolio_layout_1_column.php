<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('Portfolio 1 Column','Our portfolio features a variety of projects and services','Click the image you want to learn about');
?>
			<!-- Portfolio list -->
			<ul class="template-layout-100 template-reset-list template-clear-fix template-portfolio-list">
				
				<!-- 1st item -->
				<li class="template-layout-column-left">
					<!-- Image box -->
					<div class="template-image">
						<!-- Link + image -->
						<a href="media/image/_sample/portfolio_960x832_1.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="gallery">
							<img src="media/image/_sample/portfolio_960x832_1.jpg" alt=""/>
						</a>
						<!-- /Link + image -->
						<!-- Bottom section with header and subheader -->
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('portfolio/item'); ?>">Buckeye Furniture</a></div>
							<div class="template-image-box-bottom-subtitle">Website Design &amp; Development</div>
						</div>
						<!-- /Bottom section with header and subheader -->
						<!-- Hover box -->
						<div class="template-image-box-hover template-vertical-center">
							<!-- Open image button -->
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<!-- /Open image button -->
							<!-- Open details button -->
							<a href="<?php $Template->_getURL('portfolio/item'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<!-- /Open details button -->
							<!-- Title -->
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('portfolio/item'); ?>">Buckeye Furniture</a></div>
							<!-- /Title -->
							<!-- Subtitle -->
							<div class="template-image-box-hover-subtitle">Website Design &amp; Development</div>
							<!-- /Subtitle -->
						</div>
						<!-- /Hover box -->
						<!-- Description displayed in fancybox popup -->
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
						<!-- /Description displayed in fancybox popup -->
					</div>
					<!-- Image box -->
				</li>
				<!-- /1st item -->
				
				<!-- 2nd item -->
				<li class="template-layout-column-left">
					<div class="template-image">
						<a href="media/image/_sample/portfolio_960x832_2.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="gallery">
							<img src="media/image/_sample/portfolio_960x832_2.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('portfolio/item'); ?>">Buckeye Furniture</a></div>
							<div class="template-image-box-bottom-subtitle">Website Design &amp; Development</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('portfolio/item'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('portfolio/item'); ?>">Buckeye Furniture</a></div>
							<div class="template-image-box-hover-subtitle">Website Design &amp; Development</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
				</li>
				<!-- /2nd item -->
				
				<!-- 3rd item -->
				<li class="template-layout-column-left">
					<div class="template-image">
						<a href="media/image/_sample/portfolio_960x832_3.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="gallery">
							<img src="media/image/_sample/portfolio_960x832_3.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('portfolio/item'); ?>">Buckeye Furniture</a></div>
							<div class="template-image-box-bottom-subtitle">Website Design &amp; Development</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('portfolio/item'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('portfolio/item'); ?>">Buckeye Furniture</a></div>
							<div class="template-image-box-hover-subtitle">Website Design &amp; Development</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
				</li>
				<!-- /3rd item -->
				
				<!-- 4th item -->
				<li class="template-layout-column-left">
					<div class="template-image">
						<a href="media/image/_sample/portfolio_960x832_4.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="gallery">
							<img src="media/image/_sample/portfolio_960x832_4.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('portfolio/item'); ?>">Buckeye Furniture</a></div>
							<div class="template-image-box-bottom-subtitle">Website Design &amp; Development</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('portfolio/item'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('portfolio/item'); ?>">Buckeye Furniture</a></div>
							<div class="template-image-box-hover-subtitle">Website Design &amp; Development</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
				</li>
				<!-- /4th item -->
				
			</ul>
			<!-- /Portfolio list -->
			
		</div>
<?php
		Template::_footer();
?>