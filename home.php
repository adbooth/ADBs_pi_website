<?php
    # Get file contents and turn into JSON object
    $home_content = file_get_contents('home_content.json');
    $home_json = json_decode($home_content);

    # Function which returns section markup dependendent on section name
    function populate_section($section_title){
        # Get global JSON object into this function
        global $home_json;
        # Use argument to access element of JSON object
        $section_content = $home_json->{$section_title};
        # Initialize final markup string, half count and counter variables
        $section_mu = "";
        $half = count($section_content)/2;
        $counter = 0;
        # Loop over items in each section and embed in HTML
        foreach($section_content as $item){
            # If just over half way through list, start second column
            if($counter > $half){
                $section_mu .= "</div><div class='col-md-6'>";
            }
            # Initialize left and right side of section markup
            $section_mu .= "<p><a href='" . $item->{'anchor'} . "' target='" . $item->{'target'} . "'>" . $item->{'text'} . "</a></p>";
            $counter++;
        }
        return $section_mu;
    }
?>

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
                    <?php include 'about.php'; ?>
                </div>
            </div><!-- Column for photo and info -->

            <!-- Column for content/links -->
            <div class='col-md-8'>
                <!-- Projects container -->
                <div class='container pod'>
                    <h3><a href='projects.php'>Projects</a></h3>
                    <div class='row'>
                        <div class='col-md-6'>
                            <?php echo populate_section('projects'); ?>
                        </div>
                    </div>
                </div>
                <!-- Blogs container -->
                <div class='container pod'>
                    <h3>Blogs</h3>
                    <div class='row'>
                        <div class='col-md-6'>
                            <?php echo populate_section('blogs'); ?>
                        </div>
                    </div>
                </div>
                <!-- Check Me Out -->
                <div class='container pod'>
                    <h3><a href='mailto:adbooth8@gmail.com' target='_blank'>Talk</a>/<a href='https://github.com/adbooth' target='_blank'>Fork</a>/<a href='res/Resume_Andrew_Booth.pdf' target='_blank'>Hire</a></h3>
                    <div class='row'>
                        <div class='col-md-6'>
                            <?php echo populate_section('connect'); ?>
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
