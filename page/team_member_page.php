<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('Sarah Brennan','Co-Funder and head of human resources of NODE','Responsible for business strategy');
?>
			<!-- Layout with left sidebar -->
			<div class="template-page-sidebar template-page-sidebar-left template-clear-fix">
				
				<!-- Left column -->
				<div class="template-page-sidebar-column-left">
					
					<!-- Image -->
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
							<div class="template-image-box-hover-title">Sarah Brennan</div>
							<div class="template-image-box-hover-subtitle">Landscape contractor</div>
						</div>
						<div class="template-fancybox-description">
							Praesent condimentum rutrum enim ut eleifend ipsum rutrum sed. Praesent vel pulvinar nibh. Suspendisse venenatis hendrerit sem eget pellentesque massa iaculis vel cras vel sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
					<!-- /Image -->
					<!-- Social icons -->
					<ul class="template-social-list template-social-list-style-1 template-clear-fix template-social-list-animation-1 template-margin-top-10">
						<li>
							<a href="#" class="template-social-list-friendfeed">
								<span>Friendfeed</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-googleplus">
								<span>Google+</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-instagram">
								<span>Instagram</span>
							</a>
						</li>						
					</ul>
					<!-- /Social icons -->
					
					<!-- Personal info list -->
					<h4 class="template-header-widget">Personal info<span></span></h4>
					<ul class="template-info-list template-info-list-style-1 template-clear-fix">
						<li>
							<div class="template-info-list-icon template-info-list-icon-address"></div>
							<div class="template-info-list-content">
								<h6>Postal Address</h6>
								<p>
									33 Farlane Street,<br/>
									Victoria 3033, Australia
								</p>
							</div>
						</li>
						<li>
							<div class="template-info-list-icon template-info-list-icon-phone"></div>
							<div class="template-info-list-content">
								<h6>Phone</h6>
								<p>
									+023 35 35 79<br/>
									+023 35 35 80
								</p>
							</div>
						</li>
						<li>
							<div class="template-info-list-icon template-info-list-icon-mail"></div>
							<div class="template-info-list-content">
								<h6>E-mail Address</h6>
								<p>
									<a href="mailto:headquarters@node.com">headquarters@node.com</a><br/>
									<a href="mailto:support@node.com">support@node.com</a>
								</p>								
							</div>
						</li>						
						<li>
							<div class="template-info-list-icon template-info-list-icon-clock"></div>
							<div class="template-info-list-content">
								<h6>Business Hours</h6>
								<p>
									Weekdays: 8.00 - 19.00<br/>
									Saturday: 8.00 - 10.00
								</p>							
							</div>
						</li>						
					</ul>	
					<!-- /Personal info list -->
					
					<!-- Testimonials -->
					<h4 class="template-header-widget template-carousel-style-1">Testimonials<span></span></h4>
					<div class="template-testimonial template-testimonial-style-1 template-carousel template-carousel-style-1 template-carousel-testimonial">
						<ul class="template-testimonial-list template-clear-fix template-layout-100">
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Sed mattis ut neque id!</h6>
									<p>In tincidunt aliquet justo. Curabitur laoreet dolor ac varius malesuadas tortor eros rhoncus urna et place.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Anthony S. Kimball</h6>		
									<p>Movie technician, Total Yard Maintenance</p>	
								</div>
							</li>
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Nam blandit mi sit amet!</h6>
									<p>Duis rhoncus convallis nisi a hende nisi gravida quis. Sed dignissim dol orci a tincidunt nisi feugiat non. </p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Floyd G. Allen</h6>		
									<p>Labor relations manager, Morrie Mages</p>	
								</div>
							</li>
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Sed quis dolor rutrum!</h6>
									<p>Proin ante leo pellentesque vitae al nisi at convallis sodales metus nam at tincidunt lectus vestibulum.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Maria F. Lawson</h6>		
									<p>Signal and track switch repairer, Tianguis</p>	
								</div>
							</li>
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Vivamus ac lorem rhoncus!</h6>
									<p>Quisque sodales euismod lorem at luctus nunc tristique in phasellusil leo nisl vulputate sed dictum quis.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>James N. Carter</h6>		
									<p>Real estate agent, Cloth World</p>	
								</div>
							</li>
						</ul>
					</div>
					<!-- /Testimonials -->
					
				</div>
				<!-- /Left column -->
				
				<!-- Right column -->
				<div class="template-page-sidebar-column-right">
					
					<!-- Excerpt -->
					<h2 class="template-team-member-name">Hi. I&#039;m Sarah</h2>
					<p>
						Integer quis neque viverra accumsan lacus ac gravida eros. 
						Proin tincidunt adipiscing accum cras pulvinar semper pulvinar aliquam convallis neque tellus. 
						Maecenas at metus imperdieti pellentesque ipsum at aliquet dolor. Proin cursus blandit dui ac pharetra. 
						Nunc ipsum tortor fringilla ac nisl vitae, fermentum adipiscing sem.				
					</p>
					<!-- /Excerpt -->
					
					<!-- Skills -->
					<h4 class="template-header-uppercase template-header-underline template-margin-top-20">My Skills<span></span></h4>
					<div class="template-layout-50x50 template-clear-fix">
						<div class="template-layout-column-left">
							<ul class="template-skill-list template-skill-list-style-1">
								<li class="template-skill-list-value-95">Illustrator</li>
								<li class="template-skill-list-value-75">Photoshop</li>
								<li class="template-skill-list-value-40">inDesign</li>
							</ul>
						</div>
						<div class="template-layout-column-right">
							<ul class="template-skill-list template-skill-list-style-1">
								<li class="template-skill-list-value-90">WordPress</li>
								<li class="template-skill-list-value-40">Visual Studio</li>
								<li class="template-skill-list-value-20">Java &amp; Oracle</li>
							</ul>	
						</div>
					</div>
					<!-- /Skills -->
					
					<!-- Resume -->
					<h4 class="template-header-uppercase template-header-underline template-margin-top-20">Experience And Education<span></span></h4>
					<div class="template-tab template-tab-style-1 template-clear-fix">
						<ul>
							<li><a href="#template-team-single-panel-1">Education</a></li>
							<li><a href="#template-team-single-panel-2">Work Experience</a></li>
						</ul>
						<div id="template-team-single-panel-1">
							<ul class="template-resume-list template-resume-list-style-1">
								<li class="template-clear-fix">
									<div class="template-resume-list-number">1</div>
									<div class="template-resume-list-description">
										<div class="template-layout-50x50 template-clear-fix">
											<div class="template-layout-column-left">
												<h5>Education E1</h5>
												<p>August 2005 - June 2006</p>
											</div>
											<div class="template-layout-column-right">
												<h5>Title T1</h5>
												<p>Lorem ipsum dolor sit amet consecil adipiscing elit. Fus diam nunc imper non dignissim quis varius et nibh.</p>
											</div>						
										</div>
									</div>
								</li>
								<li class="template-clear-fix">
									<div class="template-resume-list-number">1</div>
									<div class="template-resume-list-description">
										<div class="template-layout-50x50 template-clear-fix">
											<div class="template-layout-column-left">
												<h5>Education E2</h5>
												<p>March 2004 - June 2005</p>
											</div>
											<div class="template-layout-column-right">
												<h5>Title T2</h5>
												<p>Vivamus bibendum tempus leo mol pretium. Proin mi tortor pretium eu sem non semper ullamcorper nequ.</p>
											</div>						
										</div>
									</div>
								</li>
								<li class="template-clear-fix">
									<div class="template-resume-list-number">2</div>
									<div class="template-resume-list-description">
										<div class="template-layout-50x50 template-clear-fix">
											<div class="template-layout-column-left">
												<h5>Education E3</h5>
												<p>February 2002 - February 2004</p>
											</div>
											<div class="template-layout-column-right">
												<h5>Title T3</h5>
												<p>Ut nisl massa dictum a dapibus noli rutrum quis leo. Sed ino viverra dui fringilla lorem eleifend rutrum.</p>
											</div>						
										</div>
									</div>
								</li>
								<li class="template-clear-fix">
									<div class="template-resume-list-number">2</div>
									<div class="template-resume-list-description">
										<div class="template-layout-50x50 template-clear-fix">
											<div class="template-layout-column-left">
												<h5>Education E4</h5>
												<p>My 2000 - January 2002</p>
											</div>
											<div class="template-layout-column-right">
												<h5>Title T4</h5>
												<p>Nulla ac metus eget ipsum porttitoril tristique tristique a leo. Cras egestas diam leo id ultricies tortor molestie.</p>
											</div>						
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div id="template-team-single-panel-2">
							<ul class="template-resume-list template-resume-list-style-1">
								<li class="template-clear-fix">
									<div class="template-resume-list-number">2</div>
									<div class="template-resume-list-description">
										<div class="template-layout-50x50 template-clear-fix">
											<div class="template-layout-column-left">
												<h5>Company C1</h5>
												<p>August 2012 - June 2014</p>
											</div>
											<div class="template-layout-column-right">
												<h5>Position P1</h5>
												<p>Phasellus porta ligula non euismod malesuada. Quisque ultrices mi elit quis sagittis justo luctus ut in sem.</p>
											</div>						
										</div>
									</div>
								</li>
								<li class="template-clear-fix">
									<div class="template-resume-list-number">2</div>
									<div class="template-resume-list-description">
										<div class="template-layout-50x50 template-clear-fix">
											<div class="template-layout-column-left">
												<h5>Company C2</h5>
												<p>March 2010 - June 2012</p>
											</div>
											<div class="template-layout-column-right">
												<h5>Position P2</h5>
												<p>Vestibulum dignissim volutpat dictis. Nullam porttitor dictum ante at vivel aenean placerat mollis sagittis.</p>
											</div>						
										</div>
									</div>
								</li>
								<li class="template-clear-fix">
									<div class="template-resume-list-number">2</div>
									<div class="template-resume-list-description">
										<div class="template-layout-50x50 template-clear-fix">
											<div class="template-layout-column-left">
												<h5>Company C3</h5>
												<p>February 2008 - February 2010</p>
											</div>
											<div class="template-layout-column-right">
												<h5>Position P3</h5>
												<p>Cras sollicitudin venenatis odio quisi luctus est bibendum vitae. Phasellus libero augue luctus a gravida nec.</p>
											</div>						
										</div>
									</div>
								</li>
								<li class="template-clear-fix">
									<div class="template-resume-list-number">4</div>
									<div class="template-resume-list-description">
										<div class="template-layout-50x50 template-clear-fix">
											<div class="template-layout-column-left">
												<h5>Company C4</h5>
												<p>May 2006 - January 2010</p>
											</div>
											<div class="template-layout-column-right">
												<h5>Position P4</h5>
												<p>Mauris commodo ante eu lacus porta at dictum justo sollicitudin. Aliquamil hendrerit eleifend massa quis.</p>
											</div>						
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /Resume -->
					
				</div>
				<!-- /Right column -->
				
			</div>
			<!-- /Layout with left sidebar -->
			
		</div>
<?php
		Template::_footer();
?>