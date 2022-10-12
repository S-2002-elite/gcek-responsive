<?php
$servername="sql6.freemysqlhosting.net";
$username="sql6526074";
$password="FsS1YngEeh";
$database_name="sql6526074";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];
    $book_publisher = $_POST['book_publisher'];
    $book_edition = $_POST['book_edition'];

    $sql_query = "INSERT INTO request_book(name,email,book_title,book_author,book_publisher,book_edition)
    VALUES ('$name','$email','$book_title','$book_author','$book_publisher','$book_edition')";

    if (mysqli_query($conn,$sql_query))
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Request Details submitted sucessfully");'; 
        echo 'window.location.href = "request-books.html";';
        echo '</script>';
    }

    else{
        echo '<script>alert("Oops!!");</script>';
    }
    mysqli_close($conn);
}
?>