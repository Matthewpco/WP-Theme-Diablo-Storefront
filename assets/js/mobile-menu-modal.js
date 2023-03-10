// Mobile menu modal called in the header template on mobile size screens
// Code opens the modal on click of hamburger menu and closes if x or outside the modal is clicked
// Get the modal
var modal = document.getElementById("mobile-modal");

// Get the button that opens the modal
var btn = document.getElementById("menu-toggle");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  if (modal.style.display = "block") {
    modal.style.display = "none";
  }
  
  if (modal.style.display = "none") {
    modal.style.display = "block";
  }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}