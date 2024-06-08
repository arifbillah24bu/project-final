<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Title = $_POST['title'];
    $Author_name = $_POST['author_name'];
    $Genre = $_POST['genre'];
    $Publication_year = $_POST['publication_year'];
    $Price = $_POST['price'];

    $sql = "UPDATE books SET title='$Title', author_name='$Author_name', genre='$Gender',publication_year='$Publication_year', price='$Price' WHERE book_id=$book_id";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Books</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Books</h1>
        <form method="post" action="">
        Title: <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
        Author name: <input type="text" name="author_name" value="<?php echo $row['author_name']; ?>" required><br>
        Genre: 
            <select name="genre" required>
                <option value="funtion" <?php if($row['genre'] == 'funtion') echo 'selected'; ?>>Funtion</option>
                <option value="non_funtion" <?php if($row['genre'] == 'non_funtion') echo 'selected'; ?>>Non Funtion</option>
                <option value="science_funtion" <?php if($row['genre'] == 'science_funtion') echo 'selected'; ?>>Science Funtion</option>
            </select><br>
            Publication year: <input type="text" name="publication_year" value="<?php echo $row['publication_year']; ?>" required><br>
            Price: <input type="text" name="price" value="<?php echo $row['price']; ?>" required><br>
            <input type="submit" value="Update Books">
        </form>
    </div>
</body>
</html>
<?php $conn->close(); ?>
