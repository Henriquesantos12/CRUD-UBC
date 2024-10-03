<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <title>Alterar Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
          include "conexao.php";
          $id = $_POST['id'];
          $nome = $_POST["nome"];
          $endereco = $_POST["endereco"];
          $telefone = $_POST["telefone"];  
          $email = $_POST["email"];
          $data_nascimento = $_POST["data_nascimento"];

      //    $sql = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) 
     //            VALUES ('$nome', '$endereco', '$telefone', '$email', '$data_nascimento')";

     $sql = "UPDATE `pessoas` 
     SET `nome` = '$nome', 
         `endereco` = '$endereco', 
         `telefone` = '$telefone', 
         `email` = '$email', 
         `data_nascimento` = '$data_nascimento' 
     WHERE `cod_pessoa` = $id";

          if (mysqli_query($conn, $sql)) {
            mensagem("$nome foi alterado", 'success');
          } else {
            mensagem("$nome não foi cadastrado", 'danger');
          }
        ?>
        
        <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </body>
</html>
