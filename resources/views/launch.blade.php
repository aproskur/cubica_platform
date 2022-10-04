@extends('app')

@section('content')
<!-- page-wrapper Start-->
<div class="page-wrapper" id="pageWrapper">
  <!-- Page Header Start Top Navbar-->
@include ('layout/top-navbar')
  <div class="page-body-wrapper">
    <header class="main-nav">
      @include('layout.sidebar-launch')
    </header>

    <div class="page-body">
      <div class="container">
        <div class="col-12">
          <h1 class="launch-heading m-b-25">Запустить игру <span style="color:var(--theme-yellow);">"{{ $game->name}}"</span> на этом компьютере</h1>
          <div class="launch-container">
            <div class="animated-link">
              <a class="" href="#">Открыть демо-версию игры</a>
            </div>
            <div class="inactive m-t-20">
              <a class="" href="#">Открыть игру в браузере прямо сейчас</a>
            </div>

          </div>
        </div>
      <div class="m-t-50 launch-link-generator-container">
          <div class="col-12" style="align-self:center;">
            <h2 class="launch-heading">Настройка запуска игры через ссылки</h1>
          </div>
          <div class="row launch-container">
            <div class="d-flex flex-column flex-sm-row  gap-3 m-t-10 justify-content-md-between">
              <button style="align-self:center;" id="generateLink" class="theme-button theme-button-std" type="button" name="button">Сгенерировать ссылку</button>
              <div class="animated-link" style="align-self:center;">
                <a href="#">Перейти в админку игры</a>
              </div>
            </div>
          </div>
          @foreach ($links as $link)
              <div class="row m-t-30 launch-link-generator">
                  <div class="col-xl-5 col-lg-12 d-flex gap-2">
                    <div style="align-self:center;">
                      <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                      </label>
                    </div>
                    <div class="launch-link">
                      @if (!$link->link_alias)
                        {{ $link->link }}
                      @else
                        {{ $link->link_alias}}
                      @endif
                    </div>
                  </div>
                  <div class="col-xl-5 col-lg-12 d-flex gap-2 gap-md-3 gap-lg-3">
                      <select  class="form-select digits launch-quantity-selector" data-bs-toggle="tooltip" data-bs-placement="top" title="Количество запусков" disabled>
                        <option> {{ $link->launch_quantity }}</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>50</option>
                        <option>100</option>
                      </select>
                      <div>
                        <input class="form-control digits launch-date-selector" type="date" value="{{ $link->expiry }}" required data-bs-toggle="tooltip" data-bs-placement="top" title="Срок действия ссылки" disabled>
                      </div>
                      <div class="d-flex gap-2 gap-md-3 gap-lg-3">
                        <div class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Копировать">
                          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                        </div>
                          <div class="share-div-container theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Поделиться">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                            <div class="share-div">
                              <span>поделиться</span>
                              <i data-feather='mail'></i>
                              <i data-feather='facebook'></i>
                            </div>
                          </div>
                          <button data-bs-toggle="modal" data-bs-target="#updateAliasModal{{$link->id}}" href= {{ 'edit/'.$link->id }} class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Переименовать ссылку">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                          </button>
                          <div class="modal fade" id="updateAliasModal{{$link->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="updateAliasModalLabel{{$link->id}}">Переименовать ссылку</h5>
                                  <button class="btn-close btn-close-yellow" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form class="" action="/launch/edit" method="POST">
                                      @csrf
                                    <input type="hidden" name="id" value="{{$link->id}}">
                                    <input type="hidden" name="game_id" value="{{$game->id}}">
                                    <input type="text" name="link_alias" value="{{$link->link_alias}}" autofocus="autofocus" />
                                </div>
                                <div class="modal-footer">
                                  <button class="theme-button theme-button-std" type="button" data-bs-dismiss="modal">Закрыть</button>
                                  <button class="theme-button theme-button-std" type="submit" name="button">Применить</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>

                            <a href={{"delete/".$link->id}} class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Удалить ссылку">
                              <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </a>
                        </div>
                      </div>
                    </div>
                @endforeach


<!--
                <div class="row m-t-30 launch-link-generator">
                    <div class="col-xl-5 col-lg-12 d-flex gap-2">
                      <div style="align-self:center;">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span>
                        </label>
                      </div>
                      <div class="launch-link">
                        Заполните поля и активируйте ссылку
                      </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 d-flex gap-2 gap-md-3 gap-lg-3">
                        <select  class="form-select digits launch-quantity-selector" data-bs-toggle="tooltip" data-bs-placement="top" title="Количество запусков">
                          <option>&infin;</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>10</option>
                          <option>20</option>
                          <option>30</option>
                          <option>50</option>
                          <option>100</option>
                        </select>
                        <div>
                          <input class="form-control digits launch-date-selector" type="date" value="" required data-bs-toggle="tooltip" data-bs-placement="top" title="Срок действия ссылки">
                        </div>
                        <div class="d-flex gap-2 gap-md-3 gap-lg-3">
                          <div class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Копировать" disabled>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                          </div>
                            <div class="share-div-container theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Поделиться" disabled>
                              <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                              <div class="share-div">
                                <span>поделиться</span>
                                <i data-feather='mail'></i>
                                <i data-feather='facebook'></i>
                              </div>
                            </div>
                            <button data-bs-toggle="modal" data-bs-target="#updateAliasModal" href= "#" class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Переименовать ссылку">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            </button>
                              <a href="#" class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Удалить ссылку">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                              </a>
                          </div>
                        </div>
                      </div>
-->
      </div>
    </div>
  </div>
</div>




@endsection

@push('scripts')
  <script src="{{ asset('js/test.js') }}"></script>
@endpush
