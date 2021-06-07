<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

 
if (isset($_POST['username']) and isset($_POST['pwd'])) // On a le nom et le pwd
{
	$email = $_POST['username'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)==true){
        header('location:dons.html');
    } else{
        echo 'not ';
    }
}
/*else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un prénom et un pwd !';
}*/
?>




</body>
</html>