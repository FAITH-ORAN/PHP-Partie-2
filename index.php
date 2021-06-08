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
          $z="";
    for ($b=1;$b<=100;$b++){
        if ($z < 100){
         $z= $b+15;
          echo "ma variable est = ".$b." je lui rajoute '15' donc maintenant ma variable est =" .$z."<br>";
            
        }else {
             return  "on a atteint 100";
        }
        
    }
};
    echo oneHundred();

    echo "<h3 style='color:red;'>exercice 5: </h3> <br>";
    function TwoHundred(){
       $r="";
        for ($l=200;$l>=0;$l--){
            if ($r != 0){
              $r= $l-12;
                echo "ma variable est = ".$l." je lui soustrait '12' donc maintenant ma variable est =" .$r."<br>";
            }else{
                return "on a atteint 0";
            }
        }
    }
    echo TwoHundred();
    

?>