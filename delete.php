<?php
include './sql/db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM alunos WHERE id=$id");
header("Location: index.php");
?>