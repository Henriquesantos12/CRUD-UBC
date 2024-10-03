<?php
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "empresa";

    if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
        // echo "conectado";
    } else {
        echo "Erro";
    }

    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto
              </div>";
    }

    function mostra_data ($d) {
     $d = explode("-", $d);
     $escreve = $d[2] . "/" .$d[1] . "/" .$d[0];
     return $escreve;
    } 
?>
