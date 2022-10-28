
<?php
  include ( "INCLUDES/connectdb.php");

 
   if(!empty($_FILES)){
       $file_name=$_FILES['monfichier']['name'];
       $file_extension=strrchr($file_name,".");

       $file_tmp_name=$_FILES['monfichier']['tmp_name'];
       $file_dest='files/'.$file_name;
       $extensions_autorises=array('.pdf','.PDF','.PNG','.png');
        
       if(in_array($file_extension,$extensions_autorises)){
          if(move_uploaded_file($file_tmp_name,$file_dest)){
              $req =$db->prepare('INSERT INTO files(name,file_url)  VALUES (?,?)');
              $req->execute(array($file_name,$file_dest));
             echo'Fichier envoyé avec succès';}
           else{
               echo"Une erreur est survenu lors de l'envoi du fichier";}

           }   
           
       else{
           echo'Seuls les fichiers PDF et les images PNG sont autorises';
       }

   }
  
  
?>


<!DOCTYPE >
<html>
    <head>
        <meta charset="utf-8" />
        <title>Upload Support</title>
        <link rel="stylesheet" type="text/css" href="fichier.css">

<body>
<form  method="POST" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br /></p>
                <div class="form">
                <input class="form1" type="file" name="monfichier" /><br /><br />
                <input class="form1" type="submit" value="Envoyer le fichier" /><br /><br />
                <img class="img" src="back4.jpg" alt="d">
                </div>
        
        
</form>

</body>
    </head>
</html>



