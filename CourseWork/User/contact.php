<?php
include '../includes/DatabaseConnection.php';

if (isset($_POST['message'])) {
    $title = "Contact Us";
    $message = htmlspecialchars($_POST['message']);

    try {
        $stmt = $pdo->prepare("INSERT INTO messages (message) VALUES (:message)");
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        $output = "Thank you for your message: " . $message . ". We will get back to you shortly.";
    } catch (PDOException $e) {
        $output = "Error saving your message: " . $e->getMessage();
    }
} else {
    $title = "Contact Us";
    ob_start();
    include '../templates/mailform.html.php'; 
    $output = ob_get_clean();
}

include '../templates/user_layout.html.php';