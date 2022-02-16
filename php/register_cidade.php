<?php

    require_once('./crud_cidade.php');

    if($_POST['txtCidade'] == NULL || $_POST['txtUf'] == NULL)
    {
        header('location: error.php?status=access-deny');    # redirecionar pra a página error.php
        die();  # matar o carregamento da página
    }

    $result = fnAddCidade($_POST['txtCidade'], $_POST['txtUf']);
    echo $result;