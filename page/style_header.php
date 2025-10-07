<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Headers','Collection of predefined components to use on your site','Build your custom pages with ease');
?>	
			<div class="template-tab template-tab-style-1 template-clear-fix">

				<ul>
					<li><a href="#template-header-h1">H1</a></li>
					<li><a href="#template-header-h2">H2</a></li>
					<li><a href="#template-header-h3">H3</a></li>
					<li><a href="#template-header-h4">H4</a></li>
					<li><a href="#template-header-h5">H5</a></li>
					<li><a href="#template-header-h6">H6</a></li>
				</ul>
			
				<div id="template-header-h1">
					
					<h1>H1 header</h1>
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<h1>H1 header</h1>
');
?>
						</pre>
					</div>
					
				</div>
				
				<div id="template-header-h2">
					
					<h2>H2 header</h2>
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<h2>H2 header</h2>
');
?>
						</pre>
					</div>	
					
				</div>
				
				<div id="template-header-h3">
					
					<h3>H3 header</h3>
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<h3>H3 header</h3>
');
?>
						</pre>
					</div>	
										
				</div>
				
				<div id="template-header-h4">
					
					<h4>H4 header</h4>
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<h4>H4 header</h4>
');
?>
						</pre>
					</div>	
										
				</div>
				
				<div id="template-header-h5">
					
					<h5>H5 header</h5>
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<h5>H5 header</h5>
');
?>
						</pre>
					</div>	
										
				</div>
				
				<div id="template-header-h6">
					
					<h6>H6 header</h6>
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<h6>H6 header</h6>
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