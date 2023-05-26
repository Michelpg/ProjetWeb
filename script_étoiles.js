// On récupère toutes les étoiles
var toutesLesEtoiles = $('.stars .star');
// console.log(toutesLesEtoiles);

// On rajoute l'écouteur au clic;
// toutesLesEtoiles.click(onStarClick)
toutesLesEtoiles.click(onStarClick);

import { id_rec } from './affichage_details_recette.php';

const mysql = require('mysql2');

// On gère ce qui se passe lors du clic d'une étoile
function onStarClick(event) {

    // On récupère l'objet cliqué, AU FORMAT JQUERY
    var etoileCliquée = $(this);
    // console.log(etoileCliquée);

    // On récupère son index ("Quelle étoile a été cliquée ?") depuis sont attribut data-index
    var indexCliqué = etoileCliquée.data("index");
    // console.log(indexCliqué);

    // On récupère son parent (afin de rendre ça réutilisable pour d'autres groupes)
    var parent = $(this).parent();

    // Style : "Vider" toutes les étoiles.. de ce groupe
    parent.find('.star').addClass('stargrey');
    parent.find('.star').removeClass('yellow');

    //// Style : "Remplir" le bon nombre d'étoiles
    // Pour ce groupe, pour chaque étoile de 0 jusqu'à celle cliquée..
    for (var i = 0; i <= indexCliqué; i++) {

        var etoile = parent.find('.star[data-index=' + i + ']');
        // console.log( etoile );

        // Je remplie
        etoile.addClass('yellow');
        etoile.removeClass('stargrey');
    }

    // la partie bdd ne fonctionne pas, il y a sûrement un import à faire pour mysql :: surement remplacé par ajax (plus simple)

    const connection = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'projetweb'
    });

    // Connect to the database
    connection.connect((error) => {
        if (error) {
            console.error('Error connecting to the database:', error);
            return;
        }

        // Select the "avis" and "note" columns from the "recette" table
        connection.query("SELECT nombre_avis, note FROM recette WHERE id_rec = ${id_rec}", (error, results) => {
            if (error) {
                console.error('Error executing the query:', error);
                return;
            }

            // Process the query results
            results.forEach((row) => {
                const nbr_avis = row.avis;
                const note = row.note;
            });

            var avis_maj = nbr_avis++;
            var note_maj = (note * nbr_avis + indexCliqué) / avis_maj;

            connection.query("UPDATE recette SET nombre_avis=?, note=? WHERE id_rec = ${id_rec}", [avis_maj, note_maj], (error, results) => {
            });

            // Close the database connection
            connection.end();
        });
    });
}
