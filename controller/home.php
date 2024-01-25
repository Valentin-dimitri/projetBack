<?php

    session_start();
    
    if(isset($_POST['nom'])){
        $_SESSION['nom']=$_POST['nom'];
    }


    $pageTilte = "Silence on lit";
    $pageSubTilte = "Un temps de lecture à l'E2C";



    $buttonList= [["label" => "Accueil",'url' => "../controller/home.php"],
                  ["label" => "Bibliothèque",'url' => "../controller/books.php"]
    ];
   
    require_once('../view/homeview.php');
?>
