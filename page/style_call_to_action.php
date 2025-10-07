<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Call To Action','Collection of predefined components to use on your site','Build your custom pages with ease');
?>
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">
					<!-- Call to action -->
					<div class="template-call-to-action template-call-to-action-style-1 template-clear-fix">
						<!-- Content -->
						<div class="template-call-to-action-content template-clear-fix">
							<!-- Header -->
							<h3>Etiam malesuada lectus</h3>
							<!-- /Header -->
							<!-- Subheader -->
							<h6>Sed scelerisque accumsan dui eu congue dolor vestibulum et sed sit amet sapien bibendum.</h6>
							<!-- /Subheader -->
							<!-- Button -->
							<a href="#" class="template-button template-button-style-2 template-button-size-large">Buy template</a>
							<!-- /Button -->
						</div>
						<!-- /Content -->
					</div>
					<!-- /Call to action -->
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-call-to-action template-call-to-action-style-1 template-clear-fix">
	<div class="template-call-to-action-content template-clear-fix">
		<h3>Etiam malesuada lectus</h3>
		<h6>Sed scelerisque accumsan dui eu congue dolor [...]</h6>
		<a href="#" class="template-button template-button-style-2 template-button-size-large">Buy template</a>
	</div>
</div>
');
?>
						</pre>
					</div>
		
					<div class="template-full-width-section template-background-color-1">
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
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-full-width-section template-background-color-1">
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
');
?>
						</pre>
					</div>
				</div>
				<div id="template-tab-panel-2">
					<div class="template-preformatted-text template-margin-top-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-call-to-action template-call-to-action-style-2 template-clear-fix">
	<div class="template-call-to-action-content template-clear-fix">
		<h3>Etiam malesuada lectus</h3>
		<h6>Sed scelerisque accumsan dui eu congue dolor [...]</h6>
		<a href="#" class="template-button template-button-style-2 template-button-size-large">Buy template</a>
	</div>
</div>
');
?>
						</pre>
					</div>					
				</div>
			</div>
		</div>
<?php
		Template::_footer('footer_style_call_to_action.php');
?>