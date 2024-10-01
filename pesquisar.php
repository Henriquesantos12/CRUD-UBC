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
        <h1>PESQUISAR</h1>
        <hr>
        <nav>
        <form class="form-inline my-2 my-lg-0" action="pesquisar.php" method="POST">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <hr>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          <a href="index.php" class="btn btn-primary">Voltar</a>
        </form>
        <table class="table table-hover">
            <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data de nascimento</th>
                    </tr>
            </thead>
            <tbody>
                    <tr>
                    <th scope="row">Henrique</th>
                    <td>av. Eddir mendonça felippe</td>
                    <td>11 9999 9999</td>
                    <td>contatohenrique2005@gmail.com</td>
                    <td>16-05-2005</td>
                    </tr>
            </tbody>
            </table>
            </nav>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>