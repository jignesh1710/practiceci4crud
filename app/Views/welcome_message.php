<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Visualbox Bootstarp Website Template | Home :: w3layouts</title>
		<link href="<?php echo base_url();?>/public/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>/public/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="<?php echo base_url();?>/public/assets/js/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo base_url();?>/public/assets/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/public/assets/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
	</head>
	<body>
		<!-- header -->
		<div class="header">
			<div class="header-info">
				<a href="#"><img src="images/v.png" alt="" /></a>
				<h1>i love design</h1>
				<p>I'm glad that you visited my site where he can get to know me and my work.</p>
			</div>
			<div class="d-arrow">
				<a class="scroll" href="#request"></a>
			</div>
		</div>
		<!-- //header -->
		<!-- header-bottom -->
		<div class="header-bottom">
			<!-- container -->
			<div class="container wrap">
				<p>My name is Vlad Musienko, I'm a web designer. I love to draw and all that is connected with the design. In this area a long time ago and during this time I managed to create several successful projects used by people all over the world.
					My name is Vlad Musienko, I'm a web designer. I love to draw and all that is connected with the design. In this area a long time ago and during this time I managed to create several successful projects used by people all over the world.
				</p> 

				<p>I love the simplicity in the design of web sites. As I see it,people, it's like my work. Naturally do not want to rest on our laurels and will continue further studies to improve soybean skills, creating new interesting creative projects.
					I love the simplicity in the design of web sites. As I see it,people, it's like my work. Naturally do not want to rest on our laurels and will continue further studies to improve soybean skills, creating new interesting creative projects.
				</p>
				<h3>what i do</h3>
				<div class="col-md-4 template">
					<h4>TEMPLATE.</h4>
					<p>Lately, I often create templates for WordPress. The portfolio is the presentation and the opportunity to buy them on the site Themeforest.</p>
				</div>
				<div class="col-md-4 template">
					<h4>BRAND.</h4>
					<p>Creating a brand is a very complex process aimed at the creation and positioning the unique persons of the company, its products and services.</p>
				</div>
				<div class="col-md-4 template">
					<h4>DREAMS.</h4>
					<p>Everyone is able to destroy the dream, but not everyone is able to create it. I try to help people in its definition as a person and specialist.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
		</div>
		<!-- //header-bottom -->
		<!-- work -->
		<div class="work">
			<!-- container -->
			<div class="container">
				<h3>my work</h3>	
				<ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
					<li><span class="filter active" data-filter="app card icon logo web">All Works</span></li>
					<li><span class="filter" data-filter="app">Landing Page</span></li>
					<li><span class="filter" data-filter="card">Web Design</span></li>
					<li><span class="filter" data-filter="icon">Icon Design</span></li>
					<li><span class="filter" data-filter="logo">Template</span></li>
				</ul>
				<div id="portfoliolist">
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="#" class="b-link-stripe b-animate-go">
						     <img src="<?php echo base_url();?>/public/assets/images/2.jpg" />
							 <div class="b-wrapper">
							 <p class="b-animate b-from-left    b-delay03 ">Class aptent taciti sociosqu ad per inceptos himenaeos.</p>
						  	</div></a>
							<div class="work-text"><h4>Positionly gain more traffic</h4><p>Web Design</p></div>
		                </div>
					</div>				
					<div class="portfolio logo mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="#" class="b-link-stripe b-animate-go">
						     <img src="<?php echo base_url();?>/public/assets/images/3.jpg" /><div class="b-wrapper">
							 <p class="b-animate b-from-left    b-delay03 ">Class aptent taciti sociosqu ad per inceptos himenaeos.</p>
						  	</div></a>
							<div class="work-text"><h4>Flag - User Dashboard</h4><p>Icon Design</p></div>
		                </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="#" class="b-link-stripe b-animate-go">
						     <img src="<?php echo base_url();?>/public/assets/images/4.jpg" /><div class="b-wrapper">
							 <p class="b-animate b-from-left b-delay03" id="para">Class aptent taciti sociosqu ad per inceptos himenaeos.</p>
						  	</div></a>
							<div class="work-text"><h4>Google Maps - developers</h4><p>Web Design</p></div>
		                </div>
					</div>				
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="#" class="b-link-stripe b-animate-go">
						     <img src="<?php echo base_url();?>/public/assets/images/8.jpg" /><div class="b-wrapper">
							 <p class="b-animate b-from-left    b-delay03 ">Class aptent taciti sociosqu ad per inceptos himenaeos.</p>
						  	</div></a>
							<div class="work-text"><h4>Djed Landing Page</h4><p>Landing Page</p></div>
		                </div>
					</div>	
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="#" class="b-link-stripe b-animate-go">
						     <img src="<?php echo base_url();?>/public/assets/images/7.jpg" /><div class="b-wrapper">
							 <p class="b-animate b-from-left    b-delay03 ">Class aptent taciti sociosqu ad per inceptos himenaeos.</p>
						  	</div></a>
							<div class="work-text"><h4>MG3 Website</h4><p>Web Design</p></div>
		                </div>
					</div>			
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="#" class="b-link-stripe b-animate-go">
						     <img src="<?php echo base_url();?>/public/assets/images/9.jpg" /><div class="b-wrapper">
							 <p class="b-animate b-from-left    b-delay03 ">Class aptent taciti sociosqu ad per inceptos himenaeos.</p>
						  	</div></a>
							<div class="work-text"><h4>Mixpanel Career</h4><p>Icon Design</p></div>
		                </div>
					</div>
					<div class="clearfix"> </div>	
				</div>
				  <div class="clearfix"> </div>
				<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	
				<!---- Script for gallery Here --->
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script>
					<!--- Gallery Script Ends --->
					<!-- pop-up-box -->
					<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!-- //pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<div class="image-top">
							<img src="images/11.jpg" alt="" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
						</div>
					</div>
			</div>
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
	<!-- Work Ends Here -->

				<div class="clearfix"></div>
				<div class="button">
					<a href="#">See My Work</a>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //work -->
		<!-- photography -->
		<div class="photography">
			<!-- container -->
			<div class="container">
				<h3>photography</h3>
				<p>In my life there is a place for photos. I love to share experiences and beautiful moments of your life with others. You can see the first examples of the new work, or photos from my vacation or a walk in the park. I thought you would be interested.</p>
				<div class="photography-images">	
					<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src="<?php echo base_url();?>/public/assets/images/11.jpg" />
						<div class="caption">
							<span> </span>
						</div>
					</a>
				</div>
				<div class="photography-images">
					<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src="<?php echo base_url();?>/public/assets/images/12.jpg" />
						<div class="caption">
							<span> </span>
						</div>
					</a>
				</div>
				<div class="photography-images">
					<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src="<?php echo base_url();?>/public/assets/images/13.jpg" />
						<div class="caption">
							<span> </span>
						</div>
					</a>
				</div>
				<div class="photography-images">
					<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src="<?php echo base_url();?>/public/assets/images/19.jpg" />
						<div class="caption">
							<span> </span>
						</div>
					</a>
				</div>
				<div class="photography-images">
					<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src="<?php echo base_url();?>/public/assets/images/17.jpg" />
						<div class="caption">
							<span> </span>
						</div>
					</a>
				</div>
				<div class="photography-images">
					<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src="<?php echo base_url();?>/public/assets/images/18.jpg" />
						<div class="caption">
							<span> </span>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
				<div class="button">
					<a href="#">See My Photoblog</a>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //photography -->
		<!-- request -->
		<div id="request" class="request">
			<div class="request-bg">
				<div class="request-info">
					<img src="<?php echo base_url();?>/public/assets/images/15.png" alt="" />
					<p>Subscribe to our newsletter to receive news, updates, free stuff and new releases by email. I do not spam.</p>
					<form>
						<input type="text" placeholder="Enter your email..." required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
			</div>
		</div>
		<!-- //request -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="icons">
					<ul>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="dribble"> </a></li>
						<li><a href="#" class="behance"> </a></li>
						<li><a href="#" class="instagram"> </a></li>
					</ul>
					<p>Copyright &copy 2014. All Rights Reserved.</p>
					<p class="sub-text">Template by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>