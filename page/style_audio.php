<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Audio','Collection of predefined components to use on your site','Build your custom pages with ease');
?>
			<!-- Audio -->
			<audio controls="control" preload="none" src="media/audio/Kondor-Love-Your-Life-Outro.mp3" type="audio/mp3"></audio>
			<!-- /Audio -->
			<div class="template-preformatted-text">
				<a href="#">
					<span class="template-preformatted-text-label-open">Hide code</span>
					<span class="template-preformatted-text-label-close">Show code</span>
				</a>
				<pre>
<?php Template::_html
('
<!-- HTML code -->
<audio controls="control" preload="none" src="media/audio/Kondor-Love-Your-Life-Outro.mp3" type="audio/mp3"></audio>	

<-- Javascript code -->
$(\'audio\').templateAudioPlayer(
{
	audioWidth	:	\'100%\'
});
'); 
?>
				</pre>
			</div>				
			
		</div>
<?php
		Template::_footer();
?>