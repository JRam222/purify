<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BCC - Purify</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/monthly.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/media_query.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
       
        <?php include("navbar.php"); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 content">
                    <div class="main">
                        <img class="center" src="img/1.png">
                    </div>
                </div>
                <div  class="col-lg-12 full red">
                    <h5>Our Vision</h5>
                    <p>Our goal is to "raise the spiritual temperature" in order that the BCC youth would reflect the image of 
                        Christ more clearly. The Purify Ministry provides youth students the opportunity to explore the riches of 
                        Christ through spiritual disciplines, targeted assignments, opportunities to teach, and an authentic community.
                    </p>
                    <p id="signature">
                        - Purify Team
                    </p>
                </div>
                <div class="col-lg-12 full beige">
                    <h5>Apply Now</h5>
                    <p>
                        In order to assure intentional and authentic discipleship, we can only accomodate for a limited amount of students. 
                        Each student is required to go through an application process. We would love for you to be a part of our team.
                    </p>
                    <button class="btn center">Apply Now!</button>
                </div>
                <div class="col-lg-12 full brown">
                    <h5>Upcoming Events</h5>
                    <div class="monthly" id="mycalendar"></div>
                </div>
                <?php include("footer.php");?>
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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/monthly.js"></script>
        <script type="text/javascript">
            $(window).load( function() {
                $('#mycalendar').monthly();
            });
        </script>
<script>

// Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set

sr.reveal('.full p', {duration:1200});

</script>
<script>$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });</script>
        
        
    </body>
</html>
