<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    //$sql = 'DELETE FROM joke WHERE id = :id';
    //$stmt = $pdo->prepare($sql);
    //$stmt->bindValue(':id', $_POST['id']);
    //$stmt->execute();
    deletepost($pdo,$_POST['id']);
    header('location: posts.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to connect to delete post: '.$e->getMessage();
}
include '../templates/admin_layout.html.php';