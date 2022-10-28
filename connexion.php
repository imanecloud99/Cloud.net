<!doctype html>
<html lang="fr-MA">
<head>
<title>Conseils</title>
<meta charset="ufc-8">
<meta name="keywords" content="support, cloud">
<meta name="author" content="Imane">
<meta name="description" content="support">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  background-image: url('png.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  align-items: center;
}
h2 {
	color: #2b2f33;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 2em;
}
p {
	font-size: 22px;
}
.conseils {
	margin: auto;
	display: flex;
	flex-direction: row;
	width: 100%;
	justify-content: center;
}
.conseils2 {
	border-radius: 5px;
	/*mix-blend-mode: multiply;*/
	padding-top: 160px;
	margin-left: auto;
}
.conseils1 {
	position: absolute;
	left: 20px;
}
img {
	border-radius: 15px;
}
.center {
	border-style: solid;
	border-color: rgb(94, 187, 187);
	text-align: center;
	align-items: center;
	justify-content: center;
	border-radius: 30px;
	background-color: white;
	width: 30%;
	padding: 30px;
	margin: 150px auto;
}
ul {
	list-style-type: none;
	text-align: center;
}
li a:link{
		color: #ff4500;
		text-decoration: none;
		margin: 10px;
	}
a.button3{
display: inline-block;
padding:0.3em 1.2em;
margin:0 0.3em 0.3em 0;
border-radius:2em;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
font-weight:300;
color:#FFFFFF;
text-align:center;
transition: all 0.2s;
}
.red {
    background-color:#f1594e;
}
.green {
    background-color:#40b323;
    cursor:pointer;
}
a.button3:hover{
background-color:#4095c6;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
</style>
</head>
<body>

	<div class="center">
        <h2>Se connecter</h2>
        <form id="myform" action="login.php" method="post">
			<?php echo '<input type="hidden" name="redirect" value="'.$_GET["redirect"].'">'; ?>
            <div>
                Email : 
                <input type="text" name="email" placeholder="Email">
            </div>
            <div>
                Mot de passe : 
                <input type="password" name="mdp" placeholder="Mot de passe">
            </div>
            <a href="conseil.htm" class="button3 red">Annuler</a>
            <a class="button3 green" onClick="document.getElementById('myform').submit()">Se connecter</a>
            <div>Pas de compte? <a href="inscrire.php">S'inscrire</a></div>
    </form>
	</div>

</body>