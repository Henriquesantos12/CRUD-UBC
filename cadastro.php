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

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1>Cadastro</h1>
        <form action="cadastro_script.php" method="POST">
          <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="text" class="form-control" placeholder="Insira o nome" name="nome" required>
          </div>
          <div class="form-group">
            <label for="Endereço">Endereço</label>
            <input type="text" class="form-control" placeholder="Insira o endereço" name="endereco" required>
          </div>
          <div class="form-group">
            <label for="Telefone">Telefone</label>
            <input type="text" class="form-control" placeholder="Insira o telefone" name="telefone" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Insira o e-mail" name="email" required>
          </div>
          <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" class="form-control" placeholder="Informe sua data de nascimento" name="data_nascimento">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" name="enviar">
          </div>
        </form>
        <hr>
        <a href="index.php" class="btn btn-info">VOLTAR AO INÍCIO</a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
