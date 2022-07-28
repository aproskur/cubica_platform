<div>
  <div class="card">
    <div class="product-box">
      <div class="product-img"><img class="img-fluid" src="../assets/images/antarctica.png" alt="">
        <div class="ribbon ribbon-success ribbon-game-rating"><a href="#"> <i data-feather="star"></i></a><div id="game-rating">3.7</div></div>
        <div class="ribbon ribbon-success ribbon-right ribbon-downloads"><span id="total-downloads">1023</span></div>
        <div class="game-hover">
          <ul class="game-hover-bar-center">
            <li data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i class="fa-solid fa-info tooltip"></i></li>
            <li><a href="#"><i class="fa-solid fa-play"></i></a></li>
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
        <div class="product-desc">
          <h4> {{ "Короткое название" }}</h4></a>
          <button class="theme-button"><i data-feather="heart" class="heart-button"></i></button>
        </div>
        <div class="product-price m-t-10">
          <div>
            {{ 450 }}
            <span>&#8381;/запуск</span>
          </div>
          <div><span style="color:var(--theme-yellow); font-weight:bold;">1</span>
            {{ 550 }}
            <span>&#8381;/месяц</span>
          </div>
          <button class="theme-button"><a href="cart.html"><i data-feather="shopping-cart" class="cart-button"></i></a></button>

        </div>
        <div class="icons-panel">


      </div>

      </div>
    </div>
  </div>
</div>
