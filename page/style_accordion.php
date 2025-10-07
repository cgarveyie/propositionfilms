<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Accordion','Collection of predefined components to use on your site','Build your custom pages with ease');
?>
			<!-- Accordion -->
			<div class="template-accordion template-accordion-style-1 template-clear-fix">
				<!-- 1st panel -->
				<h5>First panel<span></span></h5>
				<div class="template-clear-fix">
					<div>
						Vivamus ac est laoreet ipsum pellentesque dapibus eget at dui. 
						Nullam congue eget enim volutpat condimentum. Aliquam congue justo ac nibh blandit ornare. 
						Ut vulputate venenatis ante id cursus. Sed velit dui, euismod eu mollis vel, eleifend nec dui. 
						Praesent aliquet nec leo ut suscipit.
					</div>
				</div>
				<!-- /1st panel -->
				<!-- 2nd panel -->
				<h5>Second panel<span></span></h5>
				<div class="template-clear-fix">
					<div>
						Suspendisse mollis venenatis felis, vel interdum purus dapibus eu. 
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
						Ut posuere pretium tellus eu pulvinar. Pellentesque condimentum tellus et lorem iaculis molestie. 
						Integer id feugiat lectus. 
					</div>
				</div>
				<!-- /2nd panel -->
				<!-- 3rd panel -->
				<h5>Third panel<span></span></h5>
				<div class="template-clear-fix">
					<div>
						Nulla et aliquam elit. Nam porta erat non est aliquam, in condimentum lacus pharetra. 
						Mauris eget dolor neque. Sed vulputate nulla leo, a dictum lorem placerat non. 
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
						Etiam tincidunt bibendum est nec dapibus.
					</div>
				</div>
				<!-- /3rd panel -->
			</div>
			<!-- /Accordion -->
			
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
<div class="template-accordion template-accordion-style-1 template-clear-fix">
	<h5>First panel<span></span></h5>
	<div class="template-clear-fix">
		<div>
			<!-- First panel content -->
		</div>
	</div>
	<h5>Second panel<span></span></h5>
	<div class="template-clear-fix">
		<div>
			<!-- Second panel content -->
		</div>
	</div>
	<h5>Third panel<span></span></h5>
	<div class="template-clear-fix">
		<div>
			<!-- Third panel content -->
		</div>
	</div>
</div>

<!-- Footer -->
<div class="template-accordion template-accordion-style-2 template-clear-fix">
	<h5>First panel<span></span></h5>
	<div class="template-clear-fix">
		<div>
			<!-- First panel content -->
		</div>
	</div>
	<h5>Second panel<span></span></h5>
	<div class="template-clear-fix">
		<div>
			<!-- Second panel content -->
		</div>
	</div>
	<h5>Third panel<span></span></h5>
	<div class="template-clear-fix">
		<div>
			<!-- Third panel content -->
		</div>
	</div>
</div>
');
?>
				</pre>
			</div>

		</div>

<?php
		Template::_footer('footer_style_accordion.php');
?>