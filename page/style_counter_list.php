<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Counter List','Our portfolio features a variety of projects and services','Click the image you want to learn about');
?>		
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">	
					<!-- Counter list -->
					<ul class="template-counter-list template-counter-list-style-1 template-layout-25x25x25x25 template-clear-fix">
						<!-- 1st item -->
						<li class="template-counter-list-value-825 template-layout-column-left">Product Sales</li>
						<!-- /1st item -->
						<!-- 2nd item -->
						<li class="template-counter-list-value-15 template-layout-column-center-left">Years Experience</li>
						<!-- /2nd item -->
						<!-- 3rd item -->
						<li class="template-counter-list-value-125 template-layout-column-center-right">Posters Published</li>
						<!-- /3rd item -->
						<!-- 4th item -->
						<li class="template-counter-list-value-608 template-layout-column-right">Project Completed</li>
						<!-- /4th item -->
					</ul>
					<!-- /Counter list -->
					<div class="template-preformatted-text template-top-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<!-- HTML code -->
<ul class="template-counter-list template-counter-list-style-1 template-layout-25x25x25x25 template-clear-fix">
	<li class="template-counter-list-value-825 template-layout-column-left">Product Sales</li>
	<li class="template-counter-list-value-15 template-layout-column-center-left">Years Experience</li>
	<li class="template-counter-list-value-125 template-layout-column-center-right">Posters Published</li>
	<li class="template-counter-list-value-608 template-layout-column-right">Project Completed</li>
</ul>

<!-- Javascript code -->
$(\'.template-counter-list\').templateCounterList();
');
?>
						</pre>
					</div>
					
					<div class="template-full-width-section template-background-color-2 template-padding-top-40">
						<div>
							<ul class="template-counter-list template-counter-list-type-percentage template-counter-list-style-3 template-layout-25x25x25x25 template-clear-fix">
								<!-- 1st item -->
								<li class="template-counter-list-value-45 template-layout-column-left">Projects in 2010</li>
								<!-- /1st item -->
								<!-- 2nd item -->
								<li class="template-counter-list-value-67 template-layout-column-center-left">Projects in 2011</li>
								<!-- /2nd item -->
								<!-- 3rd item -->
								<li class="template-counter-list-value-54 template-layout-column-center-right">Projects in 2012</li>
								<!-- /3rd item -->
								<!-- 4th item -->
								<li class="template-counter-list-value-77 template-layout-column-right">Projects in 2013</li>
								<!-- /4th item -->
							</ul>
						</div>
					</div>
					<div class="template-preformatted-text template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<!-- HTML code -->
<div class="template-full-width-section template-background-color-2 template-padding-top-40">
	<div>
		<ul class="template-counter-list template-counter-list-with-timeline template-counter-list-style-3 template-layout-25x25x25x25 template-clear-fix">
			<li class="template-counter-list-value-825 template-layout-column-left">Product Sales</li>
			<li class="template-counter-list-value-15 template-layout-column-center-left">Years Experience</li>
			<li class="template-counter-list-value-125 template-layout-column-center-right">Posters Published</li>
			<li class="template-counter-list-value-608 template-layout-column-right">Project Completed</li>
		</ul>
	</div>
</div>

<!-- Javascript code -->
$(\'.template-counter-list\').templateCounterList();
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
<!-- HTML code -->
<ul class="template-counter-list template-counter-list-style-2 template-layout-25x25x25x25 template-clear-fix">
	<li class="template-counter-list-value-825 template-layout-column-left">Product Sales</li>
	<li class="template-counter-list-value-15 template-layout-column-center-left">Years Experience</li>
	<li class="template-counter-list-value-125 template-layout-column-center-right">Posters Published</li>
	<li class="template-counter-list-value-608 template-layout-column-right">Project Completed</li>
</ul>

<!-- Javascript code -->
$(\'.template-counter-list\').templateCounterList();
');
?>
						</pre>
					</div>
				</div>
			</div>
		</div>
<?php
		Template::_footer('footer_style_counter_list.php');
?>