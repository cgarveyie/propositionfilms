<?php
		require_once(dirname(__FILE__).'/../class/Template.class.php');
		
		global $imageDimension;
		$imageDimension='960x458';
?>
		<div id="template-page-content">
<?php
		Template::_header('Blog Full Width','Blog about our thoughts, new technology and our services','A daily dose of anything we find interesting');
?>
			<?php Template::_include('blog_post_list.php'); ?>
			
		</div>
<?php
		Template::_footer();
?>