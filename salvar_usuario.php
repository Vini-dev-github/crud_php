<?php
if (!isset($conn)) {
    die("Conexão não estabelecida");
}

switch ($_REQUEST["acao"]) {
    case "cadastrar";
        $nome = $conn->real_escape_string($_POST["nome"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $data_nascimento = $conn->real_escape_string($_POST["data_nascimento"]);


        $sql = "INSERT INTO usuarios(nome, email, senha, data_nascimento) 
        VALUES('{$nome}', '{$email}', '{$senha}','{$data_nascimento}')";

        $res = $conn->query(query: $sql);

        if ($res == true) {
            echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar: " . $conn->error . "');</script>";
        }
        break;

    case "editar";
        $nome = $conn->real_escape_string($_POST["nome"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $data_nascimento = $conn->real_escape_string(($_POST["data_nascimento"]));

        $sql = "UPDATE usuarios SET
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    data_nascimento='{$data_nascimento}'
                WHERE 
                    id=" . $_REQUEST["id"];

        $res = $conn->query(query: $sql);

        if ($res == true) {
            echo "<script>alert('Edição realizado com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao editar: " . $conn->error . "');</script>";
        }
        break;

    case "excluir";

        $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];

        $res = $conn->query(query: $sql);

        if ($res == true) {
            echo "<script>alert('Exclusão realizada com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao excluir registro: " . $conn->error . "');</script>";
        }
        break;
}