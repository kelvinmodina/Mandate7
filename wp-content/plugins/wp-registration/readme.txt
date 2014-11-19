=== Simple User Registration ===
Contributors: nmedia
Donate link: http://www.najeebmedia.com/donate/
Tags: registration form, simple registration, drag drop fields, front end registration, wp registration, signup form, wp signup form, ajax wp form
Requires at least: 3.5
Tested up to: 4.0
Stable tag: 1.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allow admin to create user signup form to render on front end using drag and drop easy admin panel

== Description ==
This plugin render wordpress signup form based on fields selected by Admin. Input fields can be placed in registration form using nice drag and drop meta page.
This plugin is also a best combination when use with N-Media other form plugins like:
[File uploader pro](https://wordpress.org/plugins/nmedia-user-file-uploader/)
[Front end repositor manager](https://wordpress.org/plugins/wp-front-end-repository/)
[Member private conversation](https://wordpress.org/plugins/wordpress-member-private-conversation/)
[File sharing plugin](http://najeebmedia.com/n-media-file-sharing-with-ultimate-security/)


<h3>How to use</h3>
* Just create a page and place this shortcode: `[nm-wp-registration]`
* Then setup form fields and other settins from `Admin -> WP Registration` described below section
* Custom login page can also set with shortcode `[nm-wp-login]`

<h3>Plugin Settings</h3>
= Basic Settings Tab =
* Signup form title (`it will render as Registration form title if requried`);
* Signup form description  (`it will render description under title if required`)
* Terms and conditions (`nice feature to add a checkbox with provided text to accept before submit`)
* Success message (`this message will displayed when form submitted successfully`)
* Redirects URL (`after registration and login redirect url can be set`)
* Validation message (`display a message when one or more required field(s) not provided`)
* Singup button title
= Style & Layout Tab = 
* Signup button text color
* Signup button text font size
* Signup button BG color
* Signup button class
* Form custom CSS editor
= Email Template Tab =
* Set email contents for signup completion (`%USERNAME%`, `%USER_PASSWORD%`, `%SITE_NAME%`)
= Registration Meta =
* Set signup form input fields using drag drop editor



<h3>Features</h3>
<ul>
	<li>Simple Ajax based signup form</li>
	<li>Validation control with personalized message for each input</li>
	<li>Email template for new registration</li>
	<li>Fully responsive</li>
	<li>9 types of input supported
		<ul>
			<li>Text</li>
			<li>Select (with search filter)</li>
			<li>Radio</li>
			<li>Checkbox</li>
			<li>Date</li>
			<li>Mask</li>
			<li>Email</li>
			<li>Number</li>
			<li>Section</li>
		</ul>
	</li>
	<li>Registration and Login redirect URL</li>
	<li>Login form shorcode</li>
	<li>All fields can be seen under user profile</li>
</ul>

<h3>Pro Features</h3>
<ul>
	<li>More input types like: Avartar, Color, Time, Categories, Posts etc</li>
	<li>Autocomplete, multi select input</li>
	<li>Cropping Avartar</li>
	<li>My Posts Area<li>
	<li>Redirects based on user roles</li>
	<li>Change password form</li>
	<li>20 Ready to login Nice templates<li>
	<li>Edit profile meta front end</li>
	<li>Access to Support Forum</li>
</ul>
[Even tell us your features while we are working on PRO](http://www.najeebmedia.com/contact-us/)


== Installation ==

1. Upload plugin directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. After activation, you can set options from `Comment Fields` menu

== Frequently Asked Questions ==
= How to use =
* Just create a page and place this shortcode: `[nm-wp-registration]`
* Then setup form fields and other settins from `Admin -> WP Registration` described below section

= Where all fields are saved? =
* All fields are saved as User meta and can be seen under profile


== Screenshots ==

1. Admin screen for plugin option page
2. Signup form meta fields in plugin option
3. Front end form
4. Profile fileds in admin


== Changelog ==

= 1.0 =
* It is first version, and working perfectly
= 1.1 =
* Email subject is changed
* Email is being sent with admin email and Site title as email header

== Upgrade Notice ==
* Make sure you provide data name field for each input field