function switchProf(){
    var image = document.getElementById("prof_pic");
    if(image.src.match("res/Chimney_prof_pic.jpg")){
        image.src = "res/Killington_prof_pic.jpg";
    }else{
        image.src = "res/Chimney_prof_pic.jpg";
    }
}

function goHome(){
    window.location.href='home.php';
}
