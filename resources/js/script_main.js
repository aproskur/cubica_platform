
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



//Всплывающие подсказки

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

//Всплывающие подсказки END



//LAUNCH запуск игры. Скрипт добавления ссылки
$(document).ready(function(){
    // Insert elements on click of the button
    $("#generateLink").click(function(){
        // Creating a div element at the end
        $(".launch-link-generator-container").append(' <div class="row m-t-30 launch-link-generator"> <div class="col-sm-1" style="align-self:center;"> <label class="switch"> <input type="checkbox"> <span class="slider round"></span> </label> </div><div class="col-sm-2"> <select class="form-select btn-square digits" id="exampleFormControlSelect12"> <option>Не выбрано</option> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>10</option> <option>20</option> <option>30</option> <option>50</option> <option>100</option> </select> </div><div class="col-sm-2"> <div> <input class="form-control digits" type="date" value="2018-01-01"> </div></div><div class="col-sm-4" style="align-self:center;"> <a href="#">Сгенерированная ссылка</a> </div><div class="col-sm-2 launch-link-generator__icons" style="gap:2rem; display:flex; font-size:25px;"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> </div></div>');

    });
});

//Toggle share div on launch page
//$(".feather-share-2").on('click', function(event){
//    event.stopPropagation();
//    event.stopImmediatePropagation();
//     $(".share-div").toggle("open")

//});

$(".feather-share-2").click(function(event){
    event.stopPropagation();
    event.stopImmediatePropagation();
     $(this).siblings('.share-div').toggleClass("open");

});
