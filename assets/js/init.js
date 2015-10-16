(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
  }); // end of document ready
})(jQuery); // end of jQuery name space

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
      $('.slider').slider({full_width: true,height:520});
      $('.scrollspy').scrollSpy();
      new WOW().init();
    });

 function initialize() {

    var lat = '-34.79438'; //Set your latitude.
    var lon = '-58.23750'; //Set your longitude.

    var centerLon = lon;

    var latlng = new google.maps.LatLng(lat, centerLon);
    var myOptions = {
        disableDefaultUI: true,
        zoomControl: true,
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

    marker.setMap(map);


    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h5 id="firstHeading" class="firstHeading">Curu\'s Paint</h5>'+
      '<div id="bodyContent">'+
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


$('#button').click(function(event) {
  var nombre    = $('#nombre').val();
  var email     = $('#email').val();
  var consulta  = $('#consulta').val();
  $('#error1').hide();
  $('#error2').hide();
  $('#ok').hide();

  if(nombre == ''||email==''||consulta==''){
    $('#error1').show(100);
  }else{
    $('.progress').show(100);
    $('#button').hide();
    $.post("<?php echo base_url(); ?>sendmail", {nombre: nombre,email:email,consulta:consulta}, function(data, textStatus, xhr) {
        $('.progress').hide(100);
        if(data =='ok'){
            $('#ok').show(100);
            console.log(data);
        }else{
            $('#error2').show(100);
        }
    });
  }
});