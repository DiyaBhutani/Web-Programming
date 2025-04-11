<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO students
    (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
    VALUES
    (103, 'Chahat', 'chahat@gmail.com', '3234567890'),(104, 'TestUser', 'test@gmail.com', '6644558822');";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
echo "<br>"; 
echo "Program by Diya Bhutani(2220100243)";
        
?>