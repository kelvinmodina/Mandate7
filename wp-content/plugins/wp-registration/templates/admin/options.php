<?php

$basic_options = array('form-title'	=> array(	'label'		=> __('Signup form title', 'wp-registration'),
					 							'desc'		=> __('Provide signup form title', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_form_title',
					 							'type'			=> 'text',
					 							'default'		=> '',
					 							'help'			=> ''
					 							),
					'form-description' => array(	'label'		=> __('Signup form description', 'wp-registration'),
					 							'desc'		=> __('Provide signup form description', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_form_desc',
					 							'type'			=> 'textarea',
					 							'default'		=> '',
					 							'help'			=> ''
					 							),
					'terms-condition'=> array(	'label'		=> __('Terms and condition', 'wp-registration'),
					 							'desc'		=> __('Enter terms and condition', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_terms_condition',
					 							'type'			=> 'textarea',
					 							'default'		=> '',
					 							'help'			=> __('It will put a term & condition checkout with your text at the bottom of registration page.', 'wp-registration'),
					 							),
					'success-message'=> array(	'label'		=> __('Successful registration message', 'wp-registration'),
					 							'desc'		=> __('Enter the message for successful registration', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_success_message',
					 							'type'			=> 'text',
					 							'default'		=> '',
					 							'help'			=> __('It will be shown to user after successful registration.', 'wp-registration'),
					 							),
					'redirect-url'=> 	array(  'label'		=> __('Redirect after registration', 'wp-registration'),
					 							'desc'		=> __('Enter URL to redirect after submission button', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_redirect_url',
					 							'type'			=> 'text',
					 							'default'		=> '',
					 							'help'			=> __('If provided user will be redirected to this url on successful registration.', 'wp-registration'),
					 							),
		
				'redirect-url-login'=> 	array(  'label'		=> __('Redirect after login', 'wp-registration'),
												'desc'		=> __('Enter URL to redirect after submission button', 'wp-registration'),
												'id'			=> 'nm_wpregistration'.'_redirect_url_login',
												'type'			=> 'text',
												'default'		=> '',
												'help'			=> __('If provided user will be redirected to this url on successful registration.', 'wp-registration'),
												),
					'button-title'=> 	array(  'label'		=> __('Button title', 'wp-registration'),
												'desc'		=> __('Provide signup form submit button label', 'wp-registration'),
												'id'			=> 'nm_wpregistration'.'_button_title',
												'type'			=> 'text',
												'default'		=> '',
												'help'			=> ''
										),
				'validation-message'=> 	array(  'label'		=> __('Signup form validation message', 'wp-registration'),
												'desc'		=> __('Provide signup form validation message', 'wp-registration'),
												'id'			=> 'nm_wpregistration'.'_validation_notification',
												'type'			=> 'text',
												'default'		=> '',
												'help'			=> __('It shows validation notification at bottom of the signup form, when one or more required fields are empty.', 'wp-registration'),
										),
					);
					

$meatEmailTemplates = array('new-user' => array(	'label'		=> __('New user email', 'wp-registration'),
					 							'desc'		=> __('Email template for new user registration', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_new_user',
					 							'type'			=> 'textarea',
					 							'default'		=> '%USERNAME%, %USER_PASSWORD%, %SITE_NAME%',
					 							'help'			=> __('Provide template for new user. Put %USERNAME%, %USER_PASSWORD% and %SITE_NAME% at appropriate positions. These will be replaced with user name, user password and site name.', 'wp-registration'),
					 							),
					/*'change-password' => array(	'label'		=> __('Change password email', 'wp-registration'),
					 							'desc'		=> __('Email template on successfull change of user password', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_change_password',
					 							'type'			=> 'textarea',
					 							'default'		=> '',
					 							'help'			=> ''
					 							)*/
					);

$style_settings = array(
		'button-txt-color'=> array(	'label'		=> __('Signup button text color', 'wp-registration'),
				'desc'		=> __('Select signup form submit button text color', 'wp-registration'),
				'id'			=> 'nm_wpregistration'.'_button_txt_color',
				'type'			=> 'color',
				'default'		=> '#fff',
				'help'			=> 'in Hex code like: #ffccc'
		),
		'button-txt-font'=> array(  'label'		=> __('Button font size', 'wp-registration'),
				'desc'		=> __('Select signup form submit button font size', 'wp-registration'),
				'id'			=> 'nm_wpregistration'.'_button_fontsize',
				'type'			=> 'select',
				'default'		=> '12px',
				'options'		=> array('12px'=>'12px', '14px'=>'14px', '16px'=>'16px', '18px'=>'18px', '20px'=>'20px', '22px'=>'22px'),
				'help'			=> ''
		),
		'button-bg-color'=> array('label'		=> __('Signup form button BG color', 'wp-registration'),
				'desc'		=> __('Select signup form submit button BG color', 'wp-registration'),
				'id'			=> 'nm_wpregistration'.'_button_bg_color',
				'type'			=> 'color',
				'default'		=> '#999',
				'help'			=> 'in Hex code like: #ffccc'
		),
		'button-class'	=> array(	'label'		=> __('Button class', 'wp-registration'),
				'desc'		=> __('Enter button class', 'wp-registration'),
				'id'			=> 'nm_wpregistration'.'_button_class',
				'type'			=> 'text',
				'default'		=> '',
				'help'			=> __('if you need add more styles you can add class to signup button', 'wp-registration'),
		),
		'form-css'		=> array(	'label'		=> __('Form custom CSS', 'wp-registration'),
				'desc'		=> __('Enter custom CSS', 'wp-registration'),
				'id'			=> 'nm_wpregistration'.'_form_css',
				'type'			=> 'textarea',
				'default'		=> '',
				'help'			=> ''
		),
);
					
/*$meat_pro_features = array('min-files'	=> array(  'label'		=> __('Min. files allowed to upload', 'nm-filemanager'),
												   'desc'		=> __('Enter min. files in numbers. Leave blank for disable this.', 'nm-filemanager'),
				  		   						   'id'			=> 'nm_filemanager'.'_min_files',
												   'type'		=> 'text',
												   'default'	=> '',
												   'help'		=> __('like: 2', 'nm-filemanager')
												),
						   'admin-email'=> array(  'label'		=> __('Send email to admin?', 'nm-filemanager'),
												   'desc'		=> __('Please check if you want to send email notification to admin.', 'nm-filemanager'),
				  		   						   'id'			=> 'nm_filemanager'.'_admin_email',
												   'type'		=> 'checkbox',
												   'default'	=> '',
												   'options'	=> array('yes'	=> 'Yes'),
												   'help'		=> ''
												),												
						   'upload-area'=> array(  'label'		=> __('Hide upload section?', 'nm-filemanager'),
												   'desc'		=> __('Please check if you want to hide upload section.', 'nm-filemanager'),
				  		   						   'id'			=> 'nm_filemanager'.'_upload_area',
												   'type'		=> 'checkbox',
												   'default'	=> '',
												   'options'	=> array('yes'	=> 'Hide'),
												   'help'		=> ''
												),												
						   'download-area'=> array(  'label'	=> __('Hide file list section?', 'nm-filemanager'),
												   'desc'		=> __('Please check if you want to hide uploaded file section.', 'nm-filemanager'),
				  		   						   'id'			=> 'nm_filemanager'.'_download_area',
												   'type'		=> 'checkbox',
												   'default'	=> '',
												   'options'	=> array('yes'	=> 'Hide'),
												   'help'		=> ''
												),												
						   'allow-public'=> array(  'label'	=> __('Allow public file upload?', 'nm-filemanager'),
												   'desc'		=> __('Please check if you want to allow public (non logged in users) to upload files.', 'nm-filemanager'),
				  		   						   'id'			=> 'nm_filemanager'.'_allow_public',
												   'type'		=> 'checkbox',
												   'default'	=> '',
												   'options'	=> array('yes'	=> 'Yes'),
												   'help'		=> ''
												),									
						   'public-user'=> array(  'label'	=> __('User ID for public file upload', 'nm-filemanager'),
												   'desc'		=> __('Enter the user id under which public files will be upload.', 'nm-filemanager'),
				  		   						   'id'			=> 'nm_filemanager'.'_public_user',
												   'type'		=> 'text',
												   'default'	=> '',
												   'help'		=> __('Type userID like: <strong>1</strong>', 'nm-filemanager')
												),	
					'user-redirect' =>	array(	'label'		=> __('User redirect settings', 'wp-registration'),
					 							'desc'		=> __('Enter user role and redirect url(page). One role per line.', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_user_redirect',
					 							'type'			=> 'textarea',
					 							'default'		=> '',
					 							'help'			=> __('e.g:  author:welcome-user-page', 'wp-registration')
					 							),
					'set-password'	=> array(	'label'		=> __('User password', 'wp-registration'),
					 							'desc'		=> __('Do you want to set password manually by user?', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_set_password',
					 							'type'			=> 'checkbox',
					 							'default'		=> '',
												'options'	=> array('yes'	=> 'Yes'),
					 							'help'			=> ''
					 							),
					'reset-password'=> array(	'label'		=> __('Reset password email', 'wp-registration'),
					 							'desc'		=> __('Email template on successfull reset of user password', 'wp-registration'),
					 							'id'			=> 'nm_wpregistration'.'_reset_password',
					 							'type'			=> 'textarea',
					 							'default'		=> '%USER_PASSWORD%',
					 							'help'			=> __('Provide template for reset password. Put %USER_PASSWORD% at appropriate position. This will be replaced with new password.', 'wp-registration'),
					 							),											
);*/

$meat_file_meta = array('file-meta'	=> array(	
									'desc'		=> $proFeatures,
									'type'		=> 'file',
									'id'		=> 'file-meta.php',
									),
								);


$this -> the_options = array(
					'basic-settings'	=> array(	
							'name'		=> __('Basic settings', 'wp-registration'),
							'type'	=> 'tab',
							'desc'	=> __('Set options as per your need', 'wp-registration'),
							'meat'	=> $basic_options,
							),
		
					'style-settings'	=> array(	
							'name'		=> __('Style & Layout settings', 'wp-registration'),
							'type'	=> 'tab',
							'desc'	=> __('Set form design', 'wp-registration'),
							'meat'	=> $style_settings,
					
					),
					'email-templates'	=> array(	
							'name'		=> __('Email Templates', 'wp-registration'),
							'type'	=> 'tab',
							'desc'	=> __('Set email templates as per your need', 'wp-registration'),
							'meat'	=> $meatEmailTemplates,
						),
		
		/*'pro-features'	=> array(	'name'		=> __('Pro features', 'nm-filemanager'),
				'type'	=> 'tab',
				'desc'	=> __('More features in pro version is added below', 'nm-filemanager'),
				'meat'	=> $meat_pro_features,
				'class'	=> 'pro',
					
		),*/
					'file-meta'	=> array(	'name'		=> __('Registration Meta', 'wp-registration'),
							'type'	=> 'tab',
							'desc'	=> __('More field can be attached to User registration', 'wp-registration'),
							'meat'	=> $meat_file_meta,
							'class'	=> 'pro',
					
					),
	
					);

//print_r($repo_options);