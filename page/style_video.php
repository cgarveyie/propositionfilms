<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Video','We use the potential of our experienced and creative experts','Meet the energetic members of our team');
?>
			<div class="template-layout-50x50 template-clear-fix">
				
				<div class="template-layout-column-left">
					
					<!-- Video -->
					<div class="template-video">
						<div class="template-video-content">
							<iframe src="//www.youtube.com/embed/rl9W9UBryKE"></iframe>
						</div>
					</div>
					<!-- /Video -->
					
					<div class="template-preformatted-text template-margin-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-video">
	<div class="template-video-content">
		<iframe src="//www.youtube.com/embed/rl9W9UBryKE"></iframe>
	</div>
</div>
');
?>
						</pre>
					</div>
					
				</div>
				
				<div class="template-layout-column-right">
					
					<div class="template-video">
						<div class="template-video-content">
							<iframe src="//player.vimeo.com/video/60859933"></iframe>
						</div>
					</div>					
					
					<div class="template-preformatted-text template-margin-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-video">
	<div class="template-video-content">
		<iframe src="//player.vimeo.com/video/60859933"></iframe>
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
		Template::_footer();
?>