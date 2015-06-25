<?php
$photoList = scandir('res/', 1);
$columns = array("<div class='col-xs-4'>", "<div class='col-xs-4'>", "<div class='col-xs-4'>");

$counter = 0;
foreach($photoList as $photo){
    if(is_dir($photo)){continue;}
    $columns[$counter % 3] .= <<<EOM
        <div class='container'>
            <a href='photo.php?photo=$photo'>
                <img src='res/$photo' class='img-responsive'>
            </a>
        </div>
EOM;
    $counter++;
}

$content_mu = $columns[0] . "</div>" . $columns[1] . "</div>" . $columns[2] . "</div>";
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
    <link rel='stylesheet' href='custom.css'>

    <title>The Photos of Dewey Booth</title>
</head>
<body id='whole'>
    <div class='container'>
        <div class='container pod'>
            <h1>The Photos of Dewey Booth</h1>
        </div>
        <div class='row'>
            <?php echo $content_mu; ?>
        </div>
    </div>
</body>
<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
</html>
