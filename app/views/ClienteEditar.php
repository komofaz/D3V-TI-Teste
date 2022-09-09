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
        <h2>Editar de Cliente / Incluir Contatos</h2>

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
                    <td colspan="8"><input type="text" name="estado" size="4" maxlength="2" value="<?= $row['estado'] ?>"></td>
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
                    <td>Telefone</td>
                    <td>Celular</td>
                    <td colspan="2">E-mail</td>
                    <td colspan="2"></td>
                </tr> 
                <tr><td class="col_base"></td></tr>
                <tr class="title">
                    <td colspan="8">
                        <button class="new_button" type="submit">Salvar</button>
                        <button class="delete_button" type="cancel">Cancelar</button>
                    </td>                  
                </tr> 
            </table>             
        </form>                  
    </div>
</body>
</html>

