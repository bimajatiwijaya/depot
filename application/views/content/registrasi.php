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
					<div class="col-sm-7 social-login">
						<div class="basic-login">
							<?php
							echo validation_errors();
							$attributes = array('role' => 'form');
							echo form_open('tracer/registrasiUser', $attributes);
							?>
								<div class="form-group">
									<?php echo form_label('NIM'); ?>
									<?php echo form_input(array('class'=>'form-control','id' => 'login-nim', 'name' => 'login-nim')); ?>
								</div>
								<div class="form-group">
									<?php echo form_label('Password'); ?>
									<?php echo form_password(array('class'=>'form-control','id' => 'login-password', 'name' => 'login-password')); ?>
								</div>
								<div class="form-group">
									<?php echo form_label('Validation Password'); ?>
									<?php echo form_password(array('class'=>'form-control','id' => 'login-password', 'name' => 'validation-password')); ?>
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Registrasi</button>
									<div class="clearfix"></div>
								</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>