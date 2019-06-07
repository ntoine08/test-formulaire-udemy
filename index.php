<?php
require('src/connection.php');
// espace membre
if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm']))
{
    //variables
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass_confirm = $_POST['password_confirm'];

    //test si password = password_confirm
    if($password != $pass_confirm)
    {
        header('location: ../?error=1&pass=1');
    }
    //test si email utilisé
    $req = $db->prepare("SELECT count(*) as numberEmail FROM users WHERE email = ?");
    $req->execute(array($email))
}
//inscription
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>index exercice</title>
        <link rel="stylesheet" type="text/css" href="design/style.css">
    </head>
    <body>
        <header>
            <h1>Inscription</h1>
        </header>

    <div class="container">    
        <p id="info">Bienvenue sur mon site, pour en voir plus, inscrivez-vous. Sinon, <a href="connexion.php">Connectez-vous</a></p>
        <?php
            if(isset($_GET['error']))
            {
                if(isset($_GET['pass']))
                {
                    echo'<p id="error">Les mots de passe ne sont pas identiques.</p>';
                }
            }
        ?>
        <div id="form">
        <form method="post" action="index.php">
            <table>
                <tr>
                    <td>Pseudo</td>
                    <td><input type="text" name="pseudo" placeholder="EX : bob"> </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="EX : example@google.com"> </td>
                </tr>

                <tr>
                    <td>Mot de passe</td>
                    <td><input type="password" name="password" placeholder="EX : *****"> </td>
                </tr>

                <tr>
                    <td>Confirmation Mot de passe</td>
                    <td><input type="password" name="password_confirm" placeholder="EX : *****"> </td>
                </tr>
            </table>
            <div id="button">
                <button>Inscription</button>
            </div>
        </form>
        </div>
    </div>
    </body>
</html>

