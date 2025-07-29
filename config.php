<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_BASE', 'curso_php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE) or die("Não foi possível conectar");