<h1>Novo usuaário</h1>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de nascimento</label>
        <input type="date" name="data_nascimento" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""></label>
        <input type="submit" name="enviar" class="btn btn-primary">
    </div>
</form>