require('./bootstrap');

const menuBtnDiv = document.getElementById('menu-btn-div')
const showDiv = document.getElementById('menu-show-div');
const mediaQuery = window.matchMedia('(max-width: 750px)');
const video = document.getElementById('video-intro');
const catalogue = document.getElementById('catalogue');
let scrolling = false;

window.addEventListener('resize', () => {mediaChecker(mediaQuery)});
window.onload = mediaChecker(mediaQuery);

window.addEventListener('scroll', function() {
  console.log(document.documentElement.scrollTop);
  if (document.documentElement.scrollTop > 600){
  video.style.display = "none";
  }
});



function menuButtonListener () {
  openNav();
}

function mediaChecker(screenSize) {
if (screenSize.matches) {
  if(!menuBtnDiv.classList.contains('sidebar-toggler')){
  menuBtnDiv.classList.add('sidebar-toggler');
  menuBtnDiv.addEventListener('click', menuButtonListener);
  showDiv.style.display = 'none';
  }
}
    else {
        if(menuBtnDiv.classList.contains('sidebar-toggler')){
          menuBtnDiv.removeEventListener('click', menuButtonListener);
          showDiv.style.display = 'flex';
          menuBtnDiv.classList.remove('sidebar-toggler');
    }
  }
}
