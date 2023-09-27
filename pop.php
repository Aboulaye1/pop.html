<?php
$conn=mysqli_connect('localhost','root','','simplon') or die(mysqli_error());
$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$NUMERO=$_POST['number'];
$EMAIL=$_POST['email'];

$req="INSERT INTO inscrit (nom,prenom,contact,email) values ('$NOM','$PRENOM','$NUMERO','$EMAIL')";

$res=mysqli_query($conn,$req);

$sel="SELECT * FROM `inscrit` WHERE (`nom`,`prenom`,`contact`,`email`)";

echo "vous etre inscrite";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fiche d'inscription</title>
    <style>
        {
            border:1px solid;
        }

    </style>
</head>
<body>
    <form>
        <table align="center">
        <h1 align="center">inscription</h1>
        <tr>
            <td align="right">nom: </td>
            <td><?php echo ($NOM) ?></td>
        </tr>
        <tr>
            <td align="right">prenom: </td>
            <td><?php echo ($PRENOM) ?> </td>
        </tr>
            <tr >
                <td align="right">numero: </td>
                <td><?php echo ($NUMERO) ?> </td>
            </tr>
            <tr >
                <td align="right">email: </td>
                <td><?php echo ($EMAIL) ?></td>
            </tr>
        </tr>

    </table>
    </form>
   
</body>
</html>