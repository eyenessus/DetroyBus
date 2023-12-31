<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetroyBus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/style.css">
</head>

<body class="passagens">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
                        <a class="nav-link" href="passagens.php">Passagems</a>
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
    <div class="container mt-5">

        <div class="listaPassagem" id="listagemPassagem">
            <h1 class="text-white text-center">Passagens</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Número ID</th>
                        <th scope="col">Origem</th>
                        <th scope="col">Destino</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>XXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td class=" text-white fw-bold"><a href="http://" class="text-success">COMPRAR</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXX</td>
                        <td class=" text-white fw-bold"><a href="http://" class="text-success">COMPRAR</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>XXXXX</td>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td>XXX</td>
                        <td class=" text-white fw-bold"><a href="http://" class="text-success">COMPRAR</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>