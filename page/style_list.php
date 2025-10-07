<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('List','Collection of predefined components to use on your site','Build your custom pages with ease');
?>
			<div class="template-layout-25x25x25x25 template-clear-fix">
				
				<div class="template-layout-column-left template-bottom-0">
					
					<h4 class="template-header-uppercase template-header-underline">Style 1<span></span></h4>
					<!-- List -->
					<ul class="template-list template-list-bullet-1 template-list-style-1">
						<li><span></span>1st sample item</li>
						<li><span></span>2nd sample item</li>
						<li><span></span>3rd sample item</li>
						<li><span></span>4th sample item</li>
						<li><span></span>5th sample item</li>
						<li><span></span>6th sample item</li>
					</ul>
					<!-- /List -->
					
				</div>
				
				<div class="template-layout-column-center-left template-bottom-0">
					
					<h4 class="template-header-uppercase template-header-underline">Style 2<span></span></h4>
					<!-- List -->
					<ul class="template-list template-list-bullet-2 template-list-style-2">
						<li><span></span>1st sample item</li>
						<li><span></span>2nd sample item</li>
						<li><span></span>3rd sample item</li>
						<li><span></span>4th sample item</li>
						<li><span></span>5th sample item</li>
						<li><span></span>6th sample item</li>
					</ul>
					<!-- /List -->
					
				</div>
				
				<div class="template-layout-column-center-right template-bottom-0">
					
					<h4 class="template-header-uppercase template-header-underline">Style 3<span></span></h4>
					<!-- List -->
					<ul class="template-list template-list-bullet-3 template-list-style-3">
						<li><span></span>1st sample item</li>
						<li><span></span>2nd sample item</li>
						<li><span></span>3rd sample item</li>
						<li><span></span>4th sample item</li>
						<li><span></span>5th sample item</li>
						<li><span></span>6th sample item</li>
					</ul>
					<!-- /List -->
					
				</div>
				
				<div class="template-layout-column-right template-bottom-0">
					
					<h4 class="template-header-uppercase template-header-underline">Style 4<span></span></h4>
					<!-- List -->
					<ul class="template-list template-list-bullet-4 template-list-style-4">
						<li><span></span>1st sample item</li>
						<li><span></span>2nd sample item</li>
						<li><span></span>3rd sample item</li>
						<li><span></span>4th sample item</li>
						<li><span></span>5th sample item</li>
						<li><span></span>6th sample item</li>
					</ul>
					<!-- /List -->
					
				</div>
				
			</div>
			
			<div class="template-preformatted-text">
				<a href="#">
					<span class="template-preformatted-text-label-open">Hide code</span>
					<span class="template-preformatted-text-label-close">Show code</span>
				</a>
				<pre>
<?php Template::_html
('
<!-- Style 1 -->
<ul class="template-list template-list-bullet-1 template-list-style-1">
	<li><span></span>1st sample item</li>
	<li><span></span>2nd sample item</li>
	<li><span></span>3rd sample item</li>
	<li><span></span>4th sample item</li>
	<li><span></span>5th sample item</li>
	<li><span></span>6th sample item</li>
</ul>

<!-- Style 2 -->
<ul class="template-list template-list-bullet-2 template-list-style-2">
	<li><span></span>1st sample item</li>
	<li><span></span>2nd sample item</li>
	<li><span></span>3rd sample item</li>
	<li><span></span>4th sample item</li>
	<li><span></span>5th sample item</li>
	<li><span></span>6th sample item</li>
</ul>

<!-- Style 3 -->
<ul class="template-list template-list-bullet-3 template-list-style-3">
	<li><span></span>1st sample item</li>
	<li><span></span>2nd sample item</li>
	<li><span></span>3rd sample item</li>
	<li><span></span>4th sample item</li>
	<li><span></span>5th sample item</li>
	<li><span></span>6th sample item</li>
</ul>

<!-- Style 4 -->
<ul class="template-list template-list-bullet-4 template-list-style-4">
	<li><span></span>1st sample item</li>
	<li><span></span>2nd sample item</li>
	<li><span></span>3rd sample item</li>
	<li><span></span>4th sample item</li>
	<li><span></span>5th sample item</li>
	<li><span></span>6th sample item</li>
</ul>
'); 
?>
				</pre>
			</div>
			
		</div>
<?php
		Template::_footer();
?>