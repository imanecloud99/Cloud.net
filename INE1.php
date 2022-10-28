<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>INE1</title>
        <link rel="stylesheet" type="text/css" href="style3.css">


    </head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  
    
  </head>
  <body>
    
                   <!--INE1-->



<section><?php
  include ( "INCLUDES/connectdb.php");?>
           <div class="titre">Modules:</div>

           <div class="mod1">
            <button class="mod"   onclick="myFunction1()">Bases de données et Programmation</button>
            <div id="mod1">
                <ul>
                  
                  <li><button class="mat" onclick="myFunction11()"> Algorithmique et programmation Java</button>
                    <div id="mat1">
                      <ul class="liste">
                    
                    <li> <a  class="el"  href="Corrigés TDs Java-20210123T122721Z-001.zip">Corrigés TDs Java</a></li>
                    <?php
                    $dbhost = 'localhost';
                    $dbuser = 'root';
                    $dbpass = 'root';
                    $dbname = 'ajout';
                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                    $Query = "SELECT name, file_url from files";
                    $result = mysqli_query($conn, $Query);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<li><a class="el"  href="'.$row['file_url'].'">'.$row['name'].'</a></li>';
                        }
                    }
                    mysqli_close($conn);
                    ?>
                     </ul> 

                     <!--ajouter un fichier-->
                    <div class="connexion"><a href="fajouter.php" >Ajouter un fichier</a></div>
                    </div>
                    </li>
                   </br>

                  <li><button class="mat" onclick="myFunction12()">Bases de données relationnelles & ORM </button>
                      <div id="mat2">
                        <ul class="liste">
                          
                        
                       <li> <a  class="el"  href="Corrigés TDs Java-20210123T122721Z-001.zip">Corrigés TDs Java</a></li>
                       <?php
                    $dbhost = 'localhost';
                    $dbuser = 'root';
                    $dbpass = 'root';
                    $dbname = 'ajout';
                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                    $Query = "SELECT name, file_url from files";
                    $result = mysqli_query($conn, $Query);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<li><a class="el"  href="'.$row['file_url'].'">'.$row['name'].'</a></li>';
                        }
                    }
                    mysqli_close($conn);
                    ?>
                       </ul> 
                       <div class="connexion"><a href="fajouter.php" >Ajouter un fichier</a></div> 
                     
                      </div>
                      </li>
                      
                    </br>

                    <li><button class="mat" onclick="myFunction13()">Conception orientée-objets </button>
                      <div id="mat3">
                        <ul class="liste">
                          
                        
                       <li> <a  class="el"  href="Corrigés TDs Java-20210123T122721Z-001.zip">Corrigés TDs Java</a></li>
                       <?php
                    $dbhost = 'localhost';
                    $dbuser = 'root';
                    $dbpass = 'root';
                    $dbname = 'ajout';
                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                    $Query = "SELECT name, file_url from files";
                    $result = mysqli_query($conn, $Query);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<li><a class="el"  href="'.$row['file_url'].'">'.$row['name'].'</a></li>';
                        }
                    }
                    mysqli_close($conn);
                    ?>

                       </ul> 
  
                       <!--ajouter un fichier-->
                       <div class="connexion"><a id="con" href="fajouter.php" >Ajouter un fichier</a></div>
                           
                      </div>
                </ul>
                </div>
               
              
            </div>
            
            <div class="mod1">
             <button class="mod"   onclick="myFunction2()">Fondements ingénierie système</button>
             <div id="mod2">
                 <ul>
                     <li>Systèmes d’exploitation</li>
                     <li>Circuits et systèmes électroniques</li>
                     <li>Microprocesseurs et assembleurs</li>
                 </ul>
                 </div>
                
               
             </div>

             <div class="mod1">
                <button class="mod"   onclick="myFunction3()">Réseaux et interconnexions</button>
                <div id="mod3">
                    <ul>
                        <li>Réseaux de communication</li>
                        <li>Théorie de l’information et du codage</li>
                        <li>Réseaux de communication</li>
                    </ul>
                    </div>
                   
                  
                </div>

                <div class="mod1">
                    <button class="mod"   onclick="myFunction4()">Mathématiques, statistiques et projet</button>
                    <div id="mod4">
                        <ul>
                            <li>Mathématiques pour ingénieurs</li>
                            <li>Probabilités et statistique</li>
                            <li>Projet de développement personnel et professionnel (PPP)</li>
                        </ul>
                        </div>
                       
                      
                    </div>


</section>







<script src="js.js"></script>






