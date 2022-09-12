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
        <h2>Relatório</h2>

        <?php for($x=0; $x < count($rows); $x++){
            if (mysqli_num_rows($rows[$x]) > 0){
                switch($x){
                    case 0:
                        $sub_title = 'SEM CONTATO';
                        break;
                    case 1:
                        $sub_title = 'SEM TELEFONE';
                        break;
                    case 2:
                        $sub_title = 'SEM CELULAR';
                        break;
                    case 3:
                        $sub_title = 'SEM E-MAIL';
                        break;
                    default:
                        $sub_title = '';
                } 

                echo '<table class="mg_top">
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
                        <tr><td colspan="9" class="warning_title">'.$sub_title.'</td></tr>
                        <tr class="title">
                            <td class="small">Cód. Cliente</td>
                            <td colspan="3">Razão Social</td>
                            <td colspan="2">Nome Fantasia</td>
                            <td colspan="1">Data de Inclusão</td>
                            <td class="small" colspan="2"></td>
                        </tr>';              
                   
                    
                foreach($rows[$x] as $row){
                    echo'<tr>
                            <td class="small td_right">'.$row['cod_cliente'].'</td>
                            <td colspan="3" class="td_left">'.$row['razao_social'].'</td>
                            <td colspan="2" class="td_left">'.$row['nome_fantasia'].'</td>
                            <td colspan="1">'.date('d-m-Y', strtotime($row['data_inclusao'])).'</td>
                            <td class="small">
                                <a class="edit_button" href="/cliente/editar?cod_cliente='.$row['cod_cliente'].'">Editar</a>                       
                            </td>
                        </tr>';
                }

                echo '</table>';                
            }
        } ?>
                  
    </div>
    <div class="mg_top">        
        <a class="edit_button" href="/">Voltar</a>
    </div>
</body>
</html>
