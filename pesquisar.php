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
        background-color: silver; /* Cor de fundo opcional */
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
            <hr>
            <button class="btn btn-primary" type="submit">Search</button>
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
              <th scope="col">Funções</th>
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
                $data_nascimento = mostra_data($data_nascimento);

                echo "<tr>
                        <th scope='row'>$nome</th>
                        <td>$endereco</td>
                        <td>$telefone</td>
                        <td>$email</td>
                        <td>$data_nascimento</td>
                        <td> <a href='cadastro_edit.php ?id=$cod_pessoa' class='btn btn-success'>Editar</a>
                        <a href'#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirma'
                        onclick=" ,'"' ,"pegar_dados($cod_pessoa, '$nome')", '"' , ">Excluir</a>
                        </td>
                        
                      </tr>";
                    }
            ?>
          </tbody>
        </table>
      </div>
    </div>


     <!-- Modal -->
     <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação de exclusão</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="excluir_script.php" method="POST">
           <p>Deseja realmente excluir <b id="nome_pessoa"> </b>?</p>
           <b id="nome_pessoa"> </b>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
              <input type="hidden" name="nome" id="nome_pessoa_1" value="">
              <input type="hidden" name="id" id="cod_pessoa" value="">
              <input type="submit" type="button" class="btn btn-danger" value="Sim">
            </form>
          </div>
        </div>
      </div>
    </div>    
    
    <script type="text/javascript">
      function pegar_dados (id, nome) {
          document.getElementById('nome_pessoa').innerHTML = nome;
          document.getElementById('nome_pessoa_1').value = nome;
          document.getElementById('cod_pessoa').value = id;
      }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  </body>
</html>
