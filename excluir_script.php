<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <title>Exclusão de Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
          include "conexao.php";
          $id = $_POST['id'];
          $nome = $_POST['nome'];

     $sql = "DELETE FROM `pessoas` WHERE cod_pessoa = $id";

          if (mysqli_query($conn, $sql)) {
            mensagem("$nome foi excluido com sucesso", 'success');
          } else {
            mensagem("$nome não foi excluido", 'danger');
          }
        ?>
        
        <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </body>
</html>
