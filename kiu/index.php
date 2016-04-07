<?php
include_once('modules/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Kampala International University</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Amberegul Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- start menu -->
<link href="css/my_css.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script type="text/javascript" src="js/my_js.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--//slider-script-->

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	

<script src="js/simpleCart.min.js"> </script>

</head>
<body> 
<!--header-->	
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="header-top-in" style="border: solid 2px silver;border-top:none;height:50px;">
				
				<ul class="support" style="padding:5px;margin-top:-15px;">
				
                     <li ><span ><i class="tele-in"> </i><a href="#">Students</a></span></li>
					<li ><span ><i class="tele-in"> </i><a href="#">Alumni</a></span></li>	
                    <li ><a href="#" ><i > </i>Staff</a></li>
                    <li ><a href="#" ><i > </i>Services</a></li>
                   		
				</ul>
				<ul class=" support-right" style="padding:5px;margin-top:-15px;">
			
                    <li ><a href="account.html" ><i class="tele"> </i>About Us</a></li>
                    <li ><a href="account.html" ><i class="tele"> </i>Mission | Vission</a></li>
                    <li ><a href="account.html" ><i class="men"> </i>Contact Us</a></li>
                    <li ><a href="account.html" ><i class="men"> </i>News</a></li>
                    <li ><a href="account.html" ><i class="tele"> </i>Guests</a></li>			
				</ul>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="header-bottom" style="border-bottom:solid 1px black;">
			<div class="container">			
				<div class="logo">
					<h1><?php
                    if(!isset($_GET['section'])){
                    echo('<a href="index.html">
                    
                    <img src="images/logo.png" style="width:500px;height:200px; padding:20px;position: absolute;left:0; 
                    margin-top:120px;border:solid 1px none;border-left:none;border-top:none;" />
                    
                    </a>');
                    }
                    
                     ?></h1>
				</div>
				<div class="top-nav">
                
                
				<!-- start header menu -->
		<ul class="megamenu skyblue">
        <li><a href="#">Home</a></li>
        
       		
			<li class="active grid"><a  href="#">Programs</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4 style="font-size: 15px;">UNDERGRADUATE</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
                        
                        <div class="col1">
							<div class="h_nav">
								<h4 style="font-size: 15px;">POST GRADUATE</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
                        
                        <div class="col1">
							<div class="h_nav">
								<h4 style="font-size: 15px;">DIPLOMA</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
                        
                        
						
					
    				</div>
                    </div>
				</li>
                
            <li class="active grid"><a  href="#">Campuses</a>	
					
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4> KIU Compuses</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						
					
    				</div>
                    </div>
				</li>
                <li><a href="#">Schools & Colleges</a>
                <div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>SCHOOLS</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
                        
                        
                        <div class="col1">
							<div class="h_nav">
								<h4>CAMPUSES</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						
					
    				</div>
                    </div>
                    </li>
                <li><a href="#">Research</a>
                
                 <div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>PUBLICATIONS</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
                        
                        
                        <div class="col1">
							<div class="h_nav">
								<h4>PROJECTS</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
                        
                        
                        <div class="col1">
							<div class="h_nav">
								<h4>INSTITUTIONS</h4>
								<ul>
									<li><a href="product.html">trends</a></li>
									<li><a href="product.html">sale</a></li>
									<li><a href="product.html">style videos</a></li>
									<li><a href="product.html">accessories</a></li>
									<li><a href="product.html">kids</a></li>
									<li><a href="product.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						
					
    				</div>
                    </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                </li>
                <li><a href="#">Library</a>
                <div style="margin-left:23%;position: absolute;margin-top:5px;width:200px;">
                <img src="icons/facebook.png" class="social_icon" style="width:30px;height:30px;display: inline-table;"/>
                <img src="icons/twitter.png" class="social_icon" style="width:30px;height:30px; display: inline-table;"/>
                <img src="icons/googleplus.png" class="social_icon" style="width:30px;height:30px; display: inline-table;"/>
                <img src="icons/linkedin.png" class="social_icon" style="width:30px;height:30px; display: inline-table;"/>
                <img src="icons/youtube.png" class="social_icon" style="width:35px;height:35px; display: inline-table;"/>
                </div>
                </li>
                
                
                
                
                
                
                
                
                
				
		 </ul> 
		 <!---->
		 <div class="search-in" >
			<div class="search" style="margin-top: -12px;">
            
            
						<form action="search.html">
							<input type="text" value="Keywords" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keywords';}" class="text">
							<input type="submit" value="SEARCH">
						
                        </form>
							<div class="close-in" style="background: #1FA716;border:solid thin black;border-bottom:none;margin-top: 2px;padding-left:5px;padding-right:5px;">X</div>
                            
					</div>
						<div class="right"><button> </button></div>

				</div>
						<script type="text/javascript">
							$('.search').hide();
							$('button').click(function (){
							$('.search').show();
							$('.text').focus();
							}
							);
							$('.close-in').click(function(){
							$('.search').hide();
							});
						</script>
                        

					<!---->


<div class="clearfix"> </div>
					<!---->
				</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>
        
        
  

<?php
page::header_burner_announcement();	
?>


</div>



<!---->
<div class="content">


<?php
page::content_section();
?>
	<!---->
		
		<!---->
        
        
        
	
		<!---->
			
		<!---->
</div>

<!---->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-top">
				<h3>QUICK CONTACT</h3>
				<form>
						
						<input type="text" value="ENTER YOUR NAME*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR NAME*';}">
						
						<input type="text" value="ENTER YOUR EMAIL*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR EMAIL*';}">
						
						<input type="text" value="ENTER YOUR PHONE" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR PHONE';}">
					
						<textarea cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ENTER YOUR MESSAGE*';}">ENTER YOUR MESSAGE*</textarea>
						
							<input type="submit" value="SEND MESSAGE" >
						
					</form>

			</div>
			<div class="col-md-4 footer-middle">
				<h3>TOP RATED PRODUCTS</h3>
					<div class="product-go">
							<div class="grid-product">
								<h6><a href="#" >Winter Combo Style</a></h6>
								<ul class="star-footer">
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
								</ul>
								<span class=" price-in"><small>$70.00</small> $40.00</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="images/f1.jpg" alt="">
									<p>SALE</p></a>
								</div>
							<div class="clearfix"> </div>
							</div>
								<div class="product-go">
							<div class="grid-product">
								<h6><a href="#" >Winter Combo Style</a></h6>
								<ul class="star-footer">
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
								</ul>
								<span class=" price-in"><small>$70.00</small> $40.00</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="images/f2.jpg" alt="">
									<p class="new1">NEW</p></a>
								</div>
							<div class="clearfix"> </div>
							</div>
								<div class="product-go">
							<div class="grid-product">
								<h6><a href="#" >Winter Combo Style</a></h6>
								<ul class="star-footer">
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
								</ul>
								<span class=" price-in"><small>$70.00</small> $40.00</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="images/f3.jpg" alt="">
									<p class="new1">NEW</p></a>
								</div>
							<div class="clearfix"> </div>
							</div>

			</div>
			<div class="col-md-4 footer-bottom">
				<div class="logo-footer">
					<div class="logo-bottom">
						<a href="#"><img src="images/lo.png" alt=""></a>
					</div>
					<div class="logo-the">
						<h4>Amberegul Theme</h4>
						<p>Was designed for opencart, magento, 
woocommerce and prestashop platforms. 
It is based on Bootstrap.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="indo">
				<p class="in">Bandung, Indonesia <span>40553</span></p>
					<ul class="social-footer ">
						<li><span><i> </i>+62 226759804 </span></li>
						<li><span><i class="down"> </i>blithemes</span></li>
						<li><a href="mailto:info@example.com"><i class="mes"> </i>info@example.com</a></li>
						<li><a href="#"><i class="mes-in"> </i>http://example.com</a></li>
					</ul>
					<a href="#"><img src="images/pa.png" alt=""></a>
					</div>
			</div>
			<div class="clearfix"> </div>
			<p class="footer-class">© 2015 Amberegul All Rights Reserved | Afro-Django Initiative</a> </p>
		</div>
	</div>
<!---->
</body>
</html>