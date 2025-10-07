<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('Team With Infobar','We use the potential of our experienced and creative experts','Meet the energetic members of our team');
?>
			<!-- Complete description of HTML structure for team is located in file team_layout_2_column.php -->
			
			<ul class="template-layout-25x25x25x25 template-reset-list template-clear-fix template-team-list template-team-list-infobar">
				
				<li class="template-layout-column-left">
					<div class="template-image">
						<a href="media/image/_sample/team_660x572_1.jpg" class="template-image-box-top template-image-preloader" data-fancybox-group="team">
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
					<ul class="template-social-list template-social-list-style-1 template-clear-fix">
						<li><a href="#" class="template-social-list-twitter" title="Twitter"></a></li>
						<li><a href="#" class="template-social-list-vimeo" title="Vimeo"></a></li>
						<li><a href="#" class="template-social-list-xing" title="Xing"></a></li>						
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
					<ul class="template-social-list template-social-list-style-1 template-clear-fix">
						<li><a href="#" class="template-social-list-blogger" title="Blogger"></a></li>
						<li><a href="#" class="template-social-list-deezer" title="Deezer"></a></li>
						<li><a href="#" class="template-social-list-designfloat" title="Designfloat"></a></li>					
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
						<li><a href="#" class="template-social-list-email" title="Email"></a></li>
						<li><a href="#" class="template-social-list-envato" title="Envato"></a></li>
						<li><a href="#" class="template-social-list-facebook" title="Facebook"></a></li>						
					</ul>
				</li>
				
				<li class="template-layout-column-center-left">
					<h2 class="template-team-list-member-name"><a href="<?php $Template->_getURL('team/member'); ?>">A. Powers</a></h2>
					<p>Duis nulla eros commodo sitil amet tellus quis elementumis rhoncus nisi. Maecenas vestib odio pellentesque hendrerit.</p>
					<ul class="template-info-list template-info-list-style-1 template-clear-fix">
						<li>
							<div class="template-info-list-icon template-info-list-icon-phone"></div>
							<div class="template-info-list-content">
								<h6>Business Phone</h6>
								<p>
									+023 35 35 90
								</p>
							</div>
						</li>
						<li>
							<div class="template-info-list-icon template-info-list-icon-mail"></div>
							<div class="template-info-list-content">
								<h6>E-mail Address</h6>
								<p>
									<a href="mailto:l.coon@node.com">a.powers@node.com</a><br/>
								</p>								
							</div>
						</li>						
					</ul>
				</li>
				
				<li class="template-layout-column-center-right">
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
						<li><a href="#" class="template-social-list-friendfeed" title="Friendfeed"></a></li>
						<li><a href="#" class="template-social-list-googleplus" title="Google+"></a></li>
						<li><a href="#" class="template-social-list-instagram" title="Instagram"></a></li>						
					</ul>
				</li>
				
				<li class="template-layout-column-right">
					<h2 class="template-team-list-member-name"><a href="<?php $Template->_getURL('team/member'); ?>">V. Wofford</a></h2>
					<p>Morbi at nunc vel dui dapibusis aliquam sed imperdiet nibh dol pretium sagittis ligula eu ultrici sonec diam lacus imperdiet.</p>
					<ul class="template-info-list template-info-list-style-1 template-clear-fix">
						<li>
							<div class="template-info-list-icon template-info-list-icon-phone"></div>
							<div class="template-info-list-content">
								<h6>Business Phone</h6>
								<p>
									+023 35 35 14
								</p>
							</div>
						</li>
						<li>
							<div class="template-info-list-icon template-info-list-icon-mail"></div>
							<div class="template-info-list-content">
								<h6>E-mail Address</h6>
								<p>
									<a href="mailto:j.montz@node.com">v.wofford@node.com</a><br/>
								</p>								
							</div>
						</li>						
					</ul>
				</li>
				
			</ul>
			
		</div>
<?php
		Template::_footer();
?>