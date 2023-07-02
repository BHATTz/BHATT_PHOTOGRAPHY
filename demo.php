<?php
    if (isset($_POST['submit'])) {
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Message = $_POST['message'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'cont';

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = "INSERT INTO contact(Name,Email,Phone,Message) values ('$Name','$Email','$Phone','$Message')";
        mysqli_query($conn, $sql);
        }
        header("Location:contact.php");
    ?>