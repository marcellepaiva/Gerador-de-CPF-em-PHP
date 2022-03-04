<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/estilo.css" rel="stylesheet">
    <title>CPF</title>
  </head>
  <body> 
    <nav class="navbar navbar-expand-lg" style="background-color:darkblue;">
      <div class="container-fluid">
      <img src="./img/logo.png" alt="" width="50" height="50">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
          </ul>
        </div>
      </div>
    </nav>
  
<?php
Class Validar
{
function ValidaCpf($cpf){ 
$cpf = $_POST['cpf'];
$cpf = preg_replace( '/[^0-9]/', '', $cpf );
$d1 = 0;
$d2 = 0;

for ($i=0, $x = 10; $i <=8; $i++, $x--) {
    $d1 += $cpf[$i] *$x;
}

for ($i=0, $x = 11; $i <=9; $i++, $x--) { 
    $d2 += $cpf[$i] *$x;
}

$re1 = (($d1%11) < 2) ? 0 : 11-($d1%11);
$re2 = (($d2%11) < 2) ? 0 : 11-($d2%11);

if ($re1 != $cpf[9] || $re2 != $cpf[10]) {
  return false;
} else { 
  return true;
}
}
}
?>  
