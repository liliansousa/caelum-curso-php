<?php
   require_once 'verifica-sessao.php';
   logout();
   header("Location: index.php?logout=true");
   die();
?>