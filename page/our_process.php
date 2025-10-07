<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('Our Process','Welcome to NODE a web design company with real experience','We are passionate about design and people');
?>
			<!-- Process list -->
			<ul class="template-process-list template-clear-fix">
				<!-- 1st item -->
				<li class="template-process-list-layout-left template-clear-fix">
					<!-- Icon -->
					<span class="template-process-list-icon template-process-list-icon-1">
						<!-- Step number -->
						<span>01.</span>
						<!-- /Step number -->
					</span>
					<!-- /Icon -->
					<!-- Content -->
					<div class="template-process-list-content">
						<h2><span>Discovery</span> and Research</h2>
						<p>Ut adipiscing est veliti vitae ultrices quam aliquet at. Integer non ultricies eros quisque alili vitae sem sed purus porttitor sollicitudin sit amet nec tortor. Praesent dignissim magna set auguei eget suscipit purus commodo vel. Ut luctus auctor sapien suscipit scelerisque.</p>
					</div>
					<!-- Content -->
				</li>
				<!-- /1st item -->
				<!-- 2nd item -->
				<li class="template-process-list-layout-right template-clear-fix">
					<span class="template-process-list-icon template-process-list-icon-2">
						<span>02.</span>
					</span>
					<div class="template-process-list-content">
						<h2><span>Ideation</span> and Design</h2>
						<p>Maecenas et felis risus. Curabitur in orci in turpis ornare tempus. Suspendisse elit lectusil facilisis id sollicitudin nec convallis eu metus. Etiam nec rhoncus risus, sollicitudin pretiun nibh donec posuere quis libero a cursus class aptent taciti sociosqu ad litora torquent pe.</p>
					</div>
				</li>
				<!-- /2nd item -->
				<!-- 3rd item -->
				<li class="template-process-list-layout-left template-clear-fix">
					<span class="template-process-list-icon template-process-list-icon-3">
						<span>03.</span>
					</span>
					<div class="template-process-list-content">
						<h2><span>Development</span> for Devices</h2>
						<p>Duis id volutpat dolor. Morbi nisi dolor dignissim nec malesuada suscipit bibendum sed arcu. Nam vulputate lacinia fermentum. Ut ornare lacinia erat quis egestas odio dapibus id. Sed tel malesuada enim sit amet aliquam orci scelerisque id. Cras enim eros sagittis porttitor.</p>
					</div>
				</li>
				<!-- /3rd item -->
				<!-- 4th item -->
				<li class="template-process-list-layout-right template-clear-fix">
					<span class="template-process-list-icon template-process-list-icon-4">
						<span>04.</span>
					</span>
					<div class="template-process-list-content">
						<h2><span>Launch</span> and Perfecting</h2>
						<p>Praesent lorem sapien, dignissim eu blandit ac, interdum at metus. Maecenas non quam aliq neque lacinia congue ornare sed orci. Nam a malesuada velit vitae lobortis est. Nullam rutru sem eu vulputate vulputate sem velit tincidunt dolor non tempor nisl nisl vitae tellus sedil.</p>
					</div>
				</li>
				<!-- /4th item -->
			</ul>
			<!-- /Process list -->
			
			<!-- Header + subheader -->
			<div class="template-header-subheader template-clear-fix template-margin-bottom-50 template-margin-top-50">
				<h2>Our Services</h2>
				<h5>Donec commodo tellus sit amet hendrerit vestibulum</h5>
				<span></span>
			</div>
			<!-- /Header + subheader -->
			
			<!-- Feature list -->
			<ul class="template-feature-list template-feature-list-style-1 template-feature-list-small template-clear-fix template-layout-33x33x33 template-margin-bottom-20">
				<li class="template-layout-column-left">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-list"></span>
							</span>
							<h5>Morbi consectetur justo</h5>
							<p>Cras urna lacus fringilla non congue ut fermentum at nunc.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-center">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-plus"></span>
							</span>
							<h5> Sed a nulla volutpat</h5>
							<p>Curabitur eu eros vel nisl conil pellentesque quis nec erat lor.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-right">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-wall"></span>
							</span>
							<h5>Maecenas turpis enim</h5>
							<p>Praesent vehicula magna ac bibendum pulvinar maurisi.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-left">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-wallet"></span>
							</span>
							<h5>Nullam facilisis facilisis</h5>
							<p>Vivamus elementum lorem util iaculis pharetra risus eros era.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-center">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-database"></span>
							</span>
							<h5>Cum sociis natoque penat</h5>
							<p>Cras lacus sapien aliquet sitis amet velit id facilisis tincidun.</p>
						</div>
					</div>
				</li>
				<li class="template-layout-column-right">
					<div>
						<div>
							<span class="template-feature-icon">
								<span class="template-icon-small template-icon-document"></span>
							</span>
							<h5>Vivamus ullamcorper mi</h5>
							<p>Quisque et nisl mattis sceleris mauris a tincidunt arcu erat.</p>
						</div>
					</div>
				</li>
			</ul>
			<!-- /Feature list -->
			
		</div>
<?php
		Template::_footer();
?>