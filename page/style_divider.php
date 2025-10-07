<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Divider','We use the potential of our experienced and creative experts','Meet the energetic members of our team');
?>
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">			
					<p class="template-top-0">
						Aenean pellentesque tellus nec tincidunt pharetra ipsum diam porttitor ante eget euismod neque massa ut tellus.
						Mauris pharetra libero tempus aliquet pretium neque lorem luctus nunc ut euismod nisi sapien at metus. 
						Ut in semper neque, sit amet convallis nibh proin sedi.
					</p>
					<!-- Divider -->
					<div class="template-divider template-divider-style-1"></div>
					<!-- /Divider -->
					<p>
						Sed gravida leo nec enim fermentum tristique. Proin vitae sem malesuada tincidunt lectus ut gravida ligula.
						Morbi condimentum porttitor enim quis laoreet quam pharetra eget. Morbi convallis quam ligula non molestie orci semper id.
						Sed malesuada mauris ac consequat lect.
					</p>
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<p class="template-top-0">Aenean pellentesque tellus [...]</p>
<div class="template-divider template-divider-style-1"></div>
<p>Sed gravida leo nec enim [...]</p>
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
<p class="template-top-0">Aenean pellentesque tellus [...]</p>
<div class="template-divider template-divider-style-2"></div>
<p>Sed gravida leo nec enim [...]</p>
'); 
?>
						</pre>
					</div>					
				</div>
			</div>
		</div>
<?php
		Template::_footer('footer_style_divider.php');
?>