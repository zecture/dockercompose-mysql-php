<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Projekt 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
<?php include("navbar.php"); ?>

<section>
<p>Registrera dig på sajten</p>
<form action="register.php" method="GET">
Användarnamn:   <input type="text" name="username" /><br>
Full name:      <input type="text" name="fullname" /><br>
Lösenord:       <input type="text" name="password" /><br>
Epost:          <input type="text" name="email" /><br>
PostNr:         <input type="text" name="postnr" /><br>
AboutMe:        <input type="text" name="aboutme" /><br>
Salary:         <input type="text" name="salary" /><br>
Seeking:        <input type="text" name="seeking" /><br>
<input type="submit" name="register" value="Registrera dig" />

<?php
include("connection_auth.php"); // Standard PHP form validation
// Create & check connection
$conn = create_conn();
//Om man klickat mata in
if (isset($_GET['register'])) {
    // Input validation
    $username = test_input($_GET['username']);
    $fullname = test_input($_GET['fullname']);
    $passw = test_input($_GET['password']);
    $passw = hash("sha256",$passw);
    $email = test_input($_GET['email']);
    $postnr = test_input($_GET['postnr']);
    $aboutme = test_input($_GET['aboutme']);
    $salary = test_input($_GET['salary']);
    $seeking = test_input($_GET['seeking']);
    $userrole = 1;

    // Kolla ifall användaren redan finns
    $stmt = $conn->prepare("SELECT * FROM dating WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        print("<p>Användaren finns redan!</p>");
    }
    else {
        // Användaren finns inte från tidigare, fortsätt med inmatning:
        /* DEBUG 
        $sql = "INSERT INTO dating (username, fullname, passw, email, postnr, aboutme, salary, seeking , userrole) VALUES ('$username','$fullname','$passw','$email','$postnr','$aboutme','$salary','$seeking','$userrole')";
        print($sql);*/
        $stmt = $conn->prepare("INSERT INTO dating (username, fullname, passw, email, postnr, aboutme, salary, seeking , userrole)
                VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssisiii", $username,$fullname,$passw,$email,$postnr,$aboutme,$salary,$seeking,$userrole);
        if ($stmt->execute()) {
            print("<p>Inmatning lyckades<br>");
            print("Fortsätt till <a href='login.php'>login</a></p>");
        } else {
            print("<p>Inmatningen lyckades inte!</p>");
        }
    }
    $conn->close();
}
?>
</section>
</body>
</html>