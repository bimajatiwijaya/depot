<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="developer" content="bimajatiwijaya">
	<meta name="design" content="2013 mPurpose.">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/purpose/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/purpose/css/icomoon-social.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/purpose/css/leaflet.css" />
	<!--[if lte IE 8]>
		<link rel="stylesheet" href="css/leaflet.ie.css" />
	<![endif]-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/purpose/css/main.css">

	<script src="<?php echo base_url(); ?>assets/purpose/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
<!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
			        		<li>
							<?php
								if($this->session->userdata('member')==null)
								{
									echo anchor('tracer/formlogin','LOGIN');
								}
								else
								{
									echo anchor('tracer/logout','LOGOUT');
								}
							?>
							</li>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/purpose/img/logo.png" width="100%" height="100%" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li>
							<?php echo anchor('tracer','Home'); ?>
						</li>
						<li>
							<a href="">Tentang</a>
						</li>
						<li>
							<?php echo anchor('tracer/formTracer','Tracer Dikti'); ?>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	<!-- Content -->
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php echo $output; ?>
	</div>
	</div>
	</div>
	</div>
<!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3></h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="http://cc.dinus.ac.id/" target="_blank"><img src="<?php echo base_url(); ?>assets/purpose/img/udinus.png" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    		<div class="col-footer col-md-6 col-xs-12">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> Jl. Nakula I No. 5-11 Semarang dan Jl. Imam Bonjol No. 207 Semarang<br/>
	        				<b>Phone:</b> (024) 3517261<br/>
	        				<b>Fax:</b> (024) 3569684<br/>
	        				<b>Email:</b> <a href="mailto:sekretariat@dinus.ac.id">sekretariat@dinus.ac.id</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-2">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="https://www.facebook.com/groups/udinuscareercenter" class="facebook" target="_blank"></a></li>
		    				<li><a href="https://twitter.com/dinus_career" class="twitter" target="_blank"></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2015 Udinus Career Center.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>
    </body>
</html>
