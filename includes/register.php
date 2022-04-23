<?php

?>
    <form method ="post" action="/api/post_register.php">
        <div>
            <div>
                <label for="nom">nom</label>
                <input type="text" name ="nom" id="nom">
            </div>
            <div>
                <label for="prenom">prénom</label>
                <input type="text" name ="prenom" id="prenom">
            </div>
            <div>
                <label for="mail">email</label>
                <input type="text" name ="mail" id="mail">
            </div>
            <div>
                <label for="numero">numéro de téléphone</label>
                <input type="text" name ="numero" id="numero">
            </div>
            <div>
                <label for="mdp">mot de passe</label>
                <input type="text" name ="mdp" id="mdp">
            </div>
                <input type="submit" value="Envoyer">
        </div>
    </form>

<?php
