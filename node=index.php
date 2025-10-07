<?php 
		require_once('class/Template.class.php');
		$Template=new Template();
?>
		<!DOCTYPE html>

		<html>

			<head>

				<title><?php echo htmlspecialchars($Template->getTitle()); ?></title>
				<meta name="keywords" content="<?php echo htmlspecialchars($Template->getKeywords()); ?>" />
				<meta name="description" content="<?php echo htmlspecialchars($Template->getDescription()); ?>" />		

				<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

				<link rel="stylesheet" type="text/css" href="style/jquery-ui.css"/>
				<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css"/>
				<link rel="stylesheet" type="text/css" href="style/colpick.css"/>
				<link rel="stylesheet" type="text/css" href="style/jquery.jScrollPane.css"/>
				<link rel="stylesheet" type="text/css" href="style/jquery.nivo.slider.css"/>
				<link rel="stylesheet" type="text/css" href="style/mediaelementplayer.min.css"/>
				<link rel="stylesheet" type="text/css" href="style/supersized/supersized.css"/>
				<link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css"/> 
				<link rel="stylesheet" type="text/css" href="style/fancybox/helpers/jquery.fancybox-buttons.css"/>
				<link rel="stylesheet" type="text/css" href="style/widget.css"/> 
				<link rel="stylesheet" type="text/css" href="style/base.css"/> 

				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Inconsolata" />
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800" />
				
				<link rel="stylesheet" type="text/css" media="screen and (max-height:500px)" href="style/responsive/height-0000-0500.css"/>
				
				<link rel="stylesheet" type="text/css" media="screen and (max-width:1179px)" href="style/responsive/width-0000-1179.css"/>	
				<link rel="stylesheet" type="text/css" media="screen and (max-width:959px)" href="style/responsive/width-0000-0959.css"/>	
				<link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="style/responsive/width-0000-0767.css"/>	
				
				<link rel="stylesheet" type="text/css" media="screen and (min-width:1440px) and (max-width:1679px)" href="style/responsive/width-1440-1679.css"/>
				<link rel="stylesheet" type="text/css" media="screen and (min-width:1180px) and (max-width:1439px)" href="style/responsive/width-1180-1439.css"/>	
				<link rel="stylesheet" type="text/css" media="screen and (min-width:960px) and (max-width:1179px)" href="style/responsive/width-0960-1179.css"/>
				<link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:959px)" href="style/responsive/width-0768-0959.css"/>	
				<link rel="stylesheet" type="text/css" media="screen and (min-width:480px) and (max-width:767px)" href="style/responsive/width-0480-0767.css"/>	
				<link rel="stylesheet" type="text/css" media="screen and (max-width:479px)" href="style/responsive/width-0000-0479.css"/>	

				<link rel="stylesheet" type="text/css" href="style/jquery.colorSwitcher.css"/> 
				
				<link rel="stylesheet" type="text/css" id="cs-color-file" href="style/color.css.php"/> 
				
				<script type="text/javascript" src="script/jquery.min.js"></script>
				<script type="text/javascript" src="script/jquery-migrate.min.js"></script>

			</head>

			<body>
				
				<!-- Main preloader -->
				<div id="template-main-preloader"></div>
				<!-- /Main preloader -->
				
				<!-- Main carousel -->
				<div id="template-main-carousel">

					<ul class="template-main-carousel template-reset-list">

						<!-- 1st slide -->
						<li>

							<div class="template-vertical-center-outer">

								<div class="template-vertical-center-middle">

									<div class="template-vertical-center-inner">

										<div class="template-main-carousel-slide-top-line"></div>
										<h2>Hi. We build<br/>and deliver<br/>for web</h2>
										<div class="template-main-carousel-slide-progress-bar"></div>
										<h4>Feel free to browse our works<span>And yes. We&#039;re awesome</span></h4>
										
									</div>

								</div>

							</div>

						</li>
						<!-- /1st slide -->

						<!-- 2nd slide -->
						<li>

							<div class="template-vertical-center-outer">

								<div class="template-vertical-center-middle">

									<div class="template-vertical-center-inner">

										<div class="template-main-carousel-slide-top-line"></div>
										<h2>Frame your<br/>big ideas<br/>with node</h2>
										<div class="template-main-carousel-slide-progress-bar"></div>
										<h4>We offer affordable solutions<span>With unique competence</span></h4>

									</div>

								</div>

							</div>

						</li>
						<!-- /2nd slide -->
						
						<!-- 3rd slide -->
						<li>

							<div class="template-vertical-center-outer">

								<div class="template-vertical-center-middle">

									<div class="template-vertical-center-inner">

										<div class="template-main-carousel-slide-top-line"></div>
										<h2>Get creative<br/>and out of<br/>the box</h2>
										<div class="template-main-carousel-slide-progress-bar"></div>
										<h4>It&#039;s all about being remarkable<span>Stand out in the crowd</span></h4>

									</div>

								</div>

							</div>

						</li>
						<!-- /3rd slide -->
						
					</ul>

				</div>
				<!-- /Main carousel -->
				
				<!-- Supersized navigation buttons -->
				<div>
					<a href="#" id="template-main-carousel-prev-button"></a>
					<a href="#" id="template-main-carousel-next-button"></a>
				</div>
				<!-- /Supersized navigation buttons -->
				
				<!-- Verical bar with menu + logo -->
				<div id="template-navigation-bar-vertical">

					<!-- Right bar -->
					<div id="template-navigation-bar-vertical-section-right">

						<!-- Menu icon -->
						<a href="#" id="template-navigation-bar-vertical-icon-menu" title="Click to toggle menu"></a>
						<!-- /Menu icon -->
						
						<!-- Logo -->
						<div class="template-vertical-center-outer">
							<div class="template-vertical-center-middle">
								<div class="template-vertical-center-inner">
									<a href="<?php $Template->_getURL('home'); ?>">
										<img src="media/image/logo.png" alt=""/>
									</a>
								</div>
							</div>
						</div>
						<!-- /Logo -->
						
					</div>
					<!-- /Right bar -->
					
					<!-- Left bar -->
					<div id="template-navigation-bar-vertical-section-left">
						
						<div class="template-vertical-center-outer">
							
							<div class="template-vertical-center-middle">
								
								<div class="template-vertical-center-inner">
									
									<!-- Menu -->
									<nav id="template-menu-box">
									
										<ul id="template-menu">
											<li><a href="<?php $Template->_getURL('home'); ?>">Home</a></li>
											<li><a href="<?php $Template->_getURL('about-us-1'); ?>">About Us I</a></li>
											<li><a href="<?php $Template->_getURL('about-us-2'); ?>">About Us II</a></li>
											<li><a href="<?php $Template->_getURL('milestones'); ?>">Milestones</a></li>
											<li><a href="<?php $Template->_getURL('services'); ?>">Services</a></li>
											<li><a href="<?php $Template->_getURL('our-process'); ?>">Our Process</a></li>
											<li>
												<a href="<?php $Template->_getURL(); ?>">Blog</a>
												<ul>
													<li><a href="<?php $Template->_getURL('blog/full-width'); ?>">Blog Full Width</a></li>
													<li><a href="<?php $Template->_getURL('blog/left-sidebar'); ?>">Blog Left Sidebar</a></li>
													<li><a href="<?php $Template->_getURL('blog/right-sidebar'); ?>">Blog Right Sidebar</a></li>
													<li><a href="<?php $Template->_getURL('blog/post-full-width'); ?>">Post Full Width</a></li>
													<li><a href="<?php $Template->_getURL('blog/post-left-sidebar'); ?>">Post Left Sidebar</a></li>
													<li><a href="<?php $Template->_getURL('blog/post-right-sidebar'); ?>">Post Right Sidebar</a></li>
													<li><a href="<?php $Template->_getURL('blog/post-slider'); ?>">Post With Slider</a></li>
													<li><a href="<?php $Template->_getURL('blog/post-multi-image'); ?>">Post With Images</a></li>
													<li><a href="<?php $Template->_getURL('blog/post-quote'); ?>">Post With Quote</a></li>
													<li><a href="<?php $Template->_getURL('blog/post-video'); ?>">Post With Video</a></li>
													<li><a href="<?php $Template->_getURL('blog/post-audio'); ?>">Post With Audio</a></li>
												</ul>
											</li>
											<li>
												<a href="<?php $Template->_getURL(); ?>">Team</a>
												<ul>
													<li><a href="<?php $Template->_getURL('team/our_team'); ?>">Our Team</a></li>
													<li><a href="<?php $Template->_getURL('team/member'); ?>">Member Page</a></li>
													<li><a href="<?php $Template->_getURL('team/layout-infobar'); ?>">Layout Infobar</a></li>
													<li><a href="<?php $Template->_getURL('team/layout-2-columns'); ?>">Layout 2 Columns</a></li>
													<li><a href="<?php $Template->_getURL('team/layout-3-columns'); ?>">Layout 3 Columns</a></li>
													<li><a href="<?php $Template->_getURL('team/layout-4-columns'); ?>">Layout 4 Columns</a></li>
												</ul>										
											</li>
											<li>
												<a href="<?php $Template->_getURL(); ?>">Portfolio</a>
												<ul>
													<li><a href="<?php $Template->_getURL('portfolio/item'); ?>">Item Page</a></li>
													<li><a href="<?php $Template->_getURL('portfolio/layout-1-column'); ?>">Layout 1 Column</a></li>
													<li><a href="<?php $Template->_getURL('portfolio/layout-2-columns'); ?>">Layout 2 Columns</a></li>
													<li><a href="<?php $Template->_getURL('portfolio/layout-3-columns'); ?>">Layout 3 Columns</a></li>
													<li><a href="<?php $Template->_getURL('portfolio/layout-4-columns'); ?>">Layout 4 Columns</a></li>
												</ul>											
											</li>
											<li>
												<a href="<?php $Template->_getURL(); ?>">Styles</a>
												<ul>
													<li><a href="<?php $Template->_getURL('styles/accordion'); ?>">Accordion</a></li>
													<li><a href="<?php $Template->_getURL('styles/audio'); ?>">Audio</a></li>
													<li><a href="<?php $Template->_getURL('styles/blockquote'); ?>">Blockquote</a></li>
													<li><a href="<?php $Template->_getURL('styles/button'); ?>">Button</a></li>
													<li><a href="<?php $Template->_getURL('styles/call-to-action'); ?>">Call To Action</a></li>
													<li><a href="<?php $Template->_getURL('styles/counter-list'); ?>">Counter List</a></li>
													<li><a href="<?php $Template->_getURL('styles/divider'); ?>">Divider</a></li>
													<li><a href="<?php $Template->_getURL('styles/dropcap'); ?>">Dropcap</a></li>
													<li><a href="<?php $Template->_getURL('styles/features'); ?>">Features</a></li>
													<li><a href="<?php $Template->_getURL('styles/google-maps'); ?>">Google Maps</a></li>
													<li><a href="<?php $Template->_getURL('styles/header'); ?>">Header</a></li>
													<li><a href="<?php $Template->_getURL('styles/iframe'); ?>">Iframe</a></li>
													<li><a href="<?php $Template->_getURL('styles/layouts'); ?>">Layouts</a></li>
													<li><a href="<?php $Template->_getURL('styles/list'); ?>">List</a></li>
													<li><a href="<?php $Template->_getURL('styles/nivo-slider'); ?>">Nivo Slider</a></li>
													<li><a href="<?php $Template->_getURL('styles/nivo-slider-box'); ?>">Nivo Slider Box</a></li>
													<li><a href="<?php $Template->_getURL('styles/notice'); ?>">Notice</a></li>
													<li><a href="<?php $Template->_getURL('styles/process-list'); ?>">Process List</a></li>
													<li><a href="<?php $Template->_getURL('styles/resume-list'); ?>">Resume List</a></li>
													<li><a href="<?php $Template->_getURL('styles/skills-list'); ?>">Skills List</a></li>
													<li><a href="<?php $Template->_getURL('styles/social-icons'); ?>">Social Icons</a></li>
													<li><a href="<?php $Template->_getURL('styles/space'); ?>">Space</a></li>
													<li><a href="<?php $Template->_getURL('styles/tabs'); ?>">Tabs</a></li>
													<li><a href="<?php $Template->_getURL('styles/testimonials'); ?>">Testimonials</a></li>
													<li><a href="<?php $Template->_getURL('styles/timeline'); ?>">Timeline</a></li>
													<li><a href="<?php $Template->_getURL('styles/video'); ?>">Video</a></li>
												</ul>
											</li>
											<li><a href="<?php $Template->_getURL('contact'); ?>">Contact</a></li>
										</ul>
										
									</nav>
									<!-- /Menu -->
									
								</div>
								
							</div>
							
						</div>
						
						<!-- Social icons -->
						<ul class="template-social-list template-social-list-style-2 template-reset-list">
							<li>
								<a href="#" class="template-social-list-email"></a>
							</li>
							<li>
								<a href="#" class="template-social-list-twitter"></a>
							</li>
							<li>
								<a href="#" class="template-social-list-facebook"></a>
							</li>
						</ul>
						<!-- /Social icons -->
						
					</div>	
					<!-- /Left bar -->
					
				</div>
				<!-- /Verical bar with menu + logo -->
				
				<!-- Mobile menu -->
				<nav id="template-menu-responsive">
					<div id="template-menu-responsive-logo">
						<a href="<?php $Template->_getURL('home'); ?>">
							<img src="media/image/logo.png" alt=""/>
						</a>
					</div>
				</nav>
				<!-- /Mobile menu -->

				<!-- Page -->
				<div id="template-page-box">
					<div id="template-page"><?php $Template->loadFile(); ?></div>
					<div id="template-page-preloader"></div>
				</div>
				<!-- /Page -->
				
				<!-- Color switcher: can be removed in production version -->
				<div id="cs" class="cs-close">
					<a href="#" id="cs-toggle-button"></a>
					<div id="cs-content" class="cs-clear-fix">
						<ul id="cs-color-list">
							<li><a href="#" class="cs-color-1"></a></li>
							<li><a href="#" class="cs-color-2"></a></li>
							<li><a href="#" class="cs-color-3"></a></li>
							<li><a href="#" class="cs-color-4"></a></li>
							<li><a href="#" class="cs-color-5"></a></li>
							<li><a href="#" class="cs-color-6"></a></li>
							<li><a href="#" class="cs-color-7"></a></li>
							<li><a href="#" class="cs-color-8"></a></li>
							<li><a href="#" class="cs-color-9"></a></li>
							<li><a href="#" class="cs-color-10"></a></li>
						</ul>
						<div class="cs-clear-fix">
							<input type="text" id="cs-color-value" maxlength="7"/>
							<label for="cs-color-value" class="cs-infield">Color in #HEX</label>
						</div>
						<a href="#" id="cs-reset-button">Reset</a>
						<a href="#" id="cs-go-button">Switch</a>
					</div>
				</div>
				<!-- /Color switcher -->
				
				<script type="text/javascript">
					<?php $Template->processConfig(); ?>
				</script>
				
				<script type="text/javascript" src="script/jquery.colorSwitcher.js"></script>
				
				<!-- External jQuery plugins -->
				<script type="text/javascript" src="script/colpick.js"></script>
				<script type="text/javascript" src="script/jquery-ui.min.js"></script>
				<script type="text/javascript" src="script/jquery.easing.js"></script>
				<script type="text/javascript" src="script/jquery.timeago.js"></script>
				<script type="text/javascript" src="script/jquery.blockUI.js"></script>
				<script type="text/javascript" src="script/jquery.qtip.min.js"></script>
				<script type="text/javascript" src="script/jquery.actual.min.js"></script>
				<script type="text/javascript" src="script/jquery.ba-bqq.min.js"></script>
				<script type="text/javascript" src="script/jquery.linkify.min.js"></script>
				<script type="text/javascript" src="script/jquery.jScrollPane.js"></script>
				<script type="text/javascript" src="script/jquery.isotope.min.js"></script>
				<script type="text/javascript" src="script/jquery.scrollTo.min.js"></script>
				<script type="text/javascript" src="script/jquery.waypoints.min.js"></script>
				<script type="text/javascript" src="script/jquery.countdown.min.js"></script>
				<script type="text/javascript" src="script/jquery.mousewheel.min.js"></script>
				<script type="text/javascript" src="script/jquery.supersized.min.js"></script>
				<script type="text/javascript" src="script/jquery.touchSwipe.min.js"></script>
				<script type="text/javascript" src="script/jquery.elastic.source.js"></script>
				<script type="text/javascript" src="script/jquery.infieldlabel.min.js"></script>
				<script type="text/javascript" src="script/jquery.nivo.slider.pack.js"></script>
				<script type="text/javascript" src="script/jquery.carouFredSel.packed.js"></script>
				<script type="text/javascript" src="script/mediaelement-and-player.min.js"></script>
				<script type="text/javascript" src="script/jquery.supersized.shutter.min.js"></script>
				
				<script type="text/javascript" src="script/jquery.fancybox.js"></script>
				<script type="text/javascript" src="script/jquery.fancybox-media.js"></script>
				<script type="text/javascript" src="script/jquery.fancybox-buttons.js"></script>
				<!-- /External jQuery plugins -->
				
				<!-- Template jQuery plugins -->
				<script type="text/javascript" src="script/helper.js"></script>
				<script type="text/javascript" src="script/template.js"></script>
				<script type="text/javascript" src="plugin/contact-form/jquery.contactForm.js"></script>
				
				<script type="text/javascript" src="script/jquery.carousel.js"></script>
				<script type="text/javascript" src="script/jquery.listFilter.js"></script>
				<script type="text/javascript" src="script/jquery.preloaderImage.js"></script>
				<script type="text/javascript" src="script/jquery.dimensionListener.js"></script>
				<script type="text/javascript" src="script/jquery.responsiveElement.js"></script>
				
				<script type="text/javascript" src="script/component/jquery.template.tab.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.notice.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.accordion.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.googleMap.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.skillList.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.nivoSlider.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.testimonial.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.audioPlayer.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.counterList.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.callToAction.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.nivoSliderBox.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.preformattedText.js"></script>
				<script type="text/javascript" src="script/component/jquery.template.twitterUserTimeline.js"></script>
				<!-- /Template jQuery plugins -->
				
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>    

				<script type="text/javascript">

					$(document).ready(function($) 
					{
						$().template(config);
						$('#cs').colorSwitcher();
					});
				
				</script>
				
			</body>

		</html>