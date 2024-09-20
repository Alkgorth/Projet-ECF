<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>


<main>
    <h1><a href="">Affichage des ventes</a><i class="fa-solid fa-angle-right"></i></h1>

    <div class="commandes">
        <h1>Commandes en attentes</h1>

        <div class="container d-flex justify-content-center my-4">
            <table class="table w-50 text-center">
                <thead>
                    <tr>
                        <th scope="col">Commande N°</th>
                        <th scope="col">Article</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">État</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1234 5678</th>
                        <td>Fallout New Vegas</td>
                        <td>1</td>
                        <td>En attente</td>
                    </tr>
                    <tr>
                        <th scope="row">Fallout New Vegas</th>
                        <td>Livré</td>
                        <td>Livré</td>
                        <td>Livré</td>
                    </tr>
                    <tr>
                        <th scope="row">Dark Soul's 3</th>
                        <td>Livré</td>
                        <td>Livré</td>
                        <td>Livré</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <button class="bouton">Déconnexion</button>
    </div>
</main>


<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>