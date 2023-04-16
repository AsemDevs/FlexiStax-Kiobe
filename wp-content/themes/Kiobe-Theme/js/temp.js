// Start Media Query Js

function linkBtnsMedia_Query(z){
    var tradeSafe = document.getElementsByClassName("trade-safe");
    var linkbtns = tradeSafe[0].getElementsByClassName("general-button-xl");
    
    if (xl.matches) { // If media query matches
      linkbtns[0] = linkbtns[0].className.replace(" general-button-xl", "general-button-md");
    } else {
      linkbtns[0] = linkbtns[0].className.replace(" general-button-xl", "general-button-sm");
    }
  }
  
  
  var xl = window.matchMedia("(max-width: 820px)");
  
  linkBtnsMedia_Query(xl);
  // End Media Query Js