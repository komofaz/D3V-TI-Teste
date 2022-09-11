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
            <tr class='title'>
                <td class="small">Cód. Cliente</td>
                <td>Razão Social</td>
                <td>Nome Fantasia</td>
                <td>Data de Inclusão</td>
                <td>Nº Contatos</td>
                <td class="small" colspan="2"></td>
            </tr>
            <?php foreach($rows as $row): ?>
                <tr>
                    <td class="small td_right"><?= $row['cod_cliente'] ?></td>
                    <td class="td_left"><?= $row['razao_social'] ?></td>
                    <td class="td_left"><?= $row['nome_fantasia'] ?></td>
                    <td><?= date("d-m-Y", strtotime($row['data_inclusao'])) ?></td>
                    <td class="td_right"></td>
                    <td class="small">
                        <a class="edit_button" href="/cliente/editar?cod_cliente=<?= $row['cod_cliente'] ?>">Editar</a>                        
                    </td>                    
                    <td class="small">
                        <a class="delete_button" href="/cliente/excluir?cod_cliente=<?= $row['cod_cliente'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach ?>            
        </table>           
    </div>
    <div class="mg_top">
        <a class="new_button" href="/cliente/cadastrar">Cadastrar Cliente</a> 
        <a class="edit_button" href="/">Relatório</a>
    </div>
</body>
</html>
