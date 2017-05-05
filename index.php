<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('description'); ?> <?php bloginfo('name'); ?> Adorable Mutts Pet Rescue Template</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" /> 
<!--<link rel="stylesheet" href="css/stylesheet.css" type="text/css" />-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script> 
<!--Start WP Head-->    
<?php wp_head(); ?>   
<!--End WP Head-->    
</head>    
<body <?php body_class(); ?>>
    <div id="header"> 
       <div class="logo">
            <a href="home.html"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logoAM.jpg" alt="Adorable Mutts logo" /></a>
       </div> <!-- end logo-->
       <div class="utilities">
            <a href="#"><img class="utilities" src="<?php bloginfo('template_directory'); ?>/images/Instagram.jpg" alt="Instagram"/></a>
            <a href="#"><img class="utilities" src="<?php bloginfo('template_directory'); ?>/images/facebookIcon.png" alt="Facebook"/></a>

           
        </div> <!-- end utilities-->
    </div> <!--end header-->
    <div id="nav"> 
            <div class="fix">
            <ul class='navigation'>
                <li><a href="main.html">ABOUT</a><ul>
                        
                    <li><a href="mission.html">MISSION</a></li>
                        
            </ul></li>
                <li><a href="main.html">ADOPTION</a><ul>
                        
                    <li><a href="main.html">DOGS</a></li>
                     <li><a href="main.html">CATS</a></li>
                     <li><a href="main.html">PROCESS</a></li>
                        
                 </ul></li>
                <li class="donate"><a href="main.html">DONATE</a></li>
                <li><a href="main.html">CONTACT</a></li>
             </ul>
            
                
      </div>    <!--end fix drop down menu-->
 </div><!--nav-->
<!--+++++++++++++++++++START MOBILE NAVIGATION++++++++++++++-->
  
    
    
<button class="nav-button">Toggle Navigation</button>

<ul  class="primary-nav">
  <li><a  href="about.html">ABOUT</a><ul>
                        
                    <li><a href="mission.html">MISSION</a></li>
                        
                 </ul></li>
 <li><a href="adoption.html">ADOPTION</a><ul>
                        
                    <li><a href="dogs.html">DOGS</a></li>
                     <li><a href="cats.html">CATS</a></li>
                     <li><a href="process.html">PROCESS</a></li>
                        
                 </ul></li>
   <li class="donate"><a href="donate.html">DONATE</a></li>
  <li><a href="contact.html">CONTACT</a></li>
</ul>
    
<!--+++++++++++++++++++END MOBILE NAVIGATION++++++++++++++-->
    <main>

          <div class="slideImage">

<div class="mySlides">
  <img src="<?php bloginfo('template_directory'); ?>/images/dog1.jpg" alt="dog and boy">
</div>

<div class="mySlides">
  <img src="<?php bloginfo('template_directory'); ?>/images/cat1.jpg" alt="cat and woman hand">
</div>
      
<div class="mySlides">
  <img src="<?php bloginfo('template_directory'); ?>/images/cat3.jpg" alt="cat and boy">
</div>  
             
<br>

  <span  onclick="currentSlide(1)"></span> 
  <span  onclick="currentSlide(2)"></span> 
  <span onclick="currentSlide(3)"></span> 

     
        <div class="inner_box">
         <h1>We LOVE animals</h1>
            <h1>as much as </h1>
                <h1>you do!</h1>
            <div class="button"> <a href="donate.html">DONATE</a></div>
            </div><!--end inner_box-->
            
       </div> <!--end slideImages-->
<!--START CONTENT -->        
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // replaced the ({) for (:)?>
    <article id="article- <?php the_ID(); ?>" class="article">   
    <h2><a href="<?php the_permalink(); // it will link to the posting ?>"><?php the_title(); // it will get the posting title ?></a></h2>
    <?php the_content(''); // it will get posting content ?>
    </article>     
    <?php endwhile; endif; ?>
    <?php if(is_404()) {echo 'Nothing was found.';}?>    
    <small>index.php</small>    
<!--END CONTENT-->        
        <br>
        <br>
        <div id="ctaMain">
               <div class="cta1">
                    <h1>Our Mission:</h1>
                    <p>To save the lives of homeless, neglected and at-risk cats and dogs by spaying and neutering, by providing safe refuge and rehabilitation, and by finding lovely permanent, stable homes.</p>


                </div> <!--end cta1-->
                <div class="cta2">

                    <h1>How to adopt?</h1>
                    <p> Looking to adopt a cat or dog? We can help you find your new furry friend! You can contact us to talk with an adoption counselor who will help identify the perfect furry friend match for you.</p> 
<!--              <button class="button"><a href="adoption.html">Adoption Process Here!</a></button>-->
                 <p><a href="adoption.html">ADOPTION PROCESS>></a></p>
                   
                </div> <!--end cta2-->
                <div class="cta3">
                    <h1>Would You Help Me?</h1>
                    <img class="imagCta3" src="<?php bloginfo('template_directory'); ?>/images/donate.jpg" alt="donate">
                    <div class="button"><a href="donate.html">DONATE</a></div>


                </div> <!--end cta3-->    

        </div> <!--end ctaboxes-->
    </main>    
    <footer>
     
        <div id="footerbox">
        <nav>
            <ul class="menu navigation_footer">
                <li><a href="about.html"><h4>ABOUT</h4></a>   <ul>
                        
                    <li><a href="mission.html"><h4>MISSION</h4></a></li>
                        
                 </ul>
             </li>       
                <li><a href="adoption.html"><h4>ADOPTION</h4></a>
                <ul>
                        
                    <li><a href="dogs.html"><h4>DOGS</h4></a></li>
                     <li><a href="cats.html"><h4>CATS</h4></a></li>
                     <li><a href="process.html"><h4>PROCESS</h4></a></li>
                        
                 </ul>
                </li>
                <li><a href="donate.html"><h4>DONATE</h4></a></li>
                <li><a href="contact.html"><h4>CONTACT</h4></a></li>
             </ul>
        </nav>
            
            <div id="footer_utilities">
            <ul class="hours navigation_footer">
                <li><h4>HOURS:</h4></li>
                <li>Friday: 12 to 7 PM</li>
                <li>Saturday: 12 to 7 PM</li>
                <li>Sunday: 12 to 7 PM</li>
                <li>Monday: 2 to 5 PM</li>
                <li>(closed Tues., Wed., and Thurs.)</li>
             </ul>
            <ul class="location navigation_footer">
                <li><h4>LOCATION:</h4></li>
                <li>13547 Andrew Way</li>
                <li>Houston, TX 77082</li>
               
             </ul>
              <iframe class="maps navigation_footer" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3464.672804059564!2d-95.62993768489224!3d29.729235681998166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640dc39b4005baf%3A0xcc045765e5505317!2s13547+Andrew+Way%2C+Houston%2C+TX+77082!5e0!3m2!1sen!2sus!4v1488532097756" width="400" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                
             </div>   
         
        </div> <!--end footerbox-->
              <div class="copyright">
                <p> &copy; 2016 Lili Haas Design. All rights reserved.</p>
            </div>
<!--Start WP Footer-->        
<?php wp_footer(); ?>   
<!--End WP Footer-->        
    </footer>

<script>
var slideIndex = 1;

function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function timeSlides() {
    window.setInterval("plusSlides(1)", 5000);
}
function showSlides(n) {   
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showSlides(slideIndex);
timeSlides();
</script>  
    
    
    
    
    </body>
</html>