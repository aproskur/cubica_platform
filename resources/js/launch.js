// $(document).ready(function(){
//    $('#createLink').click(function(e){
//      let gameId = $("#game_id").val();
//      let url = "game/" + gameId + "/create-link";
//      console.log("ajax");
//       e.preventDefault();
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

//LAUNCH запуск игры. Скрипт добавления ссылки
//ПОКА ЧТО не работает , потому надо получать ID только что созданной ссылки или генерировать свой ID
$(document).ready(function(){
    // Insert elements on click of the button
    $("#generate").click(function(){
        // Creating a div element at the end
        $("#static-container").prepend(' <form class="main-form"><div class="row launch-link-generator" style="margin:0px;"> <div class="col-xl-6 col-lg-12 d-flex gap-2"> <div class="switcher" style="align-self:center;"> <label class="switch"> <input class="trigger link-activator" value="0" type="checkbox" name="activator"/> <span class="slider round"></span> </label> </div><input class="game-id" type="hidden" name="gameIdForm" value="{{$game->id}}"> <div class="launch-link"> fjksjflsjflsf </div><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Переименовать ссылку"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> </a> </div><div class="col-xl-5 col-lg-12 d-flex gap-2 gap-md-3 gap-lg-3"> <select name="launches" class="trigger launches form-select digits launch-quantity-selector" data-bs-toggle="tooltip" data-bs-placement="top" title="Количество запусков"> <option value=""> &infin;</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="10">10</option> <option value="20">20</option> <option value="30">30</option> <option value="50">50</option> <option value="100">100</option> </select> <div> <input name="datepicker" class="trigger date form-control digits launch-date-selector" type="date" data-bs-toggle="tooltip" data-bs-placement="top" title="Срок действия ссылки"> </div><div class="d-flex gap-2 gap-md-3 gap-lg-3"> <div class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Копировать"> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> </div><div class="share-div-container theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Поделиться"> <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> <div class="share-div"> <i data-feather="mail"></i> <i data-feather="facebook"></i> </div></div><button class="theme-button theme-button-square" name="button"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line><svg> </button> </div></form> </div></div>');


        let gameId= $("#game_id").val();

        let data = {

        }

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: "POST",
          url: gameId+"/create-link",
          data: data,
          dataType: "json",
          success: function(response){
            }
          });

    });

});

//ШЕСТЕРЁНКА крутится , если на неё кликнуть
$(document).ready(function(e) {
  $('#static-container').on('click', '.gear', function() {
    console.log("GEAR1");
    $('.gear').addClass('gear-animate');
    $('.launch-controls').toggleClass('nodisplay');
  });
});
//найти все switch которые checked
//если он checked, то добавить класс active-link дата пикеру и лаунч пикеру чтобы поменять их стиль
//добавляет readonly и disabled
$(document).ready(function(e) {
  const switcher = document.querySelectorAll("input[checked='checked']");
    for (let i = 0; i < switcher.length; i++) {
      let datepicker = $(switcher[i]).closest('.main-form').find('.date');
      datepicker.addClass("active-link");
      datepicker.attr('readonly', true);
      let quantity_picker = $(switcher[i]).closest('.main-form').find('.launches');
      quantity_picker.addClass("active-link");
      quantity_picker.attr('disabled', true);
    }
});


//фигня, не надо
// const offSwitcher = document.querySelectorAll("input[value='0']");
// for (let i = 0; i < offSwitcher.length; i++) {
//   let hiddenStatusField = offSwitcher[i].parentElement.parentElement.nextSibling.nextSibling;
//   hiddenStatusField.value = "0";
// }


$(document).ready(function(e) {
  $('#static-container').on('click', '.rename-link', function(e){
    e.preventDefault();
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    let gameId= $("#game_id").val();
    //Если кликнуто на картинку "переименовать ссылку"
    if(e.target && e.target.matches('.rename-link')){
      let alias =  $(e.target).closest('.main-form').find('.link-alias');
      let link_name = $(e.target).closest('.main-form').find('.link-noalias')
      //Если alias НЕ ПУСТОЙ и после этого кликнута "РЕДАКТИРОВАТЬ ССЫЛКУ"
        if(alias.val() && e.target.matches('.rename-link')){
            console.log("ALIAS NOT EMPTY and ICON clicked");
            $(e.target).closest('.main-form').find('.link-noalias').text(alias.val());
            let data = {
                'alias' : alias.val(),
                'link_id' : $(e.target).closest('.main-form').find('.link-id').val(),
                }
            $.ajax({
              type: "PUT",
              url: gameId+"/update-alias",
              data: data,
              dataType: "json",
              success: function(response){
                }
              });
              alias.val('');
            }
      //Если после введения alias в строку ввода нажат ENTER
      $('.link-alias').keypress(function(evnt){
        let keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
          evnt.preventDefault();
          console.log("showing event target");
          console.log(evnt.target);
          alias = $(evnt.target).closest('.main-form').find('.link-alias');
          let data = {
              'alias' : alias.val(),
              'link_id' : $(evnt.target).closest('.main-form').find('.link-id').val(),
              }
          $.ajax({
            type: "PUT",
            url: gameId+"/update-alias",
            data: data,
            dataType: "json",
            success: function(response){
                }
              });
              console.log("FIND DIV");
              if(alias.val()){
                console.log("I AM HERE")
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
  });


//Если кикнуть на свич или поменять значение датапикера или кол-во запусков, то значения обновятся в БД асинхронно
$(document).ready(function() {
  $('#static-container').on('change', '.trigger', function(e){
    if(e.target && e.target.matches('.trigger')){
      if($(e.target).hasClass('link-activator')){
        $(e.target).val() == '1' ? $(e.target).val('0') : $(e.target).val('1');
        $(e.target).closest('.main-form').find('.launches').toggleClass('active-link');
        $(e.target).closest('.main-form').find('.date').toggleClass('active-link');
        $(e.target).closest('.main-form').find('.launches').attr('disabled', function(_, attr){
              return !attr;
            });
        $(e.target).closest('.main-form').find('.date').attr('readonly', function(_, attr){
                  return !attr;
                });
      }
      e.preventDefault();
      let data = {
        'active' : $(e.target).closest('.main-form').find('.link-activator').val(),
        'launches' : $(e.target).closest('.main-form').find('.launches').val(),
        'date' : $(e.target).closest('.main-form').find('.date').val(),
        'link_id' : $(e.target).closest('.main-form').find('.link-id').val(),
      }

      let gameId= $("#game_id").val();

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      type: "PUT",
      url: gameId+"/update-link",
      data: data,
      dataType: "json",
      success: function(response){
        }
      });

      }
    });
  });
