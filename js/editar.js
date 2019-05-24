function editar(id, txt_tarefa) {


    // alert("Estamos aqu! Em editar");


    // Criando um form de edição

    let form = document.createElement("form");

    form.action = "tarefa_controller.php?acao=atualizar";

    form.method = "get";

    form.className = "row";



    // Criando um input para entrada do texto

    let inputTarefa = document.createElement("input");

    inputTarefa.type = "text";

    inputTarefa.name = "tarefa";

    inputTarefa.className = "col-9 form-control";

    inputTarefa.value = txt_tarefa;



    // Criando um input hidden (oculto) para guardar o id da tarefa

    let inputId = document.createElement("input");

    inputId.type = "hidden";

    inputId.name = "id";

    inputId.value = id;




    // Criando um button para o envio do form

    let btn = document.createElement("btn");

    btn.type = "submit";

    btn.className = "col-2 ml-4 btn btn-info";

    btn.innerHTML = "Atualizar";



    // Incluindo inputTarefa no form

    form.appendChild(inputTarefa); // Adicionando elemento filho


    
    // Incluindo inputId no form

    form.appendChild(inputId);



    // Incluindo button no form

    form.appendChild(btn);



    /*
    // Testando

    console.log(form);

    alert(id);
    */



    // Selecionando a div com id="tarefa_<?= $tarefa->id ?>"

    let tarefa = document.getElementById("tarefa_" + id);



    // Limpando o texto da tarefa para inclusão do form

    tarefa.innerHTML = "";



    // Incluindo o form na página

    tarefa.insertBefore(form, tarefa[0]); // Incluindo um elemento dentro de outro elemento ja renderizado, ou seja, um inserte após a renderização da página


    // alert(txt_tarefa);


}