

















































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="film.css">
</head>
<body>
    <div class="titre">
        <h3>VOS FILMS</h3>
        <form action="film.php" method="post">
 <div>
                <label for="film">Nom </label>
                <input type="text" id="film" name="film">
            </div>
            <div>
                <label for="annee">YEAR</label>
<input type="text" id="annee" name="annee">
            </div>
            <button type="submit" name="valider">ENREGISTREZ</button>
        </form>
<?php

$servername = "localhost";
$username = "root";


                // //database connection
                // $conn = new mysqli($servername, $username, );
                // //verify connection
                // if($conn->connect_error){
                //     die('Erreur : ' .$conn->connect_error);
                // } 
                //  echo "connection reuissie";
                // //check connection
                // $conn = new
                // PDO("mysql:host=$servername;dbname=film", $username, );
                
                        
                //try connection
                try{
                    $conn = new
                    PDO("mysql:host=$servername;dbname=film", $username, );
                    //on defini le mode d'erreur de PDO sur Exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE,
                     PDO::ERRMODE_EXCEPTION);
                    echo 'Connexion réussie a la base de donnee '
                   ;}
                    /*On capture les exceptions si une exception est lancée et on affiche
                             *les informations relatives à celle-ci*/
                            catch(PDOException $e){
                                echo "Erreur : " . $e->getMessage();
                              }

                              $sql = "INSERT INTO `enregistrement`(`Nom`, `lanne`) VALUES ('home','2202')";

                              $conn->exec($sql);


                
                              //on ferme la connection
                              $conn = null;
                
                
                
                
                
                
                

?>    

    <div class="container">
                        <table>
            <thead>
                <tr>
                    <th>titre du film</th>
                    <th>annee du film</th> 
                </tr>

            </thead>
            <tbody>
                <tr class="bg-tr">
                    <td>
                
                    </td>
                    <td> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div> 
</body>
</html>





























 