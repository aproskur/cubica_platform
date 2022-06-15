
  <div>
    <div class="card">
      <div class="product-box">
        <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin_portrait.png" alt="">
          <div class="ribbon ribbon-success ribbon-game-rating"><a href="#"> <i data-feather="star"></i></a><div id="game-rating">3.7</div></div>
          <div class="ribbon ribbon-success ribbon-right ribbon-downloads"><span id="total-downloads">1023</span></div>
          <div class="game-hover">
            <ul class="game-hover-bar-center">
              <li data-bs-toggle="modal" data-bs-target="#catalogueModal{{$id}}"><a><i class="icofont icofont-document-search central-icon"></i></a></li>
              <li><a href="#"><i class="icon-game central-icon"></i></a></li>
            </ul>
            <ul class="game-hover-bar-bottom">
              <li><a href="#"><i data-feather="edit"></i></a></li>
              <li><a href="#"><i data-feather="copy"></i></a></li>
              <li><a href="#"><i data-feather="archive"></i></a></li>
             <ul>
          </div>
        </div>
        <!-- MODAL -->
        <div class="modal fade" id="catalogueModal{{$id}}">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <div class="product-box row">
                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/antarctica.png" alt=""></div>
                  <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                      <h4>{{$gameName}}</h4></a>
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
                      <p><span style="color:var(--theme-yellow)">Учебная цель:<span>
                      Текст про цель игры</p>
                      <p><span style="color:var(--theme-yellow)">Аудитория игры:<span>
                      Текст про то, для кого рассчитана игра</p>
                    </div>

                    <div class="product-qnty">
                      <h6 class="f-w-600"></h6>

                      <div class="modal-buttons"><button class="theme-button theme-button-square"><a href="cart.html"><i data-feather="shopping-cart" class="cart-button"></i></a></button>
                        <button class="theme-button theme-button-square"><i data-feather="heart" class="heart-button"></i></button>
                        <button class="theme-button theme-button-long"><a href="{{ url('games/'.$id) }}">Смотреть подробности</a></button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="product-view m-t-20">
                      <p class="mb-0">{{$gameExcerpt}}</p>
                    </div>
                </div class="modal-btn-wrapper">
                <button class="button-close" type="button" data-bs-dismiss="modal" aria-label="Close">&#10005;</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END OF MODAL -->

        <div class="product-details"><a href="#" >
          <div class="product-price">
            <button class="theme-button"><a href="cart.html"><i data-feather="shopping-cart" class="cart-button"></i></a></button>
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
            <button class="theme-button"><i data-feather="heart" class="heart-button"></i></button>
            <a href="{{ url('games/'.$id) }}"><h4> {{ $gameName }}</h4></a>

          </div>
        </div>
      </div>
    </div>
  </div>
