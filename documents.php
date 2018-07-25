<?php 

$message ="";

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed =array('docx');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError ===0){
            if($fileSize < 1000000){
                $fileDestination = 'uploads/' .$fileName;
                move_uploaded_file($fileTmpName , $fileDestination);
                $msg = "Dear Purify Leader, \n\nA student has submitted a document to the website titled " .$fileName . ". Click the following link to download it: bccpurify.com/uploads/" .$fileName;
                mail("jaguas@biblicalcommunity.com","Puify Document Submission",$msg);
                mail("jramilo@biblicalcommunity.com","Puify Document Submission",$msg);
                $message = "Successfully submitted. Thank you!";
            }else{
                echo "Your file is too big.";
            }
        }else{
            echo "There was an error uploading your file. Please Try Again.";
        }
    }else{
        $message = "Please upload a word document.";
    }
    
}

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Purify - Documents</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/media_query.css">
        
        <style>
            .main img{visibility: hidden;}
        </style>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
       
        <?php include("navbar.php"); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 content no-padding">
                    <div class="main">
                        <img class="center" src="img/doc.png" />
                    </div>
                </div>
                <div  class="col-lg-6 full red">
                    <h5 data-sr="">Documents</h5>
                    <p class="name"><a href="https://drive.google.com/open?id=1sZE26705MnRDLrr10cLIUUGlNMqeSFbX" target="_blank">Application</a></p>
                    <p class="name"><a href="https://drive.google.com/file/d/1BCNn8KsLGHbt70ycF3k4NAhni-23pKU7/view?usp=sharing" target="_blank">2018 Spring Syllabus</a></p>
                    <p class="name"><a href="https://drive.google.com/file/d/18YvhpKCBHa4WHXFmvUUknhhGTaK-xbGe/view?usp=sharing" target="_blank">Sermon Paper (Options)</a></p>
                    <p class="name last"><a href="https://drive.google.com/file/d/1o6kixszdhQU-bEdCT2QiCJW9r1sjWY50/view?usp=sharing" target="_blank">Submission Instructions</a></p>
                </div>
                <div  class="col-lg-6 full red">
                    <h5 data-sr="">Submit Documents</h5>
                    <p class="name notice"><b class="color-red">**</b>Make sure you have satisified the 2 requirements stated in the "Submission Instructions" document prior to submitting your document.</p>
                    <form action="documents.php" method="POST" enctype="multipart/form-data">
                        <input class= "submit btn" type="file" name="file"><br/>
                        <button class="submit btn" type="submit" name="submit">Upload Assignment</button><br/>
                        <p class="name"><?php  echo $message ?></p>
                    </form>
                </div>
                <?php include("footer.php");?>
            </div>
        </div>
        
        

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        <script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
        <script>

        // Changing the defaults
        window.sr = ScrollReveal({ reset: false });

        // Customizing a reveal set

        sr.reveal('.full p', {duration:1200});
        sr.reveal('h5', {origin:'left',distance:'100px', duration:1200});
        sr.reveal('.main img', {origin:'top', duration:1000});

        </script>
        <script>$('#toggle').click(function() {
           $(this).toggleClass('active');
           $('#overlay').toggleClass('open');
          });
        </script>
        
        
    </body>
</html>
