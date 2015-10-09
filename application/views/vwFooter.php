<footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">Con decadas de experiencia en Pinturas, Curu's es una empresa de origen familiar especializada en brindar servicio y capacitacion a clientes profesionales y particulares del rubro.</p>


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
      © Copyright 2015 - <a class="white-text text-lighten-1" href="http://www.divdesarrolloweb.com.ar">DiV Desarrollo Web</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
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

  /*  objGoogleMap : {
        address: 'New York, USA',            // City, County
        markers: [
          {'address' : 'Grand St, New York'}       // Street
        ],
        zoom: 14,                    // 0 - 21  
        scrollwheel: false,                // Boolean: true / false
        maptype : 'roadmap'                // Maptype: roadmap, satellite, hybrid, terrain
    },
*/

function initialize() {

    var lat = '-34.79438'; //Set your latitude.
    var lon = '-58.23750'; //Set your longitude.

    var centerLon = lon - 0.0025;

    var latlng = new google.maps.LatLng(lat, centerLon);
    var myOptions = {
        disableDefaultUI: true,
        scrollwheel: false,
        zoom: 17,
        center: new google.maps.LatLng(lat, centerLon),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var marker = new google.maps.Marker({
     position: new google.maps.LatLng(lat, lon),
     map: map,
      title: 'Curu\'s!'
    });
   

    var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);

  //  var image = '<?php echo HTTP_IMAGES_PATH; ?>logo.png';

    marker.setMap(map);


    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h5 id="firstHeading" class="firstHeading">Curu\'s</h5>'+
      '<div id="bodyContent">'+
      /*'<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+*/
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });

    infowindow.open(map, marker);
}
google.maps.event.addDomListener(window, "load", initialize);

</script>
  
  </body>
</html>