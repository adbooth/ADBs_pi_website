function switchProf(){
    var image = document.getElementById('prof_pic');
    var oldPath = image.src;
    var newPath = '';
    do{
        switch(Math.floor((Math.random()*3))){
            case 0:
                newPath = 'res/Chimney_prof_pic.jpg';
                break;
            case 1:
                newPath = 'res/Killington_prof_pic.jpg';
                break;
            default:
                newPath = 'res/Oozefest_prof_pic.jpg';
        }
    }while(oldPath == newPath);
    image.src = newPath;
}

function goHome(){
    window.location.href='home.php';
}
