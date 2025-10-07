<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		
		global $imageDimension;
		$imageDimension='660x314';
?>
		<div id="template-page-content">
<?php
		Template::_header('Blog Right Sidebar','Blog about our thoughts, new technology and our services','A daily dose of anything we find interesting');
?>
			<div class="template-page-sidebar template-page-sidebar-right template-clear-fix">
				
				<!-- Left column -->
				<div class="template-page-sidebar-column-left">
					<?php Template::_include('blog_post_list.php'); ?>
				</div>
				<!-- /Left column -->
				
				<!-- Right column -->
				<div class="template-page-sidebar-column-right">
					<?php Template::_include(); ?>
				</div>
				<!-- /Right column -->
				
			</div>
			
		</div>
<?php
		Template::_footer();
?>