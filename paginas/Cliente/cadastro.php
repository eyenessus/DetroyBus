<?php
include_once('../../Servicos/Cliente/CrudDetroyBus.php');
include_once('../../Repositorio/Cliente/Cliente.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $dados =$_REQUEST;
        $cliente = new CrudDetroyBus(new Cliente());
      $cliente->criar($dados);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetroyBus - Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/style.css">
</head>

<body class="cadastroCliente">
    <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php">DetroyBus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Passagem/passagens.php">Passagems</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ferramentas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Previsão de tempo</a></li>
                            <li><a class="dropdown-item" href="#">Frases do dia</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Contato</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Minhas compras</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-md p-5">
        <h1 class="text-center text-info mt-5 display-1" id="titulo">DetroyBus</h1>
        <form method="post" class="mt-5 d-flex flex-column align-items-center">
                <div class="mb-3 col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm " id="email" aria-describedby="email" name="email">
                    <div id="emailHelp" class="form-text">Nunca compartilhe seu e-mail.</div>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="senha" class="form-label ">Senha</label>
                    <input type="password" class="form-control form-control-sm" id="senha" name="senha">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>