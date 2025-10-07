<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('Portfolio 3 Columns','Our portfolio features a variety of projects and services','Click the image you want to learn about');
?>
			<!-- Complete description of HTML structure for portfolio is located in file portfolio_layout_1_column.php -->
			
			<!-- Portfolio with filter list -->
			<div class="template-filter">
			
				<!-- Categories -->
				<ul class="template-filter-navigation template-clear-fix">
					<li><a href="#" class="template-selected template-filter-none">Browse all</a></li>
					<li><a href="#" class="template-filter-photography">Photography</a></li>
					<li><a href="#" class="template-filter-illustration">Illustration</a></li>
					<li><a href="#" class="template-filter-print">Print</a></li>
					<li><a href="#" class="template-filter-music">Music</a></li>
					<li><a href="#" class="template-filter-video">Video</a></li>
				</ul>
				<!-- /Categories -->
				
				<!-- Content -->
				<ul class="template-filter-content template-layout-33x33x33 template-reset-list template-clear-fix">

					<li class="template-layout-column-left template-filter-photography">
						<div class="template-image">
							<a href="media/image/_sample/portfolio_960x832_1.jpg" class="template-image-box-top template-image-preloader template-image-preloader-custom" data-fancybox-group="gallery">
								<img src="media/image/_sample/portfolio_660x572_1.jpg" alt=""/>
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

					<li class="template-layout-column-center template-filter-illustration template-filter-video">
						<div class="template-image">
							<a href="media/image/_sample/portfolio_960x832_2.jpg" class="template-image-box-top template-image-preloader template-image-preloader-custom" data-fancybox-group="gallery">
								<img src="media/image/_sample/portfolio_660x572_2.jpg" alt=""/>
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

					<li class="template-layout-column-right template-filter-photography template-filter-video template-filter-music">
						<div class="template-image">
							<a href="media/image/_sample/portfolio_960x832_3.jpg" class="template-image-box-top template-image-preloader template-image-preloader-custom" data-fancybox-group="gallery">
								<img src="media/image/_sample/portfolio_660x572_3.jpg" alt=""/>
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

					<li class="template-layout-column-left template-filter-illustration template-filter-music">
						<div class="template-image">
							<a href="media/image/_sample/portfolio_960x832_4.jpg" class="template-image-box-top template-image-preloader template-image-preloader-custom" data-fancybox-group="gallery">
								<img src="media/image/_sample/portfolio_660x572_4.jpg" alt=""/>
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

					<li class="template-layout-column-center template-filter-print">
						<div class="template-image">
							<a href="media/image/_sample/portfolio_960x832_5.jpg" class="template-image-box-top template-image-preloader template-image-preloader-custom" data-fancybox-group="gallery">
								<img src="media/image/_sample/portfolio_660x572_5.jpg" alt=""/>
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

					<li class="template-layout-column-right template-filter-music">
						<div class="template-image">
							<a href="media/image/_sample/portfolio_960x832_6.jpg" class="template-image-box-top template-image-preloader template-image-preloader-custom" data-fancybox-group="gallery">
								<img src="media/image/_sample/portfolio_660x572_6.jpg" alt=""/>
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

				</ul>
				<!-- /Content -->
				
			</div>
			<!-- /Portfolio with filter list -->
			
		</div>
<?php
		Template::_footer();
?>