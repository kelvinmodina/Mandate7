<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {
	global $textdomain; 
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	
	$meta_boxes[] = array(
		'id'         => 'post_options',
		'title'      => 'Post Options',
		'pages'      => array('post'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
           
			array(
                'name' => 'Grid Animation',
                'desc' => 'Set post animation',
                'id'   => $prefix . 'animation',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'No', 'value' => 'no', ),
                    array( 'name' => 'fadeInLeft', 'value' => 'fadeInLeft', ),
                    array( 'name' => 'fadeInUp', 'value' => 'fadeInUp', ),
                    array( 'name' => 'fadeInRight', 'value' => 'fadeInRight', ),
                    )
            ),
			
		),
	);
	
	$meta_boxes[] = array(
		'id'         => 'team_options',
		'title'      => 'Team Options',
		'pages'      => array('team'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
           
			array(
                'name' => 'Job',
                'desc' => 'job',
                'id'   => $prefix . 'job',
                'type'    => 'text',
				'std' => 'CEO - Commander'
                
            ),
			
			array(
                'name' => 'Social',
                'desc' => 'social',
                'id'   => $prefix . 'social',
                'type'    => 'textarea',
				'std' => '<a href="#" target="_blank" class="more" ><i class="fa fa-google-plus"></i></a>
<a href="#" target="_blank" class="more" ><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank" class="more" ><i class="fa fa-twitter"></i></a>'
                
            ),
			
			array(
				'name'         => __( 'Avatar', $textdomain ),
				'desc'         => __( 'Upload your avatar.', $textdomain ),
				'id'           => $prefix . 'avatar',
				'type'         => 'file',
				'preview_size' => array( 200, 300 ), // Default: array( 50, 50 )
			),
			array(
				'name'         => __( 'Avatar on Hover', $textdomain ),
				'desc'         => __( 'Upload your avatar on hover.', $textdomain ),
				'id'           => $prefix . 'avatar_hover',
				'type'         => 'file',
				'preview_size' => array( 200, 300 ), // Default: array( 50, 50 )
			),
		),
	);
	$meta_boxes[] = array(
		'id'         => 'service_options',
		'title'      => 'About Options',
		'pages'      => array('qk_service'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
           
			array(
                'name' => 'Icon',
                'desc' => 'You can find list all icon in "spring\fonts\icon-works\Glyph-Chart.html"',
                'id'   => $prefix . 'ser_icon',
                'type'    => 'text',
				'std' => ''
                
            ),
			
			
		),
	);
	$meta_boxes[] = array(
		'id'         => 'nk_service_options',
		'title'      => 'Services Options',
		'pages'      => array('nk_service'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
           
			array(
                'name' => 'Icon',
                'desc' => 'List all icon here: <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">http://fortawesome.github.io/Font-Awesome/icons/</a>',
                'id'   => $prefix . 'nk_icon',
                'type'    => 'text',
				'std' => ''
                
            ),
			array(
                'name' => 'Services Includeds',
                'desc' => '',
                'id'   => $prefix . 'nk_ser_inc',
                'type'    => 'textarea',
				'std' => ''
                
            ),
			
			
		),
	);
	
	
	$meta_boxes[] = array(
        'id'         => 'slide_setting',
        'title'      => 'Slide Setting',
        'pages'      => array('qk_gallery'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            
            array(
                'name' => 'Gallery Sub Title',
                'desc' => '',
                'id'   => $prefix . 'gallery_subtitle',
                'type'    => 'text',
				'std' => 'Raint the lorem ipsum dolor ullamco.'
                
            ),
            array(
				'name'         => __( 'Gallery background', $textdomain ),
				'desc'         => __( 'Upload gallery background.', $textdomain ),
				'id'           => $prefix . 'gallery_bg',
				'type'         => 'file',
				'preview_size' => array( 200, 100 ), // Default: array( 50, 50 )
			),
    
        )
    );
	
	$meta_boxes[] = array(
		'id'         => 'portfolio_options',
		'title'      => 'Portfolio Options',
		'pages'      => array('portfolio'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			
			array(
                'name' => 'Portfolio Type',
                'desc' => '(Video / Slider)',
                'id'   => $prefix . 'portfolio_type',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Image/Slider', 'value' => 'image', ),
                    array( 'name' => 'Video', 'value' => 'video', ),
                    )
            ),
			
			array(
				'name'         => __( 'Portfolio Slider', $textdomain ),
				'desc'         => __( 'Upload or add multiple images/attachments.', $textdomain ),
				'id'           => $prefix . 'p_slider',
				'type'         => 'file_list',
				'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
			),
			
			array(
                'name' => 'oembed URL for post format video',
                'desc' => 'Set Intro video',
                'id'   => $prefix . 'intro_video',
                'type'    => 'oembed',
            ),
			
			
			array(
                'name' => 'Project Subtitle',
                'desc' => '',
                'id'   => $prefix . 'p_subtitle',
                'type'    => 'text',
				'std' => ''
                
            ),
			array(
                'name' => 'Date',
                'desc' => '',
                'id'   => $prefix . 'p_date',
                'type'    => 'text',
				'std' => ''
                
            ),
			array(
                'name' => 'Client',
                'desc' => '',
                'id'   => $prefix . 'p_client',
                'type'    => 'text',
				'std' => ''
                
            ),
			array(
                'name' => 'Link',
                'desc' => 'link to Project',
                'id'   => $prefix . 'p_link',
                'type'    => 'text',
				'std' => '#'
                
            ),
		),
	);
	$meta_boxes[] = array(
		'id'         => 'client_options',
		'title'      => 'Client Options',
		'pages'      => array('client'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
           
			array(
				'name' => 'Link',
				'desc' => '',
				'id'   => $prefix . 'c_url',
				'type' => 'text',
				'std' => '#',
			),
			
			array(
				'name'         => __( 'Client Logo', $textdomain ),
				'desc'         => __( 'Upload your client\'s  Logo.', $textdomain ),
				'id'           => $prefix . 'c_logo',
				'type'         => 'file',
				'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
			),
		),
	);
	$meta_boxes[] = array(
		'id'         => 'testimonial_options',
		'title'      => 'Testimonial Options',
		'pages'      => array('testimonial'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			
			array(
				'name' => 'Job',
				'desc' => '',
				'id'   => $prefix . 't_job',
				'type' => 'text',
			),
			
		),
	);
	
	$meta_boxes[] = array(
        'id'         => 'slide_setting',
        'title'      => 'Slide Setting',
        'pages'      => array('flexslider'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
           
            array(
				'name'         => __( 'Slide Image', $textdomain ),
				'desc'         => __( 'Upload slide background.', $textdomain ),
				'id'           => $prefix . 'slide_bg',
				'type'         => 'file',
				'preview_size' => array( 200, 100 ), // Default: array( 50, 50 )
			),
    
        )
    );
	
	
	
	$meta_boxes[] = array(
		'id'         => 'seo_fields',
		'title'      => 'SEO Fields',
		'pages'      => array( 'page', 'post','portfolio'), // Post type
		'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
		//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
				'name' => 'SEO title',
				'desc' => 'Title for SEO (optional)',
				'id'   => $prefix . 'seo_title',
				'type' => 'text',
			),
            array(
                'name' => 'SEO Keywords',
                'desc' => 'SEO keywords (optional)',
                'id'   => $prefix . 'seo_keywords',
                'type' => 'text',
            ),
            array(
                'name' => 'SEO Description',
                'desc' => 'SEO description (optional)',
                'id'   => $prefix . 'seo_description',
                'type' => 'text',
            ),
		)
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
