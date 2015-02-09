    
          
        <!-- END Header -->
        <!-- ######################## Header ######################## -->
        
        <header>
              <h1 class="welcome_text">Product Title</h1>    
        </header>
      
   <!-- ######################## Section ######################## -->
      
      <section class="section_light">
      <div class="row">


<div class="row">
<div class="six columns">
<img src="images/prod_large.jpg" alt="Product Image Description">
</div>

<div class="six columns">
<div class="panel">
				
	  <h3>Product Price calculator</h3>
	  <p style="font-style: italic; font-family: Georgia">Not working without a script</p>


		<form name="product_list" action="#">
		<?php if ($this->session->flashdata('message'))echo $this->session->flashdata('message');?>
		<label><strong>Username</strong></label>
		<input name="username" id="width" value="" class="input_title_invoice" type="text"><p></p>

		<label><strong>Password</strong></label>
		<input name="password" id="length" value="" class="input_title_invoice" type="password"><p></p>
		
		<p><?=$image;?></p>
		<label style="font-weight:bold">Captcha</label>
		<input type="text" name="secutity_code" class="input_title_invoice">
			   
		<p style="font-size: 11px; padding: 0 0 11px; margin-top: 9px">
		<a class="button" href="#">Log in</a>

		</form>

	</div> <!-- end panel -->

</div>
</div><!-- end row -->

      </div>

        </section>
        
		<!-- end section -->