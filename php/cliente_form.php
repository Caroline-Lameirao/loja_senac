<?php
    require_once('./crud_cidade.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Loja Senac - Formulário de Cadastro de Clientes</title>
</head>
<body>
    <?php include "./navbar.php" ?>
    <div class="container">
        <fieldset> 
            <legend>Cadastro de Clientes</legend>
            <form  class="form" action="./register_cliente.php" method="post">
                <div class="form-grup mb-3">
                    <label for="cliente_id" class="form-label">Nome do Cliente</label>
                    <input class="form-control" type="text" name="txtCliente" id="cliente_id" placeholder="Informe o nome do cliente" required/>
                </div>
                <div class="form-grup mb-3">
                    <label for="logradouro_id" class="form-label">Logradouro</label>
                    <input class="form-control" type="text" name="txtLogradouro" id="logradouro_id" placeholder="Informe o logradouro" required/>
                </div>
                <div class="form-grup mb-3">
                    <label for="numero_id" class="form-label">Número</label>
                    <input class="form-control" type="number" name="txtNumero" id="numero_id" placeholder="Informe o número da residência" required/>
                </div>
                <div class="form-grup mb-3">
                    <label for="bairro_id" class="form-label">Bairro</label>
                    <input class="form-control" type="text" name="txtBairro" id="bairro_id" placeholder="Informe o bairro" required/>
                </div>
                <div class="form-grup mb-3">
                    <label for="cep_id" class="form-label">CEP</label>
                    <input class="form-control" type="number" name="txtCep" id="cep_id" placeholder="Informe o CEP" required/>
                </div>
                <div class="form-grup mb-3">
                    <label for="cidade_id" class="form-label">Cidade</label>
                    <select class="form-select" aria-label="Selecione uma Cidade" name="txtCodeCidade" id="cidade_id" required>
                        <option selected disabled>Selecione uma Cidade</option>
                        <?php foreach(fnListaCidade() as $cidade) : ?>
                        <option value="<?= $cidade['cod_cidade'] ?>"><?= "{$cidade['nome_cidade']} - {$cidade['sigla_uf']}" ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button class="btn btn-dark" type="submit">Cadastrar</button>
            </form>
        </fieldset>
    </div><!--Fim Container-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php include "./toast.php" ?>

</body>
</html>