function takeError(errorID, errorCont) {
    var target = document.getElementById(errorID);
    target.innerText = errorCont;
    target.style.display = "block";
  }
  
  function resetError() {
    var targets = document.getElementsByClassName("errorCheck");
    for (var i = 0; i < targets.length; i++) {
      targets.item(i).classList.remove("errorCheck");
    }
  }
  
  