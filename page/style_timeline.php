<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('Timeline','Our portfolio features a variety of projects and services','Click the image you want to learn about');
?>
			<!-- Timeline -->
			<div class="template-timeline template-clear-fix">

				<!-- Year -->
				<div class="template-timeline-date"><h5>2012</h5></div>
				<!-- /Year -->
				
				<!-- Content -->
				<div class="template-timeline-content template-clear-fix">
					
					<!-- Column left -->
					<div class="template-timeline-content-column-left">
						
						<!-- Event list -->
						<ul class="template-timeline-event-list">
							
							<!-- 1st event -->
							<li>
								<!-- Event content -->
								<div class="template-event-list-content">
									<!-- Icon -->
									<span class="template-icon-small template-icon-document">
										<span class="template-event-list-content-icon-arrow"></span>
										<span class="template-event-list-content-icon-circle"></span>
									</span>
									<!-- /Icon -->
									<!-- Date -->
									<h3 class="template-event-list-content-date">August 25</h3>
									<!-- /Date -->
									<!-- Header -->
									<h3 class="template-event-list-content-header"><a href="<?php $Template->_getURL('blog/post-right-sidebar'); ?>">Suspendisse erat orci</a></h3>
									<!-- /Header -->
									<!-- Excerpt -->
									<p>Aliquam mattis mauris leo quis aliquam tortoril blandit id. In semper quam sit amet ultriciesesi tempor ipsum sem egestas erat id suscipit.</p>
									<!-- /Excerpt -->
								</div>
								<!-- /Event content -->
							</li>
							<!-- /1st event -->
							
							<!-- 2nd event -->
							<li>
								<!-- Image -->
								<div class="template-image">
									<a href="media/image/_sample/blog_960x458_1.jpg" class="template-image-box-top template-image-preloader">
										<img src="media/image/_sample/blog_660x314_1.jpg" alt=""/>
									</a>
									<div class="template-image-box-hover template-vertical-center">
										<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
										<a href="<?php $Template->_getURL('blog/post-right-sidebar'); ?>" class="template-image-box-hover-link-more" title="Open post"></a>
									</div>
								</div>
								<!-- /Image -->
								<!-- Event content -->
								<div class="template-event-list-content">
									<span class="template-icon-small template-icon-image">
										<span class="template-event-list-content-icon-arrow"></span>
										<span class="template-event-list-content-icon-circle"></span>
									</span>
									<h3 class="template-event-list-content-date">August 19</h3>
									<h3 class="template-event-list-content-header"><a href="<?php $Template->_getURL('blog/post-right-sidebar'); ?>">Phasellus a ultrices quam</a></h3>
									<p>Vestibulum ante ipsum primis in faucibus orciis luctus et ultrices posuere cubilia curae. Sed ege nibh quis dolor porta dapibus. Pellentesque veli nulla in magna condimentum pulvinar.</p>
								</div>
								<!-- /Event content -->
							</li>
							<!-- /2nd event -->
							
						</ul>
						<!-- /Event list -->
						
					</div>
					<!-- /Column left -->
					
					<!-- Column right -->
					<div class="template-timeline-content-column-right">
						<ul class="template-timeline-event-list">
							<li>
								<div class="template-image">
									<a href="media/image/_sample/blog_960x458_2.jpg" class="template-image-box-top template-image-preloader">
										<img src="media/image/_sample/blog_660x314_2.jpg" alt=""/>
									</a>
									<div class="template-image-box-hover template-vertical-center">
										<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
										<a href="<?php $Template->_getURL('blog/post-right-sidebar'); ?>" class="template-image-box-hover-link-more" title="Open post"></a>
									</div>
								</div>
								<div class="template-event-list-content">
									<span class="template-icon-small template-icon-image">
										<span class="template-event-list-content-icon-arrow"></span>
										<span class="template-event-list-content-icon-circle"></span>
									</span>
									<h3 class="template-event-list-content-date">May 18</h3>
									<h3 class="template-event-list-content-header"><a href="<?php $Template->_getURL('blog/post-right-sidebar'); ?>">Pellentesque quam ornare</a></h3>
									<p>Nulla nec sapien ultrices dapibus metus sit me amet imperdiet erat. Cras congue feugiat antel non sollicitudin lacus tristique vitae. Morbi acil tellus arcu. Vivamus sollicitudin velit vitae nibh accumsan lorem ipsum dolor.</p>
								</div>
							</li>
							<li class="template-timeline-event-list-featured">
								<div class="template-event-list-content">
									<span class="template-icon-small template-icon-pin">
										<span class="template-event-list-content-icon-arrow"></span>
										<span class="template-event-list-content-icon-circle"></span>
									</span>
									<h3 class="template-event-list-content-date">April 14</h3>
									<h3 class="template-event-list-content-header"><a href="<?php $Template->_getURL('blog/post-right-sidebar'); ?>">Duis congue in mauris ate</a></h3>
									<p>Proin non nisi eget nisi mollis porttitor. Morbiis nunc elit convallis ac cursus sit amet tincidunti id tortor. Pellentesque rutrum justo id aliquet.</p>
								</div>
							</li>
						</ul>
					</div>	
					<!-- /Column right -->
					
				</div>
				<!-- /Content -->
				
				<div class="template-timeline-date"><h5>2011</h5></div>

			</div>
			<!-- /Timeline -->
			
			<div class="template-preformatted-text">
				<a href="#">
					<span class="template-preformatted-text-label-open">Hide code</span>
					<span class="template-preformatted-text-label-close">Show code</span>
				</a>
				<pre>
