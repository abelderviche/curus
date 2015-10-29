<footer id="contactenos" class="page-footer orange darken-2 scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" name="formulario" id="formulario" action="" >
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="nombre" name="nombre" type="text" class="validate white-text" required>
                            <label for="nombre" class="white-text">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="email" name="email" type="email" class="validate white-text" required>
                            <label for="email" class="white-text">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="consulta" name="consulta" class="materialize-textarea white-text" required></textarea>
                            <label for="consulta" class="white-text">Consulta</label>
                        </div>
                        <div class="col s12">
                            <div class="row red white-text" id="error1" style="display:none;">
                                <i class="material-icons prefix">thumb_down</i>
                                ¡Todos los campos son obligatorios! 
                            </div>
                            <div class="row red white-text" id="error2" style="display:none;">
                                <i class="material-icons prefix">thumb_down</i>
                                ¡Ocurri&oacute; un error! 
                            </div>
                            <div class="row green white-text" id="ok" style="display:none">
                                <i class="material-icons prefix">thumb_up</i>
                                ¡Consulta enviada! 
                              </div>

                        </div>
                            <div id="progreso" class="progress orange lighten-3" style="display:none;">
                                <div class="indeterminate  orange darken-2"></div>
                            </div>
                        <div class="col  center">
                            <input type="submit" value="Enviar" id="button" class="btn orange" >
                        </div>
                    </div>
                </form>
                <div itemscope itemtype="http://schema.org/Organization" class="row">
                    <p class="white-text">Telefono: <span itemprop="telephone">4391-2578</span> <br>
                        <span itemprop="address">Camino Gral. Belgrano 2680, Berazategui </span>

                    </p>
                </div>
            </div>
            
            <div class="col card l6 s12">
                <div id="map_canvas" style="height: 300px;margin-top:10px;" ></div>
            </div>
        </div>
    </div>
        
    <div class="footer-copyright orange  darken-3">
        <div class="container" itemscope itemtype="http://schema.org/WebSite">
            Hecho por <a itemprop="name"class="white-text" href="http://www.divdesarrolloweb.com.ar">DiV Desarrollo Web</a>
        </div>
    </div>
</footer>
 <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="<?php echo HTTP_JS_PATH; ?>wow.min.js"></script>
  <script src="<?php echo HTTP_JS_PATH; ?>materialize.js"></script>
  <script src="<?php echo HTTP_JS_PATH; ?>init.js"></script>
  <script async="" src="//www.google-analytics.com/analytics.js"></script>
  <script type="text/javascript">




    $("#formulario").submit(function(event){
        event.preventDefault();
        $('#button').hide(300);
        var $form=$(this),url=$form.attr("action");
        var nombre    = $('#nombre').val();
        var email     = $('#email').val();
        var consulta  = $('#consulta').val();
        $('#error1').hide();
        $('#error2').hide();
        $('#ok').hide();
        $('#progreso').show(100);
        $(this)[0].reset();
        var posting=$.post("<?php echo base_url(); ?>sendmail",{nombre: nombre,email:email,consulta:consulta});
            posting.done(function(data){
            console.log(data);
            $('#progreso').hide(100);
            if(data=='ok'){
                $('#ok').show(100);
            }else{
                $('#error2').show(100);
                $('#submitForm').show(100);
            }
        });
    });

  </script>
  </body>
</html>