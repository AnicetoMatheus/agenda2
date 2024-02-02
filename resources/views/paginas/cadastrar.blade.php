
<x-layout title="Formulário Cadastro">
   

 
<form action="/cadastrar/salvar" method="POST">
    @csrf    
    <br>
        <label>Usuário:</label>
        <input type="text" id="user" name="user" required/><br><br>
       
        <label>Senha:</label>
        <input type="password" id="senha" name="senha" required/><br><br>
 
  
        <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit">Button</button>

</div>
    </form>
</x-layout>