<?php
    require_once "connect.php";

    // Get book details from the form
    $s_name = $_POST['s_name'];
    $reg=$_POST['reg'];
    $DOB = $_POST['DOB'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $CV = $_POST['CV'];

    $sql = "INSERT INTO data2 (s_name,reg,DOB,phone,email,CV) VALUES ('$s_name', '$reg','$DOB','$phone','$email','$CV')";
    if ($conn->query($sql) === TRUE) {
        echo " added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>