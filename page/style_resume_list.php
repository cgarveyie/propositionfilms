<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Resume List','We use the potential of our experienced and creative experts','Meet the energetic members of our team');
?>
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">
					<!-- Resume list -->
					<ul class="template-resume-list template-resume-list-style-1">
						<!-- 1st item -->
						<li class="template-clear-fix">
							<!-- Number -->
							<div class="template-resume-list-number">2</div>
							<!-- /Number -->
							<!-- Description -->
							<div class="template-resume-list-description">
								<div class="template-layout-50x50 template-clear-fix">
									<!-- Left column -->
									<div class="template-layout-column-left">
										<!-- Header -->
										<h5>Cloud Computing Co.</h5>
										<!-- /Header -->
										<!-- Description -->
										<p>August 2012 - June 2014</p>
										<!-- /Description -->
									</div>
									<!-- /Left column -->
									<!-- Right column -->
									<div class="template-layout-column-right">
										<!-- Header -->
										<h5>WordPress Developer</h5>
										<!-- /Header -->
										<!-- Description -->
										<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fus diam nunc imperdiet non dignissim quis varius et nibh elis.</p>
										<!-- /Description -->
									</div>	
									<!-- /Right column -->
								</div>
							</div>
							<!-- /Description -->
						</li>
						<!-- 1st item -->
						<!-- 2nd item -->
						<li class="template-clear-fix">
							<div class="template-resume-list-number">2</div>
							<div class="template-resume-list-description">
								<div class="template-layout-50x50 template-clear-fix">
									<div class="template-layout-column-left">
										<h5>H&amp;M Hennes and Mauritz</h5>
										<p>March 2010 - June 2012</p>
									</div>
									<div class="template-layout-column-right">
										<h5>PHP Developer</h5>
										<p>Vivamus bibendum tempus leo molestie pretium. Proin mi tortor pretium eu sem non semper ullamcorper neque.</p>
									</div>						
								</div>
							</div>
						</li>
						<!-- /2nd item -->
						<!-- 3rd item -->
						<li class="template-clear-fix">
							<div class="template-resume-list-number">2</div>
							<div class="template-resume-list-description">
								<div class="template-layout-50x50 template-clear-fix">
									<div class="template-layout-column-left">
										<h5>Brown Company Ltd.</h5>
										<p>February 2008 - February 2010</p>
									</div>
									<div class="template-layout-column-right">
										<h5>Network administartor</h5>
										<p>Ut nisl massa dictum a dapibus non rutrum quis leo. Sed ino viverra dui fringilla lorem eleifend rutrum quisque tincidunt.</p>
									</div>						
								</div>
							</div>
						</li>
						<!-- /3rd item -->
						<!-- 4th item -->
						<li class="template-clear-fix">
							<div class="template-resume-list-number">4</div>
							<div class="template-resume-list-description">
								<div class="template-layout-50x50 template-clear-fix">
									<div class="template-layout-column-left">
										<h5>London College</h5>
										<p>My 2006 - January 2010</p>
									</div>
									<div class="template-layout-column-right">
										<h5>BTEC diploma in Arts</h5>
										<p>Nulla ac metus eget ipsum porttitor tristique tristique a leo. Cras egestas diam leo id ultricies tortor molestie id suspend.</p>
									</div>						
								</div>
							</div>
						</li>
						<!-- /4th item -->
					</ul>
					<!-- /Resume list -->
					<div class="template-space template-space-m30"></div>
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<ul class="template-resume-list template-resume-list-style-1">
	<li class="template-clear-fix">
		<div class="template-resume-list-number">2</div>
		<div class="template-resume-list-description">
			<div class="template-layout-50x50 template-clear-fix">
				<div class="template-layout-column-left">
					<h5>Cloud Computing Co.</h5>
					<p>August 2012 - June 2014</p>
				</div>
				<div class="template-layout-column-right">
					<h5>WordPress Developer</h5>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fus diam nunc imperdiet non dignissim quis varius et nibh elis.</p>
				</div>						
			</div>
		</div>
	</li>
	[...]
</ul>
'); 
?>
						</pre>
					</div>
				</div>
				<div id="template-tab-panel-2">
					<div class="template-preformatted-text template-top-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<ul class="template-resume-list template-resume-list-style-2">
	<li class="template-clear-fix">
		<div class="template-resume-list-number">2</div>
		<div class="template-resume-list-description">
			<div class="template-layout-50x50 template-clear-fix">
				<div class="template-layout-column-left">
					<h5>Cloud Computing Co.</h5>
					<p>August 2012 - June 2014</p>
				</div>
				<div class="template-layout-column-right">
					<h5>WordPress Developer</h5>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Fus diam nunc imperdiet non dignissim quis varius et nibh elis.</p>
				</div>						
			</div>
		</div>
	</li>
	[...]
</ul>
'); 
?>
						</pre>
					</div>					
				</div>
			</div>	
		</div>
<?php
		Template::_footer('footer_style_resume_list.php');
?>