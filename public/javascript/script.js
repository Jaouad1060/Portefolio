function darkMode() {
  var element = document.body;
  let darkModeActivated = element.classList.toggle("dark-mode");

  if(darkModeActivated) {
    localStorage.setItem("darkMode","on")
  }
  else {
    localStorage.removeItem("darkMode")
  }
}

if(localStorage.getItem("darkMode")) {
  darkMode()
}