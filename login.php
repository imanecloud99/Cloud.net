<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'database';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if (isset($_POST['email']) && isset($_POST['mdp'])) {

    $email = $_POST['email'];
    $password = $_POST['mdp'];

    $sql = "SELECT userid FROM users WHERE email ='$email' AND mdp = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['userid'] = $row['userid'];
        if ($_POST['redirect'] == "conseil") header("Location: ajouterconseil.php");
        else header("Location: ajoutermot.php");
    }
    else {
        header("Location: connexion.htm");
    }
    mysqli_close($conn);
}
else {
    header("Location: connexion.htm");
}
?>