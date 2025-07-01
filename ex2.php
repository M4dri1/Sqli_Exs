<?php
$servidor = "localhost";
$usuario = "root";
$senha = "12345678";
$dbname = "library1";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$resultado = mysqli_query($conn, "SELECT * FROM books");
?>

<!DOCTYPE html>
<html>

<body>
    <h2>Books</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Authors ID</th>
            <th>Title</th>
        </tr>
        <?php while ($linha = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?= $linha['book_id'] ?></td>
                <td><?= $linha['author_id'] ?></td>
                <td><?= $linha['title'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>