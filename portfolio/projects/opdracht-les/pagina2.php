<?php

$dagen = ['Maandag','Dinsdag','Woensdag','Donderdag','Vrijdag','Zaterdag','Zondag'];

echo "Gelukt! Bedankt voor de info!";
echo "<br>";
echo $_GET['vnaam'];
echo "<br>";
echo $dagen[ $_GET['dag']-1 ];

?>
