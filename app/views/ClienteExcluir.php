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
            <tr>
                <td>Cód. Cliente</td>
                <td colspan="3" class="td_left"><?= $row['cod_cliente'] ?></td>
            </tr>
            <tr>
                <td>Razão Social</td>
                <td colspan="3" class="td_left"><?= $row['razao_social'] ?></td>
            </tr>
            <tr>
                <td colspan="4" class="title">Tem Certeza que Gostaria de Excluir o Cliente Acima?</td>
            </tr>
            <tr>
                <td colspan="4" class="col_base">
                    <a class="delete_button" href="/cliente/excluir/deletar?cod_cliente=<?= $row['cod_cliente'] ?>">Excluir</a>                
                    <a class="new_button" href="/">Não Excluir</a> 
                </td>
            </tr>
        </table>        
    </div>
</body>
</html>
