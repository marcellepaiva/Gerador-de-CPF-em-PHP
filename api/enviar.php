
<?php
if (isset($_POST['enviar']) && !empty($_POST['cpf'])) {
   require "cpf.php"; 

  $V = new Validar();

 $cpf =  $_POST['cpf'];

 if ($V->ValidaCpf($cpf) == true) {
    print "<h3><center><br>CPF válido!</h3></center><center><img src=./img/valido.png  width=200 height= 200/></center>";
 }
else{
    print"<h3><center><br>CPF inválido!</h3></center><center><img src=./img/invalido.png  width=200 height= 200/></center>";
 }
}

?>