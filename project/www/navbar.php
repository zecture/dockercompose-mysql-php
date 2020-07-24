<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="navbar">
<?php
// Om man är inloggad:
if (isset($_SESSION['username'])) {
    print("<section>Sessionens anvnamn: ".$_SESSION['username']."<br>");
    print("Användaren har rollen: ".$_SESSION['roll']."</section>");

    // Inloggad User
    if ( $_SESSION['roll']=='user' ) {
        // Skriv ut huvudmenyn utan radera och mata in
        print(" <ul>
                    <li><a href='index.php'>Hem</a></li>
                    <li><a href='list.php'>Kontaktannonser</a></li>
                    <li><a href='profile.php'>Profil</a></li>
                    <li><a href='logout.php'>Logga ut</a></li> 
                </ul>");
    }
    // Inloggad Admin
    else if ( $_SESSION['roll']=='admin' ) {
        // Skriv ut hela huvudmenyn
        print(" <ul>
                    <li><a href='index.php'>Hem</a></li>
                    <li><a href='list.php'>Kontaktannonser</a></li>
                    <li><a href='profile.php'>Profil</a></li>
                    <li><a href='logout.php'>Logga ut</a></li> 
                </ul>");
    }
}
// Om du inte är inloggad
else  { 
    // Skriv ut huvudmenyn med registrera & logga in
    print(" <ul>
            <li><a href='index.php'>Hem</a></li>
            <li><a href='list.php'>Kontaktannonser</a></li>
            <li><a href='register.php'>Registrera dig</a></li> 
            <li><a href='login.php'>Logga in</a></li> 
        </ul>");
}
?>
</div>