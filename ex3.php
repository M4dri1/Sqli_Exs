<?php
$servidor = "localhost";
$usuario = "root";
$senha = "12345678";
$dbname = "library1";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$resultado = mysqli_query($conn, "SELECT books.*, authors.name FROM books LEFT JOIN authors ON books.author_id = authors.author_id");

?>

<!DOCTYPE html>
<html>

<body>
    <h2>Books</h2>
    <table border="1">
        <tr>
            <th>ID Book</th>
            <th>Title</th>
            <th>ID Author</th>
            <th>Author</th>
        </tr>
        <?php while ($linha = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $linha['book_id'] ?></td>
                <td><?= $linha['title'] ?></td>
                <td><?= $linha['author_id'] ?></td>
                <td><?= $linha['name'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>