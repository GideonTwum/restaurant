<?php 
    include_once "conn.php";

    //retrieving / adding form data
    $first_name = $_POST['first_name'];
    $phone_number = $_POST['phone_number'];
    $meal = $_POST['meal'];
    $has_delivery = isset($_POST['has_delivery']) ? $_POST['has_delivery'] : "No";
    $customer_type = isset($_POST['customer_type']) ? $_POST['customer_type'] : "Regular";
    $additions = isset($_POST['additions']) ? $_POST['additions'] : "";


    //Inserting data into the database
    $sql = "INSERT INTO orders (first_name, phone_number, meal, has_delivery, customer_type , additions ) VALUES ('$first_name', '$phone_number', '$meal' , '$has_delivery' , '$customer_type',  '$additions')";

    if ($conn->query($sql) === TRUE){
        echo "added new record successfully";
    }
    else{
        echo "Error: " . $sql . $conn->error;
    }

    $conn->close();

?>