<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Iframe','Collection of predefined components to use on your site','Build your custom pages with ease');
?>
			<!-- Iframe -->
			<div class="template-iframe">
				<div class="template-iframe-content">
					<iframe src="http://quanticalabs.com/NostalgiaLanding/Template/"></iframe>
				</div>
			</div>
			<!-- /Iframe -->
	
			<div class="template-preformatted-text">
				<a href="#">
					<span class="template-preformatted-text-label-open">Hide code</span>
					<span class="template-preformatted-text-label-close">Show code</span>
				</a>
				<pre>
<?php Template::_html
('
<div class="template-iframe">
	<div class="template-iframe-content">
		<iframe src="http://quanticalabs.com/NostalgiaLanding/Template/"></iframe>
	</div>
</div>
'); 
?>
				</pre>
			</div>

		</div>
<?php
		Template::_footer();
?>