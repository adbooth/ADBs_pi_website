<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>

    <!-- Bootstrap core CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <!-- Ubiquitous CSS -->
    <link rel='stylesheet' href='ubiq.css'>

    <!-- My Stuff -->
    <link rel='shortcut icon' href='res/favicon.jpg'>
    <title>The Homepage of Andrew D Booth</title>
</head>
<body id='whole'>
    <!-- Whole container -->
    <div class='container'>
        <div class='row'>

            <!-- Column for photo and info -->
            <div class='col-md-4'>
                <!-- Profile pic container -->
                <div class='container'>
                    <img id='prof_pic' class='img-responsive' src='res/Chimney_prof_pic.jpg' alt='Photo of my face and some or all of my torso' onclick='switchProf()' style='cursor:pointer'>
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

            <!-- Column for content/links -->
            <div class='col-md-8'>
                <!-- Projects container -->
                <div class='container pod'>
                    <h3><a href='projects.php'>Projects</a></h3>
                    <div class='row'>
                        <div class='col-md-6'>
                            <p><a href='blog.php'>Blog</a></p>
                            <p>Beer thermo</p>
                            <p>ARM stuff</p>
                        </div>
                        <div class='col-md-6'>
                            <p><a href='https://github.com/adbooth/ADBs_pi_website' target="blank">This website</a></p>
                            <p>The home server it's hosted on</p>
                        </div>
                    </div>
                </div>
                <!-- Blogs container -->
                <div class='container pod'>
                    <h3>Blogs</h3>
                    <div class='row'>
                        <div class='col-md-6'>
                            <p><a href='blog.php'>Current</a></p>
                            <p><a href='http://ab-sweden.blogspot.com/' target='blank'>Sweden</a></p>
                        </div>
                        <div class='col-md-6'>
                            <p><a href='http://edbooth.weebly.com/' target='blank'>My sister's awesome one-a-day</a></p>
                        </div>
                    </div>
                </div>
                <!-- Check Me Out -->
                <div class='container pod'>
                    <h3><a href='mailto:adbooth8@gmail.com' target='blank'>Talk</a>/<a href='https://github.com/adbooth' target='blank'>Fork</a>/<a href='Resume_Andrew_Booth.pdf'>Hire</a></h3>
                    <div class='row'>
                        <div class='col-md-6'>
                            <p><a href='mailto:adbooth8@gmail.com' target='blank'>Email</a></p>
                            <p><a href='Resume_Andrew_Booth.pdf'>Current resume</a></p>
                            <p><a href='https://www.linkedin.com/in/boothad' target='blank'>LinkedIn</a></p>
                        </div>
                        <div class='col-md-6'>
                            <p><a href='https://www.facebook.com/Andrew.D.Booth' target='blank'>Facebook</a></p>
                            <p><a href='https://github.com/adbooth' target='blank'>GitHub</a></p>
                        </div>
                    </div>
                </div>
            </div><!-- Column for content/links -->

        </div>
    </div><!-- Whole container -->
</body>
<?php include 'footer.html'; ?>
<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src='ubiq.js'></script>
</html>
