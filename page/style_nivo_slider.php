<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Nivo Slider','Our portfolio features a variety of projects and services','Click the image you want to learn about');
?>		
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">
					<!-- Nivo slider -->
					<div class="template-nivo-slider template-nivo-slider-style-1 template-custom-preloader template-clear-fix">
						<!-- Content -->
						<div class="template-nivo-slider-content">
							<!-- Images -->
							<img src="media/image/_sample/portfolio_960x832_1.jpg" alt=""/>
							<img src="media/image/_sample/portfolio_960x832_2.jpg" alt=""/>
							<img src="media/image/_sample/portfolio_960x832_3.jpg" alt=""/>
							<!-- /Images -->
						</div>
						<!-- /Content -->
					</div>
					<!-- /Nivo slider -->
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<div class="template-nivo-slider template-nivo-slider-style-1 template-custom-preloader template-clear-fix">
	<div class="template-nivo-slider-content">
		<img src="media/image/_sample/portfolio_960x832_1.jpg" alt=""/>
		<img src="media/image/_sample/portfolio_960x832_2.jpg" alt=""/>
		<img src="media/image/_sample/portfolio_960x832_3.jpg" alt=""/>
	</div>
</div>
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
<div class="template-nivo-slider template-nivo-slider-style-2 template-custom-preloader template-clear-fix">
	<div class="template-nivo-slider-content">
		<img src="media/image/_sample/portfolio_960x832_1.jpg" alt=""/>
		<img src="media/image/_sample/portfolio_960x832_2.jpg" alt=""/>
		<img src="media/image/_sample/portfolio_960x832_3.jpg" alt=""/>
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
		Template::_footer('footer_style_nivo_slider.php');
?>