var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    
    for(j = 0; j < acc.length; j++){
      if(this != acc[j] && acc[j].classList.contains('active')){
        acc[j].classList.remove("active");
        var panel = acc[j].nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      }
    }
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }

    if(this.classList.contains('active')){
      this.parentElement.nextElementSibling.style.width = "0";
      this.parentElement.nextElementSibling.style.opacity = "0";
    } else {
      this.parentElement.nextElementSibling.style.width = "100%";
      this.parentElement.nextElementSibling.style.opacity = "1";
    }
  });
}