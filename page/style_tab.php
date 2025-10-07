<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Tabs','Collection of predefined components to use on your site','Build your custom pages with ease');
?>
			<!-- Tabs -->
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<!-- Navigation -->
				<ul>
					<li><a href="#template-tab-panel-1">First panel</a></li>
					<li><a href="#template-tab-panel-2">Second panel</a></li>
					<li><a href="#template-tab-panel-3">Third panel</a></li>
				</ul>
				<!-- /Navigation -->
				<!-- 1st tab -->
				<div id="template-tab-panel-1">
					Vivamus ac est laoreet ipsum pellentesque dapibus eget at dui. 
					Nullam congue eget enim volutpat condimentum. Aliquam congue justo ac nibh blandit ornare. 
					Ut vulputate venenatis ante id cursus. Sed velit dui, euismod eu mollis vel, eleifend nec dui. 
					Praesent aliquet nec leo ut.					
				</div>
				<!-- /1st tab -->
				<!-- 2nd tab -->
				<div id="template-tab-panel-2">
					Suspendisse mollis venenatis felis, vel interdum purus dapibus eu. 
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
					Ut posuere pretium tellus eu pulvinar. Pellentesque condimentum tellus et lorem iaculis molestie. 
					Integer id feugiat. 					
				</div>
				<!-- /2nd tab -->
				<!-- 3rd tab -->
				<div id="template-tab-panel-3">
					Nulla et aliquam elit. Nam porta erat non est aliquam, in condimentum lacus pharetra. 
					Mauris eget dolor neque. Sed vulputate nulla leo, a dictum lorem placerat non. 
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
					Etiam tincidunt.					
				</div>
				<!-- /3rd tab -->
			</div>
			<!-- /Tabs -->
			<div class="template-space template-space-m20"></div>
			<div class="template-preformatted-text">
				<a href="#">
					<span class="template-preformatted-text-label-open">Hide code</span>
					<span class="template-preformatted-text-label-close">Show code</span>
				</a>
				<pre>
<?php
Template::_html
('
<!-- Content -->
<div class="template-tab template-tab-style-1 template-clear-fix">
	<ul>
		<li><a href="#template-tab-panel-1">First tab</a></li>
		<li><a href="#template-tab-panel-2">Second tab</a></li>
		<li><a href="#template-tab-panel-3">Third tab</a></li>
	</ul>
	<div id="template-tab-panel-1">
		<!-- First tab content -->		
	</div>
	<div id="template-tab-panel-2">
		<!-- Second tab content -->			
	</div>
	<div id="template-tab-panel-3">
		<!-- Third tab content -->		
	</div>
</div>	

<!-- Footer -->
<div class="template-tab template-tab-style-2 template-clear-fix">
	<ul>
		<li><a href="#template-footer-tab-panel-1">First tab</a></li>
		<li><a href="#template-footer-tab-panel-2">Second tab</a></li>
		<li><a href="#template-footer-tab-panel-3">Third tab</a></li>
	</ul>
	<div id="template-footer-tab-panel-1">
		<!-- First tab content -->		
	</div>
	<div id="template-footer-tab-panel-2">
		<!-- Second tab content -->			
	</div>
	<div id="template-footer-tab-panel-3">
		<!-- Third tab content -->		
	</div>
</div>	
');
?>
				</pre>
			</div>

		</div>
<?php
		Template::_footer('footer_style_tab.php');
?>