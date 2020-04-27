<?php
$base = new PDO('mysql:host=127.0.0.1; dbname=ciara', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //  echo "Connexion ok";
      // var_dump($base);

?>