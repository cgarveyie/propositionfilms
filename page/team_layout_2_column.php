<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('Team 2 Columns','We use the potential of our experienced and creative experts','Meet the energetic members of our team');
?>
			<!-- Team -->
			<ul class="template-layout-50x50 template-reset-list template-clear-fix template-team-list">
				
				<!-- 1st item -->
				<li class="template-layout-column-left">
					<!-- Image box -->
					<div class="template-image">
						<!-- Link + image -->
						<a href="media/image/_sample/team_660x572_1.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="team">
							<img src="media/image/_sample/team_660x572_1.jpg" alt=""/>
						</a>
						<!-- /Link + image -->
						<!-- Bottom section with header and subheader -->
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('team/member'); ?>">Sarah Brennan</a></div>
							<div class="template-image-box-bottom-subtitle">Landscape contractor</div>
						</div>
						<!-- /Bottom section with header and subheader -->
						<!-- Hover section -->
						<div class="template-image-box-hover template-vertical-center">
							<!-- Open image button -->
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<!-- /Open image button -->
							<!-- Open details button -->
							<a href="<?php $Template->_getURL('team/member'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<!-- /Open details button -->
							<!-- Title -->
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('team/member'); ?>">Sarah Brennan</a></div>
							<!-- /Title -->
							<!-- Subtitle -->
							<div class="template-image-box-hover-subtitle">Landscape contractor</div>
							<!-- /Subtitle -->
						</div>
						<!-- /Hover section -->
						<!-- Description displayed in fancybox popup -->
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
						<!-- /Description displayed in fancybox popup -->
					</div>
					<!-- /Image box -->
					<!-- Social icons -->
					<ul class="template-social-list template-social-list-style-1 template-clear-fix">
						<li><a href="#" class="template-social-list-bebo" title="Bebo"></a></li>
						<li><a href="#" class="template-social-list-behance" title="Behance"></a></li>
						<li><a href="#" class="template-social-list-bing" title="Bing"></a></li>
					</ul>
					<!-- /Social icons -->
				</li>
				<!-- /1st item -->
				
				<!-- 2nd item -->
				<li class="template-layout-column-right">
					<div class="template-image">
						<a href="media/image/_sample/team_660x572_2.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="team">
							<img src="media/image/_sample/team_660x572_2.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('team/member'); ?>">Cherie Gaston</a></div>
							<div class="template-image-box-bottom-subtitle">Construction engineer</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('team/member'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('team/member'); ?>">Cherie Gaston</a></div>
							<div class="template-image-box-hover-subtitle">Construction engineer</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
					<ul class="template-social-list template-social-list-style-1 template-clear-fix">
						<li><a href="#" class="template-social-list-blogger" title="Blogger"></a></li>
						<li><a href="#" class="template-social-list-deezer" title="Deezer"></a></li>
						<li><a href="#" class="template-social-list-designfloat" title="Designfloat"></a></li>						
					</ul>
				</li>
				<!-- /2nd item -->
				
				<!-- 3rd item -->
				<li class="template-layout-column-left">
					<div class="template-image">
						<a href="media/image/_sample/team_660x572_3.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="team">
							<img src="media/image/_sample/team_660x572_3.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('team/member'); ?>">Adam Powers</a></div>
							<div class="template-image-box-bottom-subtitle">Appliance repairer</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('team/member'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('team/member'); ?>">Adam Powers</a></div>
							<div class="template-image-box-hover-subtitle">Appliance repairer</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
					<ul class="template-social-list template-social-list-style-1 template-clear-fix">
						<li><a href="#" class="template-social-list-deviantart" title="Deviantart"></a></li>
						<li><a href="#" class="template-social-list-digg" title="Digg"></a></li>
						<li><a href="#" class="template-social-list-dribbble" title="Dribbble"></a></li>						
					</ul>
				</li>
				<!-- /3rd item -->
				
				<!-- 4th item -->
				<li class="template-layout-column-right">
					<div class="template-image">
						<a href="media/image/_sample/team_660x572_4.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="team">
							<img src="media/image/_sample/team_660x572_4.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('team/member'); ?>">Victoria Wofford</a></div>
							<div class="template-image-box-bottom-subtitle">Credit counselor</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('team/member'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('team/member'); ?>">Victoria Wofford</a></div>
							<div class="template-image-box-hover-subtitle">Credit counselor</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
					<ul class="template-social-list template-social-list-style-1 template-clear-fix">
						<li><a href="#" class="template-social-list-email" title="Email"></a></li>
						<li><a href="#" class="template-social-list-envato" title="Envato"></a></li>
						<li><a href="#" class="template-social-list-facebook" title="Facebook"></a></li>						
					</ul>
				</li>
				<!-- /4th item -->
				
			</ul>
			<!-- /Team -->
			
		</div>
<?php
		Template::_footer();
?>