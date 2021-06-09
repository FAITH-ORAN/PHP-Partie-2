<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
/*Faiza Berrichi
date:08/06/2021
partie 2 exo PHP
*/
echo "<h3 style='color:red;'>exercice 1: </h3> <br>";
$x=0;
while($x<=10){//la plus simple des boucle, éxécute un bloc de code tant qu'une condition est vérifié
    echo"ceci est le nombre : ".$x. "<br>";
     $x++;
  }


  echo "<h3 style='color:red;'>exercice 2: </h3> <br>";


  

  function getMulti(){
    $v=rand(1,100);
     
    for($a=1;$a<20;$a++)
    echo " le resultat de la multiplication de ".$a." * ".$v." est <br>".$a*$v."<br><br>";
   // return $a*$v;

}
    
  echo getMulti();
  echo "<h3 style='color:red;'>exercice 3: </h3> <br>";
    for($i=1;$i<=15;$i++){
        if($i != 15){
            echo "On y presque ";
        }else{
            echo "on a atteint ";
        }
       echo $i."<br>";

    }
    echo "<h3 style='color:red;'>exercice 4: </h3> <br>";
      function oneHundred(){
        
 for ($z=1;$z<=100;$z++){
        
        if ($z<100){
            $z=$z+14;
          
            
              echo "ma varibale est in férieur à 100 je lui rajoute 15 maintenant ma varibale =  <br>";
              
              echo  ($z+1)."<br>" ;
        }else{
            echo "ma variable est supérieur à 100";
            echo ($z+1);
        }
        
    }
 
};
          
    echo oneHundred();
    echo "<h3 style='color:red;'>exercice 5: </h3> <br>";
    $j=200;
   
    while($j>=0){
        $j=$j-12;
        echo"ma variable est supérrieur à 0 je lui soustrait 12, maintenant ma variable est = ". $j."<br>";
        $j-2;
    }
    echo "<h1>Bonus</h1>";
   
    ?>
    <?php
 
   $month= array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");
    ?>
     <select name="month" id="month-select">
    <option value="">--Please choose your month--</option>
    <option value=""><?php echo $month[0]

    ?></option>
    <option value=""><?php echo $month[1]

?></option>
    <option value=""><?php echo $month[2]

?></option>
    <option value=""><?php echo $month[3]

?></option>
    <option value=""><?php echo $month[4]

?></option>
    <option value=""><?php echo $month[5]

?></option>

<option value=""><?php echo $month[6]

?></option>
<option value=""><?php echo $month[7]

?></option>
<option value=""><?php echo $month[8]

?></option>
<option value=""><?php echo $month[9]

?></option>
<option value=""><?php echo $month[10]

?></option>
<option value=""><?php echo $month[11]

?></option>
</select>

  </body>
</html>


