<?php
// page1.php

session_start();
// arzamena informacao no browser de usuario
setcookie("nome", "joao", time()-(20*24*60*60),'/');
echo $_COOKIE['nome'];
//secao armazendo no servidor 
// $_SESSION['name'] = 'joão';

