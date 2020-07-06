<?php
session_start();
?>

<!DOCTYPE html> 

<html> 
<head> 
<title>admin</title> 
</head> 

<body>


<form action = "admin.php" method = "post" enctype="multipart/form-data">
<p>
    <label for="icone">Icône du fichier (JPG, JPEG ou PNG | max. 2 Mo) : </label><br />
    <label for="titre">Titre du fichier (min. 4 caractères) :</label><br />
    <input type="file" name="image"/> </label><br />
 
   

    <textarea name="titre" id="titre" placeholder="titre"></textarea><br />
    <textarea name="description" id="description" placeholder="description"></textarea><br />
     <input type="submit" name="submit" value="Envoyer" />


</p>
</form>

<?php

if (isset($_POST['titre'])){
    $_SESSION['titre']=$_POST['titre'];
}

if (isset($_POST['description'])){
    $_SESSION['descrition']=$_POST['description'];
}

if ($image = "jpg"){
    echo "image non conforme";
}

if ($_FILES['img']['size'] > 2097152){
    echo "image non conforme";
}

if ($_FILES['img']['name size'] < 4){
    echo "image non conforme";
}

if (isset($_POST['img'])){
    $_SESSION['img']=$_POST['img'];
}


$_SESSION['img']='logo_epitech.png';


?>




</body>
</html>

