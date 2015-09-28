<?php
$this->load->view('vwHeader');
?>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->
<style type="text/css">
.card.medium {
    height: 340px;
}
</style>

  
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo HTTP_IMAGES_PATH; ?>Slider1.jpg"> 
        <div class="caption center-align">
          <h3>Titulo 1</h3>
          <h5 class="light black-text text-lighten-3">Descripcion titulo 1</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo HTTP_IMAGES_PATH; ?>Slider2.jpg"> 
        <div class="caption left-align">
          <h3>Titulo 2</h3>
          <h5 class="light black-text text-lighten-3">Descripcion titulo 2</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo HTTP_IMAGES_PATH; ?>Slider3.jpg"> 
        <div class="caption right-align">
          <h3>Titulo 3</h3>
          <h5 class="light black-text text-lighten-3">Descripcion titulo 3</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo HTTP_IMAGES_PATH; ?>Slider4.jpg"> 
        <div class="caption center-align">
          <h3>Titulo 4</h3>
          <h5 class="light black-text text-lighten-3">Descripcion titulo 4</h5>
        </div>
      </li>
    </ul>
  </div>


  <div id="inicio" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2"> Somos una pintureria ubicada en la avenida Camino General Belgrano <span class="span_h2"> Curu's Paints  </span>10 años siendo lider <span class="span_h2"> en toda la zona sur.</span> </h2>
            </div>

            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-image-flash-on  large wow bounceIn"></i>
                    <h5 class="promo-caption">Subtitulo 1</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group large wow bounceIn"></i>
                    <h5 class="promo-caption">Subtitulo 2</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows  large wow bounceIn"></i>
                    <h5 class="promo-caption">Subtitulo 3</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section scrollspy" id="novedades">
    <div class="container">
        <h2 class="header text_b wow bounceInRight">Novedades </h2>
        <div class="row">
            <?php foreach ($cms as $key => $value) { ?>
            <div class="col s12 m4 l4">
                <div class="card medium">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=($value['imagen'])?HTTP_IMAGES_UPLOADS_PATH.$value['imagen']:HTTP_IMAGES_PATH.'default.jpg';?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?=$value['titulo'];?><i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#"></a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?=$value['titulo'];?><i class="mdi-navigation-close right"></i></span>
                        <p><?=utf8_decode($value['texto']);?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="<?php echo HTTP_IMAGES_PATH; ?>parallax3.jpg"></div>
</div>

<!-- Promociones -->

<div class="section scrollspy" id="promociones">
    <div class="container">
        <h2 class="header text_b wow bounceInDown"> Promociones</h2>
        <h5 class="grey-text text-lighten-1">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes
        </h5>
        <div class="row">
            
        <?php foreach ($promociones as $key => $value) { ?>
            <div class="col s12 m4">
                <div class="card card-avatar medium wow bounceIn">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?=($value['imagen'])?HTTP_IMAGES_UPLOADS_PATH.$value['imagen']:HTTP_IMAGES_PATH.'default.jpg';?>">
                    </div>
                    <div class="card-content">
                        <?=$value['titulo'];?><br/>
                        <span class="card-title activator grey-text text-darken-4">
                            <small><em class="orange-text text-darken-3"><?=$value['descripcion'];?></em></small></span>
                            <br><strike>$<?=$value['precio_anterior'];?></strike>
                            <br><span class="red-text" style="font-size:1.4em;font-weight:bold;">$<?=$value['precio_actual'];?></span>
                    </div>
                </div>
            </div>
      <?php } ?>


            
            
        </div>
    </div>
</div>
<!-- fin promociones -->


<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="<?php echo HTTP_IMAGES_PATH; ?>parallax2.jpg"></div>
</div>


<!--EQUIPO-->
<div class="section scrollspy" id="equipo">
    <div class="container">
        <h2 class="header text_b   wow bounceInLeft"> Nuestro equipo </h2>
        <h5 class="grey-text text-lighten-1">
            Curu's Paints cuenta con profesionales altamente capacitados, que siempre le acercaran el producto indicado, antes sus necesidades
        </h5>
        <div class="row">
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo HTTP_IMAGES_PATH; ?>avatar1.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Flash <br/>
                            <small><em><a class="orange-text text-darken-3" href="#">Vendedor</a></em></small></span>
                        <p>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo HTTP_IMAGES_PATH; ?>avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Cat Woman<br/>
                            <small><em><a class="orange-text text-darken-3" href="#">Vendedor</a></em></small>
                        </span>
                        <p>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar ">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo HTTP_IMAGES_PATH; ?>avatar3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Capt. America <br/>
                            <small><em><a class="orange-text text-darken-3" href="#">Vendedor</a></em></small></span>
                        <p>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo HTTP_IMAGES_PATH; ?>avatar4.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Robin<br/>
                            <small><em><a class="orange-text text-darken-3" href="#">Vendedor</a></em></small></span>
                        <p>
                            <a class="orange-text-lighten-2" href="#">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="orange-text text-lighten-2" href="#">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="orange-text-lighten-2" href="#">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="parallax-container">
    <div class="parallax"><img src="<?php echo HTTP_IMAGES_PATH; ?>parallax1.jpg"></div>
</div>

<!-- MARCAS -->

<div class="section scrollspy" id="marcas">
    <div class="container">
        <h3 class="header text_b wow rollIn">Marcas que comercializamos</h3>
        <h5 class="grey-text text-lighten-1">
            Le acercamos la mejores marcas del mercado, para que sus trabajos tengan una terminacion unica y su satisfaccion sea plena 
        </h5>
        <div class="row">
        <?php foreach ($marcas as $key => $value) {

            $link = $value['link'];
            if (strpos($link,'http://') !== false) {
            }else{
                $link = "http://".$link;
            }
         ?>
            <div class="col s6 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light ">
                        <a href="<?=$link;?>" target="_blank">
                            <img  src="<?=($value['imagen'])?HTTP_IMAGES_UPLOADS_PATH.$value['imagen']:HTTP_IMAGES_PATH.'default.jpg';?>">
                        </a>
                    </div>
                    <div class="card-content"><span class="card-title activator grey-text text-darken-4"><?=$value['marca'];?><br></div>
                  </div>
            </div>
        <?php } ?>

        </div>
    </div>
</div>
<!-- fin promociones -->




<?php
$this->load->view('vwFooter');
?>
<script>
 /* var options = [ 
                  {selector: '#test', offset: 100, callback: 'Materialize.fadeInImage("#test")' } 
                ]; 
  Materialize.scrollFire(options); 
*/
</script>
