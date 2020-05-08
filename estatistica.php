<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="contetor/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
  


<nav class="white" role="navigation">
    <div class="nav-wrapper container">
       <a id="logo-container" href="coronavirus.png" class="brand-logo">Covide-19</a>
      
       <ul class="right hide-on-med-and-down">
            <li><a href="index1.php">Home</a></li>
            <li><a href="estatistica.php">Noticias</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Sobre a página</a></li>
       </ul>
    </div>
 </nav> 

<?php

$base = "mysql:dbname=covid-19;host=localhost";
$user = "root";
$passe = "";

$ligacao =new PDO($base,$user,$passe);

$sql = "SELECT * from atualizacao";
$resultado =$ligacao->prepare($sql);
$resultado->execute();

foreach($resultado as $linha)
{
       $conf = $linha['confirmados'];	
       $Recu = $linha['recuperados'];
       $obi = $linha['obito'];
       $ativos = $linha['ativos'];
}

?>
<!DOCTYPE html>
<html>
    <head>
	
    </head>
   <body>
 <h3 align="center">Estado em Angola</h3>
        <table class="tabela">
        	<tr class="rows">
        		<th>Confirmados</th>
        		<th>Recuperados</th>
        		<th>Óbitos</th>
        		<th>Casos Activos</th>
        	</tr>
       
        	<tr>
        		<td class="amarelo"><?php echo $conf;?></td>
        		<td class="verde"><?php echo $Recu;?></td>
        		<td class="vermelho"><?php echo $obi;?></td>
        		<td class="preto"><?php echo $ativos;?></td>
        	</tr>
        	
        </table>
    <img src="corona2.jpg" class="img  img-fluid">
        
   <div class="ht">
       <div class="card-header">
          <a href="#"><i>Covid-19</i></a>
   </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p><div class="col-12 text-center fundo_footer p-3 fixed-bottom">
            Covid-19 &copy; <?php echo date('Y') ?>&nbsp;  
            &nbsp; <a href="" class="link-email">Coronavirus@gmail.com</a> 
            &nbsp; &nbsp;
            <a href="https://www.facebook.com.com" class="link email" target ="_blank"><i class="fa fa-facebook-square"></i></a>  &nbsp
            <a href="https://www.twitter.com"´class="link email" target="_blank"><i class="fa fa-twitter-square"></i></a>  &nbsp
            <a href="https://www.instangraam.com" class="link email" target="_blank"><i class="fa fa-instagram"></i></a>
         </div>
  </div>

      <footer class="blockquote-footer">República de Angola </footer>
    </blockquote>
  </div>
</div>


</html>