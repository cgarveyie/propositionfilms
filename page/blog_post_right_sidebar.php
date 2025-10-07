<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		$Template=new Template();
?>
		<div id="template-page-content">
<?php
		Template::_header('Post Right Sidebar','Posted on February 24, 2014','5 Comments');
?>
			<!-- Complete description of HTML structure for single post is located in file blog_full_width.php -->
			
			<div class="template-page-sidebar template-page-sidebar-right template-clear-fix">
				
				<div class="template-page-sidebar-column-left">
					
					<div class="template-post">
						
						<div class="template-post-section-top">

							<div class="template-image">
								<a href="media/image/_sample/blog_960x458_1.jpg" class="template-image-box-top template-image-preloader">
									<img src="media/image/_sample/blog_660x314_1.jpg" alt=""/>
								</a>
								<div class="template-image-box-hover template-vertical-center">
									<a href="#" class="template-image-box-hover-link-popup" title="Open image"></a>
									<div class="template-image-box-hover-title">Donec vel turpis luctus diam</div>
									<div class="template-image-box-hover-subtitle">Nulla nibh augue pulvinar quis nulla eu consectetur consequat purus</div>
								</div>
								<div class="template-fancybox-description">
									Nulla nibh augue pulvinar quis nulla eu consectetur consequat purus. Lorem ipsum dolor sit amet consectetur adipiscing elit sed viverra est risus non tem sapien dictum vitae. Cras vel mauris consectetur magna hendrerit vehicula a.
								</div>
							</div>

						</div>

						<div class="template-post-section-bottom">

							<div class="template-post-section-bottom-left">
								<div class="template-post-box-post-type template-icon-small template-icon-image"></div>
								<div class="template-post-box-comment-count">5<span></span></div>							
							</div>

							<div class="template-post-section-bottom-right">

								<h2 class="template-post-header">Donec vel turpis luctus diam</h2>

								<div class="template-post-content">
									
									<p><b>Nulla nibh augue pulvinar quis nulla eu consectetur consequat purus. Lorem ipsum dolor sit amet consectetur adipiscing elit sed viverra est risus non tem sapien dictum vitae. Cras vel mauris consectetur magna hendrerit vehicula a.</b></p>
								
									<blockquote class="template-blockquote template-blockquote-style-1 template-margin-top-10 template-margin-bottom-10">
										Quisque consequat ante lacus. Nulla in felis dolor. Phasellus dignissim tristique nis quis sollicitudin odio euismod vel. Pellentesque lacinia quam id nisi mollis, ut tincidi elit imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commi nunc ut augue tincidunt facilisis. Nulla elementum aliquam venenatis. Sed at arcu.
									</blockquote>
									
									<p>Aenean nisi ipsum, aliquet vitae pulvinar nec, lobortis nec justo. Praesent mattis diam eget quam mattis bibendum. Praesent auctor mattis risus, et fringilla urna luctus vitae. Nulla sollicitudin luctus nisl vel placerat. Vestibulum molestie pulvi erat, ut vulputate ante posuere ut. Sed vestibulum fringilla odio, vel aliquet tort. Donec pulvinar ultricies urna vitae sollicitudin. Donec quis elementum metus id ornare velit. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
									
									<p>Aliquam tincidunt vel ligula eu feugiat. Etiam pharetra consectetur dolor et pret turpis fringilla nec. Integer non libero turpis. Phasellus aliquet hendrerit ultricil. Aliquam facilisis nisi dui, sit amet consectetur nunc tristique vel. Praesent eunei condimentum velit. Vivamus nec odio orci.</p>

									<p>Quisque ultricies tristique velit vel scelerisque. Quisque convallis sit amet diam ut pretium. Vivamus rutrum elit a est viverra tristique. Maecenas ac nibh ut alel magi feugiat tempus a nec ligula. Quisque consequat eget arcu ac lacinia. Nam non diam est. Duis eget magna nec nibh hendrerit aliquet at eu tortor. Aliquam a sem tellus. Nunc erat justo, lacinia ut egestas a, dictum eget ipsum. Suspendi potenti. Phasellus blandit venenatis mollis.</p>
									
									<p>Donec malesuada leo a tortor egestas pharetra. Phasellus lobortis auctor metus, at sodales lectus aliquam sed. Proin arcu metus lacinia a purus ultrices commol auctor justo. Suspendisse porta ultricies risus. Vivamus tincidunt dui ac posueri vestibulum. Nullam ullamcorper neque lobortis mattis dapibus. Nunc massa ris laoreet dapibus sapien sit amet dictum ultricies massa. Sed quis eros quis risus tincidunt ullamcorper. Sed consectetur justo quam at ultricies ligula pulvinar at.</p>
									
									<p>Etiam sagittis nec tortor at cursus. Nullam at sem vel urna consequat eleifendil. Donec eget ultricies enim. In pretium consequat tellus. Nullam ullamcorper fril elit sed suscipit. Nam malesuada tortor sed quam ultrices sagittis. Sed at enim sed libero tempus malesuada. In hac habitasse platea dictumst.</p>
									
								</div>

								<a href="<?php $Template->_getURL('blog/post-right-sidebar'); ?>" class="template-button template-button-style-1 template-button-size-medium template-post-button-read-more template-post-button-post-reply">Post A Reply</a>

								<div class="template-post-infobar template-clear-fix">

									<div class="template-post-infobar-date">
										<div class="template-post-infobar-icon"></div>
										<div class="template-post-infobar-name">Posted On</div>
										<div class="template-post-infobar-value">Feb 24, 2014</div>
									</div>

									<div class="template-post-infobar-author">
										<div class="template-post-infobar-icon"></div>
										<div class="template-post-infobar-name">Posted By</div>
										<div class="template-post-infobar-value">Lee Robin</div>
									</div>										

									<div class="template-post-infobar-category">
										<div class="template-post-infobar-icon"></div>
										<div class="template-post-infobar-name">In Category</div>
										<div class="template-post-infobar-value">
											<ul class="template-reset-list template-clear-fix">
												<li><a href="#">News</a>,</li>
												<li><a href="#">Music</a></li>
											</ul>
										</div>
									</div>	

								</div>

							</div>

						</div>
						
					</div>
					
					<?php Template::_include('comment_list.php'); ?>
					<?php Template::_include('comment_form.php'); ?>
					
				</div>
				
				<div class="template-page-sidebar-column-right">
					<?php Template::_include(); ?>
				</div>
				
			</div>
			
		</div>
<?php
		Template::_footer();
?>