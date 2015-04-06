<!-- banner -->	
	<div class="banner">
		<div class="wmuSlider example1 section" id="section-1">
			   <article style="position: absolute; width: 100%; opacity: 0;"> 
				<div class="banner-info">
					<h1>Monitoring Depot air untuk Pelayanan terbaik terhadap konsumen.</h1>
				</div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
					<div class="banner-info">
						<h1>10 Depot air terbaik sesuai dengan uji laboratorium bakteri</h1>
					</div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
					<div class="banner-info">
						<h1>Seluruh profil, laporan dan kualitas Depot Air dari uji laboratorium bersertifikat</h1>
					</div>
				</article>
				<ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="">2</a></li>
                </ul>
		 </div>		
		
		<!-- script -->
          <script src="<?=base_url()?>assets/costumer/js/jquery.wmuSlider.js"></script> 
			<script>
       			$('.example1').wmuSlider();         
   		    </script>
			<!-- script -->	
	</div>
<!-- banner -->	
<!-- feature -->
<div class="feature">
	<div class="col-md-12 feature-left">
		<h3>Statistik Uji Laboratorium Depot Air Terbaik</h3>
		<h2>10 Depot Terbaik</h2>
		<div class="table-responsive">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Depot</th>
						<th>Alamat</th>
						<th>Kecamatan</th>
						<th>Telpon</th>
						<th>Skor</th>
						<th>Detail</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i=1;
						foreach ($depot->result() as $v) {
					?>
					<tr>
						<td><?=$i?></td>
						<td><?=$v->NmUsaha?></td>
						<td><?=$v->AlmUsaha?></td>
						<td><?=$v->KecUsaha?></td>
						<td><?=$v->TelpUsaha?></td>
						<td>#</td>
						<td><a class="read" href="single.html">Detail</a></td>
					</tr>
					<?php
						$i++;
						}
					?>

				</tbody>
			</table>
		</div>
	</div>

<div class="clearfix"> </div>
</div>	
		<!-- downlod -->
	<div class="downlod">
		<div class="dow-top">
			<div class="dow">
				<h3>Laporan Uji Lab Terbaru</h3>
			</div>
			<div class="dow-le">
				<h6>Categories: <a href="#"> All </a>, <!-- <a href="#"> Marketing </a>, <a href="#"> Finances </a>, <a href="#"> Sales </a> --> </h6>
			</div>
			<div class="clearfix"> </div>
		</div>
			<ul id="flexiselDemo3">
				<li>
					<div class="team1">
						<div class="tm-left">
							<img src="<?=base_url()?>assets/costumer/images/img5.jpg" class="img-responsive" alt="" />
						</div>
						<div class="tm-right">
							<h5>Nam liber tempor cum soluta nobis eleifend option congue</h5>
							<p>Lorem ipsum dolor sit amectetuer adipiscing elit, sed diam... <a href="#">More</a></p>
							<p>Tags: Business, Contacts</p>
							<p>Category: <a href="#">Uji Lab</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
				<li>
					<div class="team1">
						<div class="tm-left">
							<img src="<?=base_url()?>assets/costumer/images/img5.jpg" class="img-responsive" alt="" />
						</div>
						<div class="tm-right">
							<h5>Nam liber tempor cum soluta nobis eleifend option congue</h5>
							<p>Lorem ipsum dolor sit amectetuer adipiscing elit, sed diam... <a href="#">More</a></p>
							<p>Tags: Business, Contacts</p>
							<p>Category: <a href="#">Uji Lab</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
				<li>
					<div class="team1">
						<div class="tm-left">
							<img src="<?=base_url()?>assets/costumer/images/img5.jpg" class="img-responsive" alt="" />
						</div>
						<div class="tm-right">
							<h5>Nam liber tempor cum soluta nobis eleifend option congue</h5>
							<p>Lorem ipsum dolor sit amectetuer adipiscing elit, sed diam... <a href="#">More</a></p>
							<p>Tags: Business, Contacts</p>
							<p>Category: <a href="#">Uji Lab</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
				<li>
					<div class="team1">
						<div class="tm-left">
							<img src="<?=base_url()?>assets/costumer/images/img5.jpg" class="img-responsive" alt="" />
						</div>
						<div class="tm-right">
							<h5>Nam liber tempor cum soluta nobis eleifend option congue</h5>
							<p>Lorem ipsum dolor sit amectetuer adipiscing elit, sed diam... <a href="#">More</a></p>
							<p>Tags: Business, Contacts</p>
							<p>Category: <a href="#">Uji Lab</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
				<li>
					<div class="team1">
						<div class="tm-left">
							<img src="<?=base_url()?>assets/costumer/images/img5.jpg" class="img-responsive" alt="" />
						</div>
						<div class="tm-right">
							<h5>Nam liber tempor cum soluta nobis eleifend option congue</h5>
							<p>Lorem ipsum dolor sit amectetuer adipiscing elit, sed diam... <a href="#">More</a></p>
							<p>Tags: Business, Contacts</p>
							<p>Category: <a href="#">Uji Lab</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
			 </ul>
		
		 <script type="text/javascript">
			$(window).load(function() {
				
				$("#flexiselDemo3").flexisel({
					visibleItems: 3,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				
			});
			</script>
			<script type="text/javascript" src="<?=base_url()?>assets/costumer/js/jquery.flexisel.js"></script>
	</div>
	<!-- downlod -->
</div>