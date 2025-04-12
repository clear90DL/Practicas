<?php
session_start();

// Regenerar el ID de sesión para prevenir ataques de fijación
session_regenerate_id(true);

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página principal
header('Location: index.php');
exit();
?>