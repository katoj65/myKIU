<?php

/**
 * @author lolkittens
 * @copyright 2016
 */

class page{
    
static function page_schools_colleges($section){
if($section=='schools_colleges'){
echo('<div class="page">');
echo('<h4>SCHOOLS AND COLLEGES</h4>');
echo('<div class="section" style="height:300px;">
<p>SCHOOLS & COLLEGES</p>

<p style="height:50px;"></p>

<p>contact us</p>

<p style="height:50px;"></p>

<p>general University Info</p>

<p style="height:50px;"></p>


<p>Download resource</p>


</div>');
echo('<div class="section" style="height:300px;width:50%;border:solid thin silver;">
<p>DESCRIPTION</p>

<p style="height:100px;"></p>


<p style="height:100px;">School of Computing and Information Technology</p>



<p style="height:100px;">Dean Welcome message</p>



<p style="border-top:solid thin silver;padding:20px;">
<span class="spacing">SCIT Home</span>
<span class="spacing">programs</span>
<span class="spacing">contact us</span>
</p>




</div>');






echo('<div class="section" style="height:300px;">

<p>Animation images</p>
<p style="height:200px;"></p>

<p>Bulleting for University</p>

</div>');












echo('</div>');   
       
}     
}  
 
 
 
 
 
 
 
 
 
 
 





    
static function header_burner_announcement(){
$section=$_GET['section'];
if(isset($section)){
page::page_schools_colleges($section);    
    
}else{
echo('<div class="banner">
		<div class="banner-top" style="border: solid 1px black;border-right:none;">
        <h4><strong>KAMPALA INTERNATIONAL UNIVERSITY</strong></h4>
  <p style="font-size: 15px;color:rgb(40,40,40);"><strong>KIU is a private university in Uganda which has built a name in Ugandas education sector with remarkable resilience.The university is chartered by the government of Uganda as a recognition and acknowledgement of its ability and competence to offer relevant education and is a member of pre-eminent bodies such as the Commonwealth Universities, Association of African Universities and the Inter-University Council of East Africa.</strong></p>
</div>

<div class="now" style="width:500px;margin-left:5%;">
<a class="morebtn" href="single.html"><strong>E-Learning</strong></a>
<a class="morebtn at-in" href="single.html" style="width:200px;background-color: #2BDE73;color:white;border:solid thin silver;"><strong>Apply Online</strong></a>
<div class="clearfix"> </div>
	       </div>
 	</div>	');



echo('<div style="padding: 20px;background:#2BDE73; width:300px;position: absolute;margin-top:29em;height:200px;" class="border_radius">
<h3>Scrolling Announcements</h3>
</div>'); 
}   
}    
    
  






static function last_section(){
echo('<div class="container">
				<div class="bottom-grid">
					<img class="img-responsive" src="images/back1.jpg" alt="">
					<div class="fit">
						<h6>Best fit for women’s feet</h6>
						<p>TRY TO WALK IN OUR SHOES</p>
					</div>
				</div>
			</div>');    
}  
  








static function latest_news(){
echo('	<div class="content-bottom-top">
			<div class="container">
					<h3 style="color: #2BDE73;"><strong>Latest News</strong></h3>
					<div class="blog-in">
						<div class="col-md-8">
						
							<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
					  			<div class="blog-in-top">
								<div class="col-md-6 van">
								<a href="single.html"> <img src="images/bl.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="col-md-6 on-para">
									<div class="col-on">
										<h4>Iniloh Judulnya</h4>
										<span>Saturday, 23/08/2014</span>
									</div>
									<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat volutpat ....</span></p>
<a href="single.html" class="sed">Readmore</a>
<div class="clearfix"> </div>
								</div>	
							<div class="clearfix"> </div>
							</div>
							<div class="blog-in-bottom">
								<div class="col-md-6 van-in">
									<h5>Discount Up to</h5>
								<span>60%</span>
								</div>
								<div class="col-md-6 on-para">
									<div class="col-on">
										<h4>Iniloh Judulnya</h4>
										<span>Saturday, 23/08/2014</span>
									</div>
									<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat volutpat ....</span></p>
<a href="single.html" class="sed">Readmore</a>
<div class="clearfix"> </div>
								</div>	
							<div class="clearfix"> </div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
					  			<div class="blog-in-top">
								<div class="col-md-6 van">
								<a href="single.html"> <img src="images/bl2.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="col-md-6 on-para">
									<div class="col-on">
										<h4>Iniloh Judulnya</h4>
										<span>Saturday, 23/08/2014</span>
									</div>
									<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat volutpat ....</span></p>
<a href="single.html" class="sed">Readmore</a>
<div class="clearfix"> </div>
								</div>	
							<div class="clearfix"> </div>
							</div>
							<div class="blog-in-bottom">
								<div class="col-md-6 van-in in-bus">
									<h5>Discount Up to</h5>
								<span>60%</span>
								</div>
								<div class="col-md-6 on-para">
									<div class="col-on">
										<h4>Iniloh Judulnya</h4>
										<span>Saturday, 23/08/2014</span>
									</div>
									<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat volutpat ....</span></p>
<a href="single.html" class="sed">Readmore</a>
<div class="clearfix"> </div>
								</div>	
							<div class="clearfix"> </div>
							</div>	
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
				   				<div class="blog-in-top">
								<div class="col-md-6 van">
								<a href="single.html"> <img src="images/bl.jpg" class="img-responsive" alt=""/></a>
								</div>
								<div class="col-md-6 on-para">
									<div class="col-on">
										<h4>Iniloh Judulnya</h4>
										<span>Saturday, 23/08/2014</span>
									</div>
									<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat volutpat ....</span></p>
<a href="single.html" class="sed">Readmore</a>
<div class="clearfix"> </div>
								</div>	
							<div class="clearfix"> </div>
							</div>
							<div class="blog-in-bottom">
								<div class="col-md-6 van-in">
									<h5>Discount Up to</h5>
								<span>60%</span>
								</div>
								<div class="col-md-6 on-para">
									<div class="col-on">
										<h4>Iniloh Judulnya</h4>
										<span>Saturday, 23/08/2014</span>
									</div>
									<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat volutpat ....</span></p>
<a href="single.html" class="sed">Readmore</a>
<div class="clearfix"> </div>
								</div>	
							<div class="clearfix"> </div>
							</div>	   		 	
						</article>
			</div>
		</div>
		<!---->
		  <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$(".example1").wmuSlider({
					 pagination : false,
				});         
   		     </script> 	

						</div>
						<div class="col-md-4 amet">
							<div class="grid-per">
							<a href="single.html"><img class="img-responsive" src="images/bl1.jpg" alt="">
							<div class="six-per">
					<h4>Get up to</h4>
					<span>60%</span>
					<p>Lorem ipsum dolor amet, consectetuer elit
adipiscing , sed diam nonummy nibh euismod
tincidunt ut laoreet dolore magna erat
aliquam volutpat.</p>
					
				</div></a>
						</div>
						</div>
						<div class="clearfix"> </div>
					</div>
			</div>
		</div>');    
}






static function middle_bottom(){
echo('<div class="content-bottom">
			<div class="container">
				<p>Design is a funny word. Some people think 
design means how it looks. But of course, if you dig deeper 
it’s really how it works.</p>
<label class="line1"> </label>
<span>Steve Jobs</span>
			</div>
		</div>');    
}





static function main_container(){
echo('<div class="container">
		<div class="content-top">
			<div class="col-md-9">
				<div class="col-top">
				<table style="height: 400px;">
<tr>
	<td></td>
	<td></td>
</tr>
</table>	
                    
                    
                    
                    
                    
                    
                    
                    
				</div>
                
                
                
				
			</div>
			<div class="col-md-3 per">
				<a href="single.html">
                
                
				<div class="six" style="background: #2BDE73;height:400px;border:solid thin gray;">
					<h4>EVENTS</h4>
					<p>Get up to</p>
					<span>60%</span>
				</div></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!---->
        
        
		<div class="sap_tabs" style="background-color: #2BDE73;">
			<label class="line" style="border: none;"> </label>
			<h2 style="border: none;">LATES ARRIVAL</h2>	
						 
										
											
		 </div>
        <!---->
	</div>');    
}













  
static function content_section(){
$section=$_GET['section']; 
if(isset($section)){

//page::last_section();

    
}else{
page::main_container();    
page::middle_bottom();    
page::latest_news();    
page::last_section();
}
}  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}




?>