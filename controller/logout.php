<?php
    session_start();
    
    session_destroy();

    header('location: ../controller/home.php');