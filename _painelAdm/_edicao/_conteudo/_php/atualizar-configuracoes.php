<?php
    if(!isset($_SESSION)) { session_start(); }
    include_once("_conexao.php"); 

    //Atualizando o site
    //Falta as validações nas strings

    $dados = "  cdCSS       = '{$_POST['cdCSS']}',
                titulo      = '{$_POST['titulo']}',
                descricao   = '{$_POST['descricao']}',
                keyword     = '{$_POST['keyword']}'
            ";
        
    $sql = mysqli_query($conn, "UPDATE tbsite 
                                SET {$dados}
                                WHERE idSite = " . $_SESSION['idSite']);

    //Atualizando a imagem e dados do principal
    $imagem = $_FILES['imagem']['tmp_name'];
    $tamanho = $_FILES['imagem']['size'];
    $formatoImagem = $_FILES['imagem']['type'];
    $nmOriginalImagem = $_FILES['imagem']['name'];

    if ( $imagem != "none" && $tamanho > 0 )
    {
        $fp = fopen($imagem, "rb");
        $conteudo = fread($fp, $tamanho);
        $conteudo = addslashes($conteudo);
        fclose($fp);

            
        $dados = "  imagem            = '{$conteudo}',
                    tamanho           = '{$tamanho}',
                    formatoImagem     = '{$formatoImagem}',
                    nmOriginalImagem  = '{$nmOriginalImagem}',
                ";

        $sql = mysqli_query($conn, "UPDATE tbgaleria 
                                    SET {$dados}
                                    WHERE idSetorImagem = 0 AND idSite = " . $_SESSION['idSite']);
    } else {
        $dados = "";
    }

    $dados .= " tituloImagem      = '{$_POST['tituloImagem']}',
                dsImagem          = '{$_POST['dsImagem']}'
            ";

    $sql = mysqli_query($conn, "UPDATE tbgaleria 
                                    SET {$dados}
                                    WHERE idSetorImagem = 0 AND idSite = " . $_SESSION['idSite']);

    $_SESSION['setor'] = 6;
    header("location: ../../index.php");

?>