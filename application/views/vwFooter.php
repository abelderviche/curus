<footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Encontranos en</h5>
              <ul>
                <li>
                    <a class="white-text" href="https://www.facebook.com/curuspaints">
                        <i class="small fa fa-facebook-square white-text"></i> Facebook
                    </a>
                </li>
                  <li>
                    <a class="white-text" href="https://www.twitter.com/curuspaints">
                        <i class="small fa fa-twitter-square white-text"></i> Twitter
                    </a>
                </li>                 
                </ul>
            </div>
      </div>
    </div>
    <div class="footer-copyright orange  darken-2">
      <div class="container">
      Made by <a class="brown-text text-lighten-1" href="http://www.divdesarrolloweb.com.ar">DiV Desarrollo Web</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo HTTP_JS_PATH; ?>wow.min.js"></script>
  <script src="<?php echo HTTP_JS_PATH; ?>materialize.js"></script>
  <script src="<?php echo HTTP_JS_PATH; ?>init.js"></script>
  <script>

  $(window).scroll(function(){
    var $header = $('#header');
    var scrollY = $(this).scrollTop();

    if(scrollY > 100 ){
      $header.css('height', '60px');
       $header.css('transition', 'all 1s');
    }else if(scrollY<100){
        $header.css('height', '100px');
    } 
});
 $(document).ready(function(){
      $('.slider').slider({full_width: true});
      $('.scrollspy').scrollSpy();
      new WOW().init();
    });
</script>
  
  </body>
</html>