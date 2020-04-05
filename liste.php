<?php 
 session_start();
 $donnes=($_SESSION['donne']);
//  var_dump($donnes);
 echo "TABLE 1";
echo ' <table style=" border:3px;margin-left:260px ;width:50%">';
echo '<tr style=" background-color: #45a049;  height:50px;color:#fff">';   
echo '<th>'; echo"Nom"; echo '</th>';  
echo '<th>'; echo"Prénom"; echo '</th>';  
echo '<th>'; echo"Adresse"; echo '</th>';  
echo '<th>'; echo"Numéro"; echo '</th>';  
echo '<th>'; echo"Genre"; echo '</th>';  
echo '<th>'; echo"Satisfait"; echo '</th>';  
echo '<th>'; echo"Langue"; echo '</th>';  
echo '</tr>';   
 foreach ($donnes as $value) {
      echo '<tr  style=" background-color:#f8f8f8;height:50px; width: 50px">';   
      echo '<td >';echo $value['nom'] ;echo '</td>';   
      echo '<td ">';    echo $value['prenom'] ;echo '</td>';   
      echo '<td>';    echo $value['adresse'] ;echo '</td>';   
      echo '<td>';    echo $value['numero'] ;echo '</td>';   
      echo '<td>';    echo $value['genre'] ;echo '</td>';   
      echo '<td>';    echo $value['satisfait'] ;echo '</td>';   
      echo '<td>';    echo $value['langue'] ;echo '</td>';   
   
     echo '</tr>';   
 }
 echo '<table>';