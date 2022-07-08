<?php
if(!empty($_GET['id'])){

    $host     = 'mariadb';
    $username = 'semih';
    $password = 'semih';
    $db     = 'galeridb';
    
    //Create the connection and select the database
    $db = new mysqli($host, $username, $password, $db);
    
    // Check the connection
    if($db->connect_error){
        die("Connexion error: " . $db->connect_error);
    }
    
    //Get the image from the database
    $res = $db->query("SELECT img FROM fotolar WHERE id = {$_GET['id']}");
    
    if($res->num_rows > 0){
        $img = $res->fetch_assoc();
        
        //Render the image
        header("Content-type: image/png"); 
        echo $img['img']; 
    }else{
        echo 'Image not found...';
    }
}
?>