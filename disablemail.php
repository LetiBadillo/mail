<!--actividad 7 -->
<?php
$to = "";
$subject="";
$msg="";
if (isset($_POST['submit'])){
      if (empty($_POST["nombre"]) || empty($_POST["mail"]) || empty($_POST["tel"]) || empty($_POST["txt"])) {
      ?>
            <script>alert('Complete los campos requeridos.');</script>

          <?php
          
      }else{
          $msg= 'Nombre: ' .$_POST['nombre'] ."\n"
          .'Email: ' .$_POST['mail'] ."\n"
            .'Teléfono: ' .$_POST['tel'] ."\n"
            .'Mensaje: ' .$_POST['txt'];
            $to= 'letibadillog@hotmail.com';
            $subject='prueba';

            if (mail($to, $subject, $msg, $subject)){
              ?>
                    <script>alert('Su mensaje fue enviado.');</script>

                  <?php
                    
              } /*Dirección, subject y el mensaje1*/
  

        /*fin del if*/ else{
           ?>
                    <script>alert('Su mensaje NO D: fue enviado.');</script>

                  <?php
                    
              
              exit(0);
              }/*Fin del else*/
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forma de contacto</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Hind+Madurai|Istok+Web|Lato|PT+Sans+Narrow|Quicksand|Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/mycode.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
</head>
<body>
   
       <div class="main container">
     <div class="row">
     </div>
      <div class="row">
        <div class="col l4 m3">
 
        </div>

        <div class="col l8 m8 s7">
              <div class="row">
               <div class="card-panel z-depth-2 light-blue darken-3">
                  <div class="col l9">
                   <h4 style="font-family:'Poppins'" class="left-align white-text">Contacto</h4>
                  </div>
                   <h4 class=" white-text right-align "><i class="material-icons md-36">message</i></h4>
               </div>
              </div>
            <div class="row card-panel z-depth-2">
               <form class="contact-form" method="post" action="disablemail.php" enctype="multipart/form-data">
                    <div class="input-field col s12">
                        <input id="nombre" type="text" class="validate" name="nombre">
                        <label for="nombre">Nombre</label>  
                    </div>
                    <div class="input-field col s6">
                        <input id="email" type="email" class="validate" id="mail" name="mail">
                        <label for="email">Email</label>  
                    </div>
                    <div class="input-field col s6">
                        <input id="tel" type="text" class="validate" name="tel">

                        <label for="tel">Teléfono</label>  
                    </div> 
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" id="txtarea" name="txt"></textarea>
                        <label for="textarea1">Mensaje</label>
                    </div>
                    <div class="row">
                        <div class="col l6">

                            <a class="waves-effect disabled waves-light btn btn-contacto" type="submit" name="submit" id="sub"><i class="material-icons left">send</i>Enviar</button>

                        </div>
                        <div class="col l6">
                            <a class="waves-effect disabled waves-light  btn btn-contacto"><i class="material-icons left">clear_all</i>Limpiar</button>
                        </div>
                    </div>
                    
                    
               </form>
            </div>  
        </div>
      </div>
    </div>
    
    
    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  <script src="js/form.js"></script>
</body>
</html>