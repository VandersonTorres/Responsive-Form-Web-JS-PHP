<?php

// ============================== CONEXÃO COM O BANCO DE DADOS ============================== //

try{
    $dsn = new PDO("mysql:host=localhost; dbname=fabiane bedim arquitetura", "root", "Vanderson123@!");
} catch (PDOException $erro){
    echo "ERRO,! A conexão falhou =>". $erro -> getMessage();
}

// ======================== PREPARAÇÃO E INSERÇÃO NO BANCO DE DADOS ======================== //

$stmt = $dsn -> prepare("INSERT INTO clientes (nome, data_nascimento, cpf, tipo_projeto, plano_contratado,
    tipo_endereco, logradouro, numero, bairro, cidade, estado, pais, complemento, email, telefone_celular,
    telefone_secundario, tipo_sexo, como_conheceu, msg_como_conheceu, tipo_msg, msg_cliente, created)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

$resultSet = $stmt -> execute([$_POST['client_name'], $_POST['birth_date'], $_POST['cpf'], $_POST['project_type'],
    $_POST['contracted_plan'], $_POST['adress_type'], $_POST['public_place'], $_POST['adress_number'],
    $_POST['neighborhood'], $_POST['city'], $_POST['state_'], $_POST['country'], $_POST['complement'],
    $_POST['email'], $_POST['cell_phone'], $_POST['secundary_phone'], $_POST['gender'], $_POST['how_found'],
    $_POST['msg_how_found'], $_POST['msg_type'], $_POST['client_msg']]);

// =========================== CONFIRMAÇÃO DE INSERÇÃO DE DADOS =========================== //

if($resultSet){
    echo "<h1 style='color:green'> Cliente cadastrado com sucesso. </h1>";
} else{
    echo "<h1 style='color:red'> Ocorreu um erro e não foi possível cadastrar o cliente. </h1>";
}

// ======================= DESTRUINDO O OBJETO E FECHANDO A CONEXÃO ======================= //

$stmt = null;
$dsn = null;

?>
