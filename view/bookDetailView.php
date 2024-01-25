<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail</title>
    <link rel="stylesheet" href="../style/style.css">

</head>
<body>
    <?php
    require_once('../view/modules/header.php');
    require_once('../view/modules/nav.php');
    ?>

    <main>
        <div class="infoContanainer">
            <div class="bookImage">
               <?php
               $imagePath = "../asset/";
               if($bookInfo['photo'] == NULL) {
                $imagePath = $imagePath.'def.jpeg';
               } else {
                $imagePath = $imagePath.$bookInfo['photo'];
               }
            ?>
            <img src="<?php echo $imagePath ?>" alt="couverture">
           </div>
            <div class="bookInfo">
                <div class="bookAuteur"></div>
                <div class="bookGenre"></div>
                <div class="bookAnnee"></div>
                <div class="bookSynopsis"></div>
            </div>
        </div>


    </main>
    
</body>
</html>