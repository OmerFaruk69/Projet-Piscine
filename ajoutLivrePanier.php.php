<!DOCTYPE html>
<html lang="en">
<head>
    <title>ECE Amazone</title>
    <meta charset="utf-8">
    
    <!-- Déclaration Internet Explorer (utilisation du dernier moteur de rendu) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Pour mobile : affichage occupe tout l'espace dispo avec taille 1-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Déclaration du ficher CSS Bootsrap-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!--Déclaration ficher CSS -->
    <link href="style.css" rel=stylesheet>
 
    <!--Ouverture fenêtre à la largeur de l'écran -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    


    
    <style type="text/css">
     
       <style type="text/css">
    body { background-color: brown; }
     
[class*="col"] {
background-color: white;
border-color: white;}
img { width: 100%; }
        
.btn-lg {
  border-color:white;

}
        
.navbar{ 
background-color: white;
padding-top: 20px;
border-color: ghostwhite;
box-shadow: 1px 1px 12px silver;
font-weight: bold;
font-variant : small-caps;
letter-spacing : 0.2em;
font-size : 100%   
        }
        
       
        
        
        

.vc{
    color:darkorange;
    font-family: inherit;
    font-size: 90%;
    }
        


     
        
.dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;
-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu:hover>.dropdown-menu{display:block;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;
border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#ffffff;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;
-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
   
.bg-img {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}

        
.header { 
    text-align: center;
    margin-top: 250px; 
    color: white;
    margin-left: 200px; 
    margin-right: 200px;
       
}
   
        
 
h2, h3, h4, h5, h6 {
    font-family: 'Ruda', sans-serif;
    font-weight: 900;
    color: #333;
   
}

h1{ 
font-family: 'Ruda', sans-serif;
    font-weight: 900;
    color: white;
    font-size: 500%;
    font-variant : small-caps;
letter-spacing : 0.2em;
   
   
    }
        
        
.navbar-default {
  background-color: #ffffff;
  border-color: #ffffff;
}
.navbar-default .navbar-brand {
  color: #000000;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #ff8c00;
}
.navbar-default .navbar-text {
  color: #000000;
}
.navbar-default .navbar-nav > li > a {
  color: #000000;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #ff8c00;
}
.navbar-default .navbar-nav > li > .dropdown-menu {
  background-color: #ffffff;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #000000;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #ff8c00;
  background-color: #ffffff;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li.divider {
  background-color: #ffffff;
}
.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #ff8c00;
  background-color: #ffffff;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #ff8c00;
  background-color: #ffffff;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #ff8c00;
  background-color: #ffffff;
}
.navbar-default .navbar-toggle {
  border-color: #ffffff;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ffffff;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #000000;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #000000;
}
.navbar-default .navbar-link {
  color: #000000;
}
.navbar-default .navbar-link:hover {
  color: #ff8c00;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #000000;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ff8c00;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ff8c00;
    background-color: #ffffff;
  }
    
    
}

 .border{
     box-shadow: 1px 1px 12px silver;
        }

.col-padding{
    margin-bottom: 20px;
        }
    
.overlay {  
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  z-index: 2;
  opacity: 0;
  background: rgba(39, 42, 43, 0.8);
  transition: opacity 200ms ease-in-out;
  border-radius: 4px;
  margin: -15px 0 0 -15px;
  button { 
  margin:5px;
  } 
  &:hover {
    opacity: 1;
  }
}
 
.flex-container {
  margin-top: 120px;
  display: flex;
  flex-wrap:wrap;
  background-color: white;
  height: auto;
  margin-left: -10px; 
  margin-right: -10px; 
  
}
        
