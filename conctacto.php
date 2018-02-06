<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo_ico.ico">

    <title>Hipo Campo</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
     <script type="text/javascript">
      /*  $( document ).ready(function() {
          $('#input-contacto').live('click',ajaxcontacto);$('#form-contacto').live('submit',ajaxcontacto);
            });*/




/************************************ campos solo texto y solo numeros  ***********************************/

          function soloLetras(e){
             key = e.keyCode || e.which;
             tecla = String.fromCharCode(key).toLowerCase();
             letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
             especiales = "8-37-39-46";

             tecla_especial = false
             for(var i in especiales){
                  if(key == especiales[i]){
                      tecla_especial = true;
                      break;
                  }
              }

              if(letras.indexOf(tecla)==-1 && !tecla_especial){
                  return false;
              }
          }

          function soloNumeros(e){
             key = e.keyCode || e.which;
             tecla = String.fromCharCode(key).toLowerCase();
             letras = "1234567890";
             especiales = "8-37-39-46";

             tecla_especial = false
             for(var i in especiales){
                  if(key == especiales[i]){
                      tecla_especial = true;
                      break;
                  }
              }

              if(letras.indexOf(tecla)==-1 && !tecla_especial){
                  return false;
              }
          }
/************************************ contacto  ***********************************/

        function ajaxcontacto(){
            
        var form = $('#form-contacto');
       
            correo = form.find('input[name="correo"]').val();
            nombre = form.find('input[name="nombre"]').val();
            cedula = form.find('input[name="cedula"]').val();
            telefono = form.find('input[name="telefono"]').val();
            mensaje = form.find('input[name="mensaje"]').val();
            sexo = form.find('input[name="sexo"]').val();
            tipo=1; //match de 10$
            sexo=$( "#sexo" ).val();


             var letras=/^([0-9])*$/;
              if ( (nombre =="") || (letras.test(nombre)) || (nombre.length < 3) || (nombre.length > 50) )
              {


                  if (nombre ==""){
                  // alert("malo");
                     form.find('input[name="nombre"]').focus();
                    form.find('input[name="nombre"]').css('background-color','#DF9191');
                    $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
                    html = '<div class="error" style="padding;5px 50px;"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">El campo nombre no puede estar vacío.</label></div>';
                    $('#error').append(html);
                    $('#error').show(300);
                    return false;
                   }

                  if(nombre.length < 3){ 

                      // alert("malo");
                     form.find('input[name="nombre"]').focus();
                    form.find('input[name="nombre"]').css('background-color','#DF9191');
                    $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
                    html = '<div class="error" style="padding;5px 50px;"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">El campo nombre debe poseer entre 3 y 50 caracteres.</label></div>';
                    $('#error').append(html);
                    $('#error').show(300);
                    return false;
                  }

                   if(letras.test(nombre)){

                      form.find('input[name="nombre"]').focus();
                    form.find('input[name="nombre"]').css('background-color','#DF9191');
                    $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
                    html = '<div class="error" style="padding;5px 50px;"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">El campo nombre soló acepta letras</label></div>';
                    $('#error').append(html);
                    $('#error').show(300);
                    return false;
                   }
                
                
              }else
              {
                   //alert("bien"); 
                      form.find('input[name="nombre"]').css('background-color','#9F9');
                       $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
              }  
          

           var letras=/^([0-9])*$/;
              if (telefono =="" || letras.test(telefono) || (telefono.length < 3) || (telefono.length > 50))
              {

                  if (telefono =="" ){
                  //alert("malo");
                     form.find('input[name="telefono"]').focus();
                    form.find('input[name="telefono"]').css('background-color','#DF9191');
                     $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
                    html = '<div class="error" style="padding;5px 50px;"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">El campo telefono no puede estar vacío.</label></div>';
                    $('#error').append(html);
                    $('#error').show(300);
                    return false;

                  }

                 

                    if((telefono.length < 10)|| (telefono.length > 11)){ 

                      // alert("malo");
                     form.find('input[name="telefono"]').focus();
                    form.find('input[name="telefono"]').css('background-color','#DF9191');
                    $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
                    html = '<div class="error" style="padding;5px 50px;"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">El campo telefono debe poseer entre 10 y 11 caracteres.</label></div>';
                    $('#error').append(html);
                    $('#error').show(300);
                    return false;
                  }



              }else
              {
                   //alert("bien"); 
                      form.find('input[name="telefono"]').css('background-color','#9F9');
                       $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
              }   

 
             var cc=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
                if (correo =="" || !cc.test(correo))
                {
                    //alert("malo");
                    if(correo =="" ){
                       form.find('input[name="correo"]').focus();
                      
                      form.find('input[name="correo"]').css('background-color','#DF9191');
                       $('#error').slideUp(); 
                      $('#error').hide(); 
                      document.getElementById('error').innerHTML = " ";   
                      html = '<div class="error" style="padding;5px 50px;"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">El campo correo no puede estar vacío.</label></div>';
                      $('#error').append(html);
                      $('#error').show(300);
                      return false;
                    }
                    if(!cc.test(correo)){
                     form.find('input[name="correo"]').focus();
                    
                    form.find('input[name="correo"]').css('background-color','#DF9191');
                     $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
                    html = '<div class="error" style="padding;5px 50px;"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">Debe introducir un correo válido.</label></div>';
                    $('#error').append(html);
                    $('#error').show(300);
                    return false;
                    }
                     if((correo.length < 3)|| (correo.length > 100)){ 

                       form.find('input[name="correo"]').focus();
                    
                    form.find('input[name="correo"]').css('background-color','#DF9191');
                     $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
                    html = '<div class="error" style="padding;5px 50px;"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">El campo correo debe poseer entre 3 y 100 caracteres.</label></div>';
                    $('#error').append(html);
                    $('#error').show(300);
                    return false;

                 
                   
                    
                   
                  }
                   
                }else
                {
                     //alert("bien"); 
                      form.find('input[name="correo"]').css('background-color','#9F9');
                       $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
                  
                }            
         
             

              var letras=/^([0-9])*$/;
              if (mensaje =="" || letras.test(mensaje))
              {
                  //alert("malo");
                     form.find('textarea[name="mensaje"]').focus();
                    form.find('textarea[name="mensaje"]').css('background-color','#DF9191');
                     $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
                    html = '<div class="error" style="padding;5px 50px;"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">El campo mensaje no puede estar vacío.</label></div>';
                    $('#error').append(html);
                    $('#error').show(300);
                    return false;
              }else
              {
                   //alert("bien"); 
                      form.find('textarea[name="mensaje"]').css('background-color','#9F9');
                       $('#error').slideUp(); 
                    $('#error').hide(); 
                    document.getElementById('error').innerHTML = " ";   
              }       

 

       // alert("email"+email+" nombre " +nombre+" mensaje"+mensaje+ " asunto"+asunto );

        $('.ajaxgif').removeClass('hide');

        $.ajax({
            
        url: 'http://www.hipocampo.com.ve/contacto/contacto2.php',
        type: 'POST',
        dataType: 'json',
        data: { correo: correo, nombre: nombre,mensaje: mensaje,telefono:telefono, cedula:cedula,sexo:sexo},
        success: function(d, ts, XHR){
        if( d.status == true ){
        document.getElementById('exito').innerHTML = " "; 
        $('.ajaxgif').hide(2000);
        $('#exito').slideUp(); 
        $('#exito').hide(); 
        document.getElementById('exito').innerHTML = " ";  
        html = '<div id="exito"><label id="error-msg" style="color:green; font-size:12px; font-weight:bold;">' + d.message1 + '</label></div>';
        $('#exito').append(html);
        $('#exito').show(300);
        form.find('input[name="nombre"]').css('background-color','#9F9');
        form.find('input[name="correo"]').css('background-color','#9F9');
        form.find('textarea[name="mensaje"]').css('background-color','#9F9');
        form.find('input[name="telefono"]').css('background-color','#9F9');
        $('#error').slideUp(); 
        $('#error').hide(); 
        document.getElementById('error').innerHTML = " ";   
            
        }
        if( d.status == false ){
        document.getElementById('exito').innerHTML = " "; 
        $('.ajaxgif').hide(2000);
        $('#error').slideUp(); 
        $('#error').hide(); 
        document.getElementById('error').innerHTML = " ";
        html = '<div class="error"><label id="error-msg" style="color:red; font-size:12px; font-weight:bold;">' + d.message1 + '</label></div>';
        $('#error').append(html);
        $('#error').show(300);

       if(nombre==""){
            form.find('input[name="nombre"]').focus();
            form.find('input[name="nombre"]').css('background-color','#DF9191');
        }else if(nombre!=""){
            form.find('input[name="nombre"]').css('background-color','#9F9');
              
               if(correo==""){
                form.find('input[name="correo"]').focus();
                form.find('input[name="correo"]').css('background-color','#DF9191');
                 }else  if(correo!=""){
                form.find('input[name="correo"]').css('background-color','#9F9');



                  
                          if(telefono==""){
                              form.find('input[name="telefono"]').focus();
                              form.find('input[name="telefono"]').css('background-color','#DF9191');
                          }else  if(telefono!=""){
                              form.find('input[name="telefono"]').css('background-color','#9F9');
                     
                    }
            }
         }
        }},
        error: function(){
        form.find('label#error-msg').parent().remove();
        html = '<span class="telef">Lo sentimos, al parecer hubo un error, por favor intenta de nuevo.</div>'
        form.find('#input-telef').removeAttr('disabled');
        form.find('span.telef').first().prepend(html);
        }})}

      </script>
      
  </head>
