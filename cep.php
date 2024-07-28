<?php
$titulo = "Consultar CEP";
$logo = "./img/2-removebg-preview.png";
include "./layout/cabecalho.php";

if (isset($_GET["Cep"]) && !empty($_GET["Cep"])) {
    $cep = $_GET["Cep"];
    // Verificar se o CEP tem 8 dígitos
    if (preg_match('/^\d{8}$/', $cep)) {
        $url = "https://viacep.com.br/ws/" . $cep . "/json/";
        $response = @file_get_contents($url);

        if ($response !== FALSE) {
            $dados = json_decode($response, true);

            // Verificar se houve um erro na consulta do CEP
            if (isset($dados['erro']) && $dados['erro'] === true) {
                $erro = "Esse CEP não é válido.";
            }
        } else {
            $erro = "Não foi possível recuperar os dados da API. Tente novamente mais tarde.";
        }
    } else {
        $erro = "CEP inválido. O CEP deve conter 8 dígitos.";
    }
}
?>

<h1>Consultar CEP</h1>
<div class="row">
    <div class="col-md-4 col-sm-12">
        <div class="mb-3">
            <form action="./cep.php" method="get">
                <label>Digite seu cep</label>
                <input class="form-control" name="Cep" />
                <button class="btn btn-success mt-3" type="submit">
                    Pesquisar CEP
                </button>
            </form>
            <?php
            if (isset($erro)) {
                echo '<div class="alert alert-danger">' . $erro . '</div>';
            } elseif (isset($dados)) {
                if (isset($dados["erro"]) && $dados["erro"] == true) {
                    echo '<div class="alert alert-danger">Esse CEP não é válido</div>';
                } else {
            ?>
                <label>CEP Pesquisado</label>
                <input class="form-control" readonly value="<?php echo $dados["cep"]; ?>" />
                <label>Logradouro</label>
                <input class="form-control" readonly value="<?php echo $dados["logradouro"]; ?>" />
                <label>Bairro</label>
                <input class="form-control" readonly value="<?php echo $dados["bairro"]; ?>" />
                <label>Cidade</label>
                <input class="form-control" readonly value="<?php echo $dados["localidade"]; ?>" />
                <label>Estado</label>
                <input class="form-control" readonly value="<?php echo $dados["uf"]; ?>" />
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php
include "./layout/rodape.php";
?>
