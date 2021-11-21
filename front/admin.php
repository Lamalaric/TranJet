<?php
include("includes/header.inc.php");
?>


    <body>
    <main class="admin">


        <!--  FORMULAIRE DE RECHERCHE  -->
        <section class="container-recherche container">
            <form class="recherche" action="" method="POST">
                <input type="text" placeholder="Rechercher un utilisateur" required>
                <select name="critere_recherche" required>
                    <option value="" selected disabled hidden>Critère</option>
                    <option value="id">ID</option>
                    <option value="siren">N°SIREN</option>
                    <option value="solde">Solde</option>
                    <option value="num_carte">Numéro carte</option>
                </select>
            </form>

            <button onclick="toggleFilters('filtres')">Filtres</button>
            <form class="filtres" id="filtres" action="" method="POST">
                <div>
                    <p>Périodes</p>
                    <label>du
                        <input class="date_min" type="date">
                    </label>
                    <label>au
                        <input class="date_max" type="date">
                    </label>
                </div>

                <div>
                    <p>Paramètres complémentaires</p>
                    <label>Solde minimum
                        <input class="solde_min" type="number">
                    </label>
                    <label>Solde maximum
                        <input class="solde_max" type="number">
                    </label>
                </div>
            </form>
        </section>

        <section class="container-ajouter container">
            <div>
                <a href="creation.php">Ajouter un utilisateur</a>
            </div>
        </section>

        <hr class="separateur">

        <section class="container-resultats container">
            <div class="divers">
                <div>
                    <p>Pages: </p>
                    <button><</button>
                    <button><<</button>
                    <select name="nb_pages">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="X">X</option>
                    </select>
                    <button>></button>
                    <button>>></button>
                </div>
                <div>
                    <p>Nombre de lignes: </p>
                    <select name="nb_lignes">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="X">X</option>
                    </select>
                </div>
            </div>

            <p class="info">X lignes trouvée(s) parmis XXX clients</p>

            <!-- Rajoute un <tr> pour chaque résultat -->
            <div class="tableau">
                <table>
                    <thead>
                        <tr>
                            <th>ID utilisateur</th>
                            <th>N°SIREN</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Walid</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>Yusuf</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>Mohamed</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-trash"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>
    </body>


<?php
include("includes/footer.inc.php");
?>