<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Blockquote','Collection of predefined components to use on your site','Build your custom pages with ease');
?>
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">
					<!-- Blockquote -->
					<blockquote class="template-blockquote template-blockquote-style-1">
						Phasellus non vehicula velit vel pulvinar odio. Suspendisse ultrices erat et aliquam convallis nulla dolor ornare lorem eu sollicitudin turpis diam et nulla. Sed tortor nisl auctor et nulla eu ornare consectetur diam. Donec lacinia risus imperdiet pulvinar ante quis varius elit. Sed at dui dignissimil placerat ante nec. In hac habitasse platea dictumst suspendisse quis consequat tortor fusce id pulvinar enim.
					</blockquote>
					<!-- /Blockquote -->
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<blockquote class="template-blockquote template-blockquote-style-1">
	Phasellus non vehicula velit [...]
</blockquote>
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
<blockquote class="template-blockquote template-blockquote-style-2">
	Phasellus non vehicula velit [...]
</blockquote>
');
?>
						</pre>
					</div>					
				</div>
			</div>
		</div>
<?php
		Template::_footer('footer_style_blockquote.php');
?>