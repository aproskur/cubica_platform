
require('./bootstrap');

const menuBtnDiv = document.getElementById('menu-btn-div')
const showDiv = document.getElementById('menu-show-div');
const mediaQuery = window.matchMedia('(max-width: 750px)');
const video = document.getElementById('video-intro');
const catalogue = document.getElementById('catalogue');
const constructorMenu = document.getElementById('constructor-menu');

//кнопки на dive авторизации
const loginBtn = document.getElementById('login-button');
const loginDiv = document.getElementById('login-div');
const loginDivCloseBtn = document.getElementById('close-login-div');
const loginDivWrapper = document.getElementById('login-div-wrapper');
const sidebarLoginBtn = document.getElementById('sidebar-login-btn');

let scrolling = false;


//Event listener для круглой кнопки login, которая вызывает showLogin и открывается login-div
if(loginBtn !== null){
loginBtn.addEventListener('click', () => {
        showLogin();
       });
     }

loginDivCloseBtn.addEventListener('click', () => {
  closeLoginDiv();
})


//Listener для кнопки вход в мобильном меню offcanvas sidemenu
//if(document.body.contains(document.getElementById('sidebarLoginBtn'))) {
//   sidebarLoginBtn.addEventListener('click', () => {
//     closeNav();
  //   showLogin();
//   });
//}

// //Listener для кнопки вход в мобильном меню offcanvas sidemenu
//    sidebarLoginBtn.addEventListener('click', () => {
//      closeNav();
//      showLogin();
//    });


//Появление на экране login div засчет того что display none меняется на display flex
function showLogin() {
  loginDivWrapper.style.display = 'flex';
}

//Event listener слушает, когда будет скролл вниз, убирает видео из поля зрения
window.addEventListener('resize', () => {mediaChecker(mediaQuery)});

window.onload = mediaChecker(mediaQuery);

if (video !== null && video !== undefined){
  window.addEventListener('scroll', function() {
    if (document.documentElement.scrollTop > 400){
    video.style.display = "none";
    }
  })
}



//TEMPORARY function. Открывает пробное меню, дополнительный навбар в конструкторе
function openConstructorMenu() {
  if(!constructorMenu.classList.contains('open')){
  constructorMenu.classList.add('open');
  } else {
    document.getElementById('constructor-menu').classList.remove('open');
  }
}


function menuButtonListener () {
  openNav();
}


//Функция меняет, то как работает кнопка-бургер в зависимости от размера экрана: если большой экран - то ховер, если маленький - по клику открывается боковое меню
function mediaChecker(screenSize) {
if (screenSize.matches) {
  if(!menuBtnDiv.classList.contains('sidebar-toggler')){
  menuBtnDiv.classList.add('sidebar-toggler');
  menuBtnDiv.addEventListener('click', menuButtonListener);
  showDiv.style.display = 'none';
  }
}
    else {
          menuBtnDiv.removeEventListener('click', menuButtonListener);
          showDiv.style.display = 'flex';
          menuBtnDiv.classList.remove('sidebar-toggler');
    }
  }




//закрыть login div кнопкой X
function closeLoginDiv() {
    loginDivWrapper.style.display = 'none';
}

//перемещение бургера вправо
//Работает один раз при загрзке (объединить в одну функцию с ресайзом)
//jQuery
if($(window).width() < 600) {
  $('#right-sidebar-toggler').append($('#menu-btn-div'))
  $('#right-sidebar-toggler').addClass('right-burger-alignment');
} else {
  $('#left-sidebar-toggler').append($('#menu-btn-div'))
  $('#right-sidebar-toggler').removeClass('right-burger-alignment');
}

$(window).on('resize', function(){
    if($(window).width() < 600){
      $('#right-sidebar-toggler').append( $('#menu-btn-div'));
      $('#right-sidebar-toggler').addClass('right-burger-alignment');
    } else {
      $('#left-sidebar-toggler').append($('#menu-btn-div'))
      $('#right-sidebar-toggler').removeClass('right-burger-alignment');
    }
});

//$(document).ready(function() {
//  if (localStorage.getItem('theme') === 'light') {
//    $('body').removeClass('dark-only');
//  } else {
//    $('body').addClass('dark-only');
//  }
//});

// $(document).ready(function() {
//  if($('body').hasClass("dark-only") && localStorage.getItem('theme') !== 'light') {
//   localStorage.setItem('theme', 'dark');
//   console.log('dark theme is set')
//  } else {
//  localStorage.setItem('theme', 'light');
//   console.log('light theme is set')
// }
// });

$(document).ready(function() {
 if($('body').hasClass("dark-only") && localStorage.getItem('theme') == 'light') {
  localStorage.setItem('theme', 'light');
  localStorage.removeItem('body', 'dark-only');
  $('body').removeClass('dark-only');
  console.log('light theme is set')
 }
 if(!$('body').hasClass("dark-only") && localStorage.getItem('theme') == 'light'){
   localStorage.setItem('theme', 'light');
   localStorage.removeItem('body', 'dark-only');
    console.log('dark theme is set beacuse body is not dark-only')
 }
 else {
 localStorage.setItem('theme', 'dark');
 localStorage.setItem('body', 'dark-only');
  console.log('dark theme is set')
}
});


$(document).ready(function() {
	var tooltip_init = {
		init: function() {
			$("button").tooltip();
			$("a").tooltip();
			$("input").tooltip();
		}
	};
    tooltip_init.init()
});


var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
