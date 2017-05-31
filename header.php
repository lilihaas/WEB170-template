<!DOCTYPE html>
<html>
<head>
  <!--<title><?php //bloginfo('description'); ?> <?php //bloginfo('name'); ?> Adorable Mutts Pet Rescue Template</title> -->
    <title><?php get_mikes_title_tag(); ?></title>
    <!--Begin meta-->
    <meta name="description" content="<?php the_excerpt(); ?>"/>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <!--End meta-->
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
    <a href="http://lilihaas.com/WEB170/wordpress/"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logoAM.jpg" alt="Adorable Mutts logo" /></a>
  </div> <!-- end logo-->
  <div class="utilities">
    <a href="#"><img class="utilities" src="<?php bloginfo('template_directory'); ?>/images/Instagram.jpg" alt="Instagram"/></a>
    <a href="#"><img class="utilities" src="<?php bloginfo('template_directory'); ?>/images/facebookIcon.png" alt="Facebook"/></a>


  </div> <!-- end utilities-->
</div> <!--end header-->
<!--   <div id="nav">
           <div class="fix">
           <ul class='navigation'>
               <li><a href="main.html">ABOUT</a><ul>

                   <li><a href="mission.html">MISSION</a></li>-->

<!--   </ul></li>
       <li><a href="main.html">ADOPTION</a><ul>

           <li><a href="main.html">DOGS</a></li>
            <li><a href="main.html">CATS</a></li>
            <li><a href="main.html">PROCESS</a></li>

        </ul></li>
       <li class="donate"><a href="main.html">DONATE</a></li>
       <li><a href="main.html">CONTACT</a></li>
    </ul>-->


<!-- </div>    <!--end fix drop down menu-->
<!-- </div><!--nav-->
<!--+++++++++++++++++++START MOBILE NAVIGATION++++++++++++++-->

<!-- Begin WordPress Menu-->
<?php wp_nav_menu(array ('theme_location' =>'main-menu' ,'container' => 'div', 'container_id' =>'nav', 'container_class' =>'fix', 'menu_class' => 'navigation'));?>

<!-- End WordPress Menu -->

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