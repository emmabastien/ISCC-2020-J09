<?php
session_start();
?>

<!DOCTYPE html> 

<html> 
<head> 
<title>securite</title> 
</head> 

<body>

<?php

function parametre (){
    echo "<ul>";
    foreach ($_GET as $key => $value){
        echo "<li>Identifiant : $key";
        echo "Mot de passe : $value </li>";
    }
echo "</ul>";
}

parametre ();




if(isset($_POST['login']) && isset($_POST['password'])) {
    echo 'login: '.$_POST['login'];
    }



echo "<p> password:" ,$_POST['password'], "</p>";

    if (($_POST["password"]== 2020)) {
        
        setcookie ('id', $_POST ['login']);

        $_SESSION ['id']=$_POST['login'];
        
        header ('Location: mini-site-routing.php?page=1');
        exit;
    }

    else {
        echo ("Mauvais couple identifiant/mot de passe.");
        echo '<a href="mini-site-routing.php?page=connexion">connexion</a>';
        exit;
    }
    


?>

</body>

</html>
