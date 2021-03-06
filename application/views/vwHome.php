<?php
$this->load->view('vwHeader');
?>

 
  <div class="slider" >
    <ul class="slides">
      <li>
        <img class="imgdiv" src="<?php echo HTTP_IMAGES_PATH; ?>Slider1.jpg" alt="Slider1">  
        <div class="caption center-align">
          <div itemscope itemtype="http://schema.org/Organization">
            <h3 itemprop="address">Ubicados en Camino Gral. Belgrano 2680, Berazategui</h3>
            <h5 class="light white-text text-lighten-3"></h5>
          </div>
        </div>
      </li>
      <li>
        <img class="imgdiv" src="<?php echo HTTP_IMAGES_PATH; ?>Slider2.jpg" alt="Slider2"> 
        <div class="caption left-align">
          <h3></h3>
          <h5 class="light black-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img  class="imgdiv"  src="<?php echo HTTP_IMAGES_PATH; ?>Slider3.jpg" alt="Slider3"> 
        <div class="caption center-align">
          <h3>Mas de 5000 colores en el acto</h3>
          <h5 class="light black-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img  class="imgdiv"  src="<?php echo HTTP_IMAGES_PATH; ?>Slider4.jpg" alt="Slider4"> 
        <div class="caption center-align">
          <h3>Laboratorio color</h3>
          <h5 class="light white-text text-lighten-3"></h5>
        </div>
      </li>
       <li>
        <img  class="imgdiv"  src="<?php echo HTTP_IMAGES_PATH; ?>Slider5.jpg" alt="Slider5"> 
        <div class="caption center-align">
          <h3>Sistema de repintado automotor</h3>
          <h5 class="light white-text text-lighten-3"></h5>
        </div>
      </li>
    </ul>
  </div>


  <div id="inicio" class="section scrollspy" style="height:100%;">
    <div class="container">
        <div class="row">
            
            <div itemscope itemtype="http://schema.org/Organization">
              <div  class="col s12">
                  <h2 class="center header text_h2"> Con decadas de experiencia en Pinturas,<span itemprop="legalname" class="span_h2"> Curu's </span>es una empresa de origen familiar especializada en brindar <span class="span_h2">servicio y capacitación </span>a clientes profesionales y particulares del rubro. </h2>
              </div>
           
          </div>
        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="<?php echo HTTP_IMAGES_PATH; ?>parallax1.jpg"></div>
</div>

<div class="section scrollspy" id="novedades">
    <div class="container">
        <h2 class="header text_b wow bounceInRight">Novedades</h2>
        <div class="row">
            <?php foreach ($cms as $key => $value) { ?>
            <div class="col s12 m6 l4">
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
    <div class="parallax"><img src="<?php echo HTTP_IMAGES_PATH; ?>parallax2.jpg"></div>
</div>

<!-- Promociones -->

<div class="section scrollspy" id="promociones">
    <div class="container">
        <h2 class="header text_b wow bounceInDown"> Promociones</h2>
        <div class="row">
            
        <?php foreach ($promociones as $key => $value) { ?>
            <div class="col s12 m6 l4" itemscope itemtype="http://schema.org/Thing">
                <div class="card card-avatar  wow bounceIn" style="height:400px;">
                    <div class="waves-effect waves-block waves-light">
                        <img itemprop="image" class="activator" src="<?=($value['imagen'])?HTTP_IMAGES_UPLOADS_PATH.$value['imagen']:HTTP_IMAGES_PATH.'default.jpg';?>">
                    </div>
                    <div class="card-content" itemprop="name" style="font-weight:bolder;">
                        <?=$value['titulo'];?><br/>
                        <span class="card-title activator grey-text text-darken-4">
                            <small><em itemprop="description" class="orange-text text-darken-3"><?=$value['descripcion'];?></em></small></span>
                            <br><strike>$<?=$value['precio_anterior'];?></strike>
                            <br><span class="red-text" style="font-size:1.4em;font-weight:bold;">$<?=$value['precio_actual'];?></span>
                    </div>
                    <div style="position:absolute; left:25%; bottom:2px;text-align:center;color:#c7c7c7;">
                      <?=$value['limite'];?>
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
    <div class="parallax"><img src="<?php echo HTTP_IMAGES_PATH; ?>parallax3.jpg"></div>
</div>






<!-- MARCAS -->

<div class="section scrollspy" id="marcas">
    <div class="container">
        <h3 class="header text_b wow rollIn">Marcas que comercializamos</h3>
        <div class="row">
        <?php foreach ($marcas as $key => $value) {

            $link = $value['link'];
            if (strpos($link,'http://') !== false) {
            }else{
                $link = "http://".$link;
            }
         ?>
            <div class="col s12 m6 l3" itemscope itemtype="http://schema.org/Thing">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light ">
                        <a itemprop="url" href="<?=$link;?>" target="_blank">
                            <img  itemprop="image" src="<?=($value['imagen'])?HTTP_IMAGES_UPLOADS_PATH.$value['imagen']:HTTP_IMAGES_PATH.'default.jpg';?>">
                        </a>
                    </div>
                    <div class="card-content"><span  itemprop="name" class="card-title activator grey-text text-darken-4"><?=$value['marca'];?><br></div>
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