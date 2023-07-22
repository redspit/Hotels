mode = document.getElementById("btntheme")
const expire = 365
let theme = document.cookie.match(/^(.*;)?\s*theme\s*=\s*[^;]+(.*)?$/)
if (theme == null) {
	setCookie("theme", "light-mode", expire)
}
document.body.classList.toggle(getCookie("theme"))
if (document.body.classList.contains("dark-mode")) {
	mode.innerHTML = "Switch to Light"
} else {
	mode.innerHTML = "Switch to Dark"
}

function switchMode() {
	let theme = getCookie("theme")
	if (theme == "dark-mode") {
		mode.innerHTML = "Switch to Dark"
		setCookie("theme", "light-mode", expire)
		document.body.classList.replace(theme, "light-mode")
	} else if (theme == "light-mode") {
		mode.innerHTML = "Switch to Light"
		setCookie("theme", "dark-mode", expire)
		document.body.classList.replace(theme, "dark-mode")
	}
}

function setCookie(cname, cvalue, exdays) {
	const d = new Date()
	d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000)
	let expires = "expires=" + d.toUTCString()
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/"
}

function getCookie(cname) {
	let name = cname + "="
	let decodedCookie = decodeURIComponent(document.cookie)
	let ca = decodedCookie.split(";")
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i]
		while (c.charAt(0) == " ") {
			c = c.substring(1)
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length)
		}
	}
	return ""
}
