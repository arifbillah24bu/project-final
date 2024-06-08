<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Title = $_POST['title'];
    $Author_name = $_POST['author_name'];
    $Genre = $_POST['genre'];
    $Publication_year = $_POST['publication_year'];
    $Price = $_POST['price'];

    $sql = "INSERT INTO books (title, author_name, genre, publication_year,price) 
    VALUES ('$Title', '$Author_name', '$Genre', '$Publication_year','$Price')";
    
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
    <title>Add Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Add Books</h1>
        <form method="post" action="">
        Title: <input type="text" name="title" required><br>
        Author_name: <input type="text" name="author_name" required><br>
           
        Genre: 
            <select name="genre" required>
                <option value="funtion">Funtion</option>
                <option value="non_funtion">Non Funtion</option>
                <option value="science_funtion">Science Funtion</option>
            </select><br>
            <div  class="date" >Publication_year: <input type="date" name="age" required><br></div>
            Price: <input type="text" name="price" required><br>
            <input type="submit" value="Add Books">
        </form>
    </div>
</body>
</html>
<?php $conn->close(); ?>
