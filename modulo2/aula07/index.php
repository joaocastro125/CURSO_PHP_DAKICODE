<?php 

// swhitch 
$tipo="filme";

switch($tipo){
  case "filme":
    echo "tipo é um filme ";
    break;

    case "imagem":
        echo "tipo é um imagem ";
        break;

        case "filme":
            echo "tipo é um filme ";
            case "video":
                echo "tipo é um video ";       
                break;

 
}

// o break força a parada 
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == 'stop') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}


// uma condicão se estiver com a condição continua senao para 
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}