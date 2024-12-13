<?php
include '../includes/DatabaseConnection.php';
include '../includes/DataBaseFunctions.php';
try{
    if(isset($_POST['posttext'])){
        updatepost($pdo, $_POST['postid'], $_POST['posttext']);
        updateUserAndModule($pdo, $_POST['postid'], $_POST['users'], $_POST['modules']);
       
        header('location: posts.php');
    }else{
        
        $post = getpost($pdo, $_GET['id']);
        $users = allusers($pdo);
        $modules = allmodules($pdo);
        $title = 'Edit post';
        
        ob_start();
        include '../templates/editpost.html.php';
        $output = ob_get_clean();
    }
}catch(PDOException $e){
    $title = 'error has occured';
    $output = 'Error editing post: ' . $e->getMessage();
}
include '../templates/user_layout.html.php';
?>