<?php
if(isset($_POST['posttext'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DataBaseFunctions.php';
        insertpost($pdo, $_POST['posttext'],$_FILES['fileToUpload']['name'], $_POST['users'], $_POST['modules']);
        include '../includes/uploadFile.php';
        header('location: posts.php');
        
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    $title = 'Add a new post';
    // $sql_a = 'SELECT * FROM useruser';
    $user = allusers($pdo);
    // $sql_c ='SELECT * FROM modulemodule';
    $modules = allmodules($pdo);
    ob_start();
    include '../templates/addpost.html.php';
    $output = ob_get_clean();
}
include '../templates/user_layout.html.php';
