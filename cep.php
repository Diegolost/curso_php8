<?php
$titulo = "Consultar CEP";
$logo = "./img/2-removebg-preview.png";
include "./layout/cabecalho.php";

$dados = file_get_contents("https://viacep.com.br/ws/01001000/json/");
$dados = json_decode($dados,true);
echo "<pre>";
print_r($dados);
echo "</pre>";

?>
<h1>Consultar CEP</h1>
<div class="row">
    <div class="col-md-4 col-sm-12">
        <div class="mb-3">
            <label>Digite sue cep</label>
            <input class="form-control" name="Cep"/>
            <button class="btn btn-success mt-3" type="submit">
                Pesquisar cep
            </button>
        </div>
    </div>
</div>


<?php
include "./layout/rodape.php";
?>