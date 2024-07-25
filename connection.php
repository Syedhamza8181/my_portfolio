<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['useremail'];
    $message = $_POST['usermessage'];
    $stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");

if ($stmt === false) {
    die('Prepare Error: ' . $conn->error);
}

$stmt->bind_param("ssss", $firstName, $lastName, $email, $message);
if ($stmt->execute()) {
    header("Location: contact.php?success=Message%20Received");
    exit();
} else {
    die('Execute Error: ' . $stmt->error);
}
$stmt->close();

    $conn->close();
}
?>
