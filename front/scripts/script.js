//Afficher/masquer le mot de passe
function togglePasswordVisibility(id) {
    let elem = document.getElementById(id);
    if (elem.type === 'password') {
        elem.setAttribute('type','text');
    } else {
        elem.setAttribute('type','password');
    }
}

//Afficher/masquer les filtres en dessous de la barre de recherche
function toggleFilters(id) {
    let elem = document.getElementById(id);
    if (elem.style.display === 'block') {
        elem.style.display = 'none';
    } else {
        elem.style.display = 'block';
    }
}

//Définit quel tableau de résultat afficher selon le bouton cliqué
function selectTable(n) {
    //On récupère une liste de tous les tableaux de la page,
    //On passe tous les tableaux en display: none SAUF pour le tableau concerné
    let lstTables = document.getElementsByTagName("table");
    let lstButton = document.getElementsByTagName("button");
    for (let i = 0; i < lstTables.length; i++) {
        if (i === n) {
            lstTables[i].style.display = "table";
            lstButton[i].style.backgroundColor = "#FDC05DFF";   //On affiche le bouton select en orange
            continue;
        }
        lstTables[i].style.display = "none";
        lstButton[i].style.backgroundColor = "#EBEBEBFF";   //On met tous les autres boutons en gris
    }
}

function deplierSousTableau(n) {
    // let elem = document.getElementById("sous-tableau-1");
    // if (elem.style.display === 'none') {
    //     elem.style.display = 'block';
    // } else {
    //     elem.style.display = 'none';
    // }
    // elem.style.columnSpan = '8';
}