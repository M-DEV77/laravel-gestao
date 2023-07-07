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
    }
    .formBox textarea{
        width: 40vw;
        height: 15vh;
        border-radius: 4px;
    }
</style>
<form action="" method="GET">

    <div class="formBox">
      <p>Nome</p>
      <input type="text" name="nome" id="nome">
      <p>E-mail</p>
      <input type="text" name="email" id="email">
      <p>Senha</p>
      <input type="password" name="password" id="password"><br>
      <input type="submit" value="Login">
    </div>


</form>
