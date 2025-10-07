<?php
		/* Include config file for contact form */
		require_once(dirname(__FILE__).'/../plugin/contact-form/config.php');
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Contact','We would love to hear from you so why not drop us an email','We will get back to you as soon as possible');
?>
			<!-- Contact details -->
			<ul class="template-feature-list template-feature-list-style-1 template-feature-list-medium template-clear-fix template-layout-25x25x25x25">
				<!-- Address -->
				<li class="template-layout-column-left">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-address"></span>
							</span>
							<h4>Postal Address</h4>
							<p>
								1003 Stormont Street,<br/>
								Ottawa, K2C, Canada
							</p>
						</div>
					</div>
				</li>
				<!-- /Address -->
				<!-- Phone -->
				<li class="template-layout-column-center-left">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-phone"></span>
							</span>
							<h4>Phone</h4>
							<p>
								+023 35 35 79<br/>
								+023 35 35 89
							</p>
						</div>
					</div>
				</li>
				<!-- /Phone -->
				<!-- E-mail address -->
				<li class="template-layout-column-center-right">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-mail"></span>
							</span>
							<h4>E-mail Address</h4>
							<p>
								<a href="mailto:headquarters@node.com">headquarters@node.com</a><br/>
								<a href="mailto:support@node.com">support@node.com</a>
							</p>
						</div>
					</div>
				</li>
				<!-- /E-mail address -->
				<!-- Business hours -->
				<li class="template-layout-column-right">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-clock"></span>
							</span>
							<h4>Business Hours</h4>
							<p>
								Weekdays: 8.00 - 19.00<br/>
								Saturday: 8.00 - 10.00
							</p>
						</div>
					</div>
				</li>
				<!-- /Business hours -->
			</ul>
			<!-- /Contact details -->
			
			
			<!-- Space -->
			<div class="template-space template-space-20"></div>
			<!-- /Space -->
			
			
			<!-- Layout with right sidebar -->
			<div class="template-page-sidebar template-page-sidebar-right template-clear-fix">
				
				<!-- Left column -->
				<div class="template-page-sidebar-column-left">
					
					<!-- Google Maps -->
					<h4 class="template-header-uppercase template-header-underline">On The Map<span></span></h4>
					<div id="google_map_contact"></div>
					<!-- /Google Maps -->
					
					<!-- Space -->
					<div class="template-space template-space-40"></div>
					<!-- /Space -->
					
					<!-- Contact form -->
					<h4 class="template-header-uppercase template-header-underline">Drop Us A Line<span></span></h4>
					<form name="contact-form" id="contact-form">
						
						<ul class="template-reset-list template-clear-fix">
							
							<li>
								<label for="contact-form-name" class="template-infield"><?php echo CONTACT_FORM_LABEL_DATA_NAME; ?></label>
								<input type="text" name="contact-form-name" id="contact-form-name"/>
							</li>
							<li>
								<label for="contact-form-mail" class="template-infield"><?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?></label>
								<input type="text" name="contact-form-mail" id="contact-form-mail"/>
							</li>
							<li>
								<label for="contact-form-website" class="template-infield"><?php echo CONTACT_FORM_LABEL_DATA_WEBSITE; ?></label>
								<input type="text" name="contact-form-website" id="contact-form-website"/>
							</li>
							<li>
								<label for="contact-form-subject" class="template-infield"><?php echo CONTACT_FORM_LABEL_DATA_SUBJECT; ?></label>
								<input type="text" name="contact-form-subject" id="contact-form-subject"/>
							</li>
							<li>
								<label for="contact-form-message" class="template-infield"><?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?></label>
								<textarea name="contact-form-message" id="contact-form-message"></textarea>
							</li>
							<li>
								<label for="contact-form-submit" class="template-infield"></label>
								<input type="submit" name="contact-form-submit" id="contact-form-submit" value="<?php echo CONTACT_FORM_LABEL_DATA_SUBMIT; ?>"/>
							</li>
							
						</ul>
						
					</form>
					<!-- /Contact form -->
					
				</div>
				<!-- /Left column -->
				
				<!-- Right column -->
				<div class="template-page-sidebar-column-right">
					
					<!-- Department details -->
					<h4 class="template-header-widget">Department<span></span></h4>
					<ul class="template-info-list template-info-list-style-1 template-clear-fix">
						<!-- Address -->
						<li>
							<div class="template-info-list-icon template-info-list-icon-address"></div>
							<div class="template-info-list-content">
								<h6>Postal Address</h6>
								<p>
									1003 Stormont Street,<br/>
									Ottawa, K2C 3P7, Canada
								</p>
							</div>
						</li>
						<!-- /Address -->
						<!-- Phone -->
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
						<!-- /Phone -->
						<!-- E-mail -->
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
						<!-- /E-mail -->
						<!-- Business hours -->
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
						<!-- /Business hours -->
					</ul>
					<!-- /Department details -->
					
					<!-- Social icons -->
					<h4 class="template-header-widget">Connect With Us<span></span></h4>
					<ul class="template-social-list template-social-list-style-1 template-social-list-animation-1 template-clear-fix">
						<li>
							<a href="#" class="template-social-list-facebook">
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-googleplus">
								<span>Google+</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-twitter">
								<span>Twitter</span>
							</a>
						</li>
						<li>
							<a href="#" class="template-social-list-youtube">
								<span>Youtube</span>
							</a>
						</li>
					</ul>
					<!-- /Social icons -->
					
				</div>
				<!-- /Right column -->
				
			</div>
			<!-- /Layout with right sidebar -->
			
		</div>
<?php
		Template::_footer();
?>