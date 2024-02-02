<x-layout title="Adicionar Tarefas">
   <div class="container"> 

<form action="/adicionar/salvar" method="POST">
    @csrf    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <center>
        <label>Titulo da Tarefa</label>
        <input type="text" id="tarefa" name="tarefa" required/><br><br>
       
        <label>Descrição:</label>
        <input type="text" id="descricao" name="descricao" required/><br><br>

        <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit">Button</button>
        
    </center>
    </form>
</x-layout>