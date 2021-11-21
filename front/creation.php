<?php
include("includes/header.inc.php");
?>


    <body>
    <main class="creation">
        <!--  IMAGE ASIDE  -->
        <aside>
            <img src="images/creation1.png" alt="Bonhomme pierre feuille ciseau">
        </aside>

        <!--  BLOC CREATION DE COMPTE  -->
        <section>
            <form action="" method="POST">
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="text" name="adresse" placeholder="Adresse" required>
                <input type="text" name="mail" placeholder="Adresse mail" required>
                <input type="text" name="raison_sociale" placeholder="Raison sociale" required>
                <div class="container-pwd">
                    <span>
                        <input class="input-pwd" id="pwd1" type="password" name="mdp" placeholder="Mot de passe" required>
                        <i onclick="togglePasswordVisibility('pwd1')" class="fas fa-low-vision"></i>
                    </span>
                    <span>
                        <input class="input-pwd" id="pwd2" type="password" name="mdp_confirm" placeholder="Confirmer mdp" required>
                        <i onclick="togglePasswordVisibility('pwd2')" class="fas fa-low-vision"></i>
                    </span>
                </div>
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