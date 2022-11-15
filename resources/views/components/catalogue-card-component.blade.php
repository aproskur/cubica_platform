@props(['game'])

  <div>
    <div class="card catalogue-card">
      <div class="product-box">
        <div class="product-img"><img class="img-fluid" src="{{ $game->cover_photo_path ? asset('storage/database_images/'. $game->cover_photo_path) : asset('/images/pinguin.jpg') }}" alt="">
          <div class="ribbon ribbon-success ribbon-game-rating"><a href="#"> <i data-feather="star"></i></a><span>3.7</span></div>
          <div class="ribbon ribbon-success ribbon-right ribbon-downloads"><span>1023</span></div>
          <div class="game-hover">
            <ul class="game-hover-bar-center">
              <span data-bs-toggle="tooltip" data-bs-placement="top" title="Информация"><li data-bs-toggle="modal"   data-bs-target="#catalogueModal{{$id}}"><a><i class="icofont icofont-document-search central-icon"></i></a></li></span>
              <li data-bs-toggle="tooltip" data-bs-placement="top" title="Играть"><a href="{{ url('launch/'.$id ) }}"><i class="icon-game central-icon"></i></a></li>
            </ul>
            <ul class="game-hover-bar-bottom">
                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Редактировать"><a href="#"><i data-feather="edit"></i></a></li>
                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Копировать"><a href="#"><i data-feather="copy"></i></a></li>
                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Публикация"><a href="#"><i class="fa fa-check-square-o"></i></a></li>
                <li data-bs-toggle="tooltip" data-bs-placement="top" title="В архив"><a href="#"><i data-feather="archive"></i></a></li>
             </ul>
          </div>
        </div>
        <!-- MODAL -->
        <div class="modal fade" id="catalogueModal{{$id}}">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <div class="product-box row">
                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/antarctica.png" alt=""></div>
                  <div class="product-details col-lg-6 text-start">
                      <h4>{{$game->name}}</h4>
                    <div class="product-price-modal">
                      <div class=price-1>
                        {{ number_format($game->price, 0, '.', ' ') }}
                        <span>&#8381;/запуск</span>
                      </div>
                      <div class=price-2>
                        {{ number_format($game->subscr_price, 0, '.', ' ') }}
                        <span>&#8381;/месяц</span>
                      </div>
                    </div>
                    <div class="modal-game-desc">
                      <p><span>Учебная цель:</span>
                      Текст про цель игры</p>
                      <p><span>Аудитория игры:</span>
                      Текст про то, для кого рассчитана игра</p>
                    </div>

                    <div class="product-qnty">
                      <div class="modal-buttons">
                        <button class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Купить"><a href="{{ route('cart') }}"></a><i data-feather="shopping-cart"></i></button>
                        <button class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Добавить в избранное"><i data-feather="heart" class="heart-button"></i></button>
                        <a class="theme-button theme-button-std" href="{{ url('games/'.$id) }}">Смотреть подробности</a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="product-view m-t-20">
                      <p class="mb-0">{{$gameExcerpt}}</p>
                    </div>
                  </div>
                <button class="button-close" type="button" data-bs-dismiss="modal" aria-label="Close">&#10005;</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END OF MODAL -->

        <div class="product-details">
          <div class="product-price">
            <button class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Купить"><i data-feather="shopping-cart"></i></button>
            <div class="price-wrapper">
              <div>
                {{ number_format($gamePrice, 0, '.', ' ') }}
                <span>&#8381;/запуск</span>
              </div>
              <div>
                {{ number_format($game->subscr_price, 0, '.', ' ') }}
                <span>&#8381;/месяц</span>
              </div>
            </div>
          </div>
          <div class="product-desc">
            <button class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Добавить в избранное"><i data-feather="heart"></i></button>
            <a href="{{ url('games/'.$id) }}"><h4> {{ $gameName }}</h4></a>


          </div>
        </div>
      </div>
    </div>
  </div>
