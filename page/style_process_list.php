<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Process List','Our portfolio features a variety of projects and services','Click the image you want to learn about');
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
			<div class="template-preformatted-text">
				<a href="#">
					<span class="template-preformatted-text-label-open">Hide code</span>
					<span class="template-preformatted-text-label-close">Show code</span>
				</a>
				<pre>
<?php Template::_html
('
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
	<li class="template-process-list-layout-right template-clear-fix">
		<span class="template-process-list-icon template-process-list-icon-2">
			<span>02.</span>
		</span>
		<div class="template-process-list-content">
			<h2><span>Ideation</span> and Design</h2>
			<p>Maecenas et felis risus. Curabitur in orci in turpis ornare tempus. Suspendisse elit lectusil facilisis id sollicitudin nec convallis eu metus. Etiam nec rhoncus risus, sollicitudin pretiun nibh donec posuere quis libero a cursus class aptent taciti sociosqu ad litora torquent pe.</p>
		</div>
	</li>
	<li class="template-process-list-layout-left template-clear-fix">
		<span class="template-process-list-icon template-process-list-icon-3">
			<span>03.</span>
		</span>
		<div class="template-process-list-content">
			<h2><span>Development</span> for Devices</h2>
			<p>Duis id volutpat dolor. Morbi nisi dolor dignissim nec malesuada suscipit bibendum sed arcu. Nam vulputate lacinia fermentum. Ut ornare lacinia erat quis egestas odio dapibus id. Sed tel malesuada enim sit amet aliquam orci scelerisque id. Cras enim eros sagittis porttitor.</p>
		</div>
	</li>
	<li class="template-process-list-layout-right template-clear-fix">
		<span class="template-process-list-icon template-process-list-icon-4">
			<span>04.</span>
		</span>
		<div class="template-process-list-content">
			<h2><span>Launch</span> and Perfecting</h2>
			<p>Praesent lorem sapien, dignissim eu blandit ac, interdum at metus. Maecenas non quam aliq neque lacinia congue ornare sed orci. Nam a malesuada velit vitae lobortis est. Nullam rutru sem eu vulputate vulputate sem velit tincidunt dolor non tempor nisl nisl vitae tellus sedil.</p>
		</div>
	</li>
</ul>
'); 
?>
				</pre>
			</div>
			
		</div>
<?php
		Template::_footer();
?>