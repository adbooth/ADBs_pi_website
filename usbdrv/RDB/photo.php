<?php
$photoName = $_GET['photo'];
$content_mu = "<img src='res/$photoName' class='img-responsive'>";

$fileList = scandir("res/", 1);
$photoList = array();
foreach($fileList as $file){
    if(!is_dir($file)){
        array_push($photoList, $file);
    }
}

$counter = 0;
foreach($photoList as $photo){
    if($photo == $photoName){break;}
    $counter++;
}

if($counter == 0){
    $prevLink = "photo.php?photo=" . $photoList[count($photoList)-1];
}else {
    $prevLink = "photo.php?photo=" . $photoList[$counter-1];

}

if($counter == count($photoList)-1){
    $nextLink = "photo.php?photo=" . $photoList[0];
}else {
    $nextLink = "photo.php?photo=" . $photoList[$counter+1];
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
    <link rel='stylesheet' href='custom.css'>

    <title>A Photo of Dewey Booth's</title>
</head>
<body id='whole'>
    <div class='container'>
        <div class='container pod'>
            <h1 style='text-align:center'>
                <a href='<?php echo $prevLink; ?>'>
                    <span class='glyphicon glyphicon-chevron-left'></span>
                </a>
                <a href='gallery.php'>The Photos of Dewey Booth</a>
                <a href='<?php echo $nextLink; ?>'>
                    <span class='glyphicon glyphicon-chevron-right'></span>
                </a>
            </h1>
        </div>
        <?php echo $content_mu; ?>
    </div>
</body>
<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
</html>
