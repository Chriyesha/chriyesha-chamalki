<?php

include 'db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

   
    $sql = "INSERT INTO users (username, firstName, lastName, email, password, mobile, gender) 
            VALUES ('$username', '$firstName', '$lastName', '$email', '$password', '$mobile', '$gender')";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully. <a href='index.php'>Go to the Login page</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
