<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('About Us','Welcome to NODE a web design company with real experience','We are passionate about design and people');
?>
			<!-- Features list -->	
			<ul class="template-feature-list template-feature-list-style-1 template-feature-list-large template-clear-fix template-layout-33x33x33">
				<li class="template-layout-column-left">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-large template-icon-laptop"></span>
							</span>
							<h3><span>Phasellus sit</span> amet tristique tortor</h3>
							<p>Donec posuere erat vel diam tincili porta. Nulla in venenatis magnara. Praesent aliquam lectus sit amet.</p>
							<a href="#">Learn more</a>
						</div>
					</div>
				</li>
				<li class="template-layout-column-center">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-large template-icon-shield"></span>
							</span>
							<h3><span>Etiam sem</span> tortor scelerisque</h3>
							<p>Vivamus interdum massa non ligis dignissim dictum. Vivamus ornare odio at libero imperdiet scelerisq.</p>
							<a href="#">Learn more</a>
						</div>
					</div>
				</li>
				<li class="template-layout-column-right">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-large template-icon-calendar"></span>
							</span>
							<h3><span>Nunc auctor</span> at dui sed vulputate</h3>
							<p>Donec posuere risus vel quam ali convallis varius posuere metusas vehicula quisque adipiscing sit.</p>
							<a href="#">Learn more</a>
						</div>
					</div>
				</li>
			</ul>
			<!-- /Features list -->	
			
			<!-- Space -->
			<div class="template-space template-space-20"></div>
			<!-- /Space -->
			
			<!-- Counter list -->
			<div class="template-full-width-section template-background-color-2 template-padding-top-40">
				<div>
					<ul class="template-counter-list template-counter-list-type-percentage template-counter-list-style-3 template-layout-25x25x25x25 template-clear-fix">
						<li class="template-counter-list-value-45 template-layout-column-left">Projects in 2010</li>
						<li class="template-counter-list-value-67 template-layout-column-center-left">Projects in 2011</li>
						<li class="template-counter-list-value-54 template-layout-column-center-right">Projects in 2012</li>
						<li class="template-counter-list-value-77 template-layout-column-right">Projects in 2013</li>
					</ul>
				</div>
			</div>
			<!-- /Counter list -->
			
			<!-- Header + subheader -->
			<div class="template-header-subheader template-clear-fix template-margin-bottom-50 template-margin-top-50">
				<h2>Our Team</h2>
				<h5>Maecenas sodales in ligula ac blandit nullam ac dui sapien</h5>
				<span></span>
			</div>
			<!-- /Header + subheader -->
			
			<!-- Team list -->
			<ul class="template-layout-25x25x25x25 template-reset-list template-clear-fix template-team-list">
				<li class="template-layout-column-left">
					<div class="template-image">
						<a href="media/image/_sample/team_660x572_5.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="team">
							<img src="media/image/_sample/team_660x572_5.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('team/member'); ?>">Patricia Carl</a></div>
							<div class="template-image-box-bottom-subtitle">Training manager</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('team/member'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('team/member'); ?>">Patricia Carl</a></div>
							<div class="template-image-box-hover-subtitle">Training manager</div>
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
				<li class="template-layout-column-center-left">
					<div class="template-image">
						<a href="media/image/_sample/team_660x572_6.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="team">
							<img src="media/image/_sample/team_660x572_6.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('team/member'); ?>">Regina Jones</a></div>
							<div class="template-image-box-bottom-subtitle">Flight engineer</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('team/member'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('team/member'); ?>">Regina Jones</a></div>
							<div class="template-image-box-hover-subtitle">Flight engineer</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
					<ul class="template-social-list template-social-list-style-1 template-clear-fix">
						<li><a href="#" class="template-social-list-flickr" title="Flickr"></a></li>
						<li><a href="#" class="template-social-list-forrst" title="Forrst"></a></li>
						<li><a href="#" class="template-social-list-foursquare" title="Foursquare"></a></li>						
					</ul>
				</li>
				<li class="template-layout-column-center-right">
					<div class="template-image">
						<a href="media/image/_sample/team_660x572_7.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="team">
							<img src="media/image/_sample/team_660x572_7.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('team/member'); ?>">Kristy Bryan</a></div>
							<div class="template-image-box-bottom-subtitle">Cab driver</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('team/member'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('team/member'); ?>">Kristy Bryan</a></div>
							<div class="template-image-box-hover-subtitle">Cab driver</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
					<ul class="template-social-list template-social-list-style-1 template-clear-fix">
						<li><a href="#" class="template-social-list-friendfeed" title="Friendfeed"></a></li>
						<li><a href="#" class="template-social-list-googleplus" title="Google+"></a></li>
						<li><a href="#" class="template-social-list-instagram" title="Instagram"></a></li>						
					</ul>
				</li>
				<li class="template-layout-column-right">
					<div class="template-image">
						<a href="media/image/_sample/team_660x572_8.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="team">
							<img src="media/image/_sample/team_660x572_8.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('team/member'); ?>">Zina Lucas</a></div>
							<div class="template-image-box-bottom-subtitle">Market manager</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('team/member'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('team/member'); ?>">Zina Lucas</a></div>
							<div class="template-image-box-hover-subtitle">Market manager</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
					<ul class="template-social-list template-social-list-style-1 template-clear-fix">
						<li><a href="#" class="template-social-list-linkedin" title="Linkedin"></a></li>
						<li><a href="#" class="template-social-list-myspace" title="Myspace"></a></li>
						<li><a href="#" class="template-social-list-picasa" title="Picasa"></a></li>						
					</ul>
				</li>
			</ul>
			<!-- /Team list -->
			
			<!-- Space -->
			<div class="template-space template-space-20"></div>
			<!-- /Space -->
			
			<!-- Call To Action -->
			<div class="template-full-width-section template-clear-fix template-background-color-1">
				<div>
					<div class="template-call-to-action template-call-to-action-style-3 template-clear-fix">
						<div class="template-call-to-action-content template-clear-fix">
							<h3><span>Etiam</span> malesuada lectus</h3>
							<h6>Sed scelerisque accumsan dui eu congue dolor vestibulum et sed sit amet sapien bibendum.</h6>
							<a href="#" class="template-button template-button-style-2 template-button-size-large">Buy template</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Call To Action -->
			
			<!-- Header + subheader -->
			<div class="template-header-subheader template-clear-fix template-margin-bottom-50 template-margin-top-50">
				<h2>Our Services</h2>
				<h5>Donec commodo tellus sit amet hendrerit vestibulum</h5>
				<span></span>
			</div>
			<!-- /Header + subheader -->
			
			<!-- Feature list -->
			<ul class="template-feature-list template-feature-list-style-1 template-feature-list-small template-clear-fix template-layout-33x33x33 template-margin-bottom-20">
				<li class="template-layout-column-left">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-list"></span>
							</span>
							<h5>Morbi consectetur justo</h5>
							<p>Cras urna lacus fringilla non congue ut fermentum at nunc.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-center">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-plus"></span>
							</span>
							<h5> Sed a nulla volutpat</h5>
							<p>Curabitur eu eros vel nisl conil pellentesque quis nec erat lor.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-right">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-wall"></span>
							</span>
							<h5>Maecenas turpis enim</h5>
							<p>Praesent vehicula magna ac bibendum pulvinar maurisi.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-left">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-wallet"></span>
							</span>
							<h5>Nullam facilisis facilisis</h5>
							<p>Vivamus elementum lorem util iaculis pharetra risus eros era.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-center">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-database"></span>
							</span>
							<h5>Cum sociis natoque penat</h5>
							<p>Cras lacus sapien aliquet sitis amet velit id facilisis tincidun.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-right">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-document"></span>
							</span>
							<h5>Vivamus ullamcorper mi</h5>
							<p>Quisque et nisl mattis sceleris mauris a tincidunt arcu erat.</p>
						</div>
					</div>
				</li>
			</ul>
			<!-- /Feature list -->

		</div>
<?php
		Template::_footer();
?>