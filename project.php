<?php
# Initialize Parsedown object
require_once 'libs/Parsedown.php';
$parsedown = new Parsedown();

# Get file contents and turn into JSON object
$log_json = file_get_contents('log.json');
$log = json_decode($log_json);

# Get projects object
$projects = $log->{'projects'};

# Get proper file and parse page markdown into markup
$project_name = $_GET['project'];
$page_md = file_get_contents('projects/' . $project_name . '/page.md');
$page_mu = $parsedown->text($page_md);
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
    <title>A Project of Andrew D Booth's</title>
</head>
<body id='whole'>
    <div class='container'>
        <div class='row'>
            <!-- Column for photo and info -->
            <div class='col-sm-4'>
                <!-- Profile pic -->
                <img id='prof_pic' class='img-responsive' src='res/Chimney_prof_pic.jpg' alt='Photo of my face and some or all of my torso' onclick='switchProf()' style='cursor:pointer'>
                <!-- Name container -->
                <div class='container pod' onclick='goHome()' style='cursor:pointer'>
                    <h2>Andrew Booth</h2>
                    <h5>Barefoot whenever possible.</h5>
                </div>
                <!-- About me container -->
                <div class='container pod hidden-xs'>
                    <?php include 'about.php' ?>
                </div>
            </div><!-- Column for photo and info -->

            <!-- Column for content -->
            <div class='col-sm-8'>
                <div class='container pod'>
                    <?php echo $page_mu; ?>
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
