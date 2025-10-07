<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('Our Team','We use the potential of our experienced and creative experts','Meet the energetic members of our team');
?>
			<!-- Team layout 25x25x25x25% -->
			<ul class="template-layout-25x25x25x25 template-reset-list template-clear-fix template-team-list template-team-list-infobar">
				
				<!-- 1st team member -->
				<li class="template-layout-column-left">
					<div class="template-image">
						<a href="media/image/_sample/team_660x572_1.jpg" class="template-image-box-top template-image-preloader">
							<img src="media/image/_sample/team_660x572_1.jpg" alt=""/>
						</a>
						<div class="template-image-box-bottom">
							<div class="template-image-box-bottom-title"><a href="<?php $Template->_getURL('team/member'); ?>">Sarah Brennan</a></div>
							<div class="template-image-box-bottom-subtitle">Landscape contractor</div>
						</div>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL('team/member'); ?>" class="template-image-box-hover-link-more" title="Open details"></a>
							<div class="template-image-box-hover-title"><a href="<?php $Template->_getURL('team/member'); ?>">Sarah Brennan</a></div>
							<div class="template-image-box-hover-subtitle">Landscape contractor</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
					<ul class="template-social-list template-social-list-style-1 template-social-list-animation-1 template-clear-fix">
						<li>
							<a href="#" class="template-social-list-twitter">
								<span>Twitter</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-vimeo">
								<span>Vimeo</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-xing">
								<span>Xing</span>
							</a>
						</li>						
					</ul>
				</li>
				<li class="template-layout-column-center-left">
					<h2 class="template-team-list-member-name"><a href="<?php $Template->_getURL('team/member'); ?>">S. Brennan</a></h2>
					<p>Lorem ipsum dolor sit ametis consectetur adipiscing elitisis nulla ut adipiscing metusases. Integer mollis nunc quis.</p>
					<ul class="template-info-list template-info-list-style-1 template-clear-fix">
						<li>
							<div class="template-info-list-icon template-info-list-icon-phone"></div>
							<div class="template-info-list-content">
								<h6>Business Phone</h6>
								<p>
									+023 35 35 79
								</p>
							</div>
						</li>
						<li>
							<div class="template-info-list-icon template-info-list-icon-mail"></div>
							<div class="template-info-list-content">
								<h6>E-mail Address</h6>
								<p>
									<a href="mailto:s.brennan@node.com">s.brennan@node.com</a><br/>
								</p>								
							</div>
						</li>						
					</ul>					
				</li>
				<!-- /1st team member -->
				
				<!-- 2nd team member -->
				<li class="template-layout-column-center-right">
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
					<ul class="template-social-list template-social-list-style-1 template-social-list-animation-1 template-clear-fix">
						<li>
							<a href="#" class="template-social-list-blogger">
								<span>Blogger</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-deezer">
								<span>Deezer</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-designfloat">
								<span>Designfloat</span>
							</a>
						</li>					
					</ul>
				</li>
				<li class="template-layout-column-right">
					<h2 class="template-team-list-member-name"><a href="<?php $Template->_getURL('team/member'); ?>">C. Gaston</a></h2>
					<p>Duis nulla eros commodo sitis amet tellus quis elementumik rhoncus nisi. Maecenas vestib odio pellentesque hendrerit.</p>
					<ul class="template-info-list template-info-list-style-1 template-clear-fix">
						<li>
							<div class="template-info-list-icon template-info-list-icon-phone"></div>
							<div class="template-info-list-content">
								<h6>Business Phone</h6>
								<p>
									+023 35 35 87
								</p>
							</div>
						</li>
						<li>
							<div class="template-info-list-icon template-info-list-icon-mail"></div>
							<div class="template-info-list-content">
								<h6>E-mail Address</h6>
								<p>
									<a href="mailto:j.vining@node.com">c.gaston@node.com</a><br/>
								</p>								
							</div>
						</li>						
					</ul>
				</li>
				<!-- /2nd team member -->
				
			</ul>
			<!-- /Team layout 25x25x25x25% -->
			
			
			<!-- Space + divider -->
			<div class="template-space template-space-m20"></div> 
			<div class="template-divider template-divider-style-1 template-margin-top-0"></div>
			<!-- /Space + divider -->
			
			
			<!-- Team layout 25x25x25x25% -->
			<h4 class="template-header-uppercase template-header-underline template-margin-top-30">Meet Our Makers<span></span></h4>
			<ul class="template-layout-25x25x25x25 template-reset-list template-clear-fix template-team-list">
				
				<!-- 1st team member -->
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
					<ul class="template-social-list template-social-list-style-1 template-social-list-animation-1 template-clear-fix">
						<li>
							<a href="#" class="template-social-list-twitter">
								<span>Twitter</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-vimeo">
								<span>Vimeo</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-xing">
								<span>Xing</span>
							</a>
						</li>						
					</ul>
				</li>
				<!-- /1st team member -->
				
				<!-- 2nd team member -->
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
					<ul class="template-social-list template-social-list-style-1 template-social-list-animation-1 template-clear-fix">
						<li>
							<a href="#" class="template-social-list-bebo">
								<span>Bebo</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-behance">
								<span>Behance</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-bing">
								<span>Bing</span>
							</a>
						</li>						
					</ul>
				</li>
				<!-- /2nd team member -->
				
				<!-- 3rd team member -->
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
					<ul class="template-social-list template-social-list-style-1 template-social-list-animation-1 template-clear-fix">
						<li>
							<a href="#" class="template-social-list-blogger">
								<span>Blogger</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-deezer">
								<span>Deezer</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-designfloat">
								<span>Designfloat</span>
							</a>
						</li>					
					</ul>
				</li>
				<!-- /3rd team member -->
				
				<!-- 4th team member -->
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
					<ul class="template-social-list template-social-list-style-1 template-social-list-animation-1 template-clear-fix">
						<li>
							<a href="#" class="template-social-list-deviantart">
								<span>Deviantart</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-digg">
								<span>Digg</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-dribbble">
								<span>Dribbble</span>
							</a>
						</li>						
					</ul>
				</li>
				<!-- 4th team member -->
				
			</ul>
			<!-- /Team layout 25x25x25x25% -->
			
			
			<!-- Space + divider -->
			<div class="template-space template-space-m20"></div> 
			<div class="template-divider template-divider-style-1 template-margin-top-0 template-margin-bottom-0"></div>
			<!-- /Space + divider -->
			
			
			<!-- Layout 50x50% -->
			<div class="template-layout-50x50 template-clear-fix template-margin-top-30">

				<!-- Column left -->
				<div class="template-layout-column-left">
					
					<!-- Skills list -->
					<h4 class="template-header-uppercase template-header-underline">Our skills<span></span></h4>
					<ul class="template-skill-list template-skill-list-style-1">
						<li class="template-skill-list-value-95">Flash</li>
						<li class="template-skill-list-value-70">inDesign</li>
						<li class="template-skill-list-value-95">Photoshop</li>
						<li class="template-skill-list-value-95">Ilustrator</li>
						<li class="template-skill-list-value-65">Print Works</li>
					</ul>
					<!-- /Skills list -->
					
				</div>
				<!-- /Column left -->
				
				<!-- Column right -->
				<div class="template-layout-column-right">
					
					<!-- Accordion -->
					<h4 class="template-header-uppercase template-header-underline">Why Choose Us<span></span></h4>
					<div class="template-accordion template-accordion-style-1 template-clear-fix">
						<h5>First panel<span></span></h5>
						<div class="template-clear-fix">
							<div>
								Vivamus ac est laoreet ipsum pellentesque dapibus eget atiss dui. Nullam congue eget enim volutpat 
								condimentum. Aliqua congue justo ac nibh blandit ornare.
							</div>
						</div>
						<h5>Second panel<span></span></h5>
						<div class="template-clear-fix">
							<div>
								Suspendisse mollis venenatis felis vel interdum purus dapibus eu. Pellentesque habitant morbi tristique 
								enectus et netus et malesuada fames ac turpis egestas.
							</div>
						</div>
						<h5>Third panel<span></span></h5>
						<div class="template-clear-fix">
							<div>
								Nulla et aliquam elit. Nam porta erat non est aliquam in setr condimentum lacus pharetra. 
								Mauris eget dolor neque. Sed vulputate nulla leo, a dictum lorem placerat non.
							</div>
						</div>
					</div>	
					<!-- /Accordion -->
					
				</div>
				<!-- /Column right -->
				
			</div>
			<!-- /Layout 50x50% -->
			
		</div>
<?php
		Template::_footer();
?>