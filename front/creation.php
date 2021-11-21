<?php
include("includes/header.inc.php");
?>


    <body>
    <main class="creation">
        <!--  IMAGE ASIDE  -->
        <aside>
            <img src="images/creation1.png" alt="Bonhomme pierre feuille ciseau">
        </aside>

        <!--  BLOC CONNEXION  -->
        <section>
            <h2>Créer un compte</h2>
            <form action="" method="POST">
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="text" name="adresse" placeholder="Adresse" required>
                <input type="text" name="mail" placeholder="Adresse mail" required>
                <input type="text" name="raison_sociale" placeholder="Raison sociale" required>
                <input type="password" name="mdp" placeholder="Mot de passe" required>
                <input type="password" name="mdp_confirm" placeholder="Confirmer le mot de passe" required>
                <input type="submit" name="btn-creation" value="Créer le compte">
            </form>
        </section>

        <!--  IMAGE ASIDE  -->
        <aside>
            <img src="images/creation2.png" alt="Femme cuisine">
        </aside>
    </main>
    </body>


<?php
include("includes/footer.inc.php");
?>