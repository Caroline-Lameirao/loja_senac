<?php

    require_once('./conexao.php');

    function fnAddProduto($nomeProduto, $valor, $quantidade, $codCategoria)
    {
        $link = getConnection();

        $query = "insert into produto(nm_produto, valor_produto, qtd_produto, cod_categoria) values ('{$nomeProduto}', {$valor}, {$quantidade}, {$codCategoria});";
        
        $result = mysqli_query($link, $query);

        mysqli_close($link);
                
        if($result) # if sempre espera uma verdade(true)
        {
            return true;
        }

        return false;
    }

    ##

    function fnListProdutos()
    {
        $link = getConnection();
        $query = "select * from produto";

        $result = mysqli_query($link, $query);

        $produtos = array();
        while ($produto = mysqli_fetch_assoc($result)) {
            array_push($produtos, $produto);
        }

        mysqli_close($link);
        return $produtos;
    }

    ##

    function fnFindProduto($codProduto)
    {
        $link = getConnection();
        $query = "select * from produto where cod_produto = {$codProduto}";

        $result = mysqli_query($link, $query);

        mysqli_close($link);
        return mysqli_fetch_assoc($result);
    }

    ##

    function fnUpdateProduto($nomeProduto, $valor, $quantidade, $codCategoria)
    {
        $link = getConnection();
        $query = "update produto set nm_produto = '{$nomeProduto}', valor_produto = {$valor}, qtd_produto = {$quantidade} where cod_categoria = {$codCategoria};";

        $result = mysqli_query($link, $query);
        
        mysqli_close($link);

        if($result)
        {
            return true;
        }
        
        return false;
    }

    ##

    function fnDeleteProduto($codProduto)
    {
        $link = getConnection();
        $query = "delete from produto where cod_produto = {$codProduto};";

        $result = mysqli_query($link, $query);
        mysqli_close($link);

        if ($result) {
            return true;
        }

        return false;
    }