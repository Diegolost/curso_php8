<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $titulo; ?>
    </title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">

     
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img src="<?php
                            if (isset($logo) && !empty($logo)) {
                                echo $logo;
                            } else {
                                echo "./img/2-removebg-preview.png";
                            }

                            ?>" alt="Logo" width="90" height="48">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./usuarios.php">Usuários</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./cadastro.php">Cadastro</a></li>
                            <li><a class="dropdown-item" href="./pesquisa.php">Pesquisa</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./estoque.php">Estoque</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./clientes.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./vendas.php">Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./colaboradores.php">Colaboradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./cep.php">Cep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pokenon.php">Pokemon</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="container mt-4">