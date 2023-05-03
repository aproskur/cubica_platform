/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/launch.js ***!
  \********************************/
//LAUNCH запуск игры. Скрипт добавления ссылки
$(document).ready(function () {
  // Insert elements on click of the button
  $("#generate").click(function () {
    var gameId = $("#game_id").val();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "POST",
      url: gameId + "/create-link",
      dataType: "json",
      success: function success(r) {}
    });

    function fetchLink(gameId) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: gameId + '/fetch-link',
        type: 'GET',
        dataType: 'json',
        // added data type
        success: function success(response) {
          console.log(response);
          var link = response.link;
          $('#static-container').prepend('<form class="main-form"> <div class="launch-link-generator"> <div class="switcher-alias"> <div class="switcher"> <label class="switch"> <input class="trigger link-activator" value="0" type="checkbox" name="activator"/> <span class="slider round"></span> </label> <input class="status" type="hidden" name="status" value=""> <input class="game-id" type="hidden" name="gameIdForm" value=' + gameId + '> <input class="link-id" type="hidden" name="linkIdForm" value=' + link.id + '> </div><div class="launch-link"> <input class="link-alias" type="text" name="alias" value=""/> <p style="margin-bottom:0;" class="link-noalias"> ' + link.link + ' </p></div><div class="icon-rename-link"> <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Переименовать ссылку"> <svg style="align-items:center;" class="rename-link" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> </a> </div><div class="icon-gear d-md-none"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> </div></div><div class="date-launches"> <div class="launches-container"> <select name="launches" class="trigger launches form-select digits launch-quantity-selector" data-bs-toggle="tooltip" data-bs-placement="top" title="Количество запусков"> <option class="quantity" value=""> </option> <option class="quantity" value="1">1</option> <option class="quantity" value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="10">10</option> <option value="20">20</option> <option value="30">30</option> <option value="50">50</option> <option value="100">100</option> </select> </div><div class=""> <input name="datepicker" class="trigger date form-control digits launch-date-selector" type="date" value=" + link.expiry + " data-bs-toggle="tooltip" data-bs-placement="top" title="Срок действия ссылки"> </div></div><div class="launch-controls nodisplay"> <div class="button-rename-link js-launch-buttons"> <a class="theme-button theme-button-square" href="#"> <svg style="align-items:center;" class="rename-link" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> </a> </div><div class="theme-button theme-button-square | button-copy-link js-launch-buttons"> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> </div><div class="share-div-container theme-button theme-button-square | button-share-link js-launch-buttons"> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> <div class="share-div"> <i data-feather="mail"></i> <i data-feather="facebook"></i> </div></div><div class="theme-button theme-button-square archive-link | button-archive-link js-launch-buttons"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg> </div><a class="theme-button theme-button-square | button-admin-link js-launch-buttons" name="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg> </a> </div></div></form>');
        }
      });
    }

    fetchLink(gameId);
  });
}); //найти все switch которые checked
//если он checked, то добавить класс active-link дата пикеру и лаунч пикеру чтобы поменять их стиль
//добавляет readonly и disabled

$(document).ready(function (e) {
  var switcher = document.querySelectorAll("input[checked='checked']");

  for (var i = 0; i < switcher.length; i++) {
    var datepicker = $(switcher[i]).closest('.main-form').find('.date');
    datepicker.addClass("active-link");
    datepicker.attr('readonly', true);
    var quantity_picker = $(switcher[i]).closest('.main-form').find('.launches');
    quantity_picker.addClass("active-link");
    quantity_picker.attr('disabled', true);
  }
}); //фигня, не надо
// const offSwitcher = document.querySelectorAll("input[value='0']");
// for (let i = 0; i < offSwitcher.length; i++) {
//   let hiddenStatusField = offSwitcher[i].parentElement.parentElement.nextSibling.nextSibling;
//   hiddenStatusField.value = "0";
// }

