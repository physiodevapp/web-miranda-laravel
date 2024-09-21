
const menuButton = document.getElementById("menu-button");
const navbarMenu = document.getElementById("navbar-menu");
const navbarLogo = document.getElementsByClassName("navbar__brand")[0]

const handleClickMenuButton = () => {
  navbarMenu.classList.toggle("opened");
  document.getElementById("menu-button-open").classList.toggle("show");
  document.getElementById("menu-button-close").classList.toggle("show");
}
menuButton.addEventListener("click", handleClickMenuButton);

const handleClickLogo = () => {
  window.location.href = navbarLogo.getAttribute('data-home-url');
}
navbarLogo.addEventListener("click", handleClickLogo);

