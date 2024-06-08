<?php
include 'config.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books Schema</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Books Schema</h1>
        <a href="create.php">Add New Books</a>
        <table>
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>AUthor Name</th>
                <th>Genre</th>
                <th>Publicaton Year</th>
                <th>Price</th>
                <th>Edit </th>
                <th>Delete</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['author_name']; ?></td>
                <td><?php echo $row['genre']; ?></td>
                <td><?php echo $row['publication_year']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    
                </td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
<?php $conn->close(); ?>
