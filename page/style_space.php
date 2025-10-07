<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Space','We use the potential of our experienced and creative experts','Meet the energetic members of our team');
?>
			<p class="template-top-0">
				Aenean pellentesque tellus nec tincidunt pharetra ipsum diam porttitor ante eget euismod neque massa ut tellus.
				Mauris pharetra libero tempus aliquet pretium neque lorem luctus nunc ut euismod nisi sapien at metus. 
				Ut in semper neque, sit amet convallis nibh proin sedi.
			</p>
			<!-- Space -->
			<div class="template-space template-space-m20"></div>
			<!-- /Space -->
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
<div class="template-space template-space-m20"></div>
<p>Sed gravida leo nec enim [...]</p>
'); 
?>
				</pre>
			</div>
			
		</div>
<?php
		Template::_footer();
?>