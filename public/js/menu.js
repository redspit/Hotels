btnNav = document.getElementById("btnNav")
divMenu = document.getElementById("divMenu")
nav = document.querySelectorAll(".nav")

btnNav.addEventListener("click", () => {
    hideNav = document.querySelectorAll(".hide-nav")
	divMenu.classList.toggle("justify-between")
    divMenu.classList.toggle("justify-start")
    imgMenu = document.getElementById("imgMenu")
    if (hideNav[0].classList.contains("hidden")) {
        imgMenu.src =
            window.location.origin + "/images/left-arrow.png"; 
    }
    else {
        imgMenu.src =
            window.location.origin + "/images/right-arrow.png";
    }
	for (item of hideNav) {
		item.classList.toggle("hidden")
	}
	for (item of nav) {
		item.classList.toggle("w-64")
		item.classList.toggle("w-16")
    }
})