<?php

/*
echo "<pre>";
print_r($_POST);
echo "<pre>";

echo "Testando controller no back-end";
*/


// Fazendo as importações
require "../back/tarefa.model.php";
require "../back/tarefa.service.php";
require "../back/conexao.php";


/*
echo "<pre>";
print_r($_POST);
echo "<pre>";
*/


// Recuperando a variavel $acao
$acao = isset($_GET["acao"]) ? $_GET["acao"] : $acao;



if ( $acao == "inserir" ) {

    // Criando as instancias dos require acima, ou seja das importações realizadas
    $tarefa = new Tarefa();
    $tarefa->__set("tarefa", $_POST["tarefa"]);


    $conexao = new Conexao();


    $tarefaService = new Tarefaservice($conexao, $tarefa);

    // Executando o metodo inserir()
    $tarefaService->inserir();


    // Redirecionando para a página nova_tarefa.php após a inserção dos dados
    header("Location: nova_tarefa.php?inclusao=1");


    /*
    echo "<pre>";
    print_r($tarefaService);
    echo "<pre>";
    */

} else if ( $acao == "recuperar" ) {

   // echo "Estamos aqui! Recuperando dados";


   $tarefa = new Tarefa();
   $conexao = new Conexao();

   $tarefaService = new Tarefaservice($conexao, $tarefa);


   $tarefas = $tarefaService->recuperar();

} else if ( $acao == "atualizar" ) {

    echo ("Estamos aqui! Em atualizar.");

}



?>