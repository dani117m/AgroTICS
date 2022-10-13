<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /AGRO_TICS/vista/index.php');
?>