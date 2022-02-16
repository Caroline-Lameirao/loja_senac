<?php

    require_once('./crud_cliente.php');

    if(
        $_POST['txtCliente'] == NULL || 
        $_POST['txtLogradouro'] == NULL || 
        $_POST['txtNumero'] == NULL || 
        $_POST['txtBairro'] == NULL || 
        $_POST['txtCep'] == NULL || 
        $_POST['txtCodeCidade'] == NULL
    ) {
        header('location: error.php?status=access-deny');    # redirecionar pra a página error.php
        die();  # matar o carregamento da página
    }

    $result = fnAddCliente(
        $_POST['txtCliente'], 
        $_POST['txtLogradouro'], 
        $_POST['txtNumero'], 
        $_POST['txtBairro'], 
        $_POST['txtCep'], 
        $_POST['txtCodeCidade']
    );
    
    if($result) {
        header("location: cliente_form.php?codigo={$_POST['txtCodeCliente']}&status=sucess");
        die(); 
    }
                            
        header("location: cliente_form.php?codigo={$_POST['txtCodeCliente']}&status=fail");
        die(); 