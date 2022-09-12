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
        <h2>Cadastro de Cliente</h2>

        <form action="/cliente/cadastrar/salvar" method="POST">
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
                    <td class="title">Razão Social:</td>
                    <td colspan="8"><input type="text" name="razao_social" size="100" maxlength="100" autocomplete="off" required></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Nome Fantasia:</td>
                    <td colspan="8"><input type="text" name="nome_fantasia" size="60" maxlength="50" autocomplete="off" required></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Endereço:</td>
                    <td colspan="8"><input type="text" name="endereco" size="100" maxlength="100" ></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Complemento:</td>
                    <td colspan="8"><input type="text" name="complemento" size="60" maxlength="50"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Bairro:</td>
                    <td colspan="8"><input type="text" name="bairro" size="60" maxlength="50"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Cidade:</td>
                    <td colspan="8"><input type="text" name="cidade" size="60" maxlength="50"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Estado:</td>
                    <td colspan="8"><input type="text" name="estado" size="4" maxlength="2" style="text-transform:uppercase"></td>
                </tr>
                <!--
                <tr class="td_left">
                    <td class="title">Data de Inclusão:</td>
                    <td colspan="8"><input type="date" name="data_inclusao"></td>
                </tr>  
                -->
                <tr>
                    <td class="col_base" colspan="8">
                        <button class="new_button" type="submit">Cadastrar</button>
                        <a class="button delete_button" href="/">Cancelar</a>
                    </td>                  
                </tr>           
            </table>             
        </form>                  
    </div>
</body>
</html>
