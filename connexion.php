<?php
//connexion
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>connexion</title>
        <link rel="stylesheet" type="text/css" href="design/style.css">
    </head>
    <body>
        <header>
            <h1>Connexion</h1>
        </header>
    <div class="container">
        <p id="info">Bienvenue sur mon site, si vous n'êtes pas inscrit, <a href="index.php">Inscrivez-vous</a></p>

        <div id="form">
        <form method="post" action="connexion.php">
            <table>
               
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="EX : example@google.com"> </td>
                </tr>

                <tr>
                    <td>Mot de passe</td>
                    <td><input type="password" name="password" placeholder="EX : *****"> </td>
                </tr>
                
            </table>
            <div id="button">
                <button>Connexion</button>
            </div>
        </form>
        </div>
    </div>
    </body>
</html>