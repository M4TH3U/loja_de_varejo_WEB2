<?php

namespace APP\Controller;

use APP\Model\Product;
use APP\Model\Validation;
use APP\Utils\Redirect;
use APP\Model\Fornecedor;

require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(
        message:'Falha no cadastro!!',
        type: 'error'
    );
}

$fornecedorNome = $_POST["nome"];
$fornecedorCnpj =  (float) $_POST["cnpj"];
$fornecedorTelefone = (float) $_POST["telefone"];

$error = array();

if(!Validation::validateNome($fornecedorNome)){
    array_push($error,"O nome do fornecedor deve conter ao menos 3 caracteres!!!");
}

if(!Validation::validateNome($fornecedorCnpj)){
    array_push($error, "O cnpj tem que possuir 14 digitos!!!");
}

if(!Validation::validatePhone($fornecedorTelefone)){
    array_push($error, "Precisa ser o telefone completo!!!");
}

if($error){
    Redirect::redirect(
        message: $error, type:'warning'
    ); 
}else{
    $fornecedor = new Fornecedor(
        nome: $fornecedorNome,
        cnpj: $fornecedorCnpj,
        telefone: $fornecedorTelefone
    );

    Redirect::redirect(
        message:"Fornecedor cadastrado com sucesso!!!", type: "success"
    );
}