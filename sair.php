<?php 
    include_once 'backend.php';
    Backend::sessionStart();
    $_SESSION = array();
    
    echo "<script>location.href='index.php';</script>";
    exit();
?>