<?php
?>
<header>
    <figure id="fig_left">
        <img id="logo" src="assets/images/logo2.png" alt="logo" border="0">
    </figure>
    <figure id="fig_right">
        <img id="logo" src="assets/images/logo2.png" alt="logo" border="0">
    </figure>
    <p id="titreSite">Gestion des Présences</p>
</header>
<nav id="nav-header">
    <ul id="barrePrincipale">
        <li><a href="./index.php?action=accueil" >Accueil</a></li>
        <li><a href="./index.php?action=ecole" >Ecoles</a></li>
        <li><a href="./index.php?action=formation" >Formations</a></li>
        <li><a href="./index.php?action=etudiant" >Etudiants</a></li>
        <li><a href="./index.php?action=planification" >Planification</a></li>
        <li><a href="./index.php?action=contact" >Contact</a></li>
        <?php
        if(isset ($_SESSION) && isset($_SESSION['user'])&&$_SESSION['user']=='admin')
        echo "<li><a href='./index.php?action=admin' >Admin</a></li>";
        ?>

    </ul>
</nav>
