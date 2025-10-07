<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Button','Collection of predefined components to use on your site','Build your custom pages with ease');
?>
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">
					<!-- Buttons -->
					<a href="#" class="template-button template-button-style-1 template-button-size-medium">Style 1</a>
					<a href="#" class="template-button template-button-style-2 template-button-size-medium">Style 2</a>
					<a href="#" class="template-button template-button-style-3 template-button-size-medium">Style 3</a>
					<a href="#" class="template-button template-button-style-4 template-button-size-medium">Style 4</a>	
					<a href="#" class="template-button template-button-style-1 template-button-size-large">Size Large</a>
					<a href="#" class="template-button template-button-style-1 template-button-size-medium">Size Medium</a>
					<a href="#" class="template-button template-button-style-1 template-button-size-small">Size Small</a>
					<a href="#" class="template-button template-button-style-1 template-button-size-tiny">Size Tiny</a>	
					<!-- /Buttons -->
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<a href="#" class="template-button template-button-style-1 template-button-size-large">Large</a>
<a href="#" class="template-button template-button-style-1 template-button-size-medium">Medium</a>
<a href="#" class="template-button template-button-style-1 template-button-size-small">Small</a>
<a href="#" class="template-button template-button-style-1 template-button-size-tiny">Tiny</a>

<a href="#" class="template-button template-button-style-1 template-button-size-medium">Style 1</a>
<a href="#" class="template-button template-button-style-2 template-button-size-medium">Style 2</a>
<a href="#" class="template-button template-button-style-3 template-button-size-medium">Style 3</a>
<a href="#" class="template-button template-button-style-4 template-button-size-medium">Style 4</a>
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
<?php
Template::_html
('
<a href="#" class="template-button template-button-style-5 template-button-size-medium">Style 5</a>
<a href="#" class="template-button template-button-style-6 template-button-size-medium">Style 6</a>
<a href="#" class="template-button template-button-style-7 template-button-size-medium">Style 7</a>
<a href="#" class="template-button template-button-style-8 template-button-size-medium">Style 8</a>

<a href="#" class="template-button template-button-style-6 template-button-size-large">Size Large</a>
<a href="#" class="template-button template-button-style-6 template-button-size-medium">Size Medium</a>
<a href="#" class="template-button template-button-style-6 template-button-size-small">Size Small</a>
<a href="#" class="template-button template-button-style-6 template-button-size-tiny">Size Tiny</a>
');
?>
						</pre>
					</div>					
				</div>
			</div>			
		</div>
<?php
		Template::_footer('footer_style_button.php');
?>