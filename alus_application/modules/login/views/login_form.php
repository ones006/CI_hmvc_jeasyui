<section id="message">
		<div class="block-border"><div class="block-content no-title dark-bg">
			<p class="mini-infos">For demo website, use <b>admin</b> / <b>admin</b></p>
		</div></div>
	</section>
	
	<section id="login-block">
		<div class="block-border"><div class="block-content">
			
			<!--
			IE7 compatibility: if you want to remove the <h1>, 
			add style="zoom:1" to the above .block-content div
			-->
			<h1>Admin</h1>
			<div class="block-header">Please login</div>
				
			<p class="message success no-margin">Please Insert Valid Your Account</p>
			
			<?php echo form_open('login/validate_credentials',array('name'=>'login-form','id'=>'login-form','class'=>'form with-margin'));?> 
				<input type="hidden" name="a" id="a" value="send">
				<p class="inline-small-label">
					<label for="login"><span class="big">User name</span></label>
					<input type="text" name="username" id="login" class="full-width" value="">
				</p>
				<p class="inline-small-label">
					<label for="pass"><span class="big">Password</span></label>
					<input type="password" name="password" id="pass" class="full-width" value="">
				</p>
				
				<button type="submit" class="float-right">Login</button>
				<p class="input-height">
					<input type="checkbox" name="keep-logged" id="keep-logged" value="1" class="mini-switch" checked="checked">
					<label for="keep-logged" class="inline">Keep me logged in</label>
				</p>
			</form>
			
			<form class="form" id="password-recovery" method="post" action="">
				<fieldset class="grey-bg no-margin collapse">
					<legend><a href="#">Lost password?</a></legend>
					<p class="input-with-button">
						<label for="recovery-mail">Enter your e-mail address</label>
						<input type="text" name="recovery-mail" id="recovery-mail" value="">
						<button type="button">Send</button>
					</p>
				</fieldset>
			</form>
		</div></div>
	</section>
