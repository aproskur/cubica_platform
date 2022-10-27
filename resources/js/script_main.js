
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


//Удалить ссылку
/*
const container = document.querySelector('#launch-link-generator-container');

container.addEventListener('click', function (e) {
  // But only alert for elements that have an alert-button class
  if (e.target.classList.contains('remove-link-btn')) {
    console.log('test test');
  }
});


// Click handler for entire DIV container




  function removeSharedLink() {
     $(this).closest(".launch-link-generator-container").remove();
  }
  */


//LAUNCH запуск игры. Скрипт добавления ссылки
$(document).ready(function(){
    // Insert elements on click of the button
    $("#generateLink").click(function(){
        // Creating a div element at the end
        $(".llc").append('<form method="POST" "action=\"{{ route(\'create-link\', [$game->id]) }}\" @csrf\n\n\n"  <div class="row m-t-30 launch-link-generator"> <div class="col-xl-5 col-lg-12 d-flex gap-2"> <div style="align-self:center;"> <label class="switch"> <input id="switchToSubmit" type="checkbox" name="checkbox" onclick="clickCreateLink()"> <span class="slider round"></span> </label> </div><div class="launch-link"> Заполните поля и активируйте ссылку </div></div><div class="col-xl-5 col-lg-12 d-flex gap-2 gap-md-3 gap-lg-3"> <select id="launches" name="launches" class="form-select digits launch-quantity-selector" data-bs-toggle="tooltip" data-bs-placement="top" title="Количество запусков" required> <option value="">&infin;</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="10">10</option> <option value="20">20</option> <option value="30">30</option> <option value="50">50</option> <option value="100">100</option> </select> <div> <input id="datepicker" name="datepicker" class="form-control digits launch-date-selector" type="date" value="" data-bs-toggle="tooltip" data-bs-placement="top" title="Срок действия ссылки" required> </div><div class="d-flex gap-2 gap-md-3 gap-lg-3"> <div class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Копировать" disabled> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> </div><div class="share-div-container theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Поделиться" disabled> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> <div class="share-div"> <span>поделиться</span> <i data-feather="mail"></i> <i data-feather="facebook"></i> </div></div><button data-bs-toggle="modal" data-bs-target="#updateAliasModal" href="#" class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Переименовать ссылку"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> </button> <div class="modal fade" id="updateAliasModal{{$link->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="updateAliasModalLabel{{$link->id}}">Переименовать ссылку</h5> <button class="btn-close btn-close-yellow" type="button" data-bs-dismiss="modal" aria-label="Close"></button> </div><div class="modal-body"> <form class="" action="/launch/edit" method="POST"> @csrf <input type="hidden" name="id" value="{{$link->id}}"> <input type="hidden" name="game_id" value="{{$game->id}}"> <input type="text" name="link_alias" value="{{$link->link_alias}}" autofocus="autofocus"/> </div><div class="modal-footer"> <button class="theme-button theme-button-std" type="button" data-bs-dismiss="modal">Закрыть</button> <button class="theme-button theme-button-std" type="submit" name="button">Применить</button> </div></form> </div></div></div><a href="#" class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Удалить ссылку"> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> </a> <button class="theme-button theme-button-square" type="submit" name="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></button> </div></div></div></form>');

    });
});
/*editbutton
<button data-bs-toggle="modal" data-bs-target="#updateAliasModal" href="#" class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Переименовать ссылку"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> </button> */
/*
append('<form method="POST" "action=\"{{ route(\'create-link\', [$game->id]) }}\" @csrf\n\n\n" <div class="row m-t-30 launch-link-generator"> <div class="col-xl-5 col-lg-12 d-flex gap-2"> <div style="align-self:center;"> <label class="switch"> <input id="switchToSubmit" type="checkbox" name="checkbox" onclick="clickCreateLink()"> <span class="slider round"></span> </label> </div><div class="launch-link"> Заполните поля и активируйте ссылку </div></div><div class="col-xl-5 col-lg-12 d-flex gap-2 gap-md-3 gap-lg-3"> <select id="launches" name="launches" class="form-select digits launch-quantity-selector" data-bs-toggle="tooltip" data-bs-placement="top" title="Количество запусков" required> <option value="">&infin;</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="10">10</option><option value="20">20</option><option value="30">30</option> <option value="50">50</option> <option value="100">100</option> </select> <div> <input id="datepicker" name="datepicker" class="form-control digits launch-date-selector" type="date" value="" data-bs-toggle="tooltip" data-bs-placement="top" title="Срок действия ссылки" required> </div><div class="d-flex gap-2 gap-md-3 gap-lg-3"> <div class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Копировать" disabled><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> </div><div class="share-div-container theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Поделиться" disabled> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> <div class="share-div"> <span>поделиться</span> <i data-feather="mail"></i> <i data-feather="facebook"></i> </div></div><button data-bs-toggle="modal" data-bs-target="#updateAliasModal" href="#" class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Переименовать ссылку"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> </button> <a href="#" class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Удалить ссылку"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> </a> <button class="theme-button theme-button-square" type="submit" name="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></button></div></div></div></form>')
*/

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

