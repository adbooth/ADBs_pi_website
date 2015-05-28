<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>

    <!-- Bootstrap core CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <!-- Ubiquitous CSS -->
    <link rel='stylesheet' href='../css/ubiq.css'>

    <!-- My Stuff -->
    <link rel='shortcut icon' href='../res/favicon.jpg'>
    <title>The Projects of Andrew D Booth</title>
</head>
<body id='whole'>
    <!-- Whole container -->
    <div class='container'>
        <div class='row'>

            <!-- Column for photo and info -->
            <div class='col-md-4'>
                <!-- Profile pic container -->
                <div class='container'>
                    <img class='img-responsive' src='../Chimney_prof_pic.jpg' alt='Photo of my face and some or all of my torso'>
                </div>
                <!-- Name container -->
                <div class='container pod' onclick='goHome()' style='cursor:pointer'>
                    <h2>Andrew Booth</h2>
                    <h5>Barefoot whenever possible.</h5>
                </div>
                <!-- About me container -->
                <div class='container pod'>
                    <h5>About</h5>
                    <p>
                        22 year old still in the throws of higher education.<br><br>
                        Currently interning at Corning Inc.'s Environmental Technologies plant in Erwin, NY.<br><br>
                        Come August I'll be back at SUNY Buffalo to finish up my last undergrad year in their Computer Engineering program. <br><br>
                        After that, who knows?
                    </p>
                </div>
            </div><!-- Column for photo and info -->

            <!-- Column for content -->
            <div class='col-md-8'>
                <div class="container pod">
                    <h1>Projects</h1>
                </div>
                <div class="container pod">
                    <h4>Blog</h4>
                    <p>Details about project</p>
                </div>
                <div class="container pod">
                    <h4>Beer thermo</h4>
                    <p>Details about project</p>
                </div>
                <div class="container pod">
                    <h4>ARM stuff</h4>
                    <p>Details about project</p>
                </div>
                <div class="container pod">
                    <h4>This website</h4>
                    <p>Details about project</p>
                </div>
            </div><!-- Column for content/links -->

        </div>
    </div><!-- Whole container -->
</body>
<?php include '/var/www/footer.html'; ?>
<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script>function goHome(){window.location.href='../index.html';}</script>
</html>
