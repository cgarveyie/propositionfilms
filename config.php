<?php
		$config=array();
	
		/**********************************************************************/
		/*	Background images												  */
		/**********************************************************************/
		
		$config['slide']=array
		(
			array('image'=>'media/image/background/slider_01.jpg'),
			array('image'=>'media/image/background/slider_02.jpg'),
			array('image'=>'media/image/background/slider_03.jpg')
		);
		
		/**********************************************************************/
		/*	Teamplate options												  */
		/**********************************************************************/
		
		$config['template']=array
		(
			'hashBang'						=>	'#!/',
			'mainPreloader'					=>	1,
			'menuOpenStart'					=>	0,
			'title'							=>	'Node - Responsive Portfolio Template',
			'keywords'						=>	'',
			'description'					=>	''
		);
		
		/**********************************************************************/
		/*	Pages															  */
		/**********************************************************************/
		
		$config['page']=array
		(
			array
			(
				'hash'						=>	'about-us-1',			
				'title'						=>	'About Us | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'about_us_1.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'about-us-2',			
				'title'						=>	'About Us | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'about_us_2.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'milestones',		
				'title'						=>	'Milestones | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'milestone.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'services',		
				'title'						=>	'Services | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'service.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'our-process',		
				'title'						=>	'Our Process | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'our_process.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'blog/full-width',
				'title'						=>	'Blog Full Width | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_full_width.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'blog/right-sidebar',
				'title'						=>	'Blog Right Sidebar | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_right_sidebar.php',
				'fileJS'					=>	''
			),	
			array
			(
				'hash'						=>	'blog/left-sidebar',
				'title'						=>	'Blog Left Sidebar | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_left_sidebar.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'blog/post-full-width',
				'title'						=>	'Post Full Width | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_post_full_width.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'blog/post-right-sidebar',
				'title'						=>	'Post Right Sidebar | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_post_right_sidebar.php',
				'fileJS'					=>	''
			),	
			array
			(
				'hash'						=>	'blog/post-left-sidebar',
				'title'						=>	'Post Left Sidebar | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_post_left_sidebar.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'blog/post-slider',
				'title'						=>	'Post With Slider | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_post_slider.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'blog/post-multi-image',
				'title'						=>	'Post With Multiple Images | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_post_multi_image.php',
				'fileJS'					=>	''
			),				
			array
			(
				'hash'						=>	'blog/post-quote',
				'title'						=>	'Post With Quote | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_post_quote.php',
				'fileJS'					=>	''
			),				
			array
			(
				'hash'						=>	'blog/post-video',
				'title'						=>	'Post With Video | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_post_video.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'blog/post-audio',
				'title'						=>	'Post With Audio | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'blog_post_audio.php',
				'fileJS'					=>	''
			),					
			array
			(
				'hash'						=>	'team/our_team',
				'title'						=>	'Our Team | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'team_our_team.php',
				'fileJS'					=>	''
			),				
			array
			(
				'hash'						=>	'team/member',
				'title'						=>	'Team Member | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'team_member_page.php',
				'fileJS'					=>	''
			),				
			array
			(
				'hash'						=>	'team/layout-infobar',
				'title'						=>	'Team Layout Infobar | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'team_layout_infobar.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'team/layout-2-columns',
				'title'						=>	'Team Layout 2 Columns | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'team_layout_2_column.php',
				'fileJS'					=>	''
			),

			array
			(
				'hash'						=>	'team/layout-3-columns',
				'title'						=>	'Team Layout 3 Columns | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'team_layout_3_column.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'team/layout-4-columns',
				'title'						=>	'Team Layout 4 Columns | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'team_layout_4_column.php',
				'fileJS'					=>	''
			),	
			array
			(
				'hash'						=>	'portfolio/item',
				'title'						=>	'Portfolio Item Page | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'portfolio_item_page.php',
				'fileJS'					=>	''
			),		
			array
			(
				'hash'						=>	'portfolio/layout-1-column',
				'title'						=>	'Portfolio Layout 1 Column | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'portfolio_layout_1_column.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'portfolio/layout-2-columns',
				'title'						=>	'Portfolio Layout 2 Columns | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'portfolio_layout_2_column.php',
				'fileJS'					=>	''
			),	
			array
			(
				'hash'						=>	'portfolio/layout-3-columns',
				'title'						=>	'Portfolio Layout 3 Columns | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'portfolio_layout_3_column.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'portfolio/layout-4-columns',
				'title'						=>	'Portfolio Layout 4 Columns | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'portfolio_layout_4_column.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/accordion',
				'title'						=>	'Styles: Accordion | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_accordion.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/audio',
				'title'						=>	'Styles: Audio | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_audio.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/blockquote',
				'title'						=>	'Styles: Blockquote | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_blockquote.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'styles/button',
				'title'						=>	'Styles: Button | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_button.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'styles/call-to-action',
				'title'						=>	'Styles: Call To Action | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_call_to_action.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'styles/counter-list',
				'title'						=>	'Styles: Counter List | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_counter_list.php',
				'fileJS'					=>	''
			),	
			array
			(
				'hash'						=>	'styles/divider',
				'title'						=>	'Styles: Divider | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_divider.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/dropcap',
				'title'						=>	'Styles: Dropcap | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_dropcap.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'styles/features',
				'title'						=>	'Styles: Features | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_feature.php',
				'fileJS'					=>	''
			),	
			array
			(
				'hash'						=>	'styles/google-maps',
				'title'						=>	'Styles: Google Maps | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_google_map.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'styles/header',
				'title'						=>	'Styles: Headers | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_header.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'styles/iframe',
				'title'						=>	'Styles: Iframe | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_iframe.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/layouts',
				'title'						=>	'Styles: Layouts | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_layout.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/list',
				'title'						=>	'Styles: List | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_list.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/nivo-slider',
				'title'						=>	'Styles: Nivo Slider | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_nivo_slider.php',
				'fileJS'					=>	''
			),		
			array
			(
				'hash'						=>	'styles/nivo-slider-box',
				'title'						=>	'Styles: Nivo Slider Box | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_nivo_slider_box.php',
				'fileJS'					=>	''
			),				
			array
			(
				'hash'						=>	'styles/notice',
				'title'						=>	'Styles: Notice | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_notice.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'styles/process-list',
				'title'						=>	'Styles: Process List | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_process_list.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/resume-list',
				'title'						=>	'Styles: Resume List | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_resume_list.php',
				'fileJS'					=>	''
			),				
			array
			(
				'hash'						=>	'styles/skills-list',
				'title'						=>	'Styles: Skills List | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_skill_list.php',
				'fileJS'					=>	''
			),	
			array
			(
				'hash'						=>	'styles/social-icons',
				'title'						=>	'Styles: Social Icons | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_social_icon.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/space',
				'title'						=>	'Styles: Space | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_space.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/tabs',
				'title'						=>	'Styles: Tabs | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_tab.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'styles/testimonials',
				'title'						=>	'Styles: Testimonials | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_testimonial.php',
				'fileJS'					=>	''
			),			
			array
			(
				'hash'						=>	'styles/timeline',
				'title'						=>	'Styles: Timeline | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_timeline.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'styles/video',
				'title'						=>	'Styles: Video | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'style_video.php',
				'fileJS'					=>	''
			),
			array
			(
				'hash'						=>	'contact',
				'title'						=>	'Contact | '.$config['template']['title'],
				'keywords'					=>	'',
				'description'				=>	'',
				'fileHTML'					=>	'contact.php',
				'fileJS'					=>	''
			)
		);