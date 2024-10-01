<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">

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

      h1 {
        font-size: 3rem;
      }

      nav {
        margin: 20px 0; /* Margem para o nav */
      }

      .table {
        margin-top: 20px; /* Margem acima da tabela */
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
        <h1>PESQUISAR</h1>
        <hr>
        <nav>
          <form class="form-inline my-2 my-lg-0" action="pesquisar.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="busca">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <a href="index.php" class="btn btn-primary">Voltar</a>
          </form>
        </nav>
      </div>

      <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Endereço</th>
              <th scope="col">Telefone</th>
              <th scope="col">E-mail</th>
              <th scope="col">Data de Nascimento</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $pesquisar = $_POST['busca'] ?? ' ';
              include "conexao.php";

              $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisar%'";
              $dados = mysqli_query($conn, $sql);

              while ($linha = mysqli_fetch_assoc($dados)) {
                $cod_pessoa = $linha['cod_pessoa'];
                $nome = $linha['nome'];
                $endereco = $linha['endereco'];
                $telefone = $linha['telefone'];
                $email = $linha['email'];
                $data_nascimento = $linha['data_nascimento'];

                echo "<tr>
                        <th scope='row'>$nome</th>
                        <td>$endereco</td>
                        <td>$telefone</td>
                        <td>$email</td>
                        <td>$data_nascimento</td>
                      </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Optional JavaScript; Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
