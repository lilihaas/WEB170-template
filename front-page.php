<?php get_header(); ?>


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



        <div id="ctamain">
               <div class="cta1">
                    <h1>Our Mission:</h1>
                 <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // loop number one starts here ?>
                   <?php the_content(''); // get content from home page ?>
                 <?php endwhile; endif; ?>



                </div> <!--end cta1-->
                <div class="cta2">

                    <h1>Latest Postings:</h1>
                 <?php rewind_posts(); // stop loop one ?>
                  <?php query_posts('showposts=4');//display the elements of the latest four postings from the blog?>
                  <?php while (have_posts()) : the_post(); // loop two starts here ?>
                      <li ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  <?php endwhile;?>

              </div> <!--end cta2-->
              <div class="cta3">
                    <h1>Would You Help Me?</h1>
                    <img class="imagcta3" src="<?php bloginfo('template_directory'); ?>/images/donate.jpg" alt="donate">
                    <div class="button"><a href="donate.html">donate</a></div>


                </div> <!--end cta3-->    

      </div> <!--end cta boxes-->
<?php get_footer(); ?>