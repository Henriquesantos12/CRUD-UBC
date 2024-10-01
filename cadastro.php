<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
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
    </div>
  </body>
</html>
