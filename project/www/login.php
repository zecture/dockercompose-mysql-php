<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Marias Magnifika Miniatyr Muffinsar</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="loginPage">
        <?php include("navbar.php"); ?>

        <form action="login.php" class="loginForm" method="POST">
            <input type="text" placeholder="Användarnamn" name="anvnamn" />
            <input type="text" placeholder="Lösenord" name="losen" />
            <input type="submit" name="login" value="Logga in" />
        </form>
        <?php
            include("connection_auth.php");
            $conn = create_conn();
            //connectar med db

            if (isset($_POST['login'])) {
                $anvnamn = test_input($_POST['anvnamn']);
                $losen = test_input($_POST['losen']);
                $losen = hash("sha256",$losen);
                
                $sql = "SELECT * FROM dating WHERE username='$anvnamn';";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    print("<p>Användaren finns!<br>");
                    
                    $_SESSION['username'] = $anvnamn;
                    
                 
                    while($row = $result->fetch_assoc()) {
                        $_SESSION['roll'] = $row['roll'];
                    }
                    print("Du loggade in som: ".$_SESSION['username']."<br>");
                    print("Din användare har rollen: ".$_SESSION['roll']."<br>");
                    header("refresh:3;url=localhost/index.php");
                }
                else {
                    print("<p>Användaren finns inte!</p>");
                }
             $conn->close();
          }
        else {
            print("<p>Var vänlig och logga in</p>");
        }
        ?>

        </div>
    </body>
</html>