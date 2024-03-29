<?php
if(!isset($_SESSION)) { session_start(); }
$_SESSION['setor'] = 1;
include("_php/buscar-site.php");
?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Início</a>
    </li>
    <li class="breadcrumb-item active">Principal</li>
</ol>
<div class="col-md-12">
    <div class="row">
        <form enctype="multipart/form-data" role="form" method="post" action="_conteudo/_php/atualizar-principal.php" >

            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="background-img center-block img-responsive" id="img360" <?php echo 'src="data:image/jpeg;base64,' . base64_encode( $imagensSite['imagem'] ) . '"';?> >
                            <input type="file" accept="image/*" name="imagem" class="form-control" id="inputPerfil" />
                            <hr>
                            <div class="form-group">
                                <label class="control-label" for="exampleInputEmail1">&nbsp;Título da Imagem:</label>
                                <input class="form-control" id="imagem_titulo"	name="imagem_titulo" placeholder="Digite o título desejado" type="text" value="<?php echo $imagensSite['imagem_titulo']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="exampleInputEmail1">Descrição da Imagem:</label>
                                <textarea class="form-control" id="imagem_descricao" name="imagem_descricao" placeholder="Digite a descrição desejada" rows="4" cols="50"><?php echo $imagensSite['imagem_descricao']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="exampleInputEmail1">&nbsp;Título:</label>
                                <input class="form-control" id="principalTitulo"	name="principalTitulo" placeholder="Digite o título desejado" type="text" value="<?php echo $site['site_principal_titulo']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="exampleInputEmail1">Sub Título:</label>
                                <textarea class="form-control" id="principalSubtitulo" name="principalSubtitulo" placeholder="Digite o subtítulo desejado" rows="4" cols="50"><?php echo $site['site_principal_subtitulo']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="exampleInputEmail1">Descrição:</label>
                                <textarea class="form-control" id="principalDescricao" name="principalDescricao" placeholder="Digite a descrição desejada" rows="4" cols="50"><?php echo $site['site_principal_descricao']; ?></textarea>
                            </div>
                            <button id="btnAlterar" class="btn btn-primary btn-lg">Salvar alterações</button>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<script>
    /*
    $(function(){
        $('#btnAlterar').on('click',function(){
            alert("funcionou");
            /*
            var dados = $(this).closest('form').serialize();
            $.ajax({
                url: "_conteudo/_php/atualizar-principal.php",
                data: {
                    dados: dados
                },
                dataType: "json",
                type: "POST",
                beforeSend: function () {
                    $(".result").html('Carregando. Aguarde, por favor.');
                },
                success: function(result) {
                    $(".result").html('Dados salvos com sucesso');
                },
                error: function(){
                    $(".result").html("Error");
                }
            });
        });
    });

    /*
    $(document).ready(function(){
        $('#btnAlterar').on('click',function(){
            //antes de enviar, aqui precisa realizar a validação de todos os campos
            alert("funcionou");
        });
    });

    $('input[type=submit]').click(function(e){
        //setamos para quando submeter não atualizar a pagina
        e.preventDefault();
        //o serialize retorna uma string pronta para ser enviada
        var valores = $('#form').serializeArray();
        //colocamos no console para vermos
        console.log(valores); 
    });
</script>