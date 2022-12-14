<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Bosstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Adiministrador</title>
</head>
<header>
    <div class="container" id="nav">
        <nav class=" navbar navbar-expand-lg">

            <a href="a" class="navbar-brand">
                <!-- imagem do logo e o titulo do site-->
                <img id="logoJoao"src="./imagens/fatiasCabecalho.png" alt="Pizzaria do João" styles="font-faily= Courgette;">
            </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-links"
                        aria-controls="navbar-links"aria-expended="false" aria label="toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a class="nav-item nav-link"  href="./inicio" id="inicio">Inicio</a>
                    <a class="nav-item nav-link"  href="./cadastro" id="cadastro">Cadastro</a>
                     <a class="nav-item nav-link" href="./login" id="login">Login</a>
                    <a class="nav-item nav-link"  href="#cardapio">Cardápio</a>
                    <a class="nav-item nav-link" href="#pedido">Pedido</a>
                </div>
            </div>
        </nav>
    </div>

</header>
<body>

    <h1 id="titulo-adm">Lista de pedidos</h1>


    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Sabor</th>
            <th scope="col">Massa</th>
            <th scope="col">Borda</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Beatriz</td>
            <td>Frango</td>
            <td>Normal</td>
            <td>Cheddar</td>
            <td>Em produção</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2"></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>


      <div  id="botao-adm">
        <input type="submit" value="Editar"  href="a" class="editar-btn">
      </div>

</body>
</html>
