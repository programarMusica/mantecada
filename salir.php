<?php

session_start();

// Destruir la sesi�n
session_destroy();

// Redirigir a la p�gina de inicio de sesi�n
header("Location: index.php");
exit;

?>
