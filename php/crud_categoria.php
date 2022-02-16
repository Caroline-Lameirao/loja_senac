<?php

    require_once('./conexao.php');

    function fnAddCategoria($nomeCategoria)
    {
        $link = getConnection();

        $query = "insert into categoria(nm_categoria) values ('{$nomeCategoria}');";

        $result = mysqli_query($link, $query);

        mysqli_close($link);
                
        if($result) # if sempre espera uma verdade(true)
        {
            return true;
        }

        return false;
    }

     ##

     function fnListCategoria()
     {
         $link = getConnection();
         $query = "select * from categoria";
 
         $result = mysqli_query($link, $query);
 
         $categorias = array();
         while ($ccategoria = mysqli_fetch_assoc($result)) {
             array_push($categorias, $categoria);
         }
 
         mysqli_close($link);
         return $ccategorias;
     }

     ##

     function fnFindCategoria($codCategoria)
     {
         $link = getConnection();
         $query = "select * from categoria where cod_categoria = {$codCategoria}";
 
         $result = mysqli_query($link, $query);
 
         mysqli_close($link);
         return mysqli_fetch_assoc($result);
     }

     ##

    function fnUpdateCategoria($nomeCategoria)
    {
        $link = getConnection();
        $query = "update categoria set nm_categoria = '{$nomeCategoria}' where cod_categoria = {$codCategoria};";

        $result = mysqli_query($link, $query);
        
        mysqli_close($link);

        if($result)
        {
            return true;
        }
        
        return false;
    }

    function fnDeleteCategoria($codCategoria)
    {
        $link = getConnection();
        $query = "delete from categoria where cod_categoria = {$codiCategoria};";

        $result = mysqli_query($link, $query);
        mysqli_close($link);

        if ($result) {
            return true;
        }

        return false;
    }