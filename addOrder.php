<?php
include_once "conn.php";

// Validate and sanitize input data
$first_name = isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : "";
$phone_number = isset($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : "";
$meal = isset($_POST['meal']) ? htmlspecialchars($_POST['meal']) : "";
$has_delivery = isset($_POST['has_delivery']) ? $_POST['has_delivery'] : "No";
$customer_type = isset($_POST['customer_type']) ? $_POST['customer_type'] : "Regular";
$additions = isset($_POST['additions']) ? htmlspecialchars($_POST['additions']) : "";

// Prepare and execute the SQL statement using prepared statements
$sql = "INSERT INTO orders (first_name, phone_number, meal, has_delivery, customer_type, additions) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $first_name, $phone_number, $meal, $has_delivery, $customer_type, $additions);

if ($stmt->execute()) {
    echo "Added new record successfully";
    header("location: order.php");
} else {
    echo "Error: " . $stmt->error;

}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