$(document).ready(function (e) {
  $('#static-container').on('click', '.rename-link', function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var gameId = $("#game_id").val(); //Если кликнуто на картинку "переименовать ссылку"

    if (e.target && e.target.matches('.rename-link')) {
      var alias = $(e.target).closest('.main-form').find('.link-alias');
      var link_name = $(e.target).closest('.main-form').find('.link-noalias'); //Если alias НЕ ПУСТОЙ и после этого кликнута "РЕДАКТИРОВАТЬ ССЫЛКУ"

      if (alias.val() && e.target.matches('.rename-link')) {
        $(e.target).closest('.main-form').find('.link-noalias').text(alias.val());
        var data = {
          'alias': alias.val(),
          'link_id': $(e.target).closest('.main-form').find('.link-id').val()
        };
        $.ajax({
          type: "PUT",
          url: gameId + "/update-alias",
          data: data,
          dataType: "json",
          success: function success(response) {}
        });
        alias.val('');
      } //Если после введения alias в строку ввода нажат ENTER


      $('.link-alias').keypress(function (evnt) {
        var keycode = evnt.keyCode ? evnt.keyCode : evnt.which;

        if (keycode == '13') {
          evnt.preventDefault();
          alias = $(evnt.target).closest('.main-form').find('.link-alias');
          var _data = {
            'alias': alias.val(),
            'link_id': $(evnt.target).closest('.main-form').find('.link-id').val()
          };
          $.ajax({
            type: "PUT",
            url: gameId + "/update-alias",
            data: _data,
            dataType: "json",
            success: function success(response) {}
          });

          if (alias.val()) {
            $(evnt.target).closest('.main-form').find('.link-noalias').text(alias.val()).toggle();
            $(evnt.target).closest('.main-form').find('.link-alias').text('');
          }

          alias.toggle();
          $(evnt.target).closest('.main-form').find('.link-alias').text('');
        }
      });
      link_name.toggle();
      alias.toggle();
    }
  });
}); //Если кликнуть на свич или поменять значение датапикера или кол-во запусков, то значения обновятся в БД асинхронно

$(document).ready(function () {
  $('#static-container').on('change', '.trigger', function (e) {
    e.preventDefault();

    if (e.target && e.target.matches('.trigger')) {
      if ($(e.target).hasClass('link-activator')) {
        $(e.target).val() == '1' ? $(e.target).val('0') : $(e.target).val('1');
        $(e.target).closest('.main-form').find('.launches').toggleClass('active-link');
        $(e.target).closest('.main-form').find('.date').toggleClass('active-link');
        $(e.target).closest('.main-form').find('.launches').attr('disabled', function (_, attr) {
          return !attr;
        });
        $(e.target).closest('.main-form').find('.date').attr('readonly', function (_, attr) {
          return !attr;
        });
      }

      var data = {
        'active': $(e.target).closest('.main-form').find('.link-activator').val(),
        'launches': $(e.target).closest('.main-form').find('.launches').val(),
        'date': $(e.target).closest('.main-form').find('.date').val(),
        'link_id': $(e.target).closest('.main-form').find('.link-id').val()
      };
      var gameId = $("#game_id").val();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "PUT",
        url: gameId + "/update-link",
        data: data,
        dataType: "json",
        success: function success(response) {}
      });
    }
  });
}); //Archive

$('#static-container').on('click', '.archive-link', function (e) {
  e.preventDefault();

  if (e.target) {
    var text = "Вы действительно хотите отправить ссылку в архив?";

    if (confirm(text) == true) {
      text = "ДА!";
      var link_id = $(e.target).closest('.main-form').find('.link-id').val();
      var gameId = $("#game_id").val();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "PUT",
        url: gameId + "/archive/" + link_id,
        data: {
          "id": link_id
        },
        dataType: "json",
        success: function success(response) {
          //поменять hide на другой метод
          $(e.target).closest('.main-form').hide();
          $('#static-container').append(' <div class="row launch-link-generator" style="margin-left:3.5em;"> <div class="col-xl-5 col-lg-12 d-flex gap-2"> <div style="align-self:center;"> </div><div class="launch-link">' + response.link + '</div></div></div>');
        }
      });
    }
  }
}); //DELETE

$('#static-container').on('click', '.delete-link', function (e) {
  e.preventDefault();

  if (e.target) {
    var link_id = $(e.target).closest('.main-form').find('.link-id').val();
    var gameId = $("#game_id").val();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "POST",
      url: gameId + "/delete/" + link_id,
      data: {
        "id": link_id,
        _method: 'delete'
      },
      dataType: "json",
      success: function success() {
        //поменять hide на другой метод
        $(e.target).closest('.main-form').hide();
      }
    });
  }
}); //ANIMATIONS
//ШЕСТЕРЁНКА крутится , если на неё кликнуть

