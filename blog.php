<?php
    # Initialize Parsedown object
    require_once 'libs/Parsedown.php';
    $parsedown = new Parsedown();

    # Initialize content and archive content holder variables
    $content_mu = "";
    $archive_content_mu = "";

    # Loop through items in directory and decide whether to turn into mark up
    $dirList = scandir('blog', 1);
    foreach($dirList as $post){
        # If item is directory or starts with a period, skip it
        if(is_dir("blog/" . $post) or substr($post, 0, 5) != 'post_'){continue;}

        # Get markdown file contents and parse into HTML
        $post_content = file_get_contents("blog/" . $post);
        $post_md = $parsedown->text($post_content);

        # Get title and id for each post
        $title = ltrim(stristr($post_content, "\n", true), '# ');
        $id = str_replace(' ', '_', $title);

        # Make markup for blog elements
        $date = substr($post, 5, 10);
        $content_mu .= <<<EOM
        <div id='$id' class='container pod post'>
            $post_md
            <p align='right'><a class='postLink' href='post.php?post=$post'><em>$date</em></a></p>
        </div>
EOM;

        # Make markup for archive content
        $archive_content_mu .= "<p><a href='#" . $id . "'>" . $title . "</a></p>";
    }

    # Make markup for desktop archive element
    $desktop_archive_mu = <<<EOM
    <div class='col-md-4'>
        <div class='container pod' data-spy='affix'>
            <h4>Archive</h4>
            <div>
                $archive_content_mu
                <p align='right'><a href='#whole'>Back to top</a></p>
            </div>
        </div>
    </div>
EOM;

    # Make markup for mobile archive element
    $mobile_archive_mu = <<<EOM
    <div class='col-md-4'>
        <div class='container pod'>
            <h4 id='archive'>
                Archive
                <span class='chevron glyphicon glyphicon-chevron-right'></span>
                <span class='chevron glyphicon glyphicon-chevron-down'></span>
            </h4>
            <div id='archiveContent'>$archive_content_mu</div>
        </div>
    </div>
EOM;
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
    <title>The Blog of Andrew D Booth</title>
    <style media="screen">
        body {
          font-family: Georgia, "Times New Roman", Times, serif;
          color: #555;
        }
    </style>
</head>
<body id='whole'>
    <!-- Whole container -->
    <div class='container'>
        <div class='container pod' onclick='goHome()' style='cursor:pointer'>
            <h1>Andrew Booth</h1>
            <h5>on life, humans, and making blogs like this</h5>
        </div>
        <div class='row'>
            <!-- If mobile, put archive here -->
            <?php if($_COOKIE['mobile']){echo $mobile_archive_mu;} ?>
            <!-- Column for the posts -->
            <div class='col-md-8'>
                <?php echo $content_mu; ?>
            </div>
            <!-- If not mobile, put archive here -->
            <?php if(!$_COOKIE['mobile']){echo $desktop_archive_mu;} ?>
        </div>
    </div>
</body>
<?php include 'footer.html'; ?>
<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src='ubiq.js'></script>
<script>
if(matchMedia && window.matchMedia('(min-device-width: 320px) and (max-device-width: 480px)').matches) {
    document.cookie = 'mobile=1; path=/';
}
$(document).ready(function(){
    // Hide the archive content on mobile
    $("#archiveContent").hide();
    // Hide the down chevron
    $(".glyphicon-chevron-down").hide();
    // Attach the 'toggleArchive' function to the archive header
    $("#archive").click(toggleArchive);

    // Make images in posts responsive and all links open in new tab
    $(".post img").addClass("img-responsive");
    $(".post a").attr("target", "_blank");
    $(".postLink").attr("target", "_self");
});
function toggleArchive(){
    // When user clicks/taps the archive header, toggle the visible elements
    $(".chevron").toggle();
    $("#archiveContent").toggle();
}
</script>
</html>
