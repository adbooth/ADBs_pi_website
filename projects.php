<?php
# Initialize Parsedown object
require_once 'libs/Parsedown.php';
$parsedown = new Parsedown();

# Get file contents and turn into JSON object
$log_json = file_get_contents('log.json');
$log = json_decode($log_json);
$projects = $log->{'projects'};

# Initialize markup holder
$markup_holder = "";

# Loop through projects and build markup
foreach($projects as $dirname => $project){
    # Parse detail markdown into markup
    $detail_md = file_get_contents('projects/' . $dirname . '/details.md');
    $detail_mu = $parsedown->text($detail_md);

    # Add project markup to holder
    $anchor = $project->{'anchor'};
    $target = $project->{'target'};
    $title = $project->{'title'};
    $markup_holder .= <<<EOM
        <div class='container pod'>
            <a href='$anchor' target='$target'><h2>$title</h2></a>
            $detail_mu
        </div>
EOM;
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
    <title>The Projects of Andrew D Booth</title>
</head>
<body id='whole'>
    <!-- Whole container -->
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
            </div>

            <!-- Column for content -->
            <div class='col-sm-8'>
                <div class="container pod">
                    <h1>Projects</h1>
                </div>
                <?php echo $markup_holder; ?>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.html'; ?>
<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src='ubiq.js'></script>
<script type='text/javascript'>
    // $(document).ready(function(){
    //     var size = $("#top").height();
    //     var face = $("#face");
    //     face.height(size).width(size);
    //     $("#face_img").attr("src", "res/favicon.jpg");
    // })
</script>
</html>