<!-- NAVBAR
================================================== -->
  <body style=" padding-bottom: 0px; ">


        <div class="col-lg-12" style="text-align: Left;  width: 60%;" >
           <!-- BEGIN FORM-->
                   <form action="#" class="horizontal-form margin-bottom-40" role="form" id="form-contacto" style="background-color: #fff;min-height: 410px;height:auto;margin-top: 15px;  width: 100%;
  float: left;">

                      <div class="form-group">
                           <div class="col-lg-12" style="padding-top: 10px;background-color: #fff;color:#000;font-weight: bold;
                           ">
                                                 
     <p class="titulo1">
<h2 style="
    font-family: cursive;
">Cont&aacute;ctanos y Reg&iacute;strate</h2>
     </p>
     <p style="color: #bbb; font-weigth:bold; font-size:18px; font-family: cursive;"> <br><spam style="font-size:22;">Centro Comercial Chacaito Nivel Solana, Locales 214 y 215, 1050 Caracas Caracas Distrito Capital    Venezuela
+58 - 0212 - 952 - 08 - 83</spam></p>
                       
                        </div>
                        </div>
                         <div style="border: 2px #fff;
width: 684px;

border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;
border: 2px solid #fff;">
                        
 <form id="form-contacto" >
                        <div class="form-group">
                            <div class="col-lg-12" style="padding-top: 20px;">
                          <div style="float:left;padding: 30px 0px; width:87%;">
                                <input placeholder="Nombre y Apellidos" type="text" name="nombre" id="nombre" class="form-control text_box"  onkeydown="return soloLetras(event)">
                                </div>

                                  <div style="color:red;float: left;margin-left: 10px;padding: 30px 0px;"><b>*</b></div> 
                        </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-lg-12" style="padding-top: 20px;">
                             

                                <input placeholder="Cédula" type="text" name="cedula" id="cedula" class="form-control text_box"  onkeydown="return soloNumeros(event)">
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-lg-12" style="padding-top: 20px;">
                            <div style="float:left; padding: 30px 0px; width:97%;">
                                <input placeholder="Teléfono" type="text" name="telefono" id="telefono" class="form-control text_box"  onkeydown="return soloNumeros(event)">
                            </div>
                                 <div style="color:red;float: left;margin-left: 10px;padding: 30px 0px;"><b>*</b></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-lg-12" style="padding-top: 20px;">
                            <div style="float:left;padding: 30px 0px; width:97%;">
                                <input name="correo" id="correo" value="" placeholder="Correo Electrónico" class="form-control text_box"></div>

                                 <div style="color:red;float: left;margin-left: 10px;padding: 30px 0px;"><b>*</b></div> 
                            </div>
                        </div>
                        
                        <div class="form-group">
                            
                            <div class="col-lg-12" style="padding-top: 20px;" >
                                <select name="sexo" id="sexo" class="form-control" >
                                    <option value="">--sexo--</option>
                                    <option value="f">Femenino</option>
                                    <option value="m">Masculino</option>
                                </select>   
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="col-lg-12" style="padding: 0px;" >
                                <div class="col-lg-12" style="padding: 16px;">
                                <textarea name="mensaje" id="mensaje" class="form-control" placeholder="mensaje" ></textarea>
                            </div>
                            </div>
                        </div>
                          <div class="form-group">
                            
                            <div class="col-lg-12" style="padding-top: 20px;" >
                              <!-- <button id="input-contacto" class="btn btn-success theme-btn inpu" type="button" onclick="ajaxcontacto();" >Enviar</button>-->
                              <button id="input-contacto" class="btn btn-success " type="button" onclick="ajaxcontacto();"  style="float:none;width: 95px;padding: 5px 15PX 5PX 17PX;font-size: 16px;font-style: normal;">Enviar</button>
                                  <button id="input-contacto" class="btn btn-default " type="reset"  >BORRAR</button>
                            </div>
                            
                        </div>
                        </div>
                        
                        <!--<button type="submit" class="btn btn-default theme-btn"><i class="icon-ok"></i> Enviar</button>-->
                       
                      
                        <div id="exito"></div>
                        <div id="error"></div>

</div>
                    </form>
                    <!-- END FORM--> 


                            
                            <div  style="padding-top: 20px;  
  float: right;" >
                             <img src="http://hipocampo.com.ve/restaurante/images/logo.png">
                            </div>
                            
                        
        </div>
      </div>

      </div>
   

      


<!-- Three columns of text below the carousel -->
      <div class="row" style="margin: 30px 0px 0px 0px;">
        </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  
  </body>
</html>
