<?php
include("includes/header.inc.php");
?>


    <body>
    <main class="cdg">


        <!--  FORMULAIRE DE RECHERCHE  -->
        <section class="container-recherche container">
            <!-- Appliquer la classe current-display au lien cliqué, et enlever les autres -->
            <div class="affichage">
                <button class="current-display" type="button" onclick="selectTable(0)">Utilisateur</button>
                <button type="button" onclick="selectTable(1)">Remises</button>
                <button type="button" onclick="selectTable(2)">Impayés</button>
            </div>

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
                    <p>Tri</p>
                    <label>Ascendant
                        <input class="asc" type="radio" name="tri">
                    </label>
                    <label>Descendant
                        <input class="desc" type="radio" name="tri">
                    </label>
                </div>

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

        <hr class="separateur">

        <!--  TABLEAU DE RESULTATS  -->
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
                            <th>Numéro carte</th>
                            <th>Nombre remises</th>
                            <th>Nombre transactions</th>
                            <th>Nombre impayés</th>
                            <th>Somme impayés</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Walid</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Yusuf</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Mohamed</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Walid</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Yusuf</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Mohamed</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Walid</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Yusuf</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Mohamed</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Walid</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Yusuf</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Mohamed</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Walid</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Yusuf</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                        <tr>
                            <td>Mohamed</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td>XXXXXX</td>
                            <td><i class="fas fa-bell"></i></td>
                        </tr>
                    </tbody>
                </table>

                <table>
                    <thead>
                    <tr>
                        <th>ID remise</th>
                        <th>Montant brut</th>
                        <th>Montant commission</th>
                        <th>Montant net</th>
                        <th>Sens</th>
                        <th>Devise</th>
                        <th>Nombre de transactions</th>
                        <th>Date de traitement</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Walid</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Yusuf</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Mohamed</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Walid</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Yusuf</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Mohamed</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Walid</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Yusuf</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Mohamed</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Walid</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Yusuf</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Mohamed</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Walid</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Yusuf</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    <tr>
                        <td>Mohamed</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>+</td>
                        <td>€</td>
                        <td>2</td>
                        <td>1/01/2021</td>
                        <td><i class="fas fa-plus"></i></td>
                    </tr>
                    </tbody>
                </table>

                <table class="tableau-sans-option">
                    <thead>
                    <tr>
                        <th>Motif</th>
                        <th>Montant brut</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
                    </tr>
                    <tr>
                        <td>Pauvreté</td>
                        <td>696969</td>
                        <td>1/01/2021</td>
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