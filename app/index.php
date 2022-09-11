<?php
    require_once('./controllers/ClienteController.php');    
    require_once('./controllers/ContatoController.php');

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $cliente = new ClienteController(); 
    $contato = new ContatoController();

    // Rotas do Sistema
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
        case '/cliente/excluir':
            $cliente->excluir();
            break;
        case '/cliente/excluir/deletar':
            $cliente->deletar();
            break;
        case '/contato/cadastrar':
            $contato->cadastrar();
            break;
        case '/contato/cadastrar/salvar':
            $contato->salvar();
            break;
        case '/contato/editar':
            $contato->editar();
            break;
        case '/contato/editar/atualizar';
            $contato->atualizar();
            break;
        case '/contato/excluir':
            $contato->excluir();
            break;
        case '/contato/excluir/deletar':
            $contato->deletar();
            break;
        default:
            $cliente->error();
    }      

    
    
    
    



