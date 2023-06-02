// On récupère toutes les étoiles
var toutesLesEtoiles = $('.stars .star');
// console.log(toutesLesEtoiles);

// On rajoute l'écouteur au clic;
// toutesLesEtoiles.click(onStarClick)
toutesLesEtoiles.click(onStarClick);

// On gère ce qui se passe lors du clic d'une étoile
function onStarClick(event) {

    // On récupère l'objet cliqué, AU FORMAT JQUERY
    var etoileCliquée = $(this);
    // console.log(etoileCliquée);

    // On récupère son index ("Quelle étoile a été cliquée ?") depuis sont attribut data-index
    var indexCliqué = etoileCliquée.data("index");
    console.log(indexCliqué);

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

    $.ajax({
        type: 'POST',
        url: 'affichage_details_recette.php',
        data: { index: indexCliqué },
        success: function (response) {
            console.log(response); // Affiche la réponse du serveur
        },
        error: function (xhr, status, error) {
            console.log('Erreur: ' + error); // Affiche l'erreur en cas d'échec de la requête
        }
    });
}
