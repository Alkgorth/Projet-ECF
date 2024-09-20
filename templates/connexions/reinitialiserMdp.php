<?php

require_once _ROOTPATH_ . '\templates\head.php';

?>

<div>
    <a href="index.html">
        <img src="../Images/Logo GameStore-2.png" alt="Logo GameStore" class="align-text-center w-100 pb-4">
    </a>
    <div class="text-center fs-2">
    <ul class="py-3">
        <li class="pb-2">Réinitialiser de mot de passe</li>
        <li>
            <input type="email" name="email" id="email" placeholder="Nouveau mot de passe" required class="champsARemplir">
        </li>
        <li>
            <input type="password" name="motDePasse" id="motDePasse" placeholder="Confirmer mot de passe" required class="champsARemplir">
        </li>
        <li>
            <a href="MdpReinitialise.html">
                <input type="button" name="connection" id="connection" value="Valider" class="btnConnection">
            </a>
        </li>
    </ul>
    </div>
</div>

</body>

</html>