


<?php
/*

  if(isset($_POST['acao'])){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
  
    echo $nome;
    echo "<br>";
    echo $email;
  }
 
?> 

*/

if(isset($_POST['acao'])){
    foreach ($_POST['valor'] as $key => $value) {
        echo $key;
        echo '=>';
        echo $value;

        echo '<hr>';

    }
}


?>
<form method="post">
<select name="nome">
    <option value="guilherme">guilherme</option>
    <option value="joao">joao</option>
</select>
<input type="checkbox" name="valor[]" value="10">10
<input type="checkbox" name="valor[]" value="20">20
<input type="checkbox" name="valor[]" value="30">30
<input type="checkbox" name="valor[]" value="40">40
<input type="submit" name="acao" value="Enviar" />
</form>
</body>
</html>