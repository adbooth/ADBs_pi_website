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
</head>
<body id='whole'>
    <!-- Whole container -->
    <div class='container'>
        <div class='container pod' onclick='goHome()' style='cursor:pointer'>
            <h1>Andrew Booth</h1>
            <h5>on life, humans, and making blogs like this</h5>
        </div>
        <div class='row'>
            <?php include 'blogFiller.php';?>

<!--             Column for the posts
<div class='col-md-8'>
    <div class='container pod'>
        <h1>Here's a title</h1>
        <p>Here's a post</p>
    </div>
</div>Column for the posts

Column for the sidebar
<div class='col-md-4'>
    <div class='container pod'>
        <h3>Here's the archive</h3>
        <p>Here's January</p>
        <p>Here's December</p>
        <p>Here's Novermber</p>
    </div>
</div>Column for the sidebar
 -->
        </div>
    </div><!-- Whole container -->

</body>
<?php include 'footer.html'; ?>
<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script src='ubiq.js'></script>
</html>
