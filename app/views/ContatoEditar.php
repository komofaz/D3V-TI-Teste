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
        <h2>Editar Contato</h2>

        <form action="/contato/editar/atualizar?cod_cliente=<?= $row['cod_cliente']?>&cod_contato=<?= $row['cod_contato'] ?>" method="POST">
            <table>
                <tr>
                    <td class="col_base"></td>
                    <td class="col_base"></td>
                    <td class="col_base"></td>
                    <td class="col_base"></td>
                    <td class="col_base"></td>
                    <td class="col_base"></td>
                    <td class="col_base" colspan="2"></td>
                </tr>
                <tr class="td_left">
                    <td class="title" >Cód. Contato:</td>                    
                    <td colspan="8"><input class="readonly" type="number" name="cod_contato" value="<?= $row['cod_contato'] ?>" readonly></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Nome:</td>
                    <td colspan="8"><input type="text" name="nome_contato" size="100" maxlength="100" value="<?= $row['nome_contato'] ?>" autocomplete="off" required></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Telefone 1:</td>
                    <td colspan="8"><input type="text" name="telefone_1" size="20" maxlength="13" onkeyup="mask(this)" value="<?= $row['telefone_1'] ?>"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Telefone 2:</td>
                    <td colspan="8"><input type="text" name="telefone_2" size="20" maxlength="13" onkeyup="mask(this)" value="<?= $row['telefone_2'] ?>"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">Celular:</td>
                    <td colspan="8"><input type="text" name="celular" size="20" maxlength="14" onkeyup="mask(this)" value="<?= $row['celular'] ?>"></td>
                </tr>
                <tr class="td_left">
                    <td class="title">E-mail:</td>
                    <td colspan="8"><input type="text" name="email" size="60" maxlength="50" value="<?= $row['email'] ?>"></td>
                </tr>
                <tr><td class="col_base"></td></tr>
                <tr class="title">
                    <td colspan="8">
                        <button class="new_button" type="submit">Salvar</button>
                        <a class="button delete_button" href="/cliente/editar?cod_cliente=<?= $row['cod_cliente']?>">Cancelar</a>
                    </td>                  
                </tr> 
            </table>             
        </form>                  
    </div>
</body>

<script>
function mask(campo) {    
    setTimeout(function() {
        if(campo.name == "celular"){
            var v = celular(campo.value);
        } else {
            var v = telefone(campo.value);
        }
        
        if (v != campo.value) {
            campo.value = v;
        }
    }, 1);
}

function telefone(valor) {
    var mascara = valor.replace(/\D/g, "");
    mascara = mascara.replace(/^0/, "");
    if (mascara.length > 5) {
        mascara = mascara.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1)$2-$3");
    } else if (mascara.length > 1) {
        mascara = mascara.replace(/^(\d\d)(\d{0,5})/, "($1)$2");
    } else if (mascara.length == 1){
        mascara = mascara.replace(/^(\d*)/, "($1");
    }
    return mascara;
}

function celular(valor){
    var mascara = valor.replace(/\D/g, "");
    mascara = mascara.replace(/^0/, "");
    if (mascara.length > 6) {
        mascara = mascara.replace(/^(\d\d)(\d{5})(\d{0,4}).*/, "($1)$2-$3");
    } else if (mascara.length > 1) {
        mascara = mascara.replace(/^(\d\d)(\d{0,5})/, "($1)$2");
    } else if (mascara.length == 1){
        mascara = mascara.replace(/^(\d*)/, "($1");
    }
    return mascara;
}

</script>
</html>

