<div id="nm-wp-login">
	
<form name="loginform" id="loginform" action="<?php echo wp_login_url(); ?>" method="post">
	<p>
		<label for="user_login">Username<br>
		<input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
	</p>
	<p>
		<label for="user_pass">Password<br>
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In">
		<!--<input type="hidden" name="redirect_to" value="http://shafiamall.co.uk/wp-admin/">-->
		<input type="hidden" name="testcookie" value="1">
	</p>
</form>

<p id="nav">
<a rel="nofollow" href="<?php echo wp_registration_url(); ?> ">Register</a> | 	<a href="javascript:lost_password();" title="Password Lost and Found">Lost your password?</a>
</p>
<div id="div-reset-password" style="display:none">
Email:
<input type="email" id="txt-reset-password" placeholder="Enter your email address...">
<br/>
<input type="button" value="Reset" onClick="nm_wp_reset_password()">
<span id="nm-doing-reset"></span>
	<?php wp_nonce_field('doing_login','nm_wpregistration_nonce');?>
</div>

<!--<script type="text/javascript">


/*function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();*/
</script>-->

	
	</div>