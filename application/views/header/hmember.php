<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Theme by CssTemplateHeaven</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/base2013/stylesheets/foundation.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/base2013/stylesheets/main.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/base2013/stylesheets/app.css'; ?>">

  <script src="<?php echo base_url().'assets/base2013/javascripts/modernizr.foundation.js'; ?>"></script>
  
  <link rel="stylesheet" href="<?php echo base_url().'assets/base2013/ligature.css'; ?>">
  
  <!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
<!-- ######################## Main Menu ######################## -->
 
<nav>

     <div class="twelve columns header_nav">
     <div class="row">
      
        <ul id="menu-header" class="nav-bar horizontal">
        
         <li><a href="index.html">Home</a></li>
      
          <li class="has-flyout">
           <a href="#">Menus</a><a href="#" class="flyout-toggle"></a>
            <ul class="flyout"><!-- Flyout Menu -->
              <li class="has-flyout"><a href="">Profil</a></li>
              <li class="has-flyout"><a href="">Uji Kimia</a></li>
              <li class="has-flyout"><a href="">Uji Mikroba</a></li>
              <li class="has-flyout"><a href="">Isi Ulang Depot</a></li>
            </ul> 
          </li><!-- END Flyout Menu -->
      
          <li class=""><a href="galleries.html">Boxed Gallery</a></li>
          <li  class="active"><a href="portfolio.html">Portfolio Gallery</a></li>
          <li class=""><a href="">Pinterest Gallery</a></li>
          <li class=""><a href="">Tiles</a></li>
        </ul>
        <script type="text/javascript">
         //<![CDATA[
         $('ul#menu-header').nav-bar();
          //]]>
        </script>
        
      </div>  
      </div>
      
</nav>