<?php
$titulo = "Lista de Usuários";
$logo = "./img/2-removebg-preview.png";
include "./layout/cabecalho.php";
?>

 <div class="card">
    <div class="card-header">
        <h3>Cadastro de Usuários</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form action="./usuarios.php" method="post">
                    <div class="from-group">
                        <label>Nome</label>
                        <input type="text" name="Nome" class="form-control" />
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>

<?php
include "./layout/rodape.php";
?>