<?php
include("includes/header.inc.php");
?>


    <body>
    <main class="po">


        <!--  FORMULAIRE DE RECHERCHE  -->
        <section class="container-recherche container">
            <!-- Appliquer la classe current-display au lien cliqué, et enlever les autres -->
            <div class="affichage">
                <button class="current-display" type="button" onclick="selectTable(0)">Remises</button>
                <button type="button" onclick="selectTable(1)">Transactions</button>
                <button type="button" onclick="selectTable(2)">Impayés</button>
            </div>

            <form class="recherche" action="" method="POST">
                <input type="text" placeholder="Rechercher un utilisateur" required>
                <select name="critere_recherche" required>
                    <option value="" selected disabled hidden>Critère</option>
                    <option value="id">N°remise</option>
                    <option value="siren">Montant</option>
                    <option value="solde">Nombre de transactions</option>
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
            <div class="tableau" id="tableaux-resultats">
                <table class="super-table">
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
                        <td><button type="button" id="btn-tableau-1" onclick="deplierSousTableau(1)"><i class="fas fa-plus"></i></button></td>
                    </tr>
                    <tr id="sous-tableau-1" class="container-sous-tableau">
                        <td colspan="8" id="sous-tableau">
                            <table>
                                <thead>
                                <tr>
                                    <th>N°carte</th>
                                    <th>Pays carte</th>
                                    <th>N°Autorisation</th>
                                    <th>Réseau</th>
                                    <th>Montant brut</th>
                                    <th>Montant net</th>
                                    <th>Sens</th>
                                    <th>Devise</th>
                                    <th>Commission</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td>696969</td>
                                    <td>Togo</td>
                                    <td>696969</td>
                                    <td>what</td>
                                    <td>696969</td>
                                    <td>696969</td>
                                    <td>+</td>
                                    <td>€</td>
                                    <td>69</td>
                                </tr>
                                <tr>
                                    <td>696969</td>
                                    <td>Togo</td>
                                    <td>696969</td>
                                    <td>what</td>
                                    <td>696969</td>
                                    <td>696969</td>
                                    <td>+</td>
                                    <td>€</td>
                                    <td>69</td>
                                </tr>
                                <tr>
                                    <td>696969</td>
                                    <td>Togo</td>
                                    <td>696969</td>
                                    <td>what</td>
                                    <td>696969</td>
                                    <td>696969</td>
                                    <td>+</td>
                                    <td>€</td>
                                    <td>69</td>
                                </tr>
                            </table>
                        </td>

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
                    <tr id="sous-tableau-2" class="container-sous-tableau">
                        <td colspan="8" id="sous-tableau">
                            <table>
                                <thead>
                                <tr>
                                    <th>N°carte</th>
                                    <th>Pays carte</th>
                                    <th>N°Autorisation</th>
                                    <th>Réseau</th>
                                    <th>Montant brut</th>
                                    <th>Montant net</th>
                                    <th>Sens</th>
                                    <th>Devise</th>
                                    <th>Commission</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td>696969</td>
                                    <td>Togo</td>
                                    <td>696969</td>
                                    <td>what</td>
                                    <td>696969</td>
                                    <td>696969</td>
                                    <td>+</td>
                                    <td>€</td>
                                    <td>69</td>
                                </tr>
                                <tr>
                                    <td>696969</td>
                                    <td>Togo</td>
                                    <td>696969</td>
                                    <td>what</td>
                                    <td>696969</td>
                                    <td>696969</td>
                                    <td>+</td>
                                    <td>€</td>
                                    <td>69</td>
                                </tr>
                                <tr>
                                    <td>696969</td>
                                    <td>Togo</td>
                                    <td>696969</td>
                                    <td>what</td>
                                    <td>696969</td>
                                    <td>696969</td>
                                    <td>+</td>
                                    <td>€</td>
                                    <td>69</td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                    </tbody>
                </table>

                <table class="tableau-sans-option super-table">
                    <thead>
                    <tr>
                        <th>N°carte</th>
                        <th>Pays carte</th>
                        <th>N°Autorisation</th>
                        <th>Réseau</th>
                        <th>Montant brut</th>
                        <th>Montant net</th>
                        <th>Sens</th>
                        <th>Devise</th>
                        <th>Commission</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>696969</td>
                        <td>Togo</td>
                        <td>696969</td>
                        <td>what</td>
                        <td>696969</td>
                        <td>696969</td>
                        <td>+</td>
                        <td>€</td>
                        <td>69</td>
                    </tr>
                    <tr>
                        <td>696969</td>
                        <td>Togo</td>
                        <td>696969</td>
                        <td>what</td>
                        <td>696969</td>
                        <td>696969</td>
                        <td>+</td>
                        <td>€</td>
                        <td>69</td>
                    </tr>
                    </tbody>
                </table>

                <table class="tableau-sans-option super-table">
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
                    </tbody>
                </table>
            </div>
        </section>

        <section class="container-export container">
            <div class="exporter">
                <button type="button" onclick="">Exporter tout</button>
                <button type="button" onclick="">Exporter l'extrait</button>
            </div>

            <p>Format d'export</p>
            <div class="choix-export">
                <input type="radio" name="export" id="xlsx" value="xlsx">
                <label for="xlsx">.xlsx</label>
                <input type="radio" name="export" id="csv" value="csv">
                <label for="csv">.csv</label>
                <input type="radio" name="export" id="pdf" value="pdf" checked>
                <label for="pdf">.pdf</label>
            </div>
        </section>

    </main>
    </body>


<?php
include("includes/footer.inc.php");
?>