<?php
    require_once('./controllers/ClienteController.php');    

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $cliente = new ClienteController(); 
    switch($url){
        case '/':
            $cliente->index();
            break;
        case '/cliente/cadastrar':
            $cliente->cadastrar();
            break;
        case '/cliente/cadastrar/salvar':
            $cliente->salvar();
            break;
        case '/cliente/editar':
            $cliente->editar();
            break;
        case '/cliente/editar/atualizar';
            $cliente->atualizar();
            break;
        case '/cliente/deletar':
            $cliente->deletar();
            break;
        default:
            echo 'Erro 404';
    }      

    
    
    
    



