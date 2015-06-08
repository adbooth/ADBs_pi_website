<?php
    # Initialize Parsedown object
    require_once 'libs/Parsedown.php';
    $parsedown = new Parsedown();

    # Get data passed with link
    $postName = $_GET['post'];

    # Make post markup
    $post_content = file_get_contents('blog/' . $postName);
    $post_mu = $parsedown->text($post_content);

    # Get date from post filename
    $date = substr($postName, 5, 10);
    # Append to post markup
    $post_mu .= "<p align='right'><em>" . $date . "</em></p>";
?>

<!DOCTYPE html>
<html lang="en">
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
    <title>A Post of Andrew D Booth</title>
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
        <div class='container pod' onclick='goBlog()' style='cursor:pointer'>
            <h1>Andrew Booth</h1>
            <h5>on life, humans, and making blogs like this</h5>
        </div>
        <div class='container pod post'>
            <?php echo $post_mu; ?>
        </div>
    </div>
</body>
<?php include 'footer.html'; ?>
<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src='ubiq.js'></script>
<script>
$(document).ready(function(){
    // Make images in posts responsive and all links open in new tab
    $(".post img").addClass("img-responsive");
    $(".post a").attr("target", "_blank");
});
function goBlog(){
    window.location.href='blog.php';
}
</script>
</html>
