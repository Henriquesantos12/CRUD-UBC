<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="../CRUD-PHP-UBS/empresa/cadastro_script.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome completo</label>
                    <input type="text" class="form-control" placeholder="Insira o nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="Endereço">Endereço</label>
                    <input type="text" class="form-control" placeholder="Insira o endereço" name="endereco" required>
                </div>
                <div class="form-group">
                    <label for="Telefone">telefone</label>
                    <input type="text" class="form-control" placeholder="Insira o Telefone" name="telefone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Insira o e-mail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" placeholder="Informe sua data de nascimento" name="data_nascimento" >
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" placeholder="Informe sua data de nascimento">
                </div>
                </form>
                <hr>
                <a href="index.php" class="btn btn-info">VOLTAR AO INÍCIO</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>