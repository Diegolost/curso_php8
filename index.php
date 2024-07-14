 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Meu Projeto</title>
     <link href="./css/bootstrap.min.css" rel="stylesheet">
 </head>

 <body>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container-fluid">
             <a class="navbar-brand" href="./index.php">
                 <img src="./img/2-removebg-preview.png" alt="Logo" width="90" height="50">
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
                         <a class="nav-link" href="./clientes.php">Clienrtes</a>
                     </li>
                 </ul>

             </div>
         </div>
     </nav>
     <div class="container mt-4">
         <div class="row">
             <div class="col-md-4 col-sm-12">
                 <div class="mb-3">
                     <label class="form-label">Edereço de Email</label>
                     <input type="email" name="email" class="form-control" placeholder="name@example.com">
                 </div>
                 <div class="mb-3">
                     <label class="form-label">Digite sua reclamação</label>
                     <textarea name="reclamacao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>

             </div>
             <div class="col-md-4 col-sm-12">
                 Parte 2
                 <div class="card">
                     <div class="card-header">
                         Bem vindo ao sistema
                     </div>
                     <div class="card-body">
                         <h5 class="card-title">Meu título do card</h5>
                         <p class="card-text">Este é o card para ultilização no nosso sistema</p>
                         <a href="#" class="btn btn-primary">Clique aqui para saber mais</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-sm-12">
                 Parte 3
                 <table class="table table-bordered table-hover">
                     <thead>
                         <tr>
                             <th scope="col">Id</th>
                             <th scope="col">Nome</th>
                             <th scope="col">CPF</th>
                             <th scope="col"></th>
                         </tr>
                     </thead>
                     <tbody class="table-group-divider">
                         <tr>
                             <th scope="row">1</th>
                             <td>Diego</td>
                             <td>111.111.111-11</td>
                             <td>
                                 <a class="btn btn-warning">Editar</a>
                             </td>
                         </tr>
                         <tr>
                             <th scope="row">2</th>
                             <td>Jacob</td>
                             <td>Thornton</td>
                             <td>@fat</td>
                         </tr>
                         <tr>
                             <th scope="row">3</th>
                             <td colspan="2">Larry the Bird</td>
                             <td>@twitter</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
     <h1>Hello, world!</h1>


     <script src="./js/bootstrap.bundle.min.js"></script>
 </body>

 </html>