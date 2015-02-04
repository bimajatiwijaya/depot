<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>---</title>
        <meta name="description" content="tracer udinus,alumni,lulusan,wisuda udinus">
        <meta name="developer" content="bimajatiwijaya,m.fathkurokhim">
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
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

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
					</ul>
				</nav>
			</div>
		</div>