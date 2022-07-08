<?php
if(!empty($_GET['id'])){

    $host     = 'mariadb';
    $username = 'semih';
    $password = 'semih';
    $db     = 'galeridb';
    # Bağlan
    $db = new mysqli($host, $username, $password, $db);
    # Bağlantı Kontrolü
    if($db->connect_error){
        die("Bağlantı hatası" . $db->connect_error);
    }
    
    #Resmi çek
    $res = $db->query("SELECT img FROM fotolar WHERE id = {$_GET['id']}");
    
    if($res->num_rows > 0){
        $img = $res->fetch_assoc();
        
        #Resmi bas
        header("Content-type: image/png"); 
        echo $img['img']; 
    }else{
        echo 'Bu fotoğraf bulunamadı...';
    }
}
?>