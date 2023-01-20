// Get the pre-purchase modal
var purchaseModal = document.getElementById("purchase-modal");

// Get the button that opens the modal
var purchaseBtn = document.querySelectorAll("#menu-item-85");

// Get the <span> element that closes the modal
var purchaseSpan = document.getElementsByClassName("purchase-close")[0];

// When the user clicks the main header button, open the modal 
purchaseBtn[0].onclick = function() {
    purchaseModal.style.display = "flex";
}

// When the user clicks the mobile header button, open the modal 
purchaseBtn[1].onclick = function() {
    purchaseModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
purchaseSpan.onclick = function() {
    purchaseModal.style.display = "none";
}