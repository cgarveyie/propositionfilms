<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Google Maps','Collection of predefined components to use on your site','Build your custom pages with ease');
?>
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">
					<!-- Google Maps -->
					<div id="google_map_content"></div>
					<!-- /Google Maps -->
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<!-- HTML code -->
<div id="google_map_content"></div>
	
<!-- Javascript code -->
$(\'#google_map_content\').templateGoogleMap(
{
	coordinate		:
	{
		lat		:	\'-37.823952\',
		lng		:	\'144.958766\'
	},
	marker			:	\'media/image/map_marker_default.png\'
});
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
<?php Template::_html
('
<!-- HTML code -->
<div id="google_map_footer"></div>
	
<!-- Javascript code -->
$(\'#google_map_footer\').templateGoogleMap(
{
	coordinate		:
	{
		lat		:	\'-37.823952\',
		lng		:	\'144.958766\'
	},
	marker			:	\'media/image/map_marker_footer.png\'
});
'); 
?>
						</pre>
					</div>					
				</div>
			</div>
		</div>
<?php
		Template::_footer('footer_style_google_map.php');
?>