<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário de Cadastro de Cidades</title>
</head>
<body>
    <?php include "./navbar.php" ?>
    <div class="container">
        <fieldset> 
            <legend>Cadastro de Cidade</legend>
            <form class="form" action="./register_cidade.php" method="post">
                <div class="form-grup mb-3">
                    <label for="cidade_id" class="form-label">Nome da Cidade</label>
                    <input class="form-control" type="text" name="txtCidade" id="cidade_id" placeholder="Informe a Cidade" required/>
                </div>
                <div class="form-grup mb-3">
                    <label for="uf_id" class="form-label">UF da Cidade</label>
                    <input class="form-control" type="text" name="txtUf" id="uf_id" placeholder="Informe o UF" required/>
                </div>
                <button class="btn btn-dark my-2" type="submit">Cadastrar</button>
            </form>
        </fieldset>
    </div><!--Fim Container-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>