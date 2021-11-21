<?php
include("includes/header.inc.php");
?>


<body>
<main class="connexion">
    <!--  BLOC CONNEXION  -->
    <section>
        <h2>Se connecter</h2>
        <p>Encore X essais</p>
        <form action="post">
            <input type="text" name="identifiant" placeholder="Identifiant" required>
            <input id="mdp" type="password" name="mdp" placeholder="Mot de passe" required>
            <i onclick="togglePasswordVisibility('mdp')" class="fas fa-low-vision"></i>
            <a class="forgot-pwd" href="">Mot de passe oublié ?</a>
            <input type="submit" name="btn-connexion" value="Connexion">
        </form>
    </section>

    <!--  IMAGE ASIDE  -->
    <aside>
        <p>L'application des commerçants !</p>
        <img src="images/connexion.png" alt="Bonhomme qui vend du shit">
    </aside>
</main>
</body>


<?php
include("includes/footer.inc.php");
?>