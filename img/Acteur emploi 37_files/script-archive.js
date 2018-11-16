function openArchive(archiveName, element) {
    var i;
    var x = document.getElementsByClassName("archive");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(archiveName).style.display = "block";  
    
    //console.log(element.innerHTML)

    //archives-button

    var x = document.getElementsByClassName("archives-button");
    for (i = 0; i < x.length; i++) {
       x[i].classList.remove('encours');
    }
    
    element.className += ' ' + 'encours';
    


}