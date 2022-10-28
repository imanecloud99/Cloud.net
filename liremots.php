<!doctype html>
<html lang="fr-MA">
<head>
<title>Mots des lauréats</title>
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
	color: #dfe7f1;
	font-family: Brush Script MT;
	font-size: 9em;
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
	margin: auto;
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
	text-align: left;
	align-items: center;
	justify-content: center;
	border-radius: 30px;
	background-color: white;
	width: 50%;
	padding: 30px;
	margin: 50px auto;
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
background-color:#4eb5f1;
text-align:center;
transition: all 0.2s;
}
a.button3:hover{
background-color:#4095c6;
}
.coord {
	display: flex;
	flex-direction: row;
}
.author {
	font-weight: bold;
}
.date {
	text-decoration: underline;
}
.cons-content {
	margin-top: 10px;
	text-indent: 50px;
}
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}
</style>
</head>
<body>
	<div class="conseils" >
		<div class="conseils2">
			<img src="motjpg.jpg" alt="conseils" width="300px">
		</div>
	</div>
	<div class="center">
		<?php
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = 'root';
		$dbname = 'database';
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
		$Query = "SELECT nompre, email, date, content FROM users join data on users.userid = data.userid where type = 'experience'";
		$result = mysqli_query($conn, $Query);
		if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
					echo '<div class="cons">
					<div class="coord">
						<div class="icon">
							<img src="msg.png" width="55px">
						</div>
						<div class="authdate">
							<div class="author">' 
							. $row["nompre"] . 
							'</div>
							<div class="email">' 
							. $row["email"] . 
							'</div>
							<div class="date">' 
								. $row["date"] . 
							'</div>
						</div>
					</div>
					<div class="cons-content"> '
							. $row["content"] . 
					'</div>
					<hr/>
					</div>';
            }
         } else {
            echo "Pas de mots des lauréats pour le moment.";
         }
         mysqli_close($conn);
		?>
	</div>

</body>