</main>
<footer>

  <div id="footerbox">
    <!--<nav>
        <ul class="menu navigation_footer">
            <li><a href="about.html"><h4>about</h4></a>   <ul>

                <li><a href="mission.html"><h4>mission</h4></a></li>

             </ul>
         </li>
            <li><a href="adoption.html"><h4>adoption</h4></a>
            <ul>

                <li><a href="dogs.html"><h4>dogs</h4></a></li>
                 <li><a href="cats.html"><h4>cats</h4></a></li>
                 <li><a href="process.html"><h4>process</h4></a></li>

             </ul>
            </li>
            <li><a href="donate.html"><h4>donate</h4></a></li>
            <li><a href="contact.html"><h4>contact</h4></a></li>
         </ul>
    </nav> -->
    <!--BEGIN SUB-NAVIGATION ON FOOTER -->
    <?php wp_nav_menu(array ('theme_location' =>'footer-menu' ,'container' => 'div', 'container_id' =>'nav', 'container_class' =>'menu navigation_footer'));?>
    <!--END SUB-NAVIGATION ON FOOTER-->
    <div id="footer_utilities">
      <ul class="hours navigation_footer">
        <li>HOURS:</li>
        <li>Friday: 12 to 7 PM</li>
        <li>Saturday: 12 to 7 PM</li>
        <li>Sunday: 12 to 7 PM</li>
        <li>Monday: 2 to 5 PM</li>
        <li>(closed Tues., Wed., and Thurs.)</li>
      </ul>
      <ul class="location navigation_footer">
        <li>LOCATION:</li>
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
</html