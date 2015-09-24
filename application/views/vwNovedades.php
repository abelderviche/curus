<?php
$this->load->view('vwHeader');

?>
<style type="text/css">
.card.medium {
    height: 340px;
}
</style>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Texto descriptivo</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?=HTTP_IMAGES_PATH;?>background3.jpg" alt="Unsplashed background img 3"></div>
  </div>
<div class="container">
	<div class="row">
	<?php foreach ($cms as $key => $value) { ?>
	<div class=" col m6  s12">
		<div class="card medium " >
		    <div class="card-image image waves-effect waves-block waves-light  ">
		      <img class="activator "    src="<?=($value['imagen'])?HTTP_IMAGES_UPLOADS_PATH.$value['imagen']:HTTP_IMAGES_PATH.'default.jpg';?>">
		    </div>
		    <div class="card-content">
		      <span class="card-title activator grey-text text-darken-4"><?=$value['titulo'];?><i class="material-icons right">more_vert</i></span>
		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4"><?=$value['titulo'];?><i class="material-icons right">close</i></span>
		      <p><?=utf8_decode($value['texto']);?> </p>
		    </div>
	 	</div>
	</div>
		<?php } ?>
</div>

</div>
<?php
$this->load->view('vwFooter');
?>