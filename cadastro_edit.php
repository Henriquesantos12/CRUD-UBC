<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Altura da viewport inteira */
        margin: 0;
        background-color: #f8f9fa; /* Cor de fundo opcional */
      }

      .container {
        text-align: center;
        background-color: #007bff; /* Cor de fundo da caixa */
        padding: 30px;
        border-radius: 10px;
        color: white; /* Cor do texto */
      }

      h1, p {
        margin-bottom: 20px;
      }

      .btn-primary {
        background-color: #28a745; /* Alterar a cor do botão */
        border-color: #28a745;
      }
    </style>

    <title>Alteração de cadastro</title>
  </head>
  <body>
    <?php
    include "conexao.php";
      $id = $_GET['id'] ?? ' ';
      $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

      $dados = mysqli_query($conn, $sql);
      $linha = mysqli_fetch_assoc($dados);

    ?>
    <div class="container">
      <div class="row">
        <h1>Cadastro</h1>
        <form action="edit_script.php" method="POST">
          <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="text" class="form-control" placeholder="Insira o nome" name="nome" required value="<?php echo $linha['nome']; ?>">
          </div>
          <div class="form-group">
            <label for="Endereço">Endereço</label>
            <input type="text" class="form-control" placeholder="Insira o endereço" name="endereco" required value="<?php echo $linha['endereco']; ?>">
          </div>
          <div class="form-group">
            <label for="Telefone">Telefone</label>
            <input type="text" class="form-control" placeholder="Insira o telefone" name="telefone" required value="<?php echo $linha['telefone']; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Insira o e-mail" name="email" required value="<?php echo $linha['email']; ?>">
          </div>
          <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" class="form-control" placeholder="Informe sua data de nascimento" name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>">
          </div>
          <hr>
          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Salvar alterações"> 
            <input type="hidden" name="id" value="<?php echo $linha ['cod_pessoa']; ?>">
          </div>
        </form>
        <hr>
        <a href="index.php" class="btn btn-info">VOLTAR AO INÍCIO</a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </body>
</html>
