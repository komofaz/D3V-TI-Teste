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
        <table class="table_warning">
            <tr>
                <td class="col_base"></td>
                <td class="col_base"></td>
                <td class="col_base"></td>
                <td class="col_base"></td>
            </tr>
            <tr class="td_left">
                <td>Cód. Contato:</td>
                <td colspan="3"><?= $row['cod_contato'] ?></td>
            </tr>
            <tr class="td_left">
                <td>Nome:</td>
                <td colspan="3"><?= $row['nome_contato'] ?></td>
            </tr>
            <tr>
                <td colspan="4" class="title">Tem Certeza que Gostaria de Excluir o Contato Acima?</td>
            </tr>
            <tr>
                <td colspan="4" class="col_base">
                    <a class="delete_button" href="/contato/excluir/deletar?cod_cliente=<?= $row['cod_cliente'] ?>&cod_contato=<?= $row['cod_contato'] ?>">Excluir</a>                
                    <a class="new_button" href="/cliente/editar?cod_cliente=<?= $row['cod_cliente'] ?>">Não Excluir</a> 
                </td>
            </tr>
        </table>        
    </div>
</body>
</html>
