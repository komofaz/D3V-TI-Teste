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
        <h2>Editar Cliente / Incluir Contatos</h2>

        <form action="/cliente/editar/atualizar" method="POST">
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
                <tr class="td_left">
                    <td class="title" >Cód. Cliente:</td>                    
                    <td colspan="8"><input class="readonly" type="number" name="cod_cliente" value="<?= $row['cod_cliente'] ?>" readonly></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Razão Social:</td>
                    <td colspan="8"><input type="text" name="razao_social" size="100" required maxlength="100" value="<?= $row['razao_social'] ?>"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Nome Fantasia:</td>
                    <td colspan="8"><input type="text" name="nome_fantasia" size="60" required maxlength="50" value="<?= $row['nome_fantasia'] ?>"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Endereço:</td>
                    <td colspan="8"><input type="text" name="endereco" size="100" maxlength="100" value="<?= $row['endereco'] ?>"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Complemento:</td>
                    <td colspan="8"><input type="text" name="complemento" size="60" maxlength="50" value="<?= $row['complemento'] ?>"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Bairro:</td>
                    <td colspan="8"><input type="text" name="bairro" size="60" maxlength="50" value="<?= $row['bairro'] ?>"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Cidade:</td>
                    <td colspan="8"><input type="text" name="cidade" size="60" maxlength="50" value="<?= $row['cidade'] ?>"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Estado:</td>
                    <td colspan="8"><input type="text" name="estado" size="4" maxlength="2" value="<?= $row['estado'] ?>" style="text-transform:uppercase"></td>
                </tr>
                <tr class="td_left">
                    <td class="title" >Data de Inclusão:</td>
                    <td colspan="8"><input class="readonly" type="text" name="data_inclusao" value="<?= date("d-m-Y",strtotime($row['data_inclusao'])) ?>" readonly></td>                    
                </tr>  
                <tr>
                    <td class="col_base sub_title td_left">Contatos</td>
                    <td class="col_base"></td>
                </tr>   
                <tr class="title">
                    <td>Cód. Contato</td>
                    <td colspan="2">Nome</td>
                    <td>Telefone 1</td>
                    <td>Telefone 2</td>
                    <td>Celular</td>
                    <td colspan="2">E-mail</td>
                    <td colspan="2"></td>                    
                </tr> 
                <?php foreach($rows as $row){ ?>
                    <tr>
                        <td><?= $row['cod_contato'] ?></td>
                        <td colspan="2"><?= $row['nome_contato'] ?></td>
                        <td><?= $row['telefone_1'] ?></td>
                        <td><?= $row['telefone_2'] ?></td>
                        <td><?= $row['celular'] ?></td>
                        <td colspan="2"><?= $row['email'] ?></td>  
                        <td colspan="8">
                            <a class="edit_button" href="/contato/editar?cod_contato=<?= $row['cod_contato']?>">Editar</a> 
                            <a class="delete_button" href="/contato/excluir?cod_cliente=<?= $row['cod_cliente'] ?>&cod_contato=<?= $row['cod_contato'] ?>">Excluir</a> 
                        </td>                  
                    </tr>
                <?php } ?>
                <tr><td class="col_base"></td></tr>
                <tr>
                    <td class="col_base"><a class="button new_button" href="/contato/cadastrar?cod_cliente=<?= $row['cod_cliente']?>">Novo Contato</a></td>
                </tr>
                <tr><td class="col_base"></td></tr>
                <tr class="title">
                    <td colspan="9">
                        <button class="new_button" type="submit">Salvar</button>
                        <a class="button edit_button" href="/">Voltar</a>
                    </td>                  
                </tr> 
            </table>             
        </form>                  
    </div>
</body>
</html>