function clickCreateLink(e) {
  const switcher = e.currentTarget;
  switcher.value = checkbox.checked ? true : false;
  event.currentTarget.closest('form').submit();
}

// Get the element, add a click listener...:ballot_box_with_check:
document.getElementById("llc").addEventListener("click", function(e) {

	// e.target is the clicked element!
	if(e.target && e.target.matches(".link-activator")) {
    let datepicker = e.target.parentElement.parentElement.parentElement.nextSibling.nextSibling.querySelector('.form-control');
    let quantity_picker =   e.target.parentElement.parentElement.parentElement.nextSibling.nextSibling.querySelector('.form-select')
          datepicker.classList.toggle("active-link");
          quantity_picker.classList.toggle("active-link");
          datepicker.toggleAttribute("readonly");
          quantity_picker.toggleAttribute("readonly");
          e.target.toggleAttribute('checked');

           const hiddenInput =  e.target.parentElement.parentElement.nextSibling.nextSibling
            if(datepicker.classList.contains("active-link")){
              e.target.value="1";
              hiddenInput.value="1";
            } else {
              e.target.value="0";
              console.log("set to 0");
              hiddenInput.value="0";
            }

          e.target.form.submit();
          	}
});

//найти все switch которые checked
//если он checked, то добавить класс active-link дата пикеру и лаунч пикеру чтобы поменять их стиль

  const switcher = document.querySelectorAll("input[checked='checked']");
  for (let i = 0; i < switcher.length; i++) {
    console.log(switcher[i])
    let datepicker = switcher[i].parentElement.parentElement.parentElement.nextSibling.nextSibling.querySelector('.form-control');
    datepicker.classList.add("active-link");
    datepicker.setAttribute("readonly");
    let quantity_picker =  switcher[i].parentElement.parentElement.parentElement.nextSibling.nextSibling.querySelector('.form-select');
    quantity_picker.classList.add('active-link');
    quantity_picker.setAttribute("readonly");
    let hiddenStatusField = switcher[i].parentElement.parentElement.nextSibling.nextSibling;
    hiddenStatusField.value = "1";
  }

  const offSwitcher = document.querySelectorAll("input[value='0']");
  for (let i = 0; i < offSwitcher.length; i++) {
    let hiddenStatusField = offSwitcher[i].parentElement.parentElement.nextSibling.nextSibling;
    hiddenStatusField.value = "0";
  }




// jQuery(document).ready(function(){
//    jQuery('#createLink').click(function(e){
//      let gameId= $("#game_id").val();
//      console.log(gameId);
//      let url = "game/" + gameId + "/create-link";
//      console.log("ajax");
//       e.preventDefault();
//
//       $.ajaxSetup({
//          headers: {
//              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//          }
//      });
//       jQuery.ajax({
//          url: url,
//          method: 'post',
//          data: {
//          },
//          success: function(data){
//             //location.reload();
//          }})
//       });
//    });


   // jQuery(document).ready(function(){
   //    jQuery("#static-container").on('change', '.trigger', function(e) {
   //            $(e.target.form).submit(function(event){
   //                let formData = {
   //                      gameId: $(".game-id", this).val(),
   //                      linkId: $(".link-id", this).val(),
   //                      launches: $(".launch-quantity-selector",this).val(),
   //                      date: $(".launch-date-selector", this).val()
   //                      };
   //                      console.log("formData");
   //                      console.log(formData[gameId]);
   //                var url = "game/" + formData[gameId] +"/update/link/" + formData[linkId];
   //                console.log('url');
   //                console.log("ajax");
   //             e.preventDefault();
   //             $.ajaxSetup({
   //                headers: {
   //                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   //                }
   //            });
   //             jQuery.ajax({
   //                url: url,
   //                method: 'put',
   //                data: formData,
   //                dataType: "json",
   //                encode: true,
   //                success: function(data){
   //                   console.log("PUT");
   //                }});
   //             });
   //           });
   //        });
