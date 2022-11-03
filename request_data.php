<?php
$servername="localhost";
$username="root";
$password="";
$database_name="gcek_library";

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

    $mailto = $_POST['email'];
    $from = "suryanshupatnaik4@gmail.com";
    $subject = "REQUEST BOOK";
    $subject2 = "Your Book Request submitted successfully | CENTRAL LIBRARY GCEK BHWANIPATNA";
    $message = "Client Name: ". $name. "Requested the following book". "\n\n". $_POST['book_title'];
    $message2 = "Dear ". $name. "\n\n" ."Thank You for contacting us! We'll get back to you shortly.";
    $headers = "From: ". $from;
    $headers2 = "From: ". $mailto;
    $result = mail($mailto, $subject2, $message2, $headers2);
    $result2 = mail($from, $subject, $message, $headers);

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