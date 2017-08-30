<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-10" style="background-color: rgb(60, 60, 60);">
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row">
            <div class="col-sm-2" style="float:left">
                <div class="pull-right" id="footer-left">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-ico.png"></a>
                <a href="http://www.facebook.com/ilajy"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-ico.png"></a>
                <a href="http://www.twitter.com/ilajycom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-ico.png"></a>
                <a href="https://plus.google.com/b/112956843471134434899/112956843471134434899/about/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-plus-icon.png"></div>
            </div>
            <div class="col-sm-8 pull-right" id="footer-right" >
                    <a href="#" style="">خدمات الرعاية</a>  &nbsp;
                    <a href="http://ilajy.com/terms-and-conditions.php" style="padding-right:5px;color:#b2b3b4" > الشروط والاحكام </a> &nbsp;
                    <a href="http://ilajy.com/blog/" target="_blank" style="padding-right:5px;color:#b2b3b4">العلاج في المانيا</a> &nbsp;
                    <a href="http://ilajy.com/about-us.php" style="padding-right:5px;color:#b2b3b4">من نحن </a> &nbsp;
                    <a href="http://ilajy.com/contactus.php" style="padding-right:5px;color:#b2b3b4"> اتصل بنا </a> &nbsp;
            </div>
        </div>
    </div>
</section>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/jquery/jquery.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/smooth-scroll/SmoothScroll.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/jarallax/jarallax.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/social-likes/social-likes.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/mobirise/js/script.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/formoid/formoid.min.js"></script>

  <script language="javascript">

  $(document).ready(function(){       

   var scroll_start = 0;

   var startchange = $('#startchange');

   var offset = startchange.offset();

    if (startchange.length){

   $(document).scroll(function() { 

      scroll_start = $(this).scrollTop();

      if(scroll_start > offset.top) {

          $(".navbar-default").css('background-color', '#f0f0f0');

       } else {

          $('.navbar-default').css('background-color', '#222');

       }

   });

    }

});

</script>
</body>
</html>