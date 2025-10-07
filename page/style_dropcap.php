<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Dropcap','We use the potential of our experienced and creative experts','Meet the energetic members of our team');
?>
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">
					<div class="template-layout-50x50 template-clear-fix">
						<div class="template-layout-column-left">
							<!-- Dropcap -->
							<p class="template-dropcap template-dropcap-style-1 template-top-0 template-bottom-0 template-clear-fix">
								<!-- First letter + content -->
								<span class="template-dropcap-first-letter">U</span>n dapibus mi pharetra erat consequat nec euismod velit accumsan. Donec a risus leo sed at mauris metus donec mattis dignissim nibh eu mattis pellentesque placeratve.
								<!-- /First letter + content -->
							</p>
							<!-- /Dropcap -->
						</div>
						<div class="template-layout-column-right">
							<p class="template-dropcap template-dropcap-style-2 template-top-0 template-bottom-0 template-clear-fix">
								<span class="template-dropcap-first-letter">D</span>onec varius ornare nibh vel viverra. Nullam varius vitae dui ut tincidunt nulla adipiscing ligula vel lorem pretium eget convallis nibh iaculis fusce adipiscing non elit eget. 
							</p>
						</div>
					</div>
					<div class="template-preformatted-text template-margin-top-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<p class="template-dropcap template-dropcap-style-1 template-top-0 template-bottom-0 template-clear-fix">
	<span class="template-dropcap-first-letter">U</span>n dapibus mi [...]
</p>
<p class="template-dropcap template-dropcap-style-2template-top-0 template-bottom-0 template-clear-fix">
	<span class="template-dropcap-first-letter">D</span>onec varius [...]
</p>
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
<p class="template-dropcap template-dropcap-style-3 template-top-0 template-bottom-0 template-clear-fix">
	<span class="template-dropcap-first-letter">A</span>liquam vitae [...]
</p>
<p class="template-dropcap template-dropcap-style-4 template-top-0 template-bottom-0 template-clear-fix">
	<span class="template-dropcap-first-letter">V</span>ivamus sed [...]
</p>	
'); 
?>
						</pre>
					</div>
				</div>
			</div>
		</div>
<?php
		Template::_footer('footer_style_dropcap.php');
?>