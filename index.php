<?php

session_start();

require_once './vendor/autoload.php';

use Slim\Slim;
use SysMax\Page;
use SysMax\appModel\User;

$app = new Slim();

$app->config('debug', TRUE);

// Tela de Login do Usuário.
$app->get("/", function(){
    
    $page = new Page();
    
    $page->setTpl('login');
    
});

// Tela do Menu Inicial do Sistema
$app->get("/", function(){
    
    User::verifyLogin();
    
    $page = new Page();
    
    $page->setTpl("menuInicial");
    
});

$app->post("/", function(){
    
    User::login($_POST["login"], $_POST["password"]);
    
    header("Location: /menuInicial");
    
    exit();
});

// Efetua o LogOut do Usuário no sistema.
$app->get("/", function(){
    
    User::logout();
    
    header("Location: /index");
    
    exit();
});

// Tela que irá listar todos Usuários.
$app->get("/cadLogin", function(){
    
    $page = new Page();
    
    $page->setTpl("cadLogin");
    
});

// Tela de inserção de dados do registro - Create
$app->get("/UserCreate", function(){
    
    User::verifyLogin();
    
    $page = new Page();
    
    $page->setTpl("UserCreate");
    
});

// Parâmetros para Alterações de dados do registro - Update
$app->get("/cadLogin/:idUser",function($iduser){
    
    User::verifyLogin();
    
    $page = new Page();
    
    $page->setTpl("UserUpdate");
    
});

// Responsável por salvar os NOVOS dados do Registro do Usuário - Insert
$app->post("/users/create", function(){
    
    User::verifyLogin();
        
});

// Responsável por salvar as ALTERAÇÕES dos dados do Registro do Usuário - Update
$app->post("/users/:idUser", function($iduser){
    
    User::verifyLogin();
    
});

// Resposável por EXCLUIR os dados do Registro do Usuário - Delete
$app->delete("/users/:idUser", function($iduser){
    
    User::verifyLogin();
    
});

$app->run();