    <header>

        

        <h1><?php echo $pageTilte?></h1>
        <h3><?php echo $pageSubTilte?></h3>

       <div id="headerLogin">

       <?php
         if(isset($_SESSION['nom'])) {
            ?>
            <h2>Bonjour <?php echo $_POST['nom']?></h2>
            <a href="../controllrt/logout.php">Déconnexion</a>
            <?php
         }else{
            ?>
            <form method="post" action="../controller/books.php">
            <input name="nom" type="text">
            <input type="submit" value="votre nom">
            </form>
                <?php
             }
       ?>
       </div>
    </header>
