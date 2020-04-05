

<?php 
session_start();
// session_destroy();
require_once('function.php');
  $donnes=array();
if(!empty($_POST)){
    if (isset($_SESSION['donne']) ){
     $donnes=$_SESSION['donne'];
    }
    else{
     $donnes=array();
    }
    if (isset($_POST)) {
      unset($_POST['submit']);
      $donne = $_POST;
      $donnes[]=$donne;
    }
     $_SESSION['donne']=$donnes;
   
   }
  //  var_dump($donnes);
      
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
  <form action="index.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="nom">NOM</label>
    </div>
    <div class="col-75">
      <input type="text" id="nom" name="nom" placeholder="Your nom..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="prenom">PRENOM</label>
    </div>
    <div class="col-75">
      <input type="text" id="prenom" name="prenom" placeholder="Your prenom..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="adresse">ADRESSE</label>
    </div>
    <div class="col-75">
      <input type="text" id="adresse" name="adresse" placeholder="Your adresse..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="numero">NUMERO</label>
    </div>
    <div class="col-75">
      <input type="text" id="numero" name="numero" placeholder="Your phon nomber..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="cnumero">CONFIRMATION NUMERO</label>
    </div>
    <div class="col-75">
      <input type="text" id="cnumero" name="cnumero" placeholder="Your phon nomber..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
     
    </div>
    <div class="col-75">
      <select id="genre" name="genre">

        <option> GENRE...</option>
        <option value="homme">HOMME</option>
        <option value="femme">FEMME</option>
      </select>
    </div>
  </div>
 <div class="row">
    <div class="col-25">
     <label for="satisfait" name="satisfait">SATISFAIT</label>
    </div>
    <div class="col-75">
     <input type="radio" name="satisfait" value="oui" id="oui"  /> <label for="oui">Oui</label>
        <input type="radio" name="satisfait" value="non" id="non"  checked="checked" /> <label for="non">Non</label>
    </div>
  </div>
   <div class="row">
    <div class="col-25">
        <label for="langue">LANGUADES</label>
         
     </div>
    <div class="col-75">
         <input type="checkbox" name="langue" value="Fr" />Francais
         <input type="checkbox" name="langue" value="An"  checked="checked"/>Anglais
        <input type="checkbox" name="langue" value="Es"/>Espagnol
        <input type="checkbox" name="langue" value="por" />Portugue
   </div>
  </div>

   <div class="row">
    <div class="col-25">
        <label for="commentaire">COMMENTAIRES</label>
         
     </div>
   <div class="col-75">
      <textarea id="commentaire" name="commentaire" placeholder="Write Commentaire.." style="height:100px"></textarea>
   
  </div>
  </div><br> 

  <div class="row">
    <input type="submit" value="Valider">
    <input type="reset" value="Réinitialiser">
  </div>
  <a href="liste.php">Voire la Liste</a>
  </form>
</div>
</body>
</html>