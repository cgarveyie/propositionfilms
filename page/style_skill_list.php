<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Skills List','Our services span from development of your website','To creating your corporate identity');
?>
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">
					<div class="template-layout-50x50 template-clear-fix">
						<div class="template-layout-column-left">
							<!-- Skills list -->
							<ul class="template-skill-list template-skill-list-style-1">
								<!-- 1st item -->
								<li class="template-skill-list-value-95">Flash</li>
								<!-- /1st item -->
								<!-- 2nd item -->
								<li class="template-skill-list-value-70">inDesign</li>
								<!-- /2nd item -->
								<!-- 3rd item -->
								<li class="template-skill-list-value-95">Photoshop</li>
								<!-- /3rd item -->
								<!-- 4th item -->
								<li class="template-skill-list-value-95">Ilustrator</li>
								<!-- /4th item -->
								<!-- 5th item -->
								<li class="template-skill-list-value-65">Print Works</li>
								<!-- /5th item -->
							</ul>
							<!-- /Skills list -->
						</div>
						<div class="template-layout-column-right">
							<ul class="template-skill-list template-skill-list-style-1">
								<li class="template-skill-list-value-95">PHP</li>
								<li class="template-skill-list-value-95">CSS</li>
								<li class="template-skill-list-value-95">HTML</li>
								<li class="template-skill-list-value-60">.NET</li>
								<li class="template-skill-list-value-65">JAVA</li>
							</ul>	
						</div>
					</div>
					<div class="template-space template-space-m30"></div>
					<div class="template-preformatted-text">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<!-- HTML code -->
<ul class="template-skill-list template-skill-list-style-1">
	<li class="template-skill-list-value-95">Flash</li>
	<li class="template-skill-list-value-70">inDesign</li>
	<li class="template-skill-list-value-95">Photoshop</li>
	<li class="template-skill-list-value-95">Ilustrator</li>
	<li class="template-skill-list-value-65">Print Works</li>
</ul>

<ul class="template-skill-list template-skill-list-style-1">
	<li class="template-skill-list-value-95">PHP</li>
	<li class="template-skill-list-value-95">CSS</li>
	<li class="template-skill-list-value-95">HTML</li>
	<li class="template-skill-list-value-60">.NET</li>
	<li class="template-skill-list-value-65">JAVA</li>
</ul>	

<!-- Javascript code -->
$(\'.template-skill-list\').templateSkillList();
'); 
?>
						</pre>
					</div>				
				</div>					
				<div id="template-tab-panel-2">
					<div class="template-preformatted-text template-margin-top-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php Template::_html
('
<!-- HTML code -->
<ul class="template-skill-list template-skill-list-style-2">
	<li class="template-skill-list-value-95">Flash</li>
	<li class="template-skill-list-value-70">inDesign</li>
	<li class="template-skill-list-value-95">Photoshop</li>
	<li class="template-skill-list-value-95">Ilustrator</li>
	<li class="template-skill-list-value-65">Print Works</li>
</ul>

<ul class="template-skill-list template-skill-list-style-2">
	<li class="template-skill-list-value-95">PHP</li>
	<li class="template-skill-list-value-95">CSS</li>
	<li class="template-skill-list-value-95">HTML</li>
	<li class="template-skill-list-value-60">.NET</li>
	<li class="template-skill-list-value-65">JAVA</li>
</ul>	

<!-- Javascript code -->
$(\'.template-skill-list\').templateSkillList();
'); 
?>
						</pre>
					</div>						
				</div>
			</div>
		</div>
<?php
		Template::_footer('footer_style_skill_list.php');
?>