$(document).ready(function (e) {
  $('#static-container').on('click', '.gear', function (e) {
    e.preventDefault();
    $(e.target).animate({
      deg: 180
    }, {
      duration: 1000,
      step: function step(now) {
        $(e.target).css({
          transform: 'rotate(' + now + 'deg)'
        });
      }
    }); //$(e.target).closest('.main-form').find('.gear').addClass('gear-animate');
    //$(e.target).closest('.main-form').find('.launch-controls').toggleClass('nodisplay');

    $(e.target).closest('.main-form').find('.launch-controls').fadeToggle(1000);
  });
}); //появление кнопок и пикеров в зависимости от ширины экрана
//появление желтой рамочки, когда ховер вне строки, но на одном уровне с ней

$(document).ready(function () {
  if ($(window).width() < 553) {
    $('.date-launches').css("display", "none");
    $('.icon-gear').css("display", 'block');
  } else {
    $('.date-launches').css("display", "inline-flex");
    $('.icon-gear').css("display", "none");
  }

  $(window).on('resize', function () {
    console.log("WINDOW RESIZE");
    var window = $(this);

    if (window.width() < 553) {
      $('.date-launches').css("display", "none");
      $('.icon-gear').css("display", 'block');
      $('icon-gear-js').css("display", "block");
    } else {
      $('.date-launches').css("display", "inline-flex");
      $('.icon-gear').css("display", "none");
    }
  });

  if (!$('body').hasClass("dark-only")) {
    $('.launch-link-generator').css("border", "1px solid var(--bgr-light-secondary)");
  }

  $('#static-container').on({
    "mouseover": function mouseover(e) {
      var buttons = $(e.target).closest('.main-form').find('.launch-controls');
      var selects = $(e.target).closest('.main-form').find('.date-launches');
      var row = $(e.target).closest('.main-form').find('.launch-link-generator');
      row.css("border", "1px solid var(--theme-yellow)");
      var viewportWidth = $(window).width();

      if (viewportWidth < 553) {
        buttons.removeClass('nodisplay');
        selects.css("display", "inline-flex");
      }

      buttons.removeClass('nodisplay');
    },
    "mouseout": function mouseout(e) {
      var buttons = $(e.target).closest('.main-form').find('.launch-controls');
      var selects = $(e.target).closest('.main-form').find('.date-launches');
      var row = $(e.target).closest('.main-form').find('.launch-link-generator');
      var viewportWidth = $(window).width();

      if ($('body').hasClass("dark-only")) {
        row.css("border", "1px solid var(--bgr-dark)");
      } else {
        row.css("border", "1px solid var(--bgr-light)");
      }

      if (viewportWidth < 553) {
        buttons.addClass('nodisplay');
        selects.css("display", "none");
      }

      buttons.addClass('nodisplay');
    }
  });
  $('#static-container-archive').on({
    "mouseover": function mouseover(e) {
      var row = $(e.target).closest('.archive-links-container');
      var buttons = $(e.target).closest('.archive-links-container').find('.button-arch-copy');
      row.css("border", "1px solid var(--theme-yellow)");
      buttons.removeClass("nodisplay");
    },
    "mouseout": function mouseout(e) {
      var row = $(e.target).closest('.archive-links-container');
      var buttons = $(e.target).closest('.archive-links-container').find('.button-arch-copy');

      if ($('body').hasClass("dark-only")) {
        console.log("HERE HERE");
        row.css("border", "1px solid var(--bgr-dark)");
      } else {
        row.css("border", "1px solid var(--bgr-light)");
      }

      buttons.addClass("nodisplay");
    }
  });
}); //TOOLTIPS на смартфона есть, на экранах больше 553px - появляются

$(document).ready(function () {
  if ($(window).width() > 553) {
    $('.js-launch-buttons').attr("data-bs-toggle", "tooltip");
    $('.js-launch-buttons').attr("data-bs-placement", "top");
    $('.button-copy-link').attr("title", "Копировать ссылку");
    $('.button-share-link').attr("title", "Поделиться");
    $('.button-archive-link').attr("title", "Архивировать");
    $('.button-admin-link').attr("title", "Перейти в админку");
  }
});
/******/ })()
;