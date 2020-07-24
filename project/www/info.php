<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Marias Magnifika Miniatyr Muffinsar</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
    <?php include("navbar.php"); ?>
        <div class="info">

                        <h1 class="title is-3 has-text-centered">Server Info</h3>
                            <ul>
                                <li><?= apache_get_version(); ?></li>
                                <li>PHP <?= phpversion(); ?></li>
                                <li>
                                    <?php
                                    $link = mysqli_connect("database", "root", "tiger", null);

                                    if (mysqli_connect_errno()) {
                                        printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                    } else {
                                        /* print server version */
                                        printf("MySQL Server %s", mysqli_get_server_info($link));
                                    }
                                    /* close connection */
                                    mysqli_close($link);
                                    ?>
                                </li>
                            </ul>

                        <h3 class="title is-3 has-text-centered">Quick Links</h3>
                            <ul>
                                <li><a href="http://localhost/phpinfo.php">phpinfo()</a></li>
                                <li><a href="http://localhost:8080">phpMyAdmin</a></li>
                                <li><a href="http://localhost/test_db.php">Test DB Connection with mysqli</a></li>
                                <li><a href="http://localhost/test_db_pdo.php">Test DB Connection with PDO</a></li>
                            </ul>
        <?php
            //whether ip is from share internet
            if (!empty($_SERVER['HTTP_CLIENT_IP']))   
            {
                $ip_address = $_SERVER['HTTP_CLIENT_IP'];
            }
            //whether ip is from proxy
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
            {
                $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            //whether ip is from remote address
            else
            {
                $ip_address = $_SERVER['REMOTE_ADDR'];
            }
            print ("Din IP address är: " .$ip_addres);
            ?>
    
        </div>
        </body>