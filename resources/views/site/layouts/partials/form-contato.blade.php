<style>
    form{
        width: 98vw;
        height: 60vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .formBox input{
        width: 40vw;
        height: 5vh;
        border-radius: 4px;
        border-style: none;
        border: {{$cor}} 3px solid ;
    }
    .formBox textarea{
        width: 40vw;
        height: 15vh;
        border-radius: 4px;
        border: {{$cor}} 3px solid ;
    }
    .vermelha{

    }
</style>
<form action="{{ route('site.contato') }}" method="GET">

    <div class="formBox">
      <p>Nome</p>
      <input type="text" name="nome" id="nome">
      <p>E-mail</p>
      <input type="text" name="email" id="email">
      <p>Teleforne</p>
      <input type="text" name="telefone" id="telefone">
      <p>Mensagem</p>
      <textarea name="mensagem" id="ensagem">
      </textarea><br>
      <input type="submit" value="Enviar">
    </div>


</form>