.bg-img .overlay {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    opacity: .6;
    background: #000000;
    height: 500px;
    
}

        img {
 display: block;
 width: 300px;
 height: 450px;
}

        .redim{
    width : 220px; 
    height: 52px
    </style>
    
     
     
    
</head>
<body>
<a name = "Accueil"> </a>
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
      <head class="row">
      <div class="col-sm-2 col-sm-offset-5"><a href="#Accueil"><img src="img/logoamazon3.png" class="redim" alt="logo"></a></div>
        </head>
      <div class="pull-right">
         <a href="#" class="vc">Mon compte</a><a class="btn btn-default btn-lg" href="#"><span class="glyphicon glyphicon-shopping-cart "></span>&nbsp;</a>
      </div>
    </div>
     
    
    <ul class="nav navbar-nav">
      <li><a href="#Accueil"><div >ACCUEIL</div></a></li>
      <li class="dropdown active"> 
            <a data-toggle="dropdown" href="#">LIVRES<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                <li><a href="#BestSellers">Best Sellers</a></li>
                
<li class="dropdown-submenu">
      <a tabindex="-1" href="index.html#categories"> Catégories</a>
      <ul class="dropdown-menu">
        <li><a tabindex="-1" href="livres.php">Livres</a></li>
          <li><a tabindex="-1" href="#">Musique</a></li>
          <li><a tabindex="-1" href="vetement.php">Vêtements</a></li>
          <li><a tabindex="-1" href="sport.php">Sports et Loisir</a></li>
     
      
      </ul>
    </li>
          </ul>
          <li><a href="#">VENDRE</a></li>
        <li><a href="index.html#contact">CONTACTEZ-NOUS</a></li>
        
    </ul>
  <form class="navbar-form navbar-right inline-form">
      <div class="form-group">
        <input type="search" class="input-sm form-control" placeholder="T-shirt...">
        <button type="submit" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-search"></span> Rechercher</button>
      </div>
    </form>
    
    </div>
    
    
    
    <div class="bg-img" style="background-image: url(img/livres.png);">
			<div class="overlay"></div>
        
		</div>
    
    <div class="header">
        
       <h1> Tous nos livres</h1>
    </div>
   <div class="flex-container">
      <div class="container">
    <div  class="row"> 
        <br>
        <div class="col-sm-4 col-sm-offset-4"><legend><h2>Critères de sélection</h2></legend></div>
    </div>
    </div> <br>
       <br>
       <br>
    </div>

       
      
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-4">
     <div class="form-group">
    <label for="exampleSelect1" class="bmd-label-floating"><h6>Auteur :</h6></label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
                </div>
             <div class="col-sm-2">
     <div class="form-group">
    <label for="exampleSelect1" class="bmd-label-floating"><h6>Genre : </h6></label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
                </div>
    </div>
    <br> <br>
    </div>
        </div>
    </div>
    
    <form method="post" action="image.php">
      <div class=row>

      <div class="col-sm-3">
        
          <ul>

            <?php

$database = "piscine2";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

 //si le BDD existe, faire le traitement
if ($db_found) {
 $sql = "SELECT Titre,Auteur,Image FROM Livre WHERE Date=2012 OR Date=2007 ";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "Titre: " . $data['Titre'] . '<br>';
 echo "Auteur:" . $data['Auteur'] . '<br>';
 echo('<img class="image" src="' . $data['Image'] .'" / > <br/>');
 
 }//end while

}//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?></ul></div>

<div class="col-sm-3">
        
          <ul>

            <?php

$database = "piscine2";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

 //si le BDD existe, faire le traitement
if ($db_found) {
 $sql = "SELECT Titre,Auteur,Image FROM Livre WHERE Date=2015 OR Date=2000 OR Date=2009 OR Date=2014 ";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "Titre: " . $data['Titre'] . '<br>';
 echo "Auteur:" . $data['Auteur'] . '<br>';
 echo('<img  src="' . $data['Image'] .'" / > <br/>');
 
 }//end while

}//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>
</div>
<div class="col-sm-3">
        
          <ul>

            <?php

$database = "piscine2";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

 //si le BDD existe, faire le traitement
if ($db_found) {
 $sql = "SELECT Titre,Auteur,Image FROM Livre WHERE Date=2011 OR Date=2018 ";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "Titre: " . $data['Titre'] . '<br>';
 echo "Auteur:" . $data['Auteur'] . '<br>';
 echo('<img  src="' . $data['Image'] .'" / > <br/>');
 
 }//end while

}//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>
</div>
<div class="col-sm-3">
        
          <ul>

            <?php

$database = "piscine2";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

 //si le BDD existe, faire le traitement
if ($db_found) {
 $sql = "SELECT Titre,Auteur,Image FROM Livre WHERE Date=2013 OR Date=2019 OR Date=2016 ";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "Titre: " . $data['Titre'] . '<br>';
 echo "Auteur:" . $data['Auteur'] . '<br>';
 echo('<img  src="' . $data['Image'] .'" / > <br/>');
 
 }//end while

}//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>
              </div> </div> 
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
  $('h1').mouseover(function() {
    $(this).dropdown('toggle');
  });
</script>
    </body>
</html>