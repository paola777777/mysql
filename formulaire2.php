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
            background-color: #c2bfb5ff;
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
   
    <form action="ajouter2.php" method="post">
        <fieldset>
            <h1>FORMULAIRE PAIEMENT</h1>
           Date_versement: <br>
           <input type="date" name="date_verse" required><br>
            Montant:  <br>
            <input type="number" name="montant" required><br>
            Date_location: <br>
            <input type="date" name="date_location" required><br>
            Mode_paiement:  <br>
            <input type="text" name="mode_paiement" required><br>
          
                <input type="submit" name="execute" value="execute">
                <input type="submit" name="modifier" value="modifier">
                <input type="reset" name="Supprimer" value="Supprimer">
        </fieldset>

    </form>
    <a href="formulaire4.php">Suivant</a>
</body>
</html>


<?php 
 require ("pdo.php");
   if(isset($_POST['execute'])){
        $date_verse = $_POST['date_verse'];
        $montant= $_POST['montant'];
        $date_location = $_POST['date_location'];
        $mode_paiement = $_POST['mode_paiement'];
     }

?>