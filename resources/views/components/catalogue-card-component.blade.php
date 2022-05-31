
  <div>
    <div class="card">
      <div class="product-box">
        <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin_portrait.png" alt="">
          <div class="ribbon ribbon-success ribbon-game-rating"><a href="#"> <i data-feather="star"></i></a><div id="game-rating">3.7</div></div>
          <div class="ribbon ribbon-success ribbon-right ribbon-downloads"><span id="total-downloads">1023</span></div>
          <div class="game-hover">
            <ul class="game-hover-bar-center">
              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i class="icon-eye"></i></a></li>
            </ul>
            <ul class="game-hover-bar-bottom">
              <li><a href="#"><i data-feather="edit"></i></a></li>
              <li><a href="#"><i data-feather="copy"></i></a></li>
              <li><a href="#"><i data-feather="archive"></i></a></li>
             <ul>
          </div>
        </div>
          @livewire('catalogue-modal')
        <div class="product-details"><a href="{{ route('game-page') }}" >
            <h4> {{ $gameName }}</h4></a>
          <p> {{ $gameDescription }}</p>
          <div class="product-price">
            <div>
              {{ $gamePrice }}
              <span>RUB/запуск</span>
            </div>
            <div><span style="color:var(--theme-yellow); font-weight:bold;">1</span>
              {{ $gamePrice }}
              <span>RUB/месяц</span>
            </div>
          </div>
          <div class="icons-panel">
            <i class="icon-heart"></i>
            <a href="cart.html"><i class="icon-shopping-cart"></i></a>
        </div>
        </div>
      </div>
    </div>
  </div>
