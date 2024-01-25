<?php

session_start();

  

    require_once('../model/model.php');

    $bookBDD = connectDB();
    if(isset($_POST['selectedGenre'])){
        if($_POST['selectedGenre']=='tous') {
            $bookList = getAllBooks($bookBDD);
        } else {
            $bookList= getBooksByGenre($bookBDD, $_POST['selectedGenre']);
        }
    } else {
        $bookList = getAllBooks($bookBDD);
    }


    
    $genreList = getAllGenres($bookBDD);


    
    /*var_dump($genresList);

   if(!isset($_SESSION['nom'])){
        header('location:../controller/home.php');
    }*/

    $pageTilte = "La bibliothèque";
    $pageSubTilte = "Choisissez votre imaginaire";

    $buttonList= [["label" => "Accueil",'url' => "../controller/home.php"],
    ["label" => "Bibliothèque",'url' => "../controller/books.php"]
];


 require_once('../view/booksview.php');
?>



