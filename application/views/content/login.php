		<!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Login</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<?php
							echo validation_errors();
							$attributes = array('role' => 'form');
							echo form_open('login/isMember', $attributes);
							?>
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>SK Dinas Kesehatan</b></label>
									<input class="form-control" id="login-username" name="login-nim" type="text" value="" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input class="form-control" id="login-password" name="login-password" type="password" value="" placeholder="">
								</div>
								<div class="form-group">
									<!--a href="" class="forgot-password">Forgot password?</a-->
									<button type="submit" class="btn pull-right">Login</button>
									<div class="clearfix"></div>
								</div>
							<?php echo form_close(); ?>
						</div>
					</div>
					<div class="col-sm-7 social-login">
						<div class="clearfix"><?php if(isset($message)){echo '<strong>'.$message.'</strong>'; } ?></div>
						<div class="not-member">
							<p>Not a member? <?php echo anchor('tracer/formregistrasi','Register here'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>