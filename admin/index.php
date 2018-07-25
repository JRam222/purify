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
        <link rel="manifest" href="/manifest.json">
        <meta name="robots" content="noindex,nofollow">
        <meta name="theme-color" content="#ffffff">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <?php
            include_once 'header.php';
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        if(isset($_SESSION['username'])){
                            echo $_SESSION['first'] . " you are logged in!";
                            include_once 'getEvents.php';
                            
                            echo '<table>
                                  <tr class="table-title">
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Color</th>
                                    <th>URL</th>
                                    <th colspan="4"></th>
                                  </tr>';

                                
                                while($event = mysqli_fetch_assoc($result)){
                                    echo'
                                    <tr>
                                      <td>'.$event['name'].'</td>
                                      <td>'.$event['startdate'].'</td>
                                        <td>'.$event['enddate'].'</td>
                                        <td>'.$event['starttime'].'</td>
                                        <td>'.$event['endtime'].'</td>
                                        <td>'.$event['color'].'</td>
                                        <td>'.$event['url'].'</td>
                                        <td><a href="edit.php?id='.$event['id'].'">Edit</a></td>
                                        <td><a href="delete.php?id='.$event['id'].'">Delete</a></td>
                                    </tr>
                                    ';
                                };

                                   
                                
                            echo ' </table>


                                <h3>Add</h3>
                                <form method="post" action="insert.php">
                                    Event Name:<input type="text" name="name" placeholder="Event Name"/><br>
                                    Start Date:<input type="date" name="startdate"/><br>
                                    End Date:<input type="date" name="enddate"/><br>
                                    Start Time:<input type="text" name="starttime"/><br>
                                    End Time:<input type="text" name="endtime"/><br>
                                    Color:<input type="text" name="color"/><br>
                                    URL:<input type="text" name="url"/><br>
                                    <input type="submit" name="submit"/>
                                </form>';
                        }
                    ?>


                   

                </div>
            </div>
        </div>
        
       
        
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
