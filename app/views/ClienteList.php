<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/style.css">
    <title>Teste</title>
</head>
<body>
    <div>
        <h2>Lista de Clientes/Contatos</h2>
        <table>
            <tr>
                <td class="col_base"></td>
                <td class="col_base"></td>
                <td class="col_base"></td>
                <td class="col_base"></td>
                <td class="col_base"></td>
                <td class="col_base"></td>
                <td class="col_base"></td>
                <td class="col_base"></td>
                <td class="col_base" colspan="2"></td>
            </tr>
            <tr class='title'>
                <td class="small">Cód. Cliente</td>
                <td colspan="3">Razão Social</td>
                <td colspan="2">Nome Fantasia</td>
                <td colspan="1">Data de Inclusão</td>
                <td colspan="1">Nº Contatos</td>
                <td class="small" colspan="2"></td>
            </tr>
            <?php foreach($rows as $row): ?>
                <tr>
                    <td class="small td_right"><?= $row['cod_cliente'] ?></td>
                    <td colspan="3" class="td_left"><?= $row['razao_social'] ?></td>
                    <td colspan="2" class="td_left"><?= $row['nome_fantasia'] ?></td>
                    <td colspan="1"><?= date("d-m-Y", strtotime($row['data_inclusao'])) ?></td>
                    <td colspan="1"><?= $row['contatos'] ?></td>
                    <td colspan="2" class="small">
                        <a class="edit_button" href="/cliente/editar?cod_cliente=<?= $row['cod_cliente'] ?>">Editar</a>                        
                    <?php 
                        if ((int)$row['contatos'] == 0){                                                    
                            echo '<a class="delete_button" href="/cliente/excluir?cod_cliente='.$row['cod_cliente'].'">Excluir</a>';                        
                        } else {
                            echo '<a class="disabled delete_button" href="/">Excluir</a>';
                        }
                    ?>
                    </td>       
                </tr>
            <?php endforeach ?>            
        </table>           
    </div>
    <div class="mg_top">
        <a class="new_button" href="/cliente/cadastrar">Cadastrar Cliente</a> 
        <a class="edit_button" href="/relatorio">Relatório</a>
    </div>
</body>
</html>
