<?php

session_start();

echo "<h1> Su compra se ha realizado </h1>";

header("Refresh: 2; URL=/public/index.php");;


?>