<?php Template::_html
('
<div class="template-timeline template-clear-fix">

	<div class="template-timeline-date"><h5>2012</h5></div>
	<div class="template-timeline-content template-clear-fix">
		<div class="template-timeline-content-column-left">
			<ul class="template-timeline-event-list">
				<li>
					<div class="template-event-list-content">
						<span class="template-icon-small template-icon-document">
							<span class="template-event-list-content-icon-arrow"></span>
							<span class="template-event-list-content-icon-circle"></span>
						</span>
						<h3 class="template-event-list-content-date">August 25</h3>
						<h3 class="template-event-list-content-header"><a href="<?php $Template->_getURL(\'blog/post-right-sidebar\'); ?>">Suspendisse erat orci</a></h3>
						<p>Aliquam mattis mauris leo quis aliquam tortoril [...]</p>
					</div>
				</li>
				<li>
					<div class="template-image">
						<a href="media/image/_sample/blog_960x458_1.jpg" class="template-image-box-top template-image-preloader">
							<img src="media/image/_sample/blog_660x314_1.jpg" alt=""/>
						</a>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL(\'blog/post-right-sidebar\'); ?>" class="template-image-box-hover-link-more" title="Open post"></a>
						</div>
					</div>
					<div class="template-event-list-content">
						<span class="template-icon-small template-icon-image">
							<span class="template-event-list-content-icon-arrow"></span>
							<span class="template-event-list-content-icon-circle"></span>
						</span>
						<h3 class="template-event-list-content-date">August 19</h3>
						<h3 class="template-event-list-content-header"><a href="<?php $Template->_getURL(\'blog/post-right-sidebar\'); ?>">Phasellus a ultrices quam</a></h3>
						<p>Vestibulum ante ipsum primis in faucibus orciis [...]</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="template-timeline-content-column-right">
			<ul class="template-timeline-event-list">
				<li>
					<div class="template-image">
						<a href="media/image/_sample/blog_960x458_2.jpg" class="template-image-box-top template-image-preloader">
							<img src="media/image/_sample/blog_660x314_2.jpg" alt=""/>
						</a>
						<div class="template-image-box-hover template-vertical-center">
							<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
							<a href="<?php $Template->_getURL(\'blog/post-right-sidebar\'); ?>" class="template-image-box-hover-link-more" title="Open post"></a>
						</div>
					</div>
					<div class="template-event-list-content">
						<span class="template-icon-small template-icon-image">
							<span class="template-event-list-content-icon-arrow"></span>
							<span class="template-event-list-content-icon-circle"></span>
						</span>
						<h3 class="template-event-list-content-date">May 18</h3>
						<h3 class="template-event-list-content-header"><a href="<?php $Template->_getURL(\'blog/post-right-sidebar\'); ?>">Pellentesque quam ornare</a></h3>
						<p>Nulla nec sapien ultrices dapibus metus sit me amet [...]</p>
					</div>
				</li>
				<li class="template-timeline-event-list-featured">
					<div class="template-event-list-content">
						<span class="template-icon-small template-icon-pin">
							<span class="template-event-list-content-icon-arrow"></span>
							<span class="template-event-list-content-icon-circle"></span>
						</span>
						<h3 class="template-event-list-content-date">April 14</h3>
						<h3 class="template-event-list-content-header"><a href="<?php $Template->_getURL(\'blog/post-right-sidebar\'); ?>">Duis congue in mauris ate</a></h3>
						<p>Proin non nisi eget nisi mollis porttitor. Morbiis nunc [...]</p>
					</div>
				</li>
			</ul>
		</div>	
	</div>
	<div class="template-timeline-date"><h5>2011</h5></div>
</div>
'); 
?>
				</pre>
			</div>
			
		</div>
<?php
		Template::_footer();
?>