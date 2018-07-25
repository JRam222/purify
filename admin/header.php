<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <meta name="robots" content="noindex,nofollow">
        <link rel="manifest" href="/manifest.json">
        <meta name="theme-color" content="#ffffff">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/media_query.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 header">
                    <p>Home</p>
                    <?php
                        if(isset($_SESSION['username'])){
                            echo '<form action="logout.php" method="post">
                                    <button type="submit" name="submit">Logout</button>
                                </form>';
                        }else{
                            echo '<form action="login.php" method="post" >
                                    <input type="text" name="username" placeholder="username">
                                    <input type="password" name="pwd" placeholder="password">
                                    <button type="submit" name="submit" >Login</button>
                                </form>';
                        }
                    ?>
                    
                    
                </div>
            </div>
        </div>
        
    </body>
</html>
