
function openNav() {
  document.getElementById("offcanvas").style.width = "100%";
  document.getElementById("offcanvas").classList.add('sidemenu-open');
  document.getElementById("menu-btn-div").style.display = "none"
}

function closeNav() {
  document.getElementById("offcanvas").style.width = "0";
  document.getElementById("offcanvas").classList.remove('sidemenu-open');
  document.getElementById("menu-btn-div").style.display = "flex"
}
