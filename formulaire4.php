<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
           padding: 10px;
           margin: 10px;
           font-family: sans-serif;
           color: black;
        }

        body{
            background-color: #f4f7f6;
            color: black;
        }

        input{
            border-radius: 10px;
            box-shadow: 1px;
            margin: px;
            padding: 5px;
            color: black;
            
        }
        
        fieldset{
            background-color: white;
            box-shadow: 10px 10px 10px rgba(0 , 0 , 0 , 0.1);
            border-radius: 30px;
            border: none;
            margin-left: 350px;
            margin-top: 30px;
            padding: 0px;
            align-items: center;
            width: 500px;
            box-shadow: 20px;
            
        }
       

        h1{
            font-family: italic;
            color: black;
            margin: 10px;
            text-align: center;
        }

        select{
            color: black;
            background-color: white;
            border-radius: 10px;
        }

        select, option{
            color: black;
            margin: 10px;
        }
       
    </style>
   
    <form action="ajouter4.php" method="post">
        <fieldset>
            <h1>FORMULAIRE PAIEMENT</h1>
           Nom_a: <br>
           <input type="text" name="nom_a" required><br>
            poste:  <br>
            <input type="text" name="poste" required><br>
            
          
                <input type="submit" name="execute" value="execute">
                <input type="submit" name="modifier" value="modifier">
                <input type="reset" name="Supprimer" value="Supprimer">
        </fieldset>

    </form>
    <a href="formulaire3.php">precedent</a>
</body>
</html>


<?php 
 require ("pdo.php");
   if(isset($_POST['execute'])){
        $nom_a = $_POST['nom_a'];
        $poste= $_POST['poste'];
        
     }

?>