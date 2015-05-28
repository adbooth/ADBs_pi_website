function switchProf(){
    var image = document.getElementById("prof_pic");
    if(image.src.match("Chimney_prof_pic.jpg")){
        image.src = "Killington_prof_pic.jpg";
    }else{
        image.src = "Chimney_prof_pic.jpg";
    }
}
