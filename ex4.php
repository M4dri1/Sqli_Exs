<?php
$servidor = "localhost";
$usuario = "root";
$senha = "12345678";
$dbname = "library1";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$sql = "INSERT INTO books (author_id, title) VALUES (1, 'The Last Spark of Atlantis')";

if (mysqli_query($conn, $sql)) {
    echo "Livro adicionado com sucesso!";
} else {
    echo "Erro ao adicionar livro" . mysqli_error($conn);
}
?>