<?php include './sql/db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM alunos WHERE id=$id");
$aluno = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];
    $conn->query("UPDATE alunos SET nome='$nome', curso='$curso' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Aluno</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h2>Editar Alunos</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="name" id="nome" class="form-control" value="<?= $aluno['nome'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="curso" class="form-label">Curso</label>
                    <input type="text" name="curso" id="curso" class="form-control" value="<?= $aluno['curso'] ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="index.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</html>

