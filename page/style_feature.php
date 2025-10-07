<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Features','Collection of predefined components to use on your site','Build your custom pages with ease');
?>	
			<div class="template-tab template-tab-style-1 template-clear-fix">
				<ul>
					<li><a href="#template-tab-panel-1">Style Default</a></li>
					<li><a href="#template-tab-panel-2">Style Footer</a></li>
				</ul>
				<div id="template-tab-panel-1">	
			
					<h4 class="template-header-uppercase template-header-underline">Example I<span></span></h4>
					<!-- Feature list -->
					<ul class="template-feature-list template-feature-list-style-1 template-feature-list-large template-clear-fix template-layout-33x33x33">
						<!-- 1st item -->
						<li class="template-layout-column-left">
							<div>
								<div>
									<!-- Icon -->
									<span class="template-feature-icon">
										<span class="template-icon-large template-icon-address"></span>
									</span>
									<!-- /Icon -->
									<!-- Header -->
									<h3><span>Phasellus sit</span> amet tristique tortor</h3>
									<!-- /Header -->
									<!-- Content -->
									<p>Donec posuere erat vel diam tincili porta. Nulla in venenatis magnara. Praesent aliquam lectus sit amet.</p>
									<!-- /Content -->
									<!-- Button -->
									<a href="#">Learn more</a>
									<!-- /Button -->
								</div>
							</div>
						</li>
						<!-- /1st item -->
						<!-- 2nd item -->
						<li class="template-layout-column-center">
							<div>
								<div>
									<span class="template-feature-icon">
										<span class="template-icon-large template-icon-calendar"></span>
									</span>
									<h3><span>Etiam sem</span> tortor scelerisque</h3>
									<p>Vivamus interdum massa non ligis dignissim dictum. Vivamus ornare odio at libero imperdiet scelerisq.</p>
									<a href="#">Learn more</a>
								</div>
							</div>
						</li>
						<!-- /2nd item -->
						<!-- 3rd item -->
						<li class="template-layout-column-right">
							<div>
								<div>
									<span class="template-feature-icon">
										<span class="template-icon-large template-icon-mail"></span>
									</span>
									<h3><span>Nunc auctor</span> at dui sed vulputate</h3>
									<p>Donec posuere risus vel quam ali convallis varius posuere metusas vehicula quisque adipiscing sit.</p>
									<a href="#">Learn more</a>
								</div>
							</div>
						</li>
						<!-- /3rd item -->
					</ul>
					<!-- /Feature list -->
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<ul class="template-feature-list template-feature-list-style-1 template-feature-list-large template-clear-fix template-layout-33x33x33">
	<li class="template-layout-column-left">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-large template-icon-address"></span>
				</span>
				<h3><span>Phasellus sit</span> amet tristique tortor</h3>
				<p>Donec posuere erat vel diam tincili porta [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-center">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-large template-icon-calendar"></span>
				</span>
				<h3><span>Etiam sem</span> tortor scelerisque</h3>
				<p>Vivamus interdum massa non ligis dignissim [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-right">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-large template-icon-mail"></span>
				</span>
				<h3><span>Nunc auctor</span> at dui sed vulputate</h3>
				<p>Donec posuere risus vel quam ali convallis [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
</ul>
');
?>
						</pre>
					</div>
		
					<h4 class="template-header-uppercase template-header-underline template-margin-top-50">Example II<span></span></h4>
					<!-- Feature list -->
					<ul class="template-feature-list template-feature-list-style-1 template-feature-list-medium template-clear-fix template-layout-33x33x33">
						<li class="template-layout-column-left">
							<div>
								<div>
									<span class="template-feature-icon">
										<span class="template-icon-small template-icon-battery-full"></span>
									</span>
									<h4>Morbi consectetur justo?</h4>
									<p>Cras urna lacus fringilla non congue ut fermentum at nunc.</p>
									<a href="#">Learn more</a>
								</div>
							</div>
						</li>
						<li class="template-layout-column-center">
							<div>
								<div>
									<span class="template-feature-icon">
										<span class="template-icon-small template-icon-binoculars"></span>
									</span>
									<h4> Sed a nulla volutpat?</h4>
									<p>Curabitur eu eros vel nisl congue pellentesque quis nec erat lore.</p>
									<a href="#">Learn more</a>
								</div>
							</div>
						</li>
						<li class="template-layout-column-right">
							<div>
								<div>
									<span class="template-feature-icon">
										<span class="template-icon-small template-icon-bookmark"></span>
									</span>
									<h4>Maecenas turpis enim?</h4>
									<p>Praesent vehicula magna ac bibendum pulvinar mauris dui.</p>
									<a href="#">Learn more</a>
								</div>
							</div>
						</li>
					</ul>
					<!-- /Feature list -->
					<div class="template-preformatted-text template-bottom-0 template-top-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<ul class="template-feature-list template-feature-list-style-1 template-feature-list-medium template-clear-fix template-layout-33x33x33">
	<li class="template-layout-column-left">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-battery-full"></span>
				</span>
				<h4>Morbi consectetur justo?</h4>
				<p>Cras urna lacus fringilla non [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-center">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-binoculars"></span>
				</span>
				<h4> Sed a nulla volutpat?</h4>
				<p>Curabitur eu eros vel nisl congue [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-right">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-bookmark"></span>
				</span>
				<h4>Maecenas turpis enim?</h4>
				<p>Praesent vehicula magna ac bibendum [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
</ul>
');
?>
						</pre>
					</div>

					<h4 class="template-header-uppercase template-header-underline template-margin-top-50 template-margin-bottom-40">Example III<span></span></h4>
					<!-- Feature list -->
					<ul class="template-feature-list template-feature-list-style-1 template-feature-list-small template-clear-fix template-layout-25x25x25x25">
						<li class="template-layout-column-left">
							<div>
								<div>
									<span class="template-feature-icon">
										<span class="template-icon-small template-icon-chat"></span>
									</span>
									<h6>Etiam rutrum?</h6>
									<p>Nam sollicitudin bibendum antes.</p>
									<a href="#">Learn more</a>
								</div>
							</div>
						</li>
						<li class="template-layout-column-center-left">
							<div>
								<div>
									<span class="template-feature-icon">
										<span class="template-icon-small template-icon-clock"></span>
									</span>
									<h6>Proin volutpat?</h6>
									<p>Vivamus id metu a nisi rhoncus as.</p>
									<a href="#">Learn more</a>
								</div>
							</div>
						</li>
						<li class="template-layout-column-center-right">
							<div>
								<div>
									<span class="template-feature-icon">
										<span class="template-icon-small template-icon-config"></span>
									</span>
									<h6>Mauris pretium?</h6>
									<p>Sed vel tortor egi dolor accumsani.</p>
									<a href="#">Learn more</a>
								</div>
							</div>
						</li>
						<li class="template-layout-column-right">
							<div>
								<div>
									<span class="template-feature-icon">
										<span class="template-icon-small template-icon-cross"></span>
									</span>
									<h6>Curabitur eu?</h6>
									<p>Praesent vitae an non nisi tempori.</p>
									<a href="#">Learn more</a>
								</div>
							</div>
						</li>
					</ul>
					<!-- /Feature list -->
					<div class="template-preformatted-text template-bottom-0 template-top-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<ul class="template-feature-list template-feature-list-style-1 template-feature-list-small template-clear-fix template-layout-25x25x25x25">
	<li class="template-layout-column-left">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-chat"></span>
				</span>
				<h6>Etiam rutrum?</h6>
				<p>Nam sollicitudin bibendum antes.</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-center-left">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-clock"></span>
				</span>
				<h6>Proin volutpat?</h6>
				<p>Vivamus id metu a nisi rhoncus as.</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-center-right">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-config"></span>
				</span>
				<h6>Mauris pretium?</h6>
				<p>Sed vel tortor egi dolor accumsani.</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-right">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-cross"></span>
				</span>
				<h6>Curabitur eu?</h6>
				<p>Praesent vitae an non nisi tempori.</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
</ul>
');
?>
						</pre>
					</div>
				
				</div>
				
				<div id="template-tab-panel-2">	
					
					<h4 class="template-header-uppercase template-header-underline">Example I<span></span></h4>
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<ul class="template-feature-list template-feature-list-style-2 template-feature-list-large template-clear-fix template-layout-33x33x33">
	<li class="template-layout-column-left">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-large template-icon-address"></span>
				</span>
				<h3><span>Phasellus sit</span> amet tristique tortor</h3>
				<p>Donec posuere erat vel diam tincili porta [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-center">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-large template-icon-calendar"></span>
				</span>
				<h3><span>Etiam sem</span> tortor scelerisque</h3>
				<p>Vivamus interdum massa non ligis dignissim [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-right">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-large template-icon-mail"></span>
				</span>
				<h3><span>Nunc auctor</span> at dui sed vulputate</h3>
				<p>Donec posuere risus vel quam ali convallis [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
</ul>
');
?>
						</pre>
					</div>
	
					<h4 class="template-header-uppercase template-header-underline template-margin-top-30">Example II<span></span></h4>
					<div class="template-preformatted-text template-bottom-0 template-top-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<ul class="template-feature-list template-feature-list-style-2 template-feature-list-medium template-clear-fix template-layout-33x33x33">
	<li class="template-layout-column-left">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-battery-full"></span>
				</span>
				<h4>Morbi consectetur justo?</h4>
				<p>Cras urna lacus fringilla non [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-center">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-binoculars"></span>
				</span>
				<h4> Sed a nulla volutpat?</h4>
				<p>Curabitur eu eros vel nisl congue [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-right">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-bookmark"></span>
				</span>
				<h4>Maecenas turpis enim?</h4>
				<p>Praesent vehicula magna ac bibendum [...]</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
</ul>
');
?>
						</pre>
					</div>
					
					<h4 class="template-header-uppercase template-header-underline template-margin-top-30">Example III<span></span></h4>
					<div class="template-preformatted-text template-bottom-0 template-top-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<ul class="template-feature-list template-feature-list-style-2 template-feature-list-small template-clear-fix template-layout-25x25x25x25">
	<li class="template-layout-column-left">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-chat"></span>
				</span>
				<h6>Etiam rutrum?</h6>
				<p>Nam sollicitudin bibendum antes.</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-center-left">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-clock"></span>
				</span>
				<h6>Proin volutpat?</h6>
				<p>Vivamus id metu a nisi rhoncus as.</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-center-right">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-config"></span>
				</span>
				<h6>Mauris pretium?</h6>
				<p>Sed vel tortor egi dolor accumsani.</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
	<li class="template-layout-column-right">
		<div>
			<div>
				<span class="template-feature-icon">
					<span class="template-icon-small template-icon-cross"></span>
				</span>
				<h6>Curabitur eu?</h6>
				<p>Praesent vitae an non nisi tempori.</p>
				<a href="#">Learn more</a>
			</div>
		</div>
	</li>
</ul>
');
?>
						</pre>
					</div>
					
				</div>
				
			</div>
			
		</div>
<?php
		Template::_footer('footer_style_feature.php');
?>