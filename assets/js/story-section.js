// Handles functionality for story section including open trailer and story dropdowns
//Assignments 
var storyBtn1 = document.querySelector("#story-sidebar-1");
var storyBtn2 = document.querySelector("#story-sidebar-2");
var storyBtn3 = document.querySelector("#story-sidebar-3");
var storyBtn4 = document.querySelector("#story-sidebar-4");
var storyBtn5 = document.querySelector("#story-sidebar-5");

var storyDropdown1 = document.querySelector("#story-dropdown-1");
var storyDropdown2 = document.querySelector("#story-dropdown-2");
var storyDropdown3 = document.querySelector("#story-dropdown-3");
var storyDropdown4 = document.querySelector("#story-dropdown-4");
var storyDropdown5 = document.querySelector("#story-dropdown-5");

var storyImg1 = document.querySelector("#story-img-1");
var storyImg2 = document.querySelector("#story-img-2");
var storyImg3 = document.querySelector("#story-img-3");
var storyImg4 = document.querySelector("#story-img-4");
var storyImg5 = document.querySelector("#story-img-5");
//Click functions
function openTrailer() {
    document.querySelector("#story-trailer").style.display = "block";
}

function closeTrailer() {
    document.querySelector("#story-trailer").style.display = "none";
}

function revealContent(e) {
    let parentName = event.target.innerHTML;
    switch (parentName) {
        case "LEGENDS OF CREATION":
            storyDropdown1.classList.remove("hidden");
            storyDropdown2.classList.add("hidden");
            storyDropdown3.classList.add("hidden");
            storyDropdown4.classList.add("hidden");
            storyDropdown5.classList.add("hidden");

            storyImg1.classList.remove("hidden");
            storyImg2.classList.add("hidden");
            storyImg3.classList.add("hidden");
            storyImg4.classList.add("hidden");
            storyImg5.classList.add("hidden");
            break;
        case "A REIGN OF ENMITY":
            storyDropdown2.classList.remove("hidden");
            storyDropdown1.classList.add("hidden");
            storyDropdown3.classList.add("hidden");
            storyDropdown4.classList.add("hidden");
            storyDropdown5.classList.add("hidden");

            storyImg2.classList.remove("hidden");
            storyImg1.classList.add("hidden");
            storyImg3.classList.add("hidden");
            storyImg4.classList.add("hidden");
            storyImg5.classList.add("hidden");
            break;
        case "CULT OF PERSONALITY":
            storyDropdown3.classList.remove("hidden");
            storyDropdown1.classList.add("hidden");
            storyDropdown2.classList.add("hidden");
            storyDropdown4.classList.add("hidden");
            storyDropdown5.classList.add("hidden");

            storyImg3.classList.remove("hidden");
            storyImg2.classList.add("hidden");
            storyImg1.classList.add("hidden");
            storyImg4.classList.add("hidden");
            storyImg5.classList.add("hidden");
            break;
        case "DAUGHTER OF HATRED":
            storyDropdown4.classList.remove("hidden");
            storyDropdown1.classList.add("hidden");
            storyDropdown3.classList.add("hidden");
            storyDropdown2.classList.add("hidden");
            storyDropdown5.classList.add("hidden");

            storyImg4.classList.remove("hidden");
            storyImg2.classList.add("hidden");
            storyImg3.classList.add("hidden");
            storyImg1.classList.add("hidden");
            storyImg5.classList.add("hidden");
            break;
        case "UNSTOPPABLE EVIL":
            storyDropdown5.classList.remove("hidden");
            storyDropdown1.classList.add("hidden");
            storyDropdown2.classList.add("hidden");
            storyDropdown3.classList.add("hidden");
            storyDropdown4.classList.add("hidden");

            storyImg5.classList.remove("hidden");
            storyImg2.classList.add("hidden");
            storyImg3.classList.add("hidden");
            storyImg4.classList.add("hidden");
            storyImg1.classList.add("hidden");
            break;
    }
}