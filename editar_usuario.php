<h1>Editar usuário</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query(query: $sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" value="
        <?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" value="
        <?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Data de nascimento</label>
        <input type="date" name="data_nascimento" value="
        <?php print $row->data_nascimento; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""></label>
        <input type="submit" name="enviar" class="btn btn-primary">
    </div>
</form>