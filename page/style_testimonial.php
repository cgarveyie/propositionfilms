<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
?>
		<div id="template-page-content">
<?php
		Template::_header('Testimonials','Collection of predefined components to use on your site','Build your custom pages with ease');
?>	
			<div class="template-tab template-tab-style-1 template-clear-fix">

				<ul>
					<li><a href="#template-testimonial-list-1">Style Default</a></li>
					<li><a href="#template-testimonial-list-2">Style Footer</a></li>
				</ul>
			
				<div id="template-testimonial-list-1">
					
					<h4 class="template-header-uppercase template-header-underline template-carousel-style-1">Carousel<span></span></h4>
					<!-- Testimonial list -->
					<div class="template-testimonial template-testimonial-style-1 template-carousel template-carousel-style-1 template-carousel-testimonial">
						<ul class="template-testimonial-list template-clear-fix template-layout-100">
							<!-- 1st item -->
							<li class="template-layout-column-left">
								<!-- Cite -->
								<div class="template-testimonial-list-citation">
									<!-- Header -->
									<h6>Sed mattis ut neque id consectetur!</h6>
									<!-- /Header -->
									<!-- Content -->
									<p>In tincidunt aliquet justo. Curabitur laoreet dolor ac varius malesuada tortor eros rhoncus urna et placerat quam quam a leo. Etiam consequat velit turpis sit amet pellentesque diam commodo quis. Sed vel fringilla odio. Donec vitae enim condimentum congue dui.</p>
									<!-- /Content -->
								</div>
								<!-- /Cite -->
								<!-- Arrow -->
								<div class="template-testimonial-list-arrow"></div>
								<!-- /Arrow -->
								<!-- Author -->
								<div class="template-testimonial-list-author">
									<!-- Icon -->
									<span></span>
									<!-- /Icon -->
									<!-- Author's name -->
									<h6>Anthony S. Kimball</h6>	
									<!-- /Author's name -->
									<!-- Author's position and company -->
									<p>Film processing technician, Total Yard Maintenance</p>	
									<!-- /Author's position and company -->
								</div>
								<!-- /Author -->
							</li>
							<!-- /1st item -->
							<!-- 2nd item -->
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Nam blandit mi sit amet aliquet tempor!</h6>
									<p>Duis rhoncus convallis nisi a hendrerit nisi gravida quis. Sed dignissim dolor orci a tincidunt nisi feugiat non. Donec eu facilisis leo non fringilla enim. Fusce consectetur mattis leo et pharetra quam congue nec. Nulla scelerisque sagittis eros. Nunc vel condimen.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Floyd G. Allen</h6>		
									<p>Labor relations manager, Morrie Mages</p>	
								</div>
							</li>
							<!-- /2nd item -->
							<!-- 3rd item -->
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Sed quis dolor rutrum lobortis!</h6>
									<p>Proin ante leo pellentesque vitae nisi at convallis sodales metus nam at tincidunt lectus vestibulum fermentum ultricies laoreet proin a nisl eget metus rutrum aliquam. Morbi nec enim vel nisi porta pretium vestibulum sit amet enim eget nisl tempor mollis varius sed.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Maria F. Lawson</h6>		
									<p>Signal and track switch repairer, Tianguis</p>	
								</div>
							</li>
							<!-- /3rd item -->
							<!-- 4th item -->
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Vivamus ac lorem rhoncus pharetra!</h6>
									<p>Quisque sodales euismod lorem at luctus nunc tristique in phasellus leo nisl vulputate sed dictum quis, sollicitudin a enim. Vestib congue lobortis condimentum. Donec ac faucibus lorem. Quisque sodales euismod lorem at luctus nunc tristique in phasellus leoni.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>James N. Carter</h6>		
									<p>Real estate agent, Cloth World</p>	
								</div>
							</li>
							<!-- /4th item -->
						</ul>
					</div>
					<!-- /Testimonial list -->
					<div class="template-space template-space-m20"></div>
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-testimonial template-testimonial-style-1 template-carousel template-carousel-style-1 template-carousel-testimonial">
	<ul class="template-testimonial-list template-clear-fix template-layout-100">
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Sed mattis ut neque id consectetur!</h6>
				<p>In tincidunt aliquet justo. Curabitur laoreet [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Anthony S. Kimball</h6>		
				<p>Film processing technician, Total Yard Maintenance</p>	
			</div>
		</li>
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Nam blandit mi sit amet aliquet tempor!</h6>
				<p>Duis rhoncus convallis nisi a hendrerit nisi  [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Floyd G. Allen</h6>		
				<p>Labor relations manager, Morrie Mages</p>	
			</div>
		</li>
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Sed quis dolor rutrum lobortis!</h6>
				<p>Proin ante leo pellentesque vitae nisi at convallis  [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Maria F. Lawson</h6>		
				<p>Signal and track switch repairer, Tianguis</p>	
			</div>
		</li>
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Vivamus ac lorem rhoncus pharetra!</h6>
				<p>Quisque sodales euismod lorem at luctus nunc tristique  [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>James N. Carter</h6>		
				<p>Real estate agent, Cloth World</p>	
			</div>
		</li>
	</ul>
</div>
');
?>
						</pre>
					</div>

					<h4 class="template-header-uppercase template-header-underline template-margin-top-30">Layout 50x50%<span></span></h4>
					<div class="template-testimonial template-testimonial-style-1">
						<ul class="template-testimonial-list template-clear-fix template-layout-50x50">
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Phasellus fringilla arcu sed cursus!</h6>
									<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam sed elit rutrum, convallis diam facilisis.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Jerry L. Hargett</h6>		
									<p>Pipefitter, Reliable Guidance</p>	
								</div>
							</li>
							<li class="template-layout-column-right">
								<div class="template-testimonial-list-citation">
									<h6>Suspendisse in magna non dui!</h6>
									<p>Quisque sollicitudin in mauris sit amet sodales vehicula. Suspendisse viverra tempus ligula, a sodales magna acil.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Edna D. Hudson</h6>		
									<p>Photoengraver, Rose Records</p>	
								</div>
							</li>
						</ul>
					</div>
					<div class="template-space template-space-m20"></div>
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-testimonial template-testimonial-style-1">
	<ul class="template-testimonial-list template-clear-fix template-layout-50x50">
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Phasellus fringilla arcu sed cursus!</h6>
				<p>Interdum et malesuada fames ac ante ipsum [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Jerry L. Hargett</h6>		
				<p>Pipefitter, Reliable Guidance</p>	
			</div>
		</li>
		<li class="template-layout-column-right">
			<div class="template-testimonial-list-citation">
				<h6>Suspendisse in magna non dui!</h6>
				<p>Quisque sollicitudin in mauris sit amet [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Edna D. Hudson</h6>		
				<p>Photoengraver, Rose Records</p>	
			</div>
		</li>
	</ul>
</div>
');
?>
						</pre>
					</div>	
					
					<h4 class="template-header-uppercase template-header-underline template-margin-top-30">Layout 33x33x33%<span></span></h4>
					<div class="template-testimonial template-testimonial-style-1">					
						<ul class="template-testimonial-list template-clear-fix template-layout-33x33x33">
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Nam tempor eu tortor!</h6>
									<p>Nullam aliquam elementum elit, ut fringilla mi aliquet ut phasellus no.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Karen C. Logsdon</h6>		
									<p>Window clerk, Warehouse Club, Inc.</p>	
								</div>
							</li>
							<li class="template-layout-column-center">
								<div class="template-testimonial-list-citation">
									<h6>Nulla erat mi consequat at!</h6>
									<p>Phasellus pretium sollicitudin alet blandit. Mauris quis feugiat augue.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Pamela J. Johnson</h6>		
									<p>Business office manager, Judys</p>	
								</div>
							</li>
							<li class="template-layout-column-right">
								<div class="template-testimonial-list-citation">
									<h6>Cras fermentum elit condi!</h6>
									<p>Ut egestas vehicula velit, ut trise nibh condimentum eleifend eros.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Erik J. Pilcher</h6>		
									<p>Insurance sales agent, Quest Technology</p>	
								</div>
							</li>
						</ul>
					</div>
					<div class="template-space template-space-m20"></div>
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-testimonial template-testimonial-style-1">					
	<ul class="template-testimonial-list template-clear-fix template-layout-33x33x33">
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Nam tempor eu tortor!</h6>
				<p>Nullam aliquam elementum elit, ut fringilla mi aliquet ut phasellus no.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Karen C. Logsdon</h6>		
				<p>Window clerk, Warehouse Club, Inc.</p>	
			</div>
		</li>
		<li class="template-layout-column-center">
			<div class="template-testimonial-list-citation">
				<h6>Nulla erat mi consequat at!</h6>
				<p>Phasellus pretium sollicitudin alet blandit. Mauris quis feugiat augue.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Pamela J. Johnson</h6>		
				<p>Business office manager, Judys</p>	
			</div>
		</li>
		<li class="template-layout-column-right">
			<div class="template-testimonial-list-citation">
				<h6>Cras fermentum elit condi!</h6>
				<p>Ut egestas vehicula velit, ut trise nibh condimentum eleifend eros.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Erik J. Pilcher</h6>		
				<p>Insurance sales agent, Quest Technology</p>	
			</div>
		</li>
	</ul>
</div>
');
?>
						</pre>
					</div>	
					
					<h4 class="template-header-uppercase template-header-underline template-margin-top-30">Layout 25x25x25x25%<span></span></h4>
					<div class="template-testimonial template-testimonial-style-1">				
						<ul class="template-testimonial-list template-clear-fix template-layout-25x25x25x25">
							<li class="template-layout-column-left">
								<div class="template-testimonial-list-citation">
									<h6>Curabitur ligula!</h6>
									<p>Suspendisse molestie velit eu varius blandit.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Muriel C. Harrison</h6>		
									<p>Library assistant, XYX</p>	
								</div>
							</li>
							<li class="template-layout-column-center-left">
								<div class="template-testimonial-list-citation">
									<h6>Nulla ipsum!</h6>
									<p>Donec facilisis dolor vitae eleifend magna.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Ann T. Eoff</h6>		
									<p>Computer trainer, SCD</p>	
								</div>
							</li>
							<li class="template-layout-column-center-right">
								<div class="template-testimonial-list-citation">
									<h6>In ut rutrum!</h6>
									<p>Proin ac consectetur elit phasellus augue.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Fredrick C. Delacruz</h6>		
									<p>Tile installer, DeCompany</p>	
								</div>
							</li>
							<li class="template-layout-column-right">
								<div class="template-testimonial-list-citation">
									<h6>Curabitur dolor!</h6>
									<p>Proin sit amet cursus libero at imperdiet or.</p>
								</div>
								<div class="template-testimonial-list-arrow"></div>
								<div class="template-testimonial-list-author">
									<span></span>
									<h6>Frederick M. Gould</h6>		
									<p>Data entry clerk, ManPower</p>	
								</div>
							</li>
						</ul>						
					</div>
					<div class="template-space template-space-m20"></div>
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-testimonial template-testimonial-style-1">				
	<ul class="template-testimonial-list template-clear-fix template-layout-25x25x25x25">
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Curabitur ligula!</h6>
				<p>Suspendisse molestie velit eu varius blandit.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Muriel C. Harrison</h6>		
				<p>Library assistant, XYX</p>	
			</div>
		</li>
		<li class="template-layout-column-center-left">
			<div class="template-testimonial-list-citation">
				<h6>Nulla ipsum!</h6>
				<p>Donec facilisis dolor vitae eleifend magna.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Ann T. Eoff</h6>		
				<p>Computer trainer, SCD</p>	
			</div>
		</li>
		<li class="template-layout-column-center-right">
			<div class="template-testimonial-list-citation">
				<h6>In ut rutrum!</h6>
				<p>Proin ac consectetur elit phasellus augue.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Fredrick C. Delacruz</h6>		
				<p>Tile installer, DeCompany</p>	
			</div>
		</li>
		<li class="template-layout-column-right">
			<div class="template-testimonial-list-citation">
				<h6>Curabitur dolor!</h6>
				<p>Proin sit amet cursus libero at imperdiet or.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Frederick M. Gould</h6>		
				<p>Data entry clerk, ManPower</p>	
			</div>
		</li>
	</ul>						
</div>
');
?>
						</pre>
					</div>	
				</div>
			
				<div id="template-testimonial-list-2">
					<h4 class="template-header-uppercase template-header-underline">Carousel<span></span></h4>
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-testimonial template-testimonial-style-2 template-carousel template-carousel-style-1 template-carousel-testimonial">
	<ul class="template-testimonial-list template-clear-fix template-layout-100">
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Sed mattis ut neque id consectetur!</h6>
				<p>In tincidunt aliquet justo. Curabitur laoreet [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Anthony S. Kimball</h6>		
				<p>Film processing technician, Total Yard Maintenance</p>	
			</div>
		</li>
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Nam blandit mi sit amet aliquet tempor!</h6>
				<p>Duis rhoncus convallis nisi a hendrerit nisi  [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Floyd G. Allen</h6>		
				<p>Labor relations manager, Morrie Mages</p>	
			</div>
		</li>
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Sed quis dolor rutrum lobortis!</h6>
				<p>Proin ante leo pellentesque vitae nisi at convallis  [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Maria F. Lawson</h6>		
				<p>Signal and track switch repairer, Tianguis</p>	
			</div>
		</li>
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Vivamus ac lorem rhoncus pharetra!</h6>
				<p>Quisque sodales euismod lorem at luctus nunc tristique  [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>James N. Carter</h6>		
				<p>Real estate agent, Cloth World</p>	
			</div>
		</li>
	</ul>
</div>
');
?>
						</pre>
					</div>

					<h4 class="template-header-uppercase template-header-underline template-margin-top-30">Layout 50x50%<span></span></h4>
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-testimonial template-testimonial-style-2">
	<ul class="template-testimonial-list template-clear-fix template-layout-50x50">
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Phasellus fringilla arcu sed cursus!</h6>
				<p>Interdum et malesuada fames ac ante ipsum [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Jerry L. Hargett</h6>		
				<p>Pipefitter, Reliable Guidance</p>	
			</div>
		</li>
		<li class="template-layout-column-right">
			<div class="template-testimonial-list-citation">
				<h6>Suspendisse in magna non dui!</h6>
				<p>Quisque sollicitudin in mauris sit amet [...]</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Edna D. Hudson</h6>		
				<p>Photoengraver, Rose Records</p>	
			</div>
		</li>
	</ul>
</div>
');
?>
						</pre>
					</div>	
					
					<h4 class="template-header-uppercase template-header-underline template-margin-top-30">Layout 33x33x33%<span></span></h4>
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-testimonial template-testimonial-style-2">					
	<ul class="template-testimonial-list template-clear-fix template-layout-33x33x33">
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Nam tempor eu tortor!</h6>
				<p>Nullam aliquam elementum elit, ut fringilla mi aliquet ut phasellus no.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Karen C. Logsdon</h6>		
				<p>Window clerk, Warehouse Club, Inc.</p>	
			</div>
		</li>
		<li class="template-layout-column-center">
			<div class="template-testimonial-list-citation">
				<h6>Nulla erat mi consequat at!</h6>
				<p>Phasellus pretium sollicitudin alet blandit. Mauris quis feugiat augue.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Pamela J. Johnson</h6>		
				<p>Business office manager, Judys</p>	
			</div>
		</li>
		<li class="template-layout-column-right">
			<div class="template-testimonial-list-citation">
				<h6>Cras fermentum elit condi!</h6>
				<p>Ut egestas vehicula velit, ut trise nibh condimentum eleifend eros.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Erik J. Pilcher</h6>		
				<p>Insurance sales agent, Quest Technology</p>	
			</div>
		</li>
	</ul>
</div>
');
?>
						</pre>
					</div>	
					
					<h4 class="template-header-uppercase template-header-underline template-margin-top-30">Layout 25x25x25x25%<span></span></h4>
					<div class="template-preformatted-text template-top-0 template-bottom-0">
						<a href="#">
							<span class="template-preformatted-text-label-open">Hide code</span>
							<span class="template-preformatted-text-label-close">Show code</span>
						</a>
						<pre>
<?php
Template::_html
('
<div class="template-testimonial template-testimonial-style-2">				
	<ul class="template-testimonial-list template-clear-fix template-layout-25x25x25x25">
		<li class="template-layout-column-left">
			<div class="template-testimonial-list-citation">
				<h6>Curabitur ligula!</h6>
				<p>Suspendisse molestie velit eu varius blandit.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Muriel C. Harrison</h6>		
				<p>Library assistant, XYX</p>	
			</div>
		</li>
		<li class="template-layout-column-center-left">
			<div class="template-testimonial-list-citation">
				<h6>Nulla ipsum!</h6>
				<p>Donec facilisis dolor vitae eleifend magna.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Ann T. Eoff</h6>		
				<p>Computer trainer, SCD</p>	
			</div>
		</li>
		<li class="template-layout-column-center-right">
			<div class="template-testimonial-list-citation">
				<h6>In ut rutrum!</h6>
				<p>Proin ac consectetur elit phasellus augue.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Fredrick C. Delacruz</h6>		
				<p>Tile installer, DeCompany</p>	
			</div>
		</li>
		<li class="template-layout-column-right">
			<div class="template-testimonial-list-citation">
				<h6>Curabitur dolor!</h6>
				<p>Proin sit amet cursus libero at imperdiet or.</p>
			</div>
			<div class="template-testimonial-list-arrow"></div>
			<div class="template-testimonial-list-author">
				<span></span>
				<h6>Frederick M. Gould</h6>		
				<p>Data entry clerk, ManPower</p>	
			</div>
		</li>
	</ul>						
</div>
');
?>
						</pre>
					</div>	
				</div>
			</div>
		</div>
<?php
		Template::_footer('footer_style_testimonial.php');
?>