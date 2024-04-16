<?php 
    include_once "conn.php";

    //retrieving / adding form data
    $first_name = $_POST['first_name'];
    $phone_number = $_POST['phone_number'];
    $meal = $_POST['Meals_Available'];
    $delivery = isset($_POST['delivery']) ? $_POST['delivery'] : "No";
    $status = isset($_POST['status']) ? $_POST['status'] : "Regular";
    $additions = isset($_POST['additions']) ? $_POST['additions'] : "";


    //Inserting data into the database
    $sql = "INSERT INTO orders (first_name, phone_number, meal, delivery, status , additions ) VALUES ('$first_name', '$phone_number', '$meal' , '$delivery' , '$status',  '$additions')";

    if ($conn->query($sql) === TRUE){
        echo "added new record successfully";
    }
    else{
        echo "Error: " . $sql . $conn->error;
    }

    $conn->close();

?>