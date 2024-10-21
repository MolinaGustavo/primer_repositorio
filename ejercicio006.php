<?php
 echo"<p>Reto numero 6<p>";
 $ropa = array("camisa" , "pantalon" , "cinturon" );

sort($ropa);
 foreach($ropa as $elementos){echo $elementos . " <br>";
}
 array_push($ropa, "Gora");
 array_push($ropa, "Calcetines");
echo "<p>Ropa en forma descendente<P>";

rsort($ropa);
foreach($ropa as $elementos){echo $elementos . " <br>";
}
?>