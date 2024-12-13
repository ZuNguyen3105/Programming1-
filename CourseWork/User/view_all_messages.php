<?php
include '../includes/DataBaseConnection.php'; //


try {
    $stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching messages: " . $e->getMessage());
}


$output = '<h1 style="color: blue;">All Messages</h1>'; 
$output .= '<table border="1">';
$output .= '<tr><th>ID</th><th>Message</th><th>Created At</th></tr>';

foreach ($messages as $message) {
    $output .= '<tr>';
    $output .= '<td>' . htmlspecialchars($message['id']) . '</td>';
    $output .= '<td>' . htmlspecialchars($message['message']) . '</td>';
    $output .= '<td>' . htmlspecialchars($message['created_at']) . '</td>';
    $output .= '</tr>';
}

$output .= '</table>';


$title = 'All Messages'; 
include '../templates/user_layout.html.php';
